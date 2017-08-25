<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\FeatureModel;

class FeatureCotroller extends Controller
{



    public function __construct(){
        $this->FeatureModel = new FeatureModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =$this->FeatureModel->get();
        return view('admin.feature',  ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addfeature');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($this->FeatureModel->store($request) == true)
        {
            $data =$this->FeatureModel->get();
            return view('admin.feature',  ['data' => $data])->with('Message' , 'Your Property Feature Created Successfully...!');
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
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = $this->FeatureModel->find($id);
        // show the edit form and pass the nerd
        return View::make('admin.editfeature')
            ->with('feature', $feature);
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
        $this->FeatureModel->where('id', $request->id)
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
        $city = $this->FeatureModel->destroy($id);
        return $this->index();
    }
}
