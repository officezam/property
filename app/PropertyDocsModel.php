<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyDocsModel extends Model
{


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $table = "property_docs";
    protected $primaryKey = 'id';


    public function store($imagename , $property_id , $j)
    {

        if($j == 0)
        {
            $this->property_id  = $property_id;
            $this->image1       = $imagename;
            $this->save();
        }else{
            $this->where('property_id', $property_id)
                ->update(['image'.$j => $imagename]);
        }

        return true;
    }


}
