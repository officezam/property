<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CityModel extends Model
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
    protected $table = "city";
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','zipcode','latitude','longitude'
    ];


    /*
     * The Function saving data
     * */
    public function store($request){

        $this->name         = $request->city;
        $this->zipcode      = $request->zipcode;
        $this->latitude     = $request->latitude;
        $this->longitude    = $request->longitude;

        $this->save();

        return true;
    }

    public function Edit($request)
    {
        $this->where('id', $request->id)
            ->update(['name' => $request->city , 'zipcode' => $request->zipcode , 'latitude' => $request->latitude ,'longitude' => $request->longitude]);
        return true;
    }




}
