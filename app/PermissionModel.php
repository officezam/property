<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model
{
    /**
     *The attributes that is used to define table name for this model.
     */
    protected $table = "permissions";
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /*
    * The Function saving data
    * */
    public function store($request){
        $this->name     = $request->permissionname;
        $this->save();
        return true;
    }



    /**
     *The roles that have permissions.
     */
    public function packages()
    {
        return $this->belongsToMany('App\PackageModel');
    }



}
