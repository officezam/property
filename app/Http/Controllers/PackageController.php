<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

use App\PackageModel;
use App\Http\Requests\PackageRequest;

class PackageController extends Controller
{

    /**
     * Create a new ContactUs controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->PackageModel = new PackageModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       // echo 'index';exit;
        $data =$this->PackageModel->get();
        return view('admin.packages',  ['data' => $data])->with('Message' , 'Your Package Permission list Created Successfully...!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo 'create';exit;
        return view('admin/add_package');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        //echo 'store';exit;

        if($this->PackageModel->store($request) == true){

            $data =$this->PackageModel->get();
            //dd($data);
            return view('admin.packages',  ['data' => $data])->with('Message' , 'Your Package Created Successfully...!');
        };

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
        return view('admin.add_package');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo 'edit';exit;
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
        echo 'update';exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'destroy';exit;
    }
}
