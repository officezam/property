<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use App\Reply;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\SocialAcounts;
use App\PropertyModel;
class BlogController extends Controller {

    public function __construct() {
        $this->Blog = new Blog;
        $this->Comment = new Comment;
        $this->Reply = new Reply;
        $this->SocialAcounts = new SocialAcounts();
        $this->PropertyModel = new PropertyModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin/add_blogPost');
    }

    public function blog() {


        $blog_post = $this->Blog->get_data()->get();
        $singleproperty =$this->PropertyModel->get();

        $Social_account = $this->SocialAcounts->get();
        $allproperty  =$this->PropertyModel->get();

        return view('blog', compact('blog_post', 'Social_account' , 'allproperty' , 'singleproperty'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($this->Blog->store($request) == true) {
            return redirect()->action('BlogController@index')->with('Message', 'Your Blog Post Submit Successfully...!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        $blog_post = $this->Blog->get();
        return view('admin.view_blogPost', compact('blog_post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit() {
        $blog_post = $this->Blog->where('id', Input::get('id'))->get();
        return view('admin.edit_blogPost', compact('blog_post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        if ($this->Blog->Edit($request) == true) {
            $data = $this->Blog->get();
            return redirect()->action('BlogController@show')->with('Message', 'Your Update Post Successfully...!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_blogPost() {
        DB::table('blogs')->where('id', Input::get('id'))->delete();
      $coment =  DB::table('comments')->where('blog_id', Input::get('id'))->delete();
        DB::table('replies')->where('comment_id', $coment)->delete();
        return Redirect::action('BlogController@show')->with('delete', 'Bloge Post Deleted Successfully!');
    }

    public function comment_post(Request $request) {
        if ($this->Comment->store($request) == true) {
            return Redirect::action('PagesController@blog_detail', ['id' => Input::get('id')])->with('Message', 'Bloge Post Successfully!');
        }
    }

    public function reply_post(Request $request) {
        if ($this->Reply->store($request) == true) {
            $blog_id = $this->Comment->where('id', Input::get('comm_id'))->pluck('blog_id');
            foreach ($blog_id as $blogsId) {
                return Redirect::action('PagesController@blog_detail', ['id' => $blogsId])->with('Message', 'Bloge Post Successfully!');
            }
        }
    }

}
