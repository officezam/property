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
    public function store($request){

        $this->title            = $request->title;
        $this->description      = $request->description;
        $this->purpose          = $request->purpose;
        $this->type             = $request->type;
        $this->subtype          = $request->subtype;
        $this->propety_number   = $request->propety_number;
        $this->street           = $request->street;
        $this->sector           = $request->sector;
        $this->city             = $request->city;
        $this->region           = $request->region;
        $this->latitude         = $request->latitude;
        $this->longitude        = $request->longitude;
        $this->price            = $request->price;
        $this->image            = $request->image;
        $this->video_url        = $request->video_url;
        $this->area             = $request->area;
        $this->area_unit        = $request->area_unit;
        $this->beds             = $request->beds;
        $this->bathroom         = $request->bathroom;
        $this->kitchens         = $request->kitchens;
        $this->powerroom        = $request->powerroom;
        $this->propertexpire    = date("Y-m-d", strtotime("+".$request->propertexpire." month", strtotime(date('Y-m-d'))));
        $this->remember_token   = $request->_token;
        $this->status           = '0';
        $this->created_by       = Auth::user()->id;
        $this->save();

        $insertedId = $this->id;

        if( $request->hasFile('image') )
        {
            $imageName = $insertedId. '_' . time() . '.' . Input::file('image')->getClientOriginalExtension();
            $Image = Input::file('image')->move(public_path() . '/propetyImages/'.Auth::user()->id.'/', $imageName);

            $this->where('id', $insertedId)
                ->update(['image' => $imageName]);
        }

        $this->PropertyFeatureModel     = new PropertyFeatureModel;
        $this->PropertyServiceModel     = new PropertyServiceModel;
        if(!empty($request->feature )){
            $this->PropertyFeatureModel->store($request->feature , $insertedId );
        }
        if(!empty($request->services)) {
            $this->PropertyServiceModel->store($request->services, $insertedId);
        }
        return true;

    }





    /*
 * The Function saving data
 * */
    public function update_property($request){

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
            $Image = Input::file('new_image')->move(public_path() . '/propetyImages/'.$request->created_by.'/', $imageName);

            $this->where('id', $request->id)
                ->update(['image' => $imageName]);
            $this->delete_image(public_path() . '/propetyImages/'.$request->created_by.'/'.$request->old_image);

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
