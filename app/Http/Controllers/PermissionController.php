<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PermissionModel;

class PermissionController extends Controller
{

    /**
     * Create a new ContactUs controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->PermissionModel = new PermissionModel();
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { //echo 'index';exit;


        $data =$this->PermissionModel->get();
        //dd($data);
        return view('admin.permission')->with('data' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo 'create';exit;
        return view('admin.add_permission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->PermissionModel->store($request) == true)
        {
            $data =$this->PermissionModel->get();

            //dd($MyArray);
            return view('admin.permission',  ['data' => $data])->with('Message' , 'Your Package Permission list Created Successfully...!');
        }
        echo 'store';
       // exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'show';
        exit;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo 'edit';
        exit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo 'update';
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'destroy';
        exit;
    }
}
