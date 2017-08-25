<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\PropertyFeatureModel;
use App\PropertyServiceModel;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;
use File;




class PropertyModel extends Model
{

    use SoftDeletes;
    /*
*The attributes that is used to define table name for this model.
*/

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = "property";
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title' ,'description',
        'purpose','type',
        'subtype',
        'propety_number',
        'street','sector',
        'city','region',
        'latitude',
        'longitude',
        'price',
        'Label',
        'ConstructedArea',
        'OpenArea',
        'ConstructionYear',
        'OwnerShipStatus',
        'floor',
        'image',
        'area',
        'area_unit',
        'beds',
        'bathroom',
        'kitchens',
        'powerroom',
        'propertexpire',
        'created_by',
        'remember_token',
        'status'
    ];






    /*
     * The Function saving data
     * */
    public function store($request)
    {
        //dd(Input::file('image')[0]);
        //echo count(Input::file('image'));
        //dd(Input::file('image'));
        $this->purpose          = $request->purpose;
        $this->number           = '2';
        $this->type             = $request->type;
        $this->type             = $request->type;
        $this->subtype          = $request->subtype;
        $this->city             = $request->city;
        $this->address          = $request->address;
        $this->latitude         = $request->latitude;
        $this->longitude        = $request->longitude;
        $this->title            = $request->title;
        $this->description      = $request->description;
        $this->area             = $request->area;
        $this->area_unit        = $request->area_unit;
        $this->Label            = $request->Label;
        $this->ConstructedArea  = $request->ConstructedArea;
        $this->OpenArea         = $request->OpenArea;
        $this->ConstructionYear = $request->ConstructionYear;
        $this->OwnerShipStatus  = $request->OwnerShipStatus;
        $this->beds             =  $request->beds;
        $this->bathroom         =  $request->bathroom;
        $this->floor            =  $request->floor;
        $this->kitchens         =  $request->kitchens;
        $this->size1            = $request->size1;
        $this->size2            = $request->size2;
        $this->size3            = $request->size3;
        $this->size4            = $request->size4;
        $this->rate1            = $request->rate1;
        $this->rate2            = $request->rate2;
        $this->rate3            = $request->rate3;
        $this->rate4            = $request->rate4;
        $this->height           = $request->height;
        $this->width            = $request->width;
        $this->price            = $request->price;
        $this->video_url        = $request->video_url;
        $this->propertexpire    = date("Y-m-d", strtotime("+".$request->propertexpire." month", strtotime(date('Y-m-d'))));
        $this->remember_token   = $request->_token;
        $this->status           = '0';
        $this->created_by       = Auth::user()->id;
        $this->save();

        $insertedId = $this->id;

        //echo $insertedId;exit;
//echo count($request->hasFile('image'));exit;
        if($request->hasFile('image'))
        {
            for( $j = 0 ; $j < count(Input::file('image')) ; $j++)
            {
                $imageName = $j.'.'.Input::file('image')[$j]->getClientOriginalExtension();
                $this->where('id', $insertedId)->update(['image'.$j => '_'.$imageName]);
                echo $j.'<br>';
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


                    //$Image = Input::file('image')->move(public_path() . '/propetyImages/'.Auth::user()->id.'/', $imageName);

                    $path = public_path('/propetyImages/'.$insertedId.'/'. $size.$imageName);
                    $FolderCreate = public_path('/propetyImages/'.$insertedId.'/');
                    if(!is_dir($FolderCreate))
                    {
                    File::makeDirectory($FolderCreate, 0777, true, true);
                    }

                    Image::make($request->file('image')[$j]->getRealPath())->resize($height,$width)->save($path);
                    // Image::make($request->file('image')->getRealPath())->resize($height,$width)->insert(public_path() .'/propetyImages/watermark.png' , 'bottom-right', 10, 10)->save($path);
                }
            }

            if($request->hasFile('pdf')) {
                $pdf = time() . '.' . Input::file('pdf')->getClientOriginalExtension();
                $this->where('id', $insertedId)->update(['pdf' => $pdf]);
                Input::file('pdf')->move(public_path() . '/propetyImages/' . $insertedId. '/', $pdf);
            }
        }
        $this->PropertyFeatureModel     = new PropertyFeatureModel;
        $this->PropertyServiceModel     = new PropertyServiceModel;
        if(!empty($request->feature )){
            $this->PropertyFeatureModel->store($request->feature , $insertedId , $request->type );
        }
        if(!empty($request->services)) {
            $this->PropertyServiceModel->store($request->services, $insertedId , $request->type);
        }
        return true;

    }




    /*
 * The Function saving data
 * */
    public function update_property($request){
        //dd($request);
        //dd(Input::file('new_image1'));


        $updatingData = [
            'purpose'          => $request->purpose,
            'number'           => $request->number,
            'type'             => $request->type,
            'subtype'          => $request->subtype,
            'city'             => $request->city,
            'latitude'         => $request->latitude,
            'longitude'        => $request->longitude,
            'address'        => $request->address,
            'title'            => $request->title,
            'description'      => $request->description,
            'ConstructedArea'  => $request->ConstructedArea,
            'OpenArea'         => $request->OpenArea,
            'ConstructionYear' => $request->ConstructionYear,
            'OwnerShipStatus'  => $request->OwnerShipStatus,
            'beds'             => $request->beds,
            'bathroom'         =>  $request->bathroom,
            'floor'            => $request->floor,
            'kitchens'         => $request->kitchens,
            'area'             => $request->area,
            'area_unit'        => $request->area_unit,
            'size1'            => $request->size1,
            'size2'            => $request->size2,
            'size3'            => $request->size3,
            'size4'            => $request->size4,
            'rate1'            => $request->rate1,
            'rate2'            => $request->rate2,
            'rate3'            => $request->rate3,
            'rate4'            => $request->rate4,
            'height'           => $request->height,
            'width'            => $request->width,
            'price'            => $request->price,
            'video_url'        => $request->video_url,
            'propertexpire'    => date("Y-m-d", strtotime("+".$request->propertexpire." month", strtotime(date('Y-m-d')))),
            'remember_token'   => $request->_token,
            'status'           =>'0',
        ];

        //dd($updatingData);
        $this->where('id', $request->id)
            ->update($updatingData);


        if($request->hasFile('new_image0'))
        {
            $imageName = '0.'. Input::file('new_image0')->getClientOriginalExtension();

            $this->uploadimage($imageName , $request->old_image1 ,$request->id , $request->file('new_image0'));
            $this->where('id', $request->id)->update(['image0' => '_'.$imageName]);

        }

        if($request->hasFile('new_image1'))
        {
            $imageName = '1.'. Input::file('new_image1')->getClientOriginalExtension();

            $this->uploadimage($imageName , $request->old_image1 ,$request->id , $request->file('new_image1'));
            $this->where('id', $request->id)->update(['image1' => '_'.$imageName]);

        }

        if($request->hasFile('new_image2'))
        {
            $imageName =  '2.'. Input::file('new_image2')->getClientOriginalExtension();

            $this->uploadimage($imageName , $request->old_image2 ,$request->id , $request->file('new_image2'));
            $this->where('id', $request->id)->update(['image2' => '_'.$imageName]);

        }
        if($request->hasFile('new_image3'))
        {
            $imageName =  '3.'. Input::file('new_image3')->getClientOriginalExtension();

            $this->uploadimage($imageName , $request->old_image3 ,$request->id , $request->file('new_image3'));
            $this->where('id', $request->id)->update(['image3' => '_'.$imageName]);

        }
        if($request->hasFile('new_image4'))
        {
            $imageName =  '4.' . Input::file('new_image4')->getClientOriginalExtension();

            $this->uploadimage($imageName , $request->old_image4 ,$request->id , $request->file('new_image4'));
            $this->where('id', $request->id)->update(['image4' => '_'.$imageName]);

        }

        $this->PropertyFeatureModel     = new PropertyFeatureModel;
        $this->PropertyServiceModel     = new PropertyServiceModel;

        if($this->PropertyFeatureModel->where('property_id', $request->id)->first()):
        $this->PropertyFeatureModel->where('property_id', $request->id)->delete();
            endif;
        if($this->PropertyServiceModel->where('property_id', $request->id)->first()):
        $this->PropertyServiceModel->where('property_id', $request->id)->delete();
            endif;

        if($request->feature):
        $this->PropertyFeatureModel->store($request->feature , $request->id , $request->type);
            endif;
        if($request->services):
        $this->PropertyServiceModel->store($request->services , $request->id , $request->type );
        endif;
        return true;

    }

    public function delete_property($id)
    {

//            for( $i = 0 ; $i <= 6 ; $i++)
//            {
//                if($i == 0){ $size = '355x240_';  $height = '355';  $width = '240'; }
//                if($i == 1){ $size = '1170x600_'; $height = '1170'; $width = '600'; }
//                if($i == 2){ $size = '750x388_';  $height = '750';  $width = '388'; }
//                if($i == 3){ $size = '100x75_';   $height = '100';  $width = '75';  }
//                if($i == 4){ $size = '370x202_';  $height = '370';  $width = '202'; }
//                if($i == 5){ $size = '364x244_';  $height = '364';  $width = '244'; }
//                if($i == 6){ $size = '385x258_';  $height = '385';  $width = '258'; }
//
//                $this->delete_image(public_path() . '/propetyImages/'.$request->created_by.'/'.$size.$request->old_image);
//            }



        $this->destroy($id);
        return true;
    }


    public  function uploadimage($imageName , $old_image ,$id , $requestfile){


        for( $i = 0 ; $i <= 6 ; $i++)
        {
            if($i == 0){ $size = '355x240_';  $height = '355';  $width = '240'; }
            if($i == 1){ $size = '1170x600_'; $height = '1170'; $width = '600'; }
            if($i == 2){ $size = '750x388_';  $height = '750';  $width = '388'; }
            if($i == 3){ $size = '100x75_';   $height = '100';  $width = '75';  }
            if($i == 4){ $size = '370x202_';  $height = '370';  $width = '202'; }
            if($i == 5){ $size = '364x244_';  $height = '364';  $width = '244'; }
            if($i == 6){ $size = '385x258_';  $height = '385';  $width = '258'; }


            $this->delete_image(public_path() . '/propetyImages/'.$id.'/'.$size.$old_image);
            $path = public_path('/propetyImages/'.$id.'/' . $size.$imageName);

            Image::make($requestfile->getRealPath())->resize($height,$width)->save($path);
            // Image::make($request->file('new_image')->getRealPath())->resize($height,$width)->insert(public_path() .'/propetyImages/watermark.png' , 'bottom-right', 10, 10)->save($path);

        }

    }

    public function delete_image($file_path)
    {
        if(file_exists($file_path)){
            @unlink($file_path);
        }
        parent::delete();
    }

    /**
     * Get the property that owns the User.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function property_features(){
        return $this->belongsToMany('App\PropertyFeatureModel' , 'property_feature', 'feature_id', 'property_id');
    }
}
