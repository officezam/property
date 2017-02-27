<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagePermissionModel extends Model
{
    /**
     *The attributes that is used to define table name for this model.
     */
    protected $table = "package_permission";
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'package_id','permission_id'
    ];

    /*
    * The Function saving data
    * */
    public function store($request){
        $this->name     = $request->permissionname;
        $this->save();
        return true;
    }



    public function permissions()
    {
        return $this->belongsToMany('App\PackageModel', 'package_permission','package_id', 'permission_id');
    }

}
