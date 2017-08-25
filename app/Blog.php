<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class Blog extends Model
{
    //
    protected $table = "blogs";
    protected $primaryKey = 'id';
     protected $fillable = [
        'blog_post','image','user_id'
    ];
     
      public function store($request){

        //dd($request);
        $this->image            = $request->image;
        $this->blog_post      = $request->blog_post;
        $this->user_id      = Auth::user()->id;
        $this->save();

        $insertedId = $this->id;

        if( $request->hasFile('image') )
        {
            $imageName = $insertedId. '_' . time() . '.' . Input::file('image')->getClientOriginalExtension();
           // Input::file('image')->move(base_path() . '/public/BlogImages/', $imageName);
            $path = public_path('/BlogImages/'.$imageName);

            Image::make($request->file('image')->getRealPath())->resize(810 , 400)->save($path);

            $this->where('id', $insertedId)
                ->update(['image' => $imageName]);

        }
        return true;
    }
     public function Edit($request)
    {
//        $this->where('id', $request->id)
//            ->update(['blog_post' => $request->blog_post,'image' => $request->image]);
            $input = $request->all();
        if (Input::file('image') != '')
        {
            $destinationPath = 'BlogImages/'; // upload path

            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension

            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image

            $path = public_path('/BlogImages/'.$fileName);

            //Image::make($request->file('image')->getRealPath())->resize(810 , 400)->save($path);


            if (Image::make($request->file('image')->getRealPath())->resize(810 , 400)->save($path) != '')
            {
                $this->where('id', Input::get('id'))
                        ->update(array(
                    'image' => $fileName,
                    'blog_post' => $request->blog_post,
                ));
            } else {
                echo"Error! file did not move";
            }
        } else {
           $this->where('id', Input::get('id'))
                    ->update(array(
                'blog_post' => $request->blog_post,
            ));
        }
        return true;
    }

     public function get_data()
    {
        return $this->select('blogs.*', 'users.*', 'blogs.created_at AS date', 'blogs.image AS blog_image', 'blogs.id AS id', 'users.id AS u_id', 'users.image AS user_image')
                 ->leftjoin('users', 'users.id', '=', 'blogs.user_id');
        
    }
     public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
