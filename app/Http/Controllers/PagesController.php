<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\AboutUs;
use App\SocialAcounts;
use App\PropertyModel;
use App\Blog;
use App\User;
use App\Comment;
use App\Reply;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller {

    //
    public function __construct() {

        $this->AboutUs = new AboutUs();
        $this->SocialAcounts = new SocialAcounts();
        $this->PropertyModel = new PropertyModel ();
        $this->Blog = new Blog;
        $this->User = new User;
        $this->Comment = new Comment;
        $this->Reply = new Reply;
    }

    public function index() {
        return view('index');
    }


    // pages controller
    public function property_detail_tabs() {
        $Social_account = $this->SocialAcounts->get();
        return view('property_detail_tabs', compact('Social_account'));
    }

    public function about_us() {
        $data = $this->AboutUs->where('key', 'aboutus')->get();
        $Social_account = $this->SocialAcounts->get();
        return view('about_us', compact('data', 'Social_account'));
    }

    public function add_new_property() {
        return view('add_new_property');
    }

    public function agency_list() {
        return view('agency_list');
    }



    public function agent_detail() {
        return view('agent_detail');
    }



    public function blog_detail() {
        $blog_post = $this->Blog->get_data()->where('blogs.id', Input::get('id'))->get();
        $Comment_post = $this->Comment->get_commentdata()->where('comments.blog_id', Input::get('id'))->get();
        $Reply_post = $this->Reply
                ->where('comments.blog_id', Input::get('id'))
                ->select('replies.*', 'users.*','comments.*', 'replies.created_at AS date', 'replies.id AS r_id', 'users.id AS user_id','users.image AS u_image')
                 ->leftjoin('comments', 'comments.id', '=', 'replies.comment_id')
                 ->leftjoin('users', 'users.id', '=', 'replies.user_id')
                ->get();
        $Social_account = $this->SocialAcounts->get();
        return view('blog_detail', compact('blog_post', 'Social_account', 'Comment_post','Reply_post'));
    }

    public function blog_masonry() {
         $blog_post = $this->Blog->get_data()->get();
        $Social_account = $this->SocialAcounts->get();
        return view('blog_masonry',compact('blog_post', 'Social_account'));
    }

    public function company_profile() {
        return view('company_profile');
    }

    public function compare_properties() {
        return view('compare_properties');
    }

    public function contact_us() {
        $Social_account = $this->SocialAcounts->get();
        $contactus = $this->AboutUs->where('key', 'ContactUs')->get();
        return view('contact_us', compact('Social_account', 'contactus'));
    }

    public function faqs() {
        return view('faqs');
    }

    public function forget_password() {
        return view('forget_password');
    }

    public function home_map() {
        return view('home_map');
    }

    public function home_map_fullscreen() {
        return view('home_map_fullscreen');
    }

    public function home_parallax() {
        return view('home_parallax');
    }

    public function home_parallax_autofix() {
        return view('home_parallax_autofix');
    }

    public function home_parallax_fullscreen() {
        return view('home_parallax_fullscreen');
    }

    public function home_property_slider() {
        return view('home_property_slider');
    }

    public function home_splash() {
        return view('home_splash');
    }

    public function home_video() {
        return view('home_video');
    }

    public function home_video_fullscreen() {
        return view('home_video_fullscreen');
    }

    public function landing_page() {
        return view('landing_page');
    }

    public function listing_done() {
        return view('listing_done');
    }

    public function listing_payment() {
        return view('listing_payment');
    }

    public function listing_select_package() {
        return view('listing_select_package');
    }

    public function login() {

        return view('login');
    }

    public function map_full_search() {
        return view('map_full_search');
    }

    public function map_listing() {
        return view('map_listing');
    }

    public function module_advanced_search() {
        return view('module_advanced_search');
    }

    public function module_agency() {
        return view('module_agency');
    }

    public function module_agents() {
        return view('module_agents');
    }

    public function module_blog_post_carousels() {
        return view('module_blog_post_carousels');
    }

    public function module_blog_post_grids() {
        return view('module_blog_post_grids');
    }

    public function module_membership_packages() {
        return view('module_membership_packages');
    }

    public function module_partners() {
        return view('module_partners');
    }

    public function module_property_by_id() {
        return view('module_property_by_id');
    }

    public function module_property_cards() {
        return view('module_property_cards');
    }

    public function module_property_carousel_v1() {
        return view('module_property_carousel_v1');
    }

    public function module_property_carousel_v2() {
        return view('module_property_carousel_v2');
    }

    public function module_property_grids() {
        return view('module_property_grids');
    }

    public function module_taxonomy_grids() {
        return view('module_taxonomy_grids');
    }

    public function module_team() {
        return view('module_team');
    }

    public function module_testimonials() {
        return view('module_testimonials');
    }

    public function module_text_with_icons() {
        return view('module_text_with_icons');
    }

    public function my_account() {
        return view('my_account');
    }

    public function my_favourite_properties() {
        return view('my_favourite_properties');
    }

    public function my_invoices() {
        return view('my_invoices');
    }

    public function my_properties() {
        return view('my_properties');
    }

    public function my_saved_search() {
        return view('my_saved_search');
    }

    public function per_listing_step1() {
        return view('per_listing_step1');
    }

    public function per_listing_step2() {
        return view('per_listing_step2');
    }

    public function per_listing_step3() {
        return view('per_listing_step3');
    }

    public function privacy() {
        $privacy_policy = $this->AboutUs->where('key', 'Privacy&Policy')->get();
        $Social_account = $this->SocialAcounts->get();
        // $singleproperty =$this->PropertyModel->where('id', '=',$id)->first();
        //  $allproperty  =$this->PropertyModel->get();
        return view('privacy', compact('privacy_policy', 'Social_account', 'allproperty', 'singleproperty'));
    }

    public function properties_grid() {
        return view('properties_grid');
    }

    public function properties_grid_fullwidth() {
        return view('properties_grid_fullwidth');
    }

    public function properties_grid_style_2() {
        return view('properties_grid_style_2');
    }

    public function properties_grid_style_2_fullwidth() {
        return view('properties_grid_style_2_fullwidth');
    }

    public function properties_list() {
        return view('properties_list');
    }

    public function properties_list_compare() {
        return view('properties_list_compare');
    }

    public function properties_list_fullwidth() {
        return view('properties_list_fullwidth');
    }

    public function properties_list_save_search() {
        return view('properties_list_save_search');
    }

    public function properties_list_style_2() {
        return view('properties_list_style_2');
    }

    public function properties_list_style_2_fullwidth() {
        return view('properties_list_style_2_fullwidth');
    }

    public function property_detail() {
        return view('property_detail');
    }

    public function property_detail_full_width_gallery() {
        return view('property_detail_full_width_gallery');
    }

    public function property_detail_landing_page() {
        return view('property_detail_landing_page');
    }

    public function property_detail_multi_properties() {
        return view('property_detail_multi_properties');
    }

//    public function property_detail_tabs() {
//        return view('property_detail_tabs');
//    }

    public function property_detail_tabs_vertical() {
        return view('property_detail_tabs_vertical');
    }

    public function property_detail_v2() {
        return view('property_detail_v2');
    }

    public function property_detail_v3() {
        return view('property_detail_v3');
    }

    public function property_nav_on_scroll() {
        return view('property_nav_on_scroll');
    }

    public function property_print() {
        return view('property_print');
    }

    public function register() {
        return view('register');
    }

    public function search_bars() {
        return view('search_bars');
    }

    public function simple_page() {
        return view('simple_page');
    }

    public function splash_half() {
        return view('splash_half');
    }

    public function splash_image() {
        return view('splash_image');
    }

    public function splash_slider() {
        return view('splash_slider');
    }

    public function splash_video() {
        return view('splash_video');
    }

    public function terms_and_conditions() {
        $terms_condition = $this->AboutUs->where('key', 'Terms&condition')->get();
        $Social_account = $this->SocialAcounts->get();
        return view('terms_and_conditions', compact('terms_condition', 'Social_account'));
    }

    public function typography() {
        return view('typography');
    }

    public function widgets() {
        return view('widgets');
    }

}
