<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

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
}
