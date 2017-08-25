<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\PropertyModel;
use App\SocialAcounts;
use App\CityModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;
use App\Adds;
use App\FeatureModel;



class SearchController extends Controller
{
    /*
     * load all intital files
     * */
    public function __construct()
    {
        $this->PropertyModel = new PropertyModel();
        $this->User          = new User();
        $this->SocialAcounts = new SocialAcounts();
        $this->CityModel     = new CityModel();
        $this->Adds          = new Adds();
        $this->FeatureModel  = new FeatureModel();


    }

    /*
     * Search Data by Ajax on text filesd on change
     * */
    public function searchajax(Request $request)
    {
        $term = $request->term;
        $properties = $this->PropertyModel->where('title' , 'like' , '%'. $term .'%')->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->get();
        foreach ( $properties as $query ){
            $data[] = array('value' => $query->title, 'id' =>$query->id);
        }
        return response()->json($data);
    }

    /*
     * Search Form submit Data
     *  */
    public function  SearchFormData(Request $request)
    {

       // dd($request);
        $keyword = $request->keyword;
        $city = $request->city;
        $type = $request->type;
        $purpose = $request->purpose;
        $Agent = $request->agency;
        $OwnerShipStatus = $request->OwnerShipStatus;
        $kitchens = $request->kitchens;
        $beds = $request->beds;
        $bathroom = $request->bathroom;
        //$area_unit = $request->area_unit;
        $price_from = $request->price_from;
        $price_to = $request->price_to;

	    if( $type != 'sell' && $type != 'rent'){ $type = '';  }
	    if( $purpose != 'projects' && $purpose != 'house' && $purpose != 'land'){  $purpose = '';  }

	    $properties = $this->PropertyModel
            ->orWhere('title', 'like', '%' .    $keyword . '%')
            ->orWhere('city', '=',              $city )
            ->orWhere('type', '=',              $type )
            ->orWhere('purpose', '=',           $purpose)
            ->orWhere('created_by', '=',        $Agent)
            ->orWhere('OwnerShipStatus', '=',   $OwnerShipStatus )
            ->orWhere('kitchens', '=',          $kitchens )
            ->orWhere('beds', '=',              $beds )
            ->orWhere('bathroom', '=',          $bathroom )
            //->orWhere('area_unit', '=',         $area_unit )
            ->orWhere('price', '>=',            $price_from )
            ->orWhere('price', '<=',            $price_to )
            ->where('propertexpire', '>', date("Y-m-d"))
            ->where('status', '=', '1')
            ->paginate(10);


//        echo 'keyword =  '.$keyword;
//        echo '<br>';
//         echo 'city =  '.$city ;
//        echo '<br>';
//         echo 'type =  '. $type ;
//        echo '<br>';
//        echo 'agency =  '. $Agent;
//        echo '<br>';
//        echo 'OwnerShipStatus =  '.  $OwnerShipStatus;
//        echo '<br>';
//        echo 'kitchens =  '.  $kitchens ;
//        echo '<br>';
//        echo 'beds =  '.  $beds ;
//        echo '<br>';
//        echo 'bathroom =  '.  $bathroom;
//        echo '<br>';
//        echo 'area_unit =  '.  $area_unit ;
//        echo '<br>';
//        echo 'price_from =  '.  $price_from ;
//        echo '<br>';
//        echo 'price_to =  '.  $price_to ;
//
//        //Search When only city seacrh by user
//        $properties = $this->PropertyModel
//            ->where('title', 'like', '%' . $keyword . '%')
//            ->where('city', 'like', '%' . $city . '%')
//            ->where('type', 'like', '%' . $type . '%')
//            ->where('subtype', 'like', '%' . $subtype . '%')
//            ->where('purpose', 'like', '%' . $purpose . '%')
//            ->where('created_by', '=', $Agent)
//            ->where('OwnerShipStatus', 'like', '%' . $OwnerShipStatus . '%')
//            ->where('kitchens', 'like', '%' . $kitchens . '%')
//            ->where('beds', 'like', '%' . $beds . '%')
//            ->where('bathroom', 'like', '%' . $bathroom . '%')
//            ->where('area_unit', 'like', '%' . $area_unit . '%')
//            ->where('price', '>=', '%' . $price_from . '%')
//            ->where('price', '<=', '%' . $price_to . '%')
//            ->where('propertexpire', '>', date("Y-m-d"))
//            ->where('status', '=', '1')
//            ->toSql();
        //dd(DB::getQueryLog($properties));
       // dd($properties);




        //dd($properties);
        $Agents = $this->User->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();
        $otherProperty =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->where('type' , '=' , 'projects')->paginate(6);
        $cities               = $this->CityModel->get();
        $SocialAcounts = $this->SocialAcounts->get();
        $Adds  = $this->Adds->where('status', '=', '1')->where('type', '=', 'Listing')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();
        $featuremodelData              = $this->FeatureModel->get();

        return view('search-result',  ['keyword' => $keyword ,'featuremodelData' => $featuremodelData , 'Adds' => $Adds , 'SearchProperty' => $properties ,'Social_account' => $SocialAcounts ,'AllProperty' => $otherProperty , 'Agents' => $Agents , 'cities' => $cities]);

    }
}
