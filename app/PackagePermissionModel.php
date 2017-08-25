<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;


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


    public function PackagePermission($request){
        $this->where('package_id', '=', $request->package_id)->delete();
        foreach ($request->permission_id as $key => $value){
            $this->insert(['package_id' => $request->package_id , 'permission_id' => $value]);
        }
        return true;
    }

    public function permissions()
    {
        return $this->belongsToMany('App\PackageModel', 'package_permission','package_id', 'permission_id');
    }

}
