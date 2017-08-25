<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAcounts extends Model
{
    protected $table = "social_acounts";
    protected $primaryKey = 'id';
    
      protected $fillable = [
        'facebook','twitter','google_pluse','linked_In',
    ];
        public function Edit($request)
    {
        $this->where('id', $request->id)
            ->update(['facebook' => $request->facebook,'twitter' => $request->twitter,'google_pluse' => $request->google_pluse,'linked_In' => $request->linked_In]);
        return true;
    }
}
