<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    /**
     *The attributes that is used to define table name for this model.
     */
    protected $table = "packages";
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description'
    ];


    /*
     * The Function saving data
     * */
    public function store($request){

        $this->name     = $request->packagename;
        $this->description   = $request->description;
        $this->save();
        return true;
    }



    public function Edit($request)
    {
        $this->where('id', $request->id)
            ->update(['name' => $request->packagename , 'description' => $request->description]);
        return true;
    }




    /**
     * The Package that belong to the Permissions.
     */
    public function permissions()
    {
        return $this->belongsToMany('App\PermissionModel', 'package_permission', 'package_id', 'permission_id');
    }


    public function getAllPackagesWithDetails(){
        return $this->with("permissions");
    }


}
