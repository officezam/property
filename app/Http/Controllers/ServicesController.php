<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicesModel;
use Illuminate\Support\Facades\View;

class ServicesController extends Controller
{

    public function __construct(){
        $this->ServicesModel = new ServicesModel();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =$this->ServicesModel->get();
        return view('admin.services',  ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addservice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->ServicesModel->store($request) == true)
        {
            $data =$this->ServicesModel->get();
            return view('admin.services',  ['data' => $data])->with('Message' , 'Your Property Service Created Successfully...!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = $this->ServicesModel->find($id);
        return View::make('admin.editservice')
            ->with('service', $service);
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
        $this->ServicesModel->where('id', $request->id)
            ->update(['name' => $request->name , 'type' => $request->type ]);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ServicesModel->destroy($id);
        return $this->index();
    }
}
