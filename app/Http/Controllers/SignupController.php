<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\User;
use App\Mail\signupMail;
use App\Http\Requests\SignupFormRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\PackageModel;
use App\PackagePermissionModel;
use App\PermissionModel;
use App\SocialAcounts;
use App\CityModel;
use App\Jobs\ExpireEmailLink;
use App\agentModel;
use App\FeatureModel;




class signupController extends Controller
{
    public $token;

    public function __construct(){
        $this->user = new User();
        $this->package = new PackageModel();
        $this->permission = new PermissionModel();
        $this->packagepermission = new PackagePermissionModel();
        $this->SocialAcounts = new SocialAcounts();
        $this->CityModel     = new CityModel();
        $this->agentModel   = new agentModel();
        $this->FeatureModel  = new FeatureModel();
    }

    /*
     * User register
     * return to signup blade with package detail
     * */
    public function Signup()
    {
        $packages           = $this->package->getAllPackagesWithDetails()->get();
        $Permission         = $this->permission->get();
        $PackagePermission  = $this->packagepermission->get();
        $Social_account     = $this->SocialAcounts->get();
        $cities             = $this->CityModel->get();
        $Agents         = $this->user->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();
        $feature  = $this->FeatureModel->get();

        return view('signup',  ['featuremodelData'  => $feature,'Agents' => $Agents , 'cities' => $cities , 'Social_account' => $Social_account ,'packages' => $packages  , 'Permission' => $Permission , 'PackagePermission' => $PackagePermission]);

    }

    /*
     * Register New User And Email Sent
     *
     * */
    public function SignupForm(SignupFormRequest $request)
	{
    	$request->remember_token = md5(time() . $request->email);
    	$data       =  $this->user->SignugpForm($request);
    	$UserData   = User::find($data);


        Mail::to($UserData->email)->send(new signupMail($UserData));
        //$expireEmail = new ExpireEmailLink();
        $job = dispatch((new ExpireEmailLink($UserData->id))->delay(Carbon::Now()->addMinutes(2)));
      // dispatch($job);
        $Social_account =$this->SocialAcounts->get();




	    if($UserData->user_id <> '')
	    {
		    if( Auth::user()->type == 'admin')
		    {
			    $user_data = User::where('status', 1)->where('type', '<>', 'admin')->get();
		    }else
		    {
			    $user_data = User::where('status', 1)->where('type', '=', 'user')->where('user_id', '=', Auth::user()->id)->get();
		    }

		    return view('admin.users', compact('user_data'));
		    //return view('AfterSignup', ['Social_account' => $Social_account ]);
	    }else{
		    return view('AfterSignup', ['Social_account' => $Social_account ]);
	    }


    }



    public function emailVerification($token)
    {

        $data = User::where('remember_token',$token)->update(['isActive' => 1]);
        $users = User::where('remember_token', '=', $token)->select('email','password')->get();
        User::where('remember_token',$token)->update(['password' => bcrypt($users[0]->password)]);

        // create our user data for the authentication
        $userdata = array(
            'email'     => $users[0]->email,
            'password'  => $users[0]->password,

        );

        Auth::attempt();
        $loginUser = $this->user->loginUser($userdata);//-> loginUser($request);

        if ($loginUser->contains('success')) {
            return redirect($loginUser['redirectTo']);
        } else {
            return redirect()->back()->with($loginUser['status'], $loginUser['message']);
        }

    }




    public  function Signout(){

        if(!isset($_SESSION)){session_start();}
        session_destroy();
        return redirect('/');
    }


	/*
 * agent register by Agency
 * return to signup blade with package detail
 * */
	public function addAgent()
	{
		$cities             = $this->CityModel->get();
		return view('admin.adduser',  ['cities' => $cities ]);

	}


    /*
 * agent register by Agent
 * return to signup blade with package detail
 * */
    public function AddAgents()
    {
        $cities             = $this->CityModel->get();
        return view('admin.addagent',  ['cities' => $cities ]);

    }

    /*
  * Register New User And Email Sent
  *
  * */
    public function RegisterAgent(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'CityName' => 'required',
            'number' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $agents =  $this->agentModel->RegisterAgent($request);

        if($agents <> '')
        {
            return view('admin.agents', compact('agents'));

        }

    }

    /*
  * Agents Show All
  *
  * */
    public function agents()
    {


        $agents =  $this->agentModel->where('user_id', Auth::user()->id)->get();

            return view('admin.agents', compact('agents'));

    }


/*
  * Agents Show All
  *
  * */
    public function delete_agent($id)
    {

         $this->agentModel->destroy('id', $id);

        $agents =  $this->agentModel->where('user_id', Auth::user()->id)->get();

            return view('admin.agents', compact('agents'));

    }

    /*
  * Agents Edit All
  *
  * */
    public function edit_agent($id)
    {
        $agents = $this->agentModel->find($id);
        //dd($agents->name);
        $cities = $this->CityModel->get();
        return view('admin.editagent', compact('agents' , 'cities'));

    }
    /*
   * Register New User And Email Sent
   *
   * */
    public function UpdateAgent(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'CityName' => 'required',
            'number' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $agents =  $this->agentModel->UpdateAgent($request);

        if($agents <> '')
        {
            return view('admin.agents', compact('agents'));

        }

    }


































}


