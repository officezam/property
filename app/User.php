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
        'FirstName', 'lastname', 'DisplayName','emailAddress','ConatctNumber1','password', 'BusinessType','token',
        'DomainName','AgencyName','CityName','ConatctNumber','ConatctNumber2','package_type'
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
        $inputData = [
            'FirstName' => $request->FirstName,
            'lastname' => $request->lastname,
            'DisplayName' => $request->DisplayName,
            'emailAddress' => $request->emailAddress,
            'ConatctNumber1' => '123',//$request->ConatctNumber1,
            'DomainName' => 'domain Name',//$request->DomainName,
            'AgencyName' => 'Agency Name',//$request->AgencyName,
            'CityName' => $request->CityName,
            'ConatctNumber' => $request->ConatctNumber,
            'password' => $request->password,
            'ConatctNumber2' => '123',//$request->ConatctNumber2,
            'BusinessType' => $request->BusinessType,
            'token' => $request->token,
            'package_type' => $request->package_type,

        ];
//        dump($inputData);
        $lastId = self::create($inputData);
        return $lastId->id;
    }
}
