<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\SocialAcounts;
use App\User;
use App\PropertyModel;
use Request;
use App\CityModel;
use App\agentModel;
use App\Adds;
use App\FeatureModel;

class AgentController extends Controller
{

    public function __construct()
    {
        $this->SocialAcounts = new SocialAcounts();
        $this->User          = new User();
        $this->PropertyModel = new PropertyModel();
        $this->CityModel     = new CityModel();
        $this->agentModel    = new agentModel();
        $this->Adds          = new Adds();
        $this->FeatureModel  = new FeatureModel();

    }

    /*
     * Get Agent Detail
     * */
    public function agent_detail()
    {
        $server = explode('.', Request::server('HTTP_HOST'));
       // echo $server[0];exit;
        $Agent         = $this->User->where('DisplayName', '=', $server[0])->first();
	    $id = $Agent->id;
	    $Agents         = $this->User->where('user_id', '=', $id)->where('BusinessType', '=', '1')->where('isActive', '=', '1')->get();

		$RentProperty =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->where('purpose' , '=' , 'rent')->where('created_by', '=', $id)->paginate(10);
		$SellProperty =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->where('purpose' , '=' , 'sell')->where('created_by', '=', $id)->paginate(10);
		$projects =$this->PropertyModel->where('propertexpire' , '>' , date("Y-m-d")) ->where('status' , '=' , '1')->where('type' , '=' , 'projects')->where('created_by', '=', $id)->paginate(10);
	    $cities               = $this->CityModel->get();

        $agents =  $this->agentModel->where('user_id', $id)->get();


        $Allproperties           = $this->PropertyModel->where('status', '=', '1')->where('propertexpire', '>=', date("Y-m-d")) ->orderBy('id', 'desc')->get();
        $AllSaleproperties       = $this->PropertyModel->where('purpose', '=', 'sell')->where('status', '=', '1')->where('propertexpire', '>=', date("Y-m-d")) ->orderBy('id', 'desc')->get();
        $AllRentproperties       = $this->PropertyModel->where('purpose', '=', 'rent')->where('status', '=', '1')->where('propertexpire', '>=', date("Y-m-d")) ->orderBy('id', 'desc')->get();
        $AllProjects             = $this->PropertyModel->where('type', '=', 'projects')->where('status', '=', '1')->where('propertexpire', '>=', date("Y-m-d")) ->orderBy('id', 'desc')->get();
        $SocialAcounts = $this->SocialAcounts->get();
        $companyprofile =  $this->User->where('user_id', $id)->get();
        $feature              = $this->FeatureModel->get();

        $Adds  = $this->Adds->where('status', '=', '1')->where('type', '=', 'Single')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();

        //dd($Agent);
       // dd($companyprofile);
return view('company_profile' ,
                                    ['featuremodelData'=> $feature ,
                                        'Social_account' => $SocialAcounts ,
                                        'Adds' => $Adds,
                                        'RentProperty' => $RentProperty ,
                                        'SellProperty' => $SellProperty ,
                                        'projects' => $projects,
                                        'Agents' => $Agents,
                                        'cities' => $cities ,
                                        'agents' => $agents ,
                                        'Allproperties' => $Allproperties ,
                                        'AllSaleproperties' => $AllSaleproperties ,
                                        'AllRentproperties' => $AllRentproperties ,
                                        'AllProjects' => $AllProjects,
                                        'companyprofile' => $companyprofile,
                                        'Agent' => $Agent ,
                                    ]);
    }

    public function agent_list()
    {
        $SocialAcounts = $this->SocialAcounts->get();
        $Agent         = $this->User->where('BusinessType', '=', '2')->where('isActive', '=', '1')->paginate(4);
        $RentProperty  = $this->PropertyModel->where('purpose', '=', 'rent')->paginate(10);
        $SellProperty  = $this->PropertyModel->where('purpose', '=', 'sell')->paginate(10);
        $AllProperty   = $this->PropertyModel->paginate(10);
	    $cities               = $this->CityModel->get();
        $feature              = $this->FeatureModel->get();

        $Adds  = $this->Adds->where('status', '=', '1')->where('type', '=', 'Single')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();

        //dd($SellProperty);
        return view('agent_list' , ['featuremodelData'=> $feature , 'Adds' => $Adds,'Social_account' => $SocialAcounts , 'Agents' => $Agent , 'RentProperty' => $RentProperty , 'SellProperty' => $SellProperty , 'AllProperty' => $AllProperty, 'cities' => $cities]);

    }

}
