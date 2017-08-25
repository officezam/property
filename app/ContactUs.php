<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ContactUs extends Model
{
       protected $table = "contact_uses";
       protected $primaryKey = 'id';
    
      protected $fillable = [
        'email','phone','subject','message','status'
    ];
      
       public function store($request){

        $this->email     = $request->email;
        $this->phone     = $request->phone;
        $this->subject     = $request->subject;
        $this->message     = $request->message;
        $this->status     = '2';
        
        $this->save();

        return true;
    }
    
        public function Edit($request)
    {
        $this->where('id', $request->id)
            ->update(['email' => $request->email,'phone' => $request->phone,'subject' => $request->subject,'message' => $request->message,'status' => $request->status]);
        return true;
    }
    // status active and inactive
    function markuserAs($id,$value) {
 
        $stmt =  ContactUs::where('id', $id)->update(array('status' => $value));
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }
}
