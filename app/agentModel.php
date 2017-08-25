<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Validation;
use App\Http\Controllers\Controller;

class agentModel extends Model
{
    protected $table = "agent";

    protected $fillable = ['name', 'number', 'user_id', 'logo' , 'city'];

    /*
  * Saving Data of Register User
  *
  * */
    public function RegisterAgent($request)
    {
        //dd($request);

        $inputData = [
            'name'    => $request->name,
            'number'  => $request->number,
            'city'  => $request->CityName,
            'user_id' => Auth::user()->id,
            'logo'    => 'logo'
        ];

        //dump($inputData);
        $lastId = self::create($inputData);
        $insertedId = $lastId->id;

        if($request->hasFile('image'))
        {
            $imageName = $insertedId.'.' . Input::file('image')->getClientOriginalExtension();
            $this->where('id', $insertedId)->update(['logo' => $imageName]);

            for( $i = 0 ; $i <= 6 ; $i++)
            {
                if($i == 0){ $size = '74x74_';    $height = '74';   $width = '74'; }
                if($i == 1){ $size = '71x71_';    $height = '71';   $width = '71'; }
                if($i == 2){ $size = '330x330_';  $height = '330';  $width = '330';}
                if($i == 3){ $size = '239x239_';  $height = '239';  $width = '239';}
                if($i == 4){ $size = '200x150_';  $height = '200';  $width = '150';}
                if($i == 5){ $size = '35x35_';    $height = '35';   $width = '35';}
                if($i == 6){ $size = '90x90_';    $height = '90';   $width = '90';}

                $path = public_path('/AgentImage/' . $size.$imageName);

                \Image::make($request->file('image')->getRealPath())->resize($height,$width)->save($path);

            }

        }


        return $this->where('user_id', Auth::user()->id)->get();
    }


    /*
* Saving Data of Register User
*
* */
    public function UpdateAgent($request)
    {

        $agentModel = $this->find($request->id);
        $agentModel->name = $request->name;
        $agentModel->city = $request->CityName;
        $agentModel->number = $request->number;
        $agentModel->save();


        if($request->hasFile('image'))
        {
            $imageName = $request->id. '.' . Input::file('image')->getClientOriginalExtension();
            $this->where('id', $request->id)->update(['logo' => $imageName]);

            for( $i = 0 ; $i <= 6 ; $i++)
            {
                if($i == 0){ $size = '74x74_';    $height = '74';   $width = '74'; }
                if($i == 1){ $size = '71x71_';    $height = '71';   $width = '71'; }
                if($i == 2){ $size = '330x330_';  $height = '330';  $width = '330';}
                if($i == 3){ $size = '239x239_';  $height = '239';  $width = '239';}
                if($i == 4){ $size = '200x150_';  $height = '200';  $width = '150';}
                if($i == 5){ $size = '35x35_';    $height = '35';   $width = '35';}
                if($i == 6){ $size = '90x90_';    $height = '90';   $width = '90';}

                $path = public_path('/AgentImage/' . $size.$imageName);

                \Image::make($request->file('image')->getRealPath())->resize($height,$width)->save($path);

            }
        }
        return $this->where('user_id', Auth::user()->id)->get();;
    }






}
