<?php

namespace App\Http\Controllers;

use App\ContactUs;
use DB;
use Mail;
use App\Mail\signupMail;
use App\Jobs\ExpireEmailLink;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SignupFormRequest;

class ContactUsController extends Controller {

    public function __construct() {
        $this->ContactUs = new ContactUs;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $Contact_us = $this->ContactUs->get();
        return view('admin.view_contactus', ['Contact_us' => $Contact_us]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        if ($this->ContactUs->store($request) == true) {

            return redirect()->action('PagesController@contact_us')->with('Message', 'Your Feedback Submit Successfully...!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactus_reply() {
        $Contact_us = $this->ContactUs->where('id', Input::get('id'))->get();
        return view('admin.contactus_reply', ['Contact_us' => $Contact_us]);
    }

    public function contactus_sendemail(Request $request) {
        $this->token = md5(time() . $request->get('emailAddress'));
        $request->token = $this->token;
//        $data = $this->ContactUs->store($request);
//        $UserData = User::find($data);

        Mail::to($request->emailAddress)->send(new signupMail($request));
        $job = (new ExpireEmailLink($request->id))->delay(Carbon::Now()->addMinutes(2));
        dispatch($job);
        return Redirect::action('ContactUsController@index')->with('Block', 'Send email reply Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactus_status($action, $id) {
//        dd($action);
        if ($action == 'block') {
            $stmt = $this->ContactUs->markuserAs($id, 0);
            return Redirect::action('ContactUsController@index')->with('Block', 'Contact Status Block Successfully!');
        } else if ($action == 'unblock') {
            $this->ContactUs->markuserAs($id, 1);
            return Redirect::action('ContactUsController@index')->with('Success', 'Contact Status Approve Successfully!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy() {
        ContactUs::where('id', Input::get('id'))->delete();

        return Redirect::action('ContactUsController@index')->with('delete', '  Deleted Successfully!');
    }

}
