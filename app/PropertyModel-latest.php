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
use Zend\Diactoros\Request;




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
        'subtype','address',
        'propety_number',
        'street','sector',
        'city','region',
        'latitude',
        'longitude',
        'price',
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
        dd('amir');exit;
       // dd(Input::file('image'));



        $this->purpose          = $request->purpose;
        $this->type             = $request->type;
        $this->subtype          = $request->subtype;
        $this->city             = $request->city;
        $this->latitude         = $request->latitude;
        $this->longitude        = $request->longitude;
        $this->title            = $request->title;
        $this->description      = $request->description;
        $this->area             = $request->area;
        $this->area_unit        = $request->area_unit;

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

       // $this->propertexpire    = date("Y-m-d", strtotime("+".$request->propertexpire." month", strtotime(date('Y-m-d'))));
        $this->remember_token   = $request->_token;
        $this->status           = '0';
        $this->created_by       = Auth::user()->id;
        $this->save();

        $insertedId = $this->id;


        if($request->hasFile('image'))
        {

            for( $j = 0 ; $j < 5 ; $j++)
            {

                $imageName = $insertedId.'_'.time() . '_' . Input::file('image')[$j]->getClientOriginalExtension();

                $this->where('id', $insertedId)->update(['image'.$j => $imageName]);

                for( $i = 0 ; $i <= 6 ; $i++)
                {
                    if($i == 0){ $size = '355x240_';  $height = '355';  $width = '240'; }
                    if($i == 1){ $size = '1170x600_'; $height = '1170'; $width = '600'; }
                    if($i == 2){ $size = '750x388_';  $height = '750';  $width = '388'; }
                    if($i == 3){ $size = '100x75_';   $height = '100';  $width = '75';  }
                    if($i == 4){ $size = '370x202_';  $height = '370';  $width = '202'; }
                    if($i == 5){ $size = '364x244_';  $height = '364';  $width = '244'; }
                    if($i == 6){ $size = '385x258_';  $height = '385';  $width = '258'; }



                    $path = public_path('/propetyImages/'. $size.$imageName);

                    Image::make($request->file('image')[$j]->getRealPath())->resize($height,$width)->save($path);
                    // Image::make($request->file('image')->getRealPath())->resize($height,$width)->insert(public_path() .'/propetyImages/watermark.png' , 'bottom-right', 10, 10)->save($path);

                }
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
        if($request->type == 'house')
        {
            $subtype = '';
        }else{
            $subtype = $request->subtype;
        }
        $updatingData = [
                'title'            => $request->title,
                'description'      => $request->description,
                'purpose'          => $request->purpose,
                'type'             => $request->type,
                'subtype'          => $subtype,
                'propety_number'   => $request->propety_number,
                'street'           => $request->street,
                'sector'           => $request->sector,
                'city'             => $request->city,
                'region'           => $request->region,
                'latitude'         => $request->latitude,
                'longitude'        => $request->longitude,
                'price'            => $request->price,
                'area'             => $request->area,
                'area_unit'        => $request->area_unit,
                'beds'             => $request->beds,
                'bathroom'         => $request->bathroom,
                'kitchens'         => $request->kitchens,
                'video_url'        => $request->video_url,
                'powerroom'        => $request->powerroom,
                'propertexpire'    => date("Y-m-d", strtotime("+".$request->propertexpire." month", strtotime(date('Y-m-d')))),
                'remember_token'   => $request->_token,
                'status'           =>'0',
        ];
        //dd($updatingData);
        $this->where('id', $request->id)
            ->update($updatingData);

        if($request->hasFile('new_image'))
        {
            $imageName = $request->id. '_' . time() . '.' . Input::file('new_image')->getClientOriginalExtension();
            $this->where('id', $request->id)->update(['image' => $imageName]);

            for( $i = 0 ; $i <= 6 ; $i++)
            {
                if($i == 0){ $size = '355x240_';  $height = '355';  $width = '240'; }
                if($i == 1){ $size = '1170x600_'; $height = '1170'; $width = '600'; }
                if($i == 2){ $size = '750x388_';  $height = '750';  $width = '388'; }
                if($i == 3){ $size = '100x75_';   $height = '100';  $width = '75';  }
                if($i == 4){ $size = '370x202_';  $height = '370';  $width = '202'; }
                if($i == 5){ $size = '364x244_';  $height = '364';  $width = '244'; }
                if($i == 6){ $size = '385x258_';  $height = '385';  $width = '258'; }


                $this->delete_image(public_path() . '/propetyImages/'.$request->created_by.'/'.$size.$request->old_image);
                $path = public_path('/propetyImages/'.$request->created_by.'/' . $size.$imageName);

                Image::make($request->file('new_image')->getRealPath())->resize($height,$width)->save($path);
               // Image::make($request->file('new_image')->getRealPath())->resize($height,$width)->insert(public_path() .'/propetyImages/watermark.png' , 'bottom-right', 10, 10)->save($path);

            }

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
        $this->PropertyFeatureModel->store($request->feature , $request->id );
            endif;
        if($request->services):
        $this->PropertyServiceModel->store($request->services , $request->id );
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
