<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Auth;
use Validator;
use Hash;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public $token;


	public function __construct(){
		$this->user = new User;

	}


	public function users()
	{
		if( Auth::user()->type == 'admin')
		{
			$user_data = $this->user->where('status', 1) ->where('type', '<>', 'admin')->get();
		}else{
			$user_data = $this->user->where('status', 1) ->where('user_id', '=', Auth::user()->id)->get();
		}
		return view('admin.users', compact('user_data'));
	}


	public function view_user(){
        //$data = $this->user->where('id' , '=' , Auth::user()->id)->first();
		$data = array('first_name' => Auth::user()->first_name,
		              'last_name' => Auth::user()->last_name,
		              'email' => Auth::user()->email,
		              'cell_phone' => Auth::user()->cell_phone,
		              'DisplayName' => Auth::user()->DisplayName,
		              'status' => Auth::user()->status,
		              'created_at' => Auth::user()->created_at,
		              'city' => Auth::user()->city,
		              'image' => Auth::user()->image
		);
		return view('admin.view_user', compact('data'));
	}


	public function view_user_detail(){
		$id = Input::get('id');
		$user_data = DB::table('users')->where('id', $id)->get();
		return view('admin.view_user_detail', compact('user_data'));
	}


	public function block_users(){

		if( Auth::user()->type == 'admin')
		{
			$user_data = $this->user->where('status', 0)->get();
		}else{
			$user_data = $this->user->where('status', 0)->where('user_id', '=', Auth::user()->id)->get();
		}


		return view('admin.deleted_users', compact('user_data'));
	}



	public function update_profile(Request $request){

		if($this->user->update_profile($request) == true){
			return Redirect::action('UserController@view_user')->with('success12', 'Profile Update Successfully!');
		}
	}
	public function update_company(Request $request)
	{
		if($this->user->update_company($request) == true)
		{
			return Redirect::action('UserController@view_user')->with('success12', 'Company data update Successfully!');
		}
	}


	//    update user password
	public function Edit_Profile() {

		$validator = Validator::make(
			Input::all(), array(
				'password' => 'min:3|confirmed',
				'password_confirmation' => 'same:password'
			)
		);
		if ($validator->fails()) {
			return Redirect::to('admin/view_user')->withInput(Input::all())->withErrors($validator);
		}
		User::where('id', Input::get('id'))
		    ->update(array(
			    'password' => bcrypt(Input::get('password')),
//                    'password' => Hash::make(Input::get('password')),
//                    'created_at' => time(),
//                    'updated_at' => time()
		    ));
		return Redirect::action('UserController@view_user')->with('success', 'Password Update Successfully!');
	}



//    delete user 
	public function delete_user() {
		DB::table('users')->where('id', Input::get('id'))->delete();
		return Redirect::action('UserController@users')->with('delete', 'User Record Deleted Successfully!');
	}


	// status block
	public function mark_status($action, $id) {
//        dd($action);
		if ($action == 'block') {
			$stmt = $this->user->markuserAs($id, 0);
		} else if ($action == 'unblock') {
			$this->user->markuserAs($id, 1);
		}
		return redirect('admin/users');
	}



	public function delete_image($file_path)
	{
		if(file_exists($file_path)){
			@unlink($file_path);
		}
		return true;
	}





}
