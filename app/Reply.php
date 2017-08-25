<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
class Reply extends Model
{
     //
    protected $table = "replies";
    protected $primaryKey = 'id';
     protected $fillable = [
       'reply_post','comment_id','user_id'
    ];
    public function store($request){

//        dd($request);
    
        $this->reply_post      = $request->reply_post;
        $this->comment_id      = Input::get('comm_id');
        $this->user_id      = Auth::user()->id;
        $this->save();
        return true;
    }  
//      public function get_replydata()
//    {
//        return $this->select('replies.*', 'users.*','comments.*', 'replies.created_at AS date', 'replies.id AS r_id', 'users.id AS user_id','users.image AS u_image')
//                 ->leftjoin('comments', 'comments.id', '=', 'replies.comment_id')
//                 ->leftjoin('users', 'users.id', '=', 'replies.user_id');
//        
//    }
     public function blog()
    {
        return $this->belongsToMany('App\Comment', 'comment_id', 'id');
    }
     public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
