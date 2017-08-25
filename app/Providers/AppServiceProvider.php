<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\SocialAcounts;
use App\CityModel;
use App\FeatureModel;
use App\Adds;
use App\PropertyModel;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


	    try {
		    $this->User          = new User();
		    $this->SocialAcounts = new SocialAcounts();
		    $this->CityModel     = new CityModel();
		    $Social_account       = $this->SocialAcounts->get();
		    $cities               = $this->CityModel->get();
		    $this->FeatureModel   = new FeatureModel();
            $this->Adds          = new Adds();
            $this->PropertyModel = new PropertyModel();

            $agents  = $this->User->where('BusinessType', '=', '2')->where('isActive', '=', '1')->get();
		    $featuremodelData              = $this->FeatureModel->get();
		    $featuremodelData              = $this->FeatureModel->get();
            $Adds           = $this->Adds->where('status', '=', '1')->where('type', '=', 'Single')->where('expiry_date', '>', date('Y-m-d H:i:s'))->get();
            $allproperty  =$this->PropertyModel->get();

            view()->share('AllProperty', $allproperty);
            view()->share('Adds', $Adds);
            view()->share('cities', $cities);
		    view()->share( 'Agents', $agents);
		    view()->share('Social_account ',$Social_account);
		    view()->share('featuremodelData',$featuremodelData);
	    }catch (\Exception $e){
		    view()->share('cities', '');
		    view()->share('Agents', '');
		    view()->share('Social_account', '');
		    view()->share('featuremodelData ', '');
	    }

        Schema::defaultStringLength(191);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
