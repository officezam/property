<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyModel;
use App\User;
use Carbon\Carbon;
use Auth;

class DashboardController extends Controller
{
	/*
	 * Getting dashboard  Data
	 * */
	public function index(){

		//$currentDate = Carbon::now();
		//$lastMonth   = Carbon::today()->subMonths(0);
		//$nowDate = $currentDate->subDays($currentDate->dayOfWeek + 1);
		//->whereBetween( DB::raw('date(created_at)'), [$fromDate, $tillDate] )
		//$orders_this_month = Order::where( DB::raw('MONTH(created_at)', '=', date('n') ))->get();
		// ->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])
		//dd(Carbon::today()->subMonths(0));


		if( Auth::user()->type == 'admin')
		{
			$totalAgency                        = User::where('type' , '<>' ,'admin')->get()->count();
			$totalAgencyLast30days              = User::where('type' , '<>' ,'admin')->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
			$totalAgencyLastweek                = User::where('type' , '<>' ,'admin')->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->count();
			$totalAgent                         = User::where('user_id' , '<>' ,'')->count();
			$totalAgentLast30days               = User::where('user_id' , '<>' ,'')->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
			$totalAgentLastweek                 = User::where('user_id' , '<>' ,'')->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->count();

			$totalProperty                      = PropertyModel::count();
			$totalPropertyLast30days            = PropertyModel::whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
			$totalPropertyLastweek              = PropertyModel::whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->count();

			$totalSaleProperty                  = PropertyModel::where('purpose' , '=' ,'sale')->get()->count();
			$totalSalePropertyLast30days        = PropertyModel::where('purpose' , '=' ,'sale')->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
			$totalSalePropertyLastweek          = PropertyModel::where('purpose' , '=' ,'sale')->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->count();

			$totalRentProperty                  = PropertyModel::where('purpose' , '=' ,'rent')->count();
			$totalRentPropertyLast30days        = PropertyModel::where('purpose' , '=' ,'rent')->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
			$totalRentPropertyLastweek          = PropertyModel::where('purpose' , '=' ,'rent')->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->count();

			$totalprojectsProperty              = PropertyModel::where('type' , '=' ,'projects')->count();
			$totalprojectsPropertyLast30days    = PropertyModel::where('type' , '=' ,'projects')->whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()])->count();
			$totalprojectsPropertyLastweek      = PropertyModel::where('type' , '=' ,'projects')->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])->count();

		}else {

			$totalAgency           = User::where( 'type', '<>', 'admin' )->get()->count();
			$totalAgencyLast30days = User::where( 'type', '<>', 'admin' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 30 ),
				Carbon::now()
			] )->count();
			$totalAgencyLastweek   = User::where( 'type', '<>', 'admin' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 7 ),
				Carbon::now()
			] )->count();
			$totalAgent            = User::where( 'user_id', '=', Auth::id() )->count();
			$totalAgentLast30days  = User::where( 'user_id', '=', Auth::id() )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 30 ),
				Carbon::now()
			] )->count();
			$totalAgentLastweek    = User::where( 'user_id', '=', Auth::id() )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 7 ),
				Carbon::now()
			] )->count();

			$totalProperty           = PropertyModel::where( 'created_by', '=', Auth::id() )->count();
			$totalPropertyLast30days = PropertyModel::where( 'created_by', '=', Auth::id() )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 30 ),
				Carbon::now()
			] )->count();
			$totalPropertyLastweek   = PropertyModel::where( 'created_by', '=', Auth::id() )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 7 ),
				Carbon::now()
			] )->count();

			$totalSaleProperty           = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'purpose', '=', 'sale' )->get()->count();
			$totalSalePropertyLast30days = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'purpose', '=', 'sale' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 30 ),
				Carbon::now()
			] )->count();
			$totalSalePropertyLastweek   = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'purpose', '=', 'sale' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 7 ),
				Carbon::now()
			] )->count();

			$totalRentProperty           = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'purpose', '=', 'rent' )->count();
			$totalRentPropertyLast30days = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'purpose', '=', 'rent' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 30 ),
				Carbon::now()
			] )->count();
			$totalRentPropertyLastweek   = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'purpose', '=', 'rent' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 7 ),
				Carbon::now()
			] )->count();

			$totalprojectsProperty           = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'type', '=', 'projects' )->count();
			$totalprojectsPropertyLast30days = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'type', '=', 'projects' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 30 ),
				Carbon::now()
			] )->count();
			$totalprojectsPropertyLastweek   = PropertyModel::where( 'created_by', '=', Auth::id() )->where( 'type', '=', 'projects' )->whereBetween( 'created_at', [
				Carbon::now()->subDays( 7 ),
				Carbon::now()
			] )->count();
		}

		//dd($totalAgentMonth);

		return view('admin.dashboard' ,
			compact('totalAgency' ,
				'totalAgencyLast30days' ,
				'totalAgencyLastweek' ,
				'totalAgent' ,
				'totalAgentLast30days',
				'totalAgentLastweek',
				'totalProperty' ,
				'totalPropertyLast30days',
				'totalPropertyLastweek',
				'totalSaleProperty',
				'totalSalePropertyLast30days',
				'totalSalePropertyLastweek',
				'totalRentProperty',
				'totalRentPropertyLast30days',
				'totalRentPropertyLastweek',
				'totalprojectsProperty' ,
				'totalprojectsPropertyLast30days' ,
				'totalprojectsPropertyLastweek'));
//		/dd($totalAgent);
	}
}
