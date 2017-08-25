<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * loginController constructor.
     */
    public function __construct()
    {
        $this->user = new User();
    }



    /**
     * @return => redirect the user to login page and to homepage if the user is logged in
     */
    public function index()
    {

        if (Auth::user()) {
            return redirect('/admin/home');
        }
        return view('admin.login');
    }



    function login(Request $request)
    {
        //dd($request);
        //echo 'test';exit;
        Auth::attempt();
        $loginUser = $this->user->loginUser($request);//-> loginUser($request);

        if ($loginUser->contains('success')) {
            return redirect($loginUser['redirectTo']);
        } else {
            return redirect()->back()->with($loginUser['status'], $loginUser['message']);
        }

    }


    /**
     * @return => redirects to login after logging out the user
     */
    function logout()
    {
        if( Auth::user()->type == 'user')
        {
            $this->user->logoutUser();
            return redirect('/');
        }else{
            $this->user->logoutUser();
            return redirect('admin/');
        }

    }
    /**
     * @return => redirects to login after logging out the user
     */
    function fronlogout()
    {
        $this->user->logoutUser();
        return redirect('/');

    }

}
