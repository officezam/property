<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PropertyModel;

class PropertyFeatureModel extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = "property_feature";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id','feature_id'
    ];


    /*
    * The Function saving data
    * */
    public function store($features , $property_id , $type)
    {
         $dataSet = [];
        foreach ($features as $feature) {
            $dataSet[] = [
                'property_id'  => $property_id,
                'feature_id'   => $feature,
                'type'         => $type
            ];
        }
        $this->insert($dataSet);

        return true;
    }


            public function SingleProperty($id){

                $propertyFeatures = $this
                    ->join('feature', 'property_feature.feature_id', '=', 'feature.id')
                    ->where('property_feature.property_id' , '=' , $id)
                    ->select( 'feature.name')
                    ->get();
                return $propertyFeatures;

            }



    public function property(){

        return $this->belongsToMany('App\PropertyModel' , 'property_feature', 'property_id', 'feature_id');
    }

    public function getDetails(){
        return $this->with('property.property_features')->get();
    }

}
