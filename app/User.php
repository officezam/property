<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Interfaces\SaveObjectsInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Services\CommonService;
use App\Roles;
class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'DisplayName','email','password', 'BusinessType','remember_token',
        'cell_phone','city','package_type','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * This method is used to logout the user
     **/
    public function logoutUser()
    {
        $this->updateLogoutTime();
        Auth::logout();
    }


    /**
     * This method is used to update the logout time of user
     */
    public function updateLogoutTime()
    {
        $user = Auth::User();
        $user->last_login = Carbon::now();
        $user->save();
    }


    public function SignupForm($request){
        //echo $request->_token;exit;

         //dd($request);
        $inputData = [
            'first_name'    => $request->FirstName,
            'last_name'     => $request->lastname,
            'DisplayName'   => $request->DisplayName,
            'email'         => $request->emailAddress,
            'city'          => $request->CityName,
            'cell_phone'    => $request->ConatctNumber,
            'password'      => bcrypt($request->password),
            'BusinessType'  => $request->BusinessType,
            'type'          => 'admin',
            'remember_token'=> $request->_token
        ];
      //dump($inputData);
        $lastId = self::create($inputData);
        return $lastId->id;
    }

    /**
     * This method is used to login existing User
     * @param $request
     * @return Collection
     */
    public function loginUser($request)
    {
        $remember = $request['remember'] ? $request['remember'] : 0; /*use for remember me functionality*/
        $email = $request['email'];
        $password = $request['password'];
       // $users = $this->where('email', '=', $email)->get();

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {

           // echo 'Auth Run';exit;
            if (Auth::User()->type == 'admin') {
                //Auth::logout();
                return collect(['status' => 'success', 'redirectTo' => '/home']);            }
            if (!Auth::User()->permanent || Auth::User()->permanent < 1  && strtotime(Auth::User()->password_expire_date) < 0) {
                return collect(['status' => 'success', 'redirectTo' => '/home']); // logout the user if not permanent and the password is expired
            }
            if (Auth::User()->permanent != 1 && Auth::User()->password_expire_date < Carbon::now()) {
                Auth::logout();
                return collect(['status' => 'failure', 'message' => 'Your password is expired..!']);
            }
            return collect(['status' => 'success', 'redirectTo' => '/home']);
        }else{
            echo 'Autn Not Run';exit;
        }
        return collect(['status' => 'failure', 'message' => 'Invalid Credentials']);
    }

}
