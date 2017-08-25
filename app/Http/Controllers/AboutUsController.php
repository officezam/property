<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\AboutUs;
use Illuminate\Support\Facades\Redirect;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->AboutUs = new AboutUs();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function edit_aboutus()
    {
         $data =$this->AboutUs->where('key','aboutus')->get();
        return view('admin.edit_aboutus', compact('data'))->with('Message' , 'Your Package Permission list Created Successfully...!');
    }
     public function update(Request $request)
    {     
     if($this->AboutUs->Edit($request) == true)
        {
            $data =$this->AboutUs->get();
           return redirect()->action('AboutUsController@edit_aboutus')->with('Message', 'Your Update Submit Successfully...!');

        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_terms_condition()
    {
        //
         $terms_condition =$this->AboutUs->where('key','Terms&condition')->get();
           return view('admin.edit_terms_condition', compact('terms_condition'))->with('Message' , 'Your Package Permission list Created Successfully...!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_terms_condition(Request $request)
    {
       if($this->AboutUs->Edit($request) == true)
        {
            $data =$this->AboutUs->get();
           return redirect()->action('AboutUsController@edit_terms_condition')->with('Message', 'Your Update Submit Successfully...!');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       public function edit_privacy_policy()
    {
        //
         $privacy_policy =$this->AboutUs->where('key','Privacy&Policy')->get();
           return view('admin.edit_privacy_policy', compact('privacy_policy'))->with('Message' , 'Your Package Permission list Created Successfully...!');
    }
    public function update_privacy_policy(Request $request)
    {
      if($this->AboutUs->Edit($request) == true)
        {
            $data =$this->AboutUs->get();
           return redirect()->action('AboutUsController@edit_privacy_policy')->with('Message', 'Your update Submit Successfully...!');

        }
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_contactus_text()
    {
        //
         $contactus =$this->AboutUs->where('key','ContactUs')->get();
           return view('admin.edit_contactus_text', compact('contactus'))->with('Message' , 'Your Package Permission list Created Successfully...!');
    }
    public function update_contactus_text(Request $request)
    {     
     if($this->AboutUs->Edit($request) == true)
        {
            $data =$this->AboutUs->get();
           return redirect()->action('AboutUsController@edit_contactus_text')->with('Message', 'Your Update  Successfully...!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
