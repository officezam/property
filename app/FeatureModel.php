<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureModel extends Model
{
    protected $table = "feature";
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

    public function Edit($request)
    {
        $this->where('id', $request->id)
            ->update(['name' => $request->name ]);
        return true;
    }

}
