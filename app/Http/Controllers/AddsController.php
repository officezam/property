<?php

namespace App\Http\Controllers;

use App\Adds;
use App\User;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SignupFormRequest;
use Carbon\Carbon;
class AddsController extends Controller {

    public function __construct() {
        $this->Adds = new Adds;
        $this->User = new User;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = $this->Adds->get();
        return view('admin.adds_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->Adds->store($request) == true)
        {
            return redirect()->action('AddsController@index')->with('Message', 'Your Adds Submit Successfully...!');
        }
//        echo 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $input = Auth::user()->id;
        if (Auth::user()->type == 'admin') {
            $user_data = DB::table('adds')->get();
            return view('admin.view_adds', compact('user_data'));
        } elseif (Auth::user()->type == 'user') {
            $user_data = DB::table('adds')->where('user_id', $input)->get();
            return view('admin.view_adds', compact('user_data'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_adds($id)
    {
        $Adds_data = $this->Adds->find($id);
        $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Adds_data->expiry_date)->format('Y-m-d');
        return view('admin.edit_adds', compact('Adds_data' , 'date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_adds(Request $request)
    {
        //dd($request);
       // $input = $request->all();


        if ($this->Adds->update_adds($request) == true)
        {
            return Redirect::action('AddsController@show')->with('Success', 'Adds Status Update Successfully!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // status block
    public function adds_status($action, $id) {
//        dd($action);
        if ($action == 'block') {
            $stmt = $this->Adds->markuserAs($id, 0);
            return Redirect::action('AddsController@show')->with('Block', 'Adds Status Block Successfully!');
        } else if ($action == 'unblock') {
            $this->Adds->markuserAs($id, 1);
            return Redirect::action('AddsController@show')->with('Success', 'Adds Status Approve Successfully!');
        }
        return Redirect::action('AddsController@show')->with('Success', 'Adds Status Approve Successfully!');
    }

    //    delete user 
    public function delete_adds() {
        Adds::where('id', Input::get('id'))->delete();
        return Redirect::action('AddsController@show')->with('delete', 'Adds Status Deleted Successfully!');
    }

}
