<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityModel;

class CityController extends Controller
{

    public function __construct(){
        $this->CityModel = new CityModel;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =$this->CityModel->get();
        return view('admin.city',  ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        if($this->CityModel->store($request) == true)
        {
            $data =$this->CityModel->get();
         return view('admin.city',  ['data' => $data])->with('Message' , 'Your City Created Successfully...!');
        }
        //echo 'store';


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit =$this->CityModel->find($id);
        return view('admin.editcity',  compact('edit'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if($this->CityModel->Edit($request) == true)
        {
            $data =$this->CityModel->get();
            return view('admin.city',  ['data' => $data])->with('Message' , 'Your City Created Successfully...!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = $this->CityModel->destroy($id);
        //$data =$this->CityModel->get();
        return redirect()->action('CityController@index');
        //return view('admin.city',  ['data' => $data])->with('Message' , 'Your City Deleted Successfully...!');
    }
}
