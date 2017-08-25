<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\PropertyModel;
use App\CityModel;
use App\FeatureModel;
use App\ServicesModel;
use App\PropertyFeatureModel;
use App\PropertyServiceModel;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PropertyRequest;
use App\SocialAcounts;
use App\Adds;



class PropertyController extends Controller
{

    public function __construct(){

        $this->PropertyModel = new PropertyModel();
        $this->CityModel     = new CityModel ();
        $this->user          = new User();
        $this->FeatureModel  = new FeatureModel();
        $this->ServicesModel = new ServicesModel();
        $this->PropertyFeatureModel = new PropertyFeatureModel ();
        $this->PropertyServiceModel = new PropertyServiceModel ();
        $this->SocialAcounts = new SocialAcounts();
        $this->Adds          = new Adds();

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //if (!(Auth::user())) {
        //    return redirect('/login');
       // }



        $city     = $this->CityModel->get();
        //$services = $this->ServicesModel->get();
        $houseservices = $this->ServicesModel->where('type' , '=' , 'house')->get();
        $landservices = $this->ServicesModel->where('type' , '=' , 'land')->get();
        $projectsservices = $this->ServicesModel->where('type' , '=' , 'projects')->get();

        $feature  = $this->FeatureModel->get();
        $housefeature = $this->FeatureModel->where('type' , '=' , 'house')->get();
        $landfeature = $this->FeatureModel->where('type' , '=' , 'land')->get();
        $projectsfeature = $this->FeatureModel->where('type' , '=' , 'projects')->get();

        $Social_account =$this->SocialAcounts->get();
        return view('add_property' ,
            [
                'featuremodelData'           => $feature,
                'Social_account'    => $Social_account ,
                'city'              => $city ,
                'houseservices'     => $houseservices ,
                'landservices'      => $landservices ,
                'projectsservices'  => $projectsservices ,
                'housefeature'      => $housefeature,
                'landfeature'       => $landfeature,
                'projectsfeature'   => $projectsfeature,
            ]);
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
        //echo $file = Input::file('image');
        //dd($request);
        if($this->PropertyModel->store($request) == true)
        {
            return redirect()->action('PropertyController@property');
        }
        //echo 'store';
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function singleproperty($id)
    {
        $singleproperty =$this->PropertyModel->where('id', '=',$id)->first();
        $allproperty  =$this->PropertyModel->get();

        $propertyFeatures = $this->PropertyFeatureModel->SingleProperty($id);
        $propertyServices = $this->PropertyServiceModel->SingleProperty($id);

         $id            = $singleproperty->created_by;
        $Agent          = $this->user->where('id', '=',$id)->first();
	    $Agents         = $this->user->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();
        $Social_account = $this->SocialAcounts->get();
        $cities         = $this->CityModel->get();
        $Adds           = $this->Adds->where('status', '=', '1')->where('type', '=', 'Single')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();
        $featuremodelData              = $this->FeatureModel->get();
//		dd($featuremodelData);
        return view('property-detail' ,
            [
                'featuremodelData'           => $featuremodelData ,
                'Social_account'    => $Social_account ,
                'allproperty'       => $allproperty ,
                'AllProperty'       => $allproperty ,
                'singleproperty'    => $singleproperty ,
                'propertyFeatures'  => $propertyFeatures ,
                'propertyServices'  => $propertyServices ,
                'Agent'             => $Agent,
                'Agents'            => $Agents,
	            'cities'            => $cities,
                'Adds'              => $Adds,

            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_property(Request $request)
    {
        //dd($request);
        if($this->PropertyModel->update_property($request) == true)
        {
            return redirect()->action('PropertyController@property');
        }
    }



    public function property()
    {
//        /dd($this->PropertyModel->get());
        $username = [];

//dd($username);
        if(Auth::user()->type == 'admin')
        {
            $properties =$this->PropertyModel->get();
        }else{
            $properties =$this->PropertyModel->where('created_by', '=', Auth::user()->id)->get();
        }
        //dd($username);
        return view('admin.property',  ['properties' => $properties , 'UserName' => $username ]);
    }


    public function property_detail($id)
    {
        $singleproperty =$this->PropertyModel->where('id', '=',$id)->first();

        $propertyFeatures = $this->PropertyFeatureModel->SingleProperty($id);
        $propertyServices = $this->PropertyServiceModel->SingleProperty($id);
        $id = $singleproperty->created_by;
        $Agent            = $this->user->where('id', '=',$id)->first();
        return view('admin/view_property_detail' , [ 'singleproperty' => $singleproperty , 'propertyFeatures' => $propertyFeatures , 'propertyServices' => $propertyServices , 'Agent' => $Agent]);
    }


    public function show_edit_property($id)
    {

        $Allfeatures = $this->FeatureModel->get();
        $Allservices = $this->ServicesModel->get();
        $features    = $this->PropertyFeatureModel->where('property_id', '=' , $id)->get();
        $services    = $this->PropertyServiceModel->where('property_id', '=' , $id)->get();
        $city        = $this->CityModel->get();
        $property    = $this->PropertyModel->find($id);

        $houseservices = $this->ServicesModel->where('type' , '=' , 'house')->get();
        $landservices = $this->ServicesModel->where('type' , '=' , 'land')->get();
        $projectsservices = $this->ServicesModel->where('type' , '=' , 'projects')->get();

        //$feature  = $this->FeatureModel->get();
        $housefeature = $this->FeatureModel->where('type' , '=' , 'house')->get();
        $landfeature = $this->FeatureModel->where('type' , '=' , 'land')->get();
        $projectsfeature = $this->FeatureModel->where('type' , '=' , 'projects')->get();

       // dd($projectsfeature);


        $Selectedfeature = [];
        foreach($features as $key){
            $Selectedfeature[$key->feature_id] = $key->feature_id;
        }
        $Selectedservice = [];
        foreach($services as $key){
            $Selectedservice[$key->service_id] = $key->service_id;
        }

        return view('admin.edit_property',
            [
                'property' => $property ,
                'city' => $city ,
                'Selectedfeature' => $Selectedfeature ,
                'Selectedservice' => $Selectedservice ,
                'Allfeatures' => $Allfeatures ,
                'Allservices' => $Allservices,
                'houseservices'     => $houseservices ,
                'landservices'      => $landservices ,
                'projectsservices'  => $projectsservices ,
                'housefeature'      => $housefeature,
                'landfeature'       => $landfeature,
                'projectsfeature'   => $projectsfeature,
            ]);
    }



    public function active_property()
    {
//        /dd($this->PropertyModel->get());
        $username = [];

        if(Auth::user()->type == 'admin')
        {
            $properties =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->get();
        }else{
            $properties =$this->PropertyModel->where('created_by', '=', Auth::user()->id)->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->get();
        }
       // dd($properties);
        return view('admin.property',  ['properties' => $properties , 'UserName' => $username ]);
    }



    public function pending_property()
    {
//        /dd($this->PropertyModel->get());
        $username = [];

        if(Auth::user()->type == 'admin')
        {
            $properties =$this->PropertyModel->where('status' , '=' , '0')->get();
        }else{
            $properties =$this->PropertyModel->where('created_by', '=', Auth::user()->id)->where('status' , '=' , '0')->get();
        }
        // dd($properties);
        return view('admin.property',  ['properties' => $properties , 'UserName' => $username ]);
    }


    public function expire_property()
    {
//        /dd($this->PropertyModel->get());
        $username = [];

        if(Auth::user()->type == 'admin')
        {
            $properties =$this->PropertyModel->where('propertexpire' , '<=' , date("Y-m-d"))->get();
        }else{
            $properties =$this->PropertyModel->where('created_by', '=', Auth::user()->id)->where('propertexpire' , '<=' , date("Y-m-d"))->get();
        }
        // dd($properties);
        return view('admin.property',  ['properties' => $properties , 'UserName' => $username ]);
    }




    public function rejected_property()
    {
//        /dd($this->PropertyModel->get());
        $username = [];

        if(Auth::user()->type == 'admin')
        {
            $properties =$this->PropertyModel->where('status' , '=' , '2')->get();
        }else{
            $properties =$this->PropertyModel->where('created_by', '=', Auth::user()->id)->where('status' , '=' , '2')->get();
        }
        // dd($properties);
        return view('admin.property',  ['properties' => $properties , 'UserName' => $username ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activate_property($id)
    {
        $this->PropertyModel->where('id', $id)
            ->update(['status' =>'1']);
        return redirect()->action('PropertyController@property');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactivate_property($id)
    {
        $this->PropertyModel->where('id', $id)
            ->update(['status' =>'2']);
        return redirect()->action('PropertyController@property');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_property($id)
    {
        $this->PropertyModel->delete_property($id);
        if($this->PropertyModel->delete_property($id) == true)
        {
            return redirect()->action('PropertyController@property');
        }
    }

    /**
     * Set the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function set_property($id)
    {
        $this->PropertyModel->where('id', $id)->update(['number' => '1']);
            return redirect()->action('PropertyController@property');
    }

    /**
     * Unset the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unset_property($id)
    {
        $this->PropertyModel->where('id', $id)->update(['number' => '2']);
        return redirect()->action('PropertyController@property');
    }























}
