<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    protected $table = "services";
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

        $this->name     = $request->name;
        $this->type     = $request->type;
        $this->save();
        return true;
    }
}
