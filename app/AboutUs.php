<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    //
    protected $table = "about_uses";
    protected $primaryKey = 'id';
    
      protected $fillable = [
        'key','description',
    ];
        public function Edit($request)
    {
        $this->where('id', $request->id)
            ->update(['description' => $request->description]);
        return true;
    }
}
