<?php

namespace App;
use App\User;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use Zend\Diactoros\Request;

class Adds extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image','webSite_url','user_id','status','type',
    ];
    
    public function store($request)
    {

        //dd($request);
        $this->expiry_date      = $request->expiry_date;
        $this->image            = $request->image;
        $this->webSite_url      = $request->webSite_url;
        $this->status           = $request->status;
        $this->type             = $request->type;
        $this->user_id          = Auth::user()->id;
        $this->save();

        $insertedId = $this->id;

        if( $request->hasFile('image') )
        {
            $imageName = $insertedId.'.'.Input::file('image')->getClientOriginalExtension();
            $this->where('id', $insertedId)->update(['image' => $imageName]);

            $FolderCreate = public_path('/AddsImages/');
            if(!is_dir($FolderCreate)){   File::makeDirectory($FolderCreate, 0777, true, true);          }

            for( $i = 0 ; $i <= 7 ; $i++)
            {
                if($i == 0){ $size = '355x240_';  $height = '355';  $width = '240'; }
                if($i == 1){ $size = '1170x600_'; $height = '1170'; $width = '600'; }
                if($i == 2){ $size = '750x388_';  $height = '750';  $width = '388'; }
                if($i == 3){ $size = '100x75_';   $height = '100';  $width = '75';  }
                if($i == 4){ $size = '370x202_';  $height = '370';  $width = '202'; }
                if($i == 5){ $size = '364x244_';  $height = '364';  $width = '244'; }
                if($i == 6){ $size = '385x258_';  $height = '385';  $width = '258'; }
                if($i == 7){ $size = '194x143_';  $height = '194';  $width = '143'; }

                $path = public_path('AddsImages/'.$size.$imageName);
                Image::make($request->file('image')->getRealPath())->resize($height,$width)->save($path);
            }

        }
        return true;
    }


    public function update_adds($request)
    {
        $adds = $this->find($request->id);

        $adds->expiry_date      = $request->expiry_date;
        $adds->webSite_url      = $request->webSite_url;
        $adds->status           = $request->status;
        $adds->type             = $request->type;
        $adds->user_id          = Auth::user()->id;
        $adds->save();

//        /dd($request);

        $insertedId = $request->id;

        if( $request->hasFile('image') )
        {
            $imageName = $insertedId.'.'.Input::file('image')->getClientOriginalExtension();
            $this->where('id', $insertedId)->update(['image' => $imageName]);

            $FolderCreate = public_path('/AddsImages/');
            if(!is_dir($FolderCreate)){   File::makeDirectory($FolderCreate, 0777, true, true);          }

            for( $i = 0 ; $i <= 7 ; $i++)
            {
                if($i == 0){ $size = '355x240_';  $height = '355';  $width = '240'; }
                if($i == 1){ $size = '1170x600_'; $height = '1170'; $width = '600'; }
                if($i == 2){ $size = '750x388_';  $height = '750';  $width = '388'; }
                if($i == 3){ $size = '100x75_';   $height = '100';  $width = '75';  }
                if($i == 4){ $size = '370x202_';  $height = '370';  $width = '202'; }
                if($i == 5){ $size = '364x244_';  $height = '364';  $width = '244'; }
                if($i == 6){ $size = '385x258_';  $height = '385';  $width = '258'; }
                if($i == 7){ $size = '194x143_';  $height = '194';  $width = '143'; }

                $path = public_path('AddsImages/'.$size.$imageName);
                Image::make($request->file('image')->getRealPath())->resize($height,$width)->save($path);
            }

        }
        return true;
    }





// status active and inactive
    function markuserAs($id,$value) {
        //$where = ['id','=', $id];
        $stmt =  Adds::where('id', $id)
                ->update(array(
                 'status' => $value,
        ));
//        $stmt =  DB::table('adds')->where('id','=',$id)->update(['status' => $value]);
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

     public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
