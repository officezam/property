<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyServiceModel extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = "property_service";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id','service_id'
    ];


    /*
  * The Function saving data
  * */
    public function store($services , $property_id , $type){
        $dataSet = [];
        foreach ($services as $service) {
            $dataSet[] = [
                'property_id'  => $property_id,
                'service_id'   => $service,
                'type'         => $type
            ];
        }
        $this->insert($dataSet);
        return true;
    }

    public function Edit($request)
    {
        $this->where('id', $request->id)
            ->update(['name' => $request->city , 'zipcode' => $request->zipcode]);
        return true;
    }


    public function SingleProperty($id){

        $propertyFeatures = $this
            ->join('services', 'property_service.service_id', '=', 'services.id')
            ->where('property_service.property_id' , '=' , $id)
            ->select('services.name')
            ->get();
        return $propertyFeatures;

    }




    public function property()
    {
        return $this->belongsToMany('App\PropertyModel');
    }

}
