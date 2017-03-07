<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
     public function index(){
    	return view('frontend.index');
    }
     public function about_us(){
    	return view('frontend.about_us');
    }
     public function add_new_property(){
    	return view('frontend.add_new_property');
    }
      public function agency_list(){
    	return view('frontend.agency_list');
    }
     public function agent_list(){
    	return view('frontend.agent_list');
    }
    public function agent_detail(){
    	return view('frontend.agent_detail');
    }
       public function blog(){
    	return view('frontend.blog');
    }
      public function blog_detail(){
    	return view('frontend.blog_detail');
    }
      public function blog_masonry(){
    	return view('frontend.blog_masonry');
    }
      public function company_profile(){
    	return view('frontend.company_profile');
    }
    public function compare_properties(){
    	return view('frontend.compare_properties');
    }
    public function contact_us(){
    	return view('frontend.contact_us');
    }
     public function faqs(){
      return view('frontend.faqs');
    }
     public function forget_password(){
      return view('frontend.forget_password');
    }
     public function home_map(){
      return view('frontend.home_map');
    }
     public function home_map_fullscreen(){
      return view('frontend.home_map_fullscreen');
    }
    public function home_parallax(){
      return view('frontend.home_parallax');
    }
    public function home_parallax_autofix(){
      return view('frontend.home_parallax_autofix');
    }
    public function home_parallax_fullscreen(){
      return view('frontend.home_parallax_fullscreen');
    }
    public function home_property_slider(){
      return view('frontend.home_property_slider');
    }
    public function home_splash(){
      return view('frontend.home_splash');
    }
    public function home_video(){
      return view('frontend.home_video');
    }
    public function home_video_fullscreen(){
      return view('frontend.home_video_fullscreen');
    }
    public function landing_page(){
      return view('frontend.landing_page');
    }
    public function listing_done(){
      return view('frontend.listing_done');
    }
    public function listing_payment(){
      return view('frontend.listing_payment');
    }
    public function listing_select_package(){
      return view('frontend.listing_select_package');
    }
    public function login(){
      return view('frontend.login');
    }
    public function map_full_search(){
      return view('frontend.map_full_search');
    }
    public function map_listing(){
      return view('frontend.map_listing');
    }
    public function module_advanced_search(){
      return view('frontend.module_advanced_search');
    }
    public function module_agency(){
      return view('frontend.module_agency');
    }
    public function module_agents(){
      return view('frontend.module_agents');
    }
    public function module_blog_post_carousels(){
      return view('frontend.module_blog_post_carousels');
    }
    public function module_blog_post_grids(){
      return view('frontend.module_blog_post_grids');
    }
    public function module_membership_packages(){
      return view('frontend.module_membership_packages');
    }
    public function module_partners(){
      return view('frontend.module_partners');
    }
    public function module_property_by_id(){
      return view('frontend.module_property_by_id');
    }
    public function module_property_cards(){
      return view('frontend.module_property_cards');
    }
    public function module_property_carousel_v1(){
      return view('frontend.module_property_carousel_v1');
    }
    public function module_property_carousel_v2(){
      return view('frontend.module_property_carousel_v2');
    }
    public function module_property_grids(){
      return view('frontend.module_property_grids');
    }
    public function module_taxonomy_grids(){
      return view('frontend.module_taxonomy_grids');
    }
    public function module_team(){
      return view('frontend.module_team');
    }
    public function module_testimonials(){
      return view('frontend.module_testimonials');
    }
    public function module_text_with_icons(){
      return view('frontend.module_text_with_icons');
    }
     public function my_account(){
      return view('frontend.my_account');
    }
     public function my_favourite_properties(){
      return view('frontend.my_favourite_properties');
    }
     public function my_invoices(){
      return view('frontend.my_invoices');
    }
     public function my_properties(){
      return view('frontend.my_properties');
    }
     public function my_saved_search(){
      return view('frontend.my_saved_search');
    }
     public function per_listing_step1(){
      return view('frontend.per_listing_step1');
    }
     public function per_listing_step2(){
      return view('frontend.per_listing_step2');
    }
     public function per_listing_step3(){
      return view('frontend.per_listing_step3');
    }
       public function privacy(){
      return view('frontend.privacy');
    }

    public function properties_grid(){
      return view('frontend.properties_grid');
    }
    public function properties_grid_fullwidth(){
      return view('frontend.properties_grid_fullwidth');
    }
    public function properties_grid_style_2(){
      return view('frontend.properties_grid_style_2');
    }
    public function properties_grid_style_2_fullwidth(){
      return view('frontend.properties_grid_style_2_fullwidth');
    }
    public function properties_list(){
      return view('frontend.properties_list');
    }
    public function properties_list_compare(){
      return view('frontend.properties_list_compare');
    }
    public function properties_list_fullwidth(){
      return view('frontend.properties_list_fullwidth');
    }
    public function properties_list_save_search(){
      return view('frontend.properties_list_save_search');
    }
    public function properties_list_style_2(){
      return view('frontend.properties_list_style_2');
    }
     public function properties_list_style_2_fullwidth(){
      return view('frontend.properties_list_style_2_fullwidth');
    }
    public function property_detail(){
      return view('frontend.property_detail');
    }
    public function property_detail_full_width_gallery(){
      return view('frontend.property_detail_full_width_gallery');
    }
     public function property_detail_landing_page(){
      return view('frontend.property_detail_landing_page');
    }
    public function property_detail_multi_properties(){
      return view('frontend.property_detail_multi_properties');
    }
    public function property_detail_tabs(){
      return view('frontend.property_detail_tabs');
    }
     public function property_detail_tabs_vertical(){
      return view('frontend.property_detail_tabs_vertical');
    }
    public function property_detail_v2(){
      return view('frontend.property_detail_v2');
    }
    public function property_detail_v3(){
      return view('frontend.property_detail_v3');
    }
    public function property_nav_on_scroll(){
      return view('frontend.property_nav_on_scroll');
    }
    public function property_print(){
      return view('frontend.property_print');
    }
    public function register(){
      return view('frontend.register');
    }
    public function search_bars(){
      return view('frontend.search_bars');
    }
    public function simple_page(){
      return view('frontend.simple_page');
    }
      public function splash_half(){
      return view('frontend.splash_half');
    }
    public function splash_image(){
      return view('frontend.splash_image');
    }
    public function splash_slider(){
      return view('frontend.splash_slider');
    }
    public function splash_video(){
      return view('frontend.splash_video');
    }
     public function terms_and_conditions(){
      return view('frontend.terms_and_conditions');
    }
    public function typography(){
      return view('frontend.typography');
    }
     public function widgets(){
      return view('frontend.widgets');
    }  
}
