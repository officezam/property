<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyModel;
use App\User;
use App\SocialAcounts;
use App\CityModel;
use App\Adds;
use App\FeatureModel;


class PropertiesController extends Controller
{


    public $subtype = [
        'Houses-Villas' => 'Houses / Villas',
        'Plots-Files' => 'Plots / Files',
        'Flats-Apartments' => 'Flats / Appartments',
        'Form-Houses' => 'Form Houses',
        'Upper-Portion' => 'Upper Portion',
        'Lower-Portion' => 'Lower Protion',
        'Commercial-Plots-files' => 'Commercial Plots / Files',
        'Agricultural-Land' => 'Agricultural Land',
        'Industrial-Land' => 'Industrial Land',
        'Offices' => 'Office',
        'Shops-Showrooms' => 'Shops / Showrooms',
        'Warehouses-Godown' => 'Warehouses / Godown',
        'Buildings-Plaza' => 'Building',
        'Factories-Workshops' => 'Factories',
        'Guest-House-Hostels' => 'Guest House/Banquet Hall',
        'Schools-Colleges' => 'School / College',
        'Hotel-Restaurant' => 'Hotel / Resturant',
        'Residental-Towns-Scheeme' => 'Residental Town / Schemes',
        'Land-Sub-Divisions' => 'Land Sub Divisions',
        'Commercial-Plaza-Area' => 'Commercial Plaza / Tower',
        'Industrial-Estate-Zone' => 'Industrial Estates /Zone',
        'null' => ''
    ];

    public function __construct()
    {
        $this->PropertyModel = new PropertyModel ();
        $this->user          = new User();
        $this->SocialAcounts = new SocialAcounts();
        $this->CityModel     = new CityModel();
        $this->Adds          = new Adds();
        $this->FeatureModel  = new FeatureModel();
    }


    /*
     * Get All Property
     * */
    public function active_property()
    {
        //echo 'ACtive property';exit;
        $Agents = $this->user->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();
        $properties =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->paginate(6);
        $Allproperty  =$this->PropertyModel->get();
        $SocialAcounts = $this->SocialAcounts->get();
        $cities               = $this->CityModel->get();
        $Adds  = $this->Adds->where('status', '=', '1')->where('type', '=', 'Listing')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();
        $feature              = $this->FeatureModel->get();
        return view('all-properties',  ['featuremodelData'=> $feature ,'AllProperty' => $Allproperty ,'Social_account' => $SocialAcounts ,'properties' => $properties , 'Agents' => $Agents , 'cities' => $cities , 'Adds'   => $Adds]);
    }


    /*
     * Get All Rent Property
     * */
    public function rent_property()
    {
        $url_value = \Request::segment(2);
        if(empty($url_value)){
            $properties =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->where('purpose' , '=' , 'rent')->paginate(6);

        }else{
            $subtype   = $this->subtype[$url_value];
            $properties =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->where('purpose' , '=' , 'rent')->where('subtype' , '=' ,$subtype)->paginate(6);

        }

        $Agents = $this->user->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();


        $Allproperty  =$this->PropertyModel->get();
        $cities               = $this->CityModel->get();
        $SocialAcounts = $this->SocialAcounts->get();
        $Adds  = $this->Adds->where('status', '=', '1')->where('type', '=', 'Listing')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();
        $featuremodelData              = $this->FeatureModel->get();

        return view('all-properties',  ['featuremodelData'=> $featuremodelData ,'AllProperty' => $Allproperty ,'Social_account' => $SocialAcounts ,'properties' => $properties , 'Agents' => $Agents , 'cities' => $cities, 'Adds'   => $Adds]);
    }


    /*
     * Get All Projects Property
     * */
    public function projects_property()
    {
        $url_value = \Request::segment(2);
        if(empty($url_value)){
            $properties =$this->PropertyModel
                ->where('propertexpire' , '>' , date("Y-m-d"))
                ->where('status' , '=' , '1')
                ->where('type' , '=' , 'projects')
                ->paginate(6);
        }else{
            $subtype   = $this->subtype[$url_value];
            $properties =$this->PropertyModel
                ->where('propertexpire' , '>' , date("Y-m-d"))
                ->where('status' ,  '=' , '1')
                ->where('type' , '=' , 'projects')
                ->where('subtype' , '=' ,$subtype)
                ->paginate(6);
        }


        $Agents = $this->user->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();

        $Allproperty  =$this->PropertyModel->get();
        $cities               = $this->CityModel->get();
        $SocialAcounts = $this->SocialAcounts->get();
        $Adds  = $this->Adds->where('status', '=', '1')->where('type', '=', 'Listing')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();
        $featuremodelData              = $this->FeatureModel->get();

        return view('all-properties',  ['featuremodelData'=> $featuremodelData ,'AllProperty' => $Allproperty ,'Social_account' => $SocialAcounts ,'properties' => $properties , 'Agents' => $Agents , 'cities' => $cities , 'Adds'   => $Adds]);
    }




    /*
     * Get All sale Property
     * */
    public function sale_property()
    {
        $url_value = \Request::segment(2);
        if(empty($url_value)){
            $properties =$this->PropertyModel
                ->where('propertexpire' , '>' , date("Y-m-d"))
                ->where('status' , '=' , '1')
                ->where('purpose' , '=' , 'sell')->paginate(6);

        }else{
            $subtype   = $this->subtype[$url_value];
            $properties =$this->PropertyModel
                ->where('propertexpire' , '>' , date("Y-m-d"))
                ->where('status' , '=' , '1')
                ->where('purpose' , '=' , 'sell')
                ->where('subtype' , '=' ,$subtype)
                ->paginate(6);
        }

            //dd($properties);
        //dd($this->PropertyModel->get());
        $Agents = $this->user->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();

        //dd($username);
        $Allproperty  =$this->PropertyModel->get();
        $cities               = $this->CityModel->get();
        $SocialAcounts = $this->SocialAcounts->get();
        $Adds  = $this->Adds->where('status', '=', '1')->where('type', '=', 'Listing')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();
        $featuremodelData              = $this->FeatureModel->get();

        return view('all-properties',  ['featuremodelData'=> $featuremodelData ,'AllProperty' => $Allproperty ,'Social_account' => $SocialAcounts ,'properties' => $properties , 'Agents' => $Agents , 'cities' => $cities , 'Adds'   => $Adds]);
    }


}
