<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
class Comment extends Model
{
    //
    protected $table = "comments";
    protected $primaryKey = 'id';
     protected $fillable = [
//        'name','email',
         'comment','blog_id','user_id'
    ];
    public function store($request){

//        dd($request);
//        $this->name            = $request->name;
//        $this->email      = $request->email;
        $this->comment      = $request->comment;
        $this->blog_id      = Input::get('id');
        $this->user_id      = Auth::user()->id;
        $this->save();
        return true;
    }  
      public function get_commentdata()
    {
        return $this->select('comments.*', 'users.*', 'comments.created_at AS date', 'comments.id AS comm_id', 'users.id AS u_id','users.image AS user_image')
                 ->leftjoin('users', 'users.id', '=', 'comments.user_id');
        
    }
     public function blog()
    {
        return $this->belongsToMany('App\Blog', 'blog_id', 'id');
    }
     public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
