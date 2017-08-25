<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageModel;
use App\PermissionModel;
use App\PackagePermissionModel;
use Illuminate\Support\Facades\Redirect;

class PackagePermissionController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->PermissionModel = new PermissionModel();
        $this->PackageModel = new PackageModel();
        $this->PackagePermissionModel = new PackagePermissionModel;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages   = $this->PackageModel->get();
        return view('admin/package_permission',  ['package' => $packages ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$permission =$this->PackageModel->find($id)->name;
        $packages   = $this->PackageModel->get();
        echo 'create';
        exit;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $output = $this->PackagePermissionModel->PackagePermission($request);
       if($output == true){
           return Redirect::back()->with('Success', 'Package Listing Successfully Saved ');
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
        //dd($this->PackageModel->permissions()->get());
        $package = $this->PackageModel->where('id', '=', $id)->get();
        $permission = $this->PermissionModel->get();
        $package_permission = $this->PackagePermissionModel->where('package_id', '=', $id)->get();
        $permission_id = [];
        foreach($package_permission as $perm)
        {
            $permission_id[$perm->permission_id] = $perm->permission_id;
        }
        return view('admin.package_permission_list',  ['package' => $package , 'permission' => $permission , 'permission_id' => $permission_id]);
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
