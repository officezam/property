
<button class="btn scrolltop-btn back-top"><i class="fa fa-angle-up"></i></button>
<div class="modal fade" id="pop-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active">Login</li>
                    <a href="{{url("Signup")}}"><li>Register</li></a>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>

            </div>
            <div class="modal-body login-block">
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        @if(Session::has('failure'))
                            <div class="message">
                                <p class="error text-danger"><i class="fa fa-close"></i>
                                {{Session::get('failure')}}
                                </p>
                            </div>
                        @endif

                        <form action="/admin/login" autocomplete="on" method="post" >
                            <div class="form-group field-group">
                                <div class="input-user input-icon">
                                    <input type="email" name="email" placeholder="Email" value="">
                                </div>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="input-pass input-icon">
                                    <input type="password" name="password" placeholder="Password" value="" >
                                </div>
                            </div>
                            <div class="forget-block clearfix">
                                <div class="form-group pull-left">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" value="remember" >
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group pull-right">
                                    <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#pop-reset-pass">I forgot username and password</a>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="pop-reset-pass" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active">Reset Password</li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <p>Please enter your username or email address. You will receive a link to create a new password via email.</p>
                <form>
                    <div class="form-group">
                        <div class="input-user input-icon">
                            <input placeholder="Enter your username or email" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block">Get new password</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pop-rating-message" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="login-tabs">
                    <li class="active">Rating Property</li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                <p class="error text-danger"><i class="fa fa-close"></i> You are not Logedin</p>


                <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#pop-login" >
                    <button class="btn btn-primary btn-block">Login</button>
                </a>
                <br>
                <a href="{{url("Signup")}}"><button class="btn btn-info btn-block">Register Yourself</button></a>

            </div>
        </div>
    </div>
</div>

<!--start header section header v1-->
<header id="header-section" class="header-section-4 header-main  nav-left hidden-sm hidden-xs" data-sticky="1">
    <div class="container">
        <div class="header-left">


            <div class="logo">
                <?php  $server = explode('.', Request::server('HTTP_HOST')); ?>
                @if($server[0] == 'justdeal')
                    <a href="{{ Config::get('app.url') }}">
                        @if(empty($Agent->company_logo))
                            <img src="{{ asset('public/ProfileImage/90x90_'.$Agent->image )  }}" alt="{{ $Agent->first_name.' '.$Agent->last_name }}" style="height: 90px;" >
                        @else
                            <img src="{{ asset('public/CompanyImage/'.$Agent->company_logo )  }}" alt="{{ $Agent->first_name.' '.$Agent->last_name }}" style="height: 90px;" >
                        @endif
                    </a>
                @else
                    <a href="{{ Config::get('app.url') }}">
                        <img src="{{asset('assets/images/houzez-logo-color.png')}}" alt="logo">
                    </a>
                @endif

            </div>

                @if($server[0] != 'justdeal')
            <nav class="navi main-nav">
                <ul>
                    <li><a href="{{ Config::get('app.url') }}">Home</a></li>
                    <li class="has-child">
                        <a href="http://justdeal.pk/sale-properties">Sale</a>
                        <ul class="sub-menu">
                            <li><a href="http://justdeal.pk/sale-properties/Houses-Villas">Houses / Villas</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Plots-Files">Res. Plots /Files</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Flats-Apartments">Flats / Apartments</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Form-Houses">Form Houses</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Upper-Portion">Upper Portion</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Lower-Portion">Lower Portion</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Commercial-Plots-files">Commercial Plots /files</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Agricultural-Land">Agricultural Land</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Industrial-Land">Industrial Land</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Offices">Offices</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Shops-Showrooms">Shops / Showrooms</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Warehouses-Godown">Warehouses / Godown</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Buildings-Plaza">Buildings / Plaza</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Factories-Workshops">Factories/Workshops</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Guest-House-Hostels">Guest House / Hostels</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Schools-Colleges">Schools / Colleges</a></li>
                            <li><a href="http://justdeal.pk/sale-properties/Hotel-Restaurant">Hotel / Restaurant</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://justdeal.pk/rent-properties">Rent</a>
                        <ul class="sub-menu">
                            <li><a href="http://justdeal.pk/rent-properties/Houses-Villas">Houses / Villas</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Plots-Files">Res. Plots /Files</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Flats-Apartments">Flats / Apartments</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Form-Houses">Form Houses</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Upper-Portion">Upper Portion</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Lower-Portion">Lower Portion</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Commercial-Plots-files">Commercial Plots /files</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Agricultural-Land">Agricultural Land</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Industrial-Land">Industrial Land</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Offices">Offices</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Shops-Showrooms">Shops / Showrooms</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Warehouses-Godown">Warehouses / Godown</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Buildings-Plaza">Buildings / Plaza</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Factories-Workshops">Factories/Workshops</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Guest-House-Hostels">Guest House / Hostels</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Schools-Colleges">Schools / Colleges</a></li>
                            <li><a href="http://justdeal.pk/rent-properties/Hotel-Restaurant">Hotel / Restaurant</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://justdeal.pk/projects-properties">projects</a>
                        <ul class="sub-menu">
                            <li><a href="http://justdeal.pk/projects-properties/Residental-Towns-Scheeme">Residental Towns / Scheeme</a></li>
                            <li><a href="http://justdeal.pk/projects-properties/Land-Sub-Divisions">Land Sub Divisions</a></li>
                            <li><a href="http://justdeal.pk/projects-properties/Commercial-Plaza-Area">Commercial Plaza / Area</a></li>
                            <li><a href="http://justdeal.pk/projects-properties/Industrial-Estate-Zone">Industrial Estate / Zone</a></li>
                        </ul>
                    </li>

                    <li class="houzez-megamenu"><a href="http://justdeal.pk/all-properties">All Properties</a></li>
                    <li class="houzez-megamenu"><a href="http://justdeal.pk/agent_list">Agency</a></li>
                    {{--<li class="houzez-megamenu"><a href="http://justdeal.pk/blog">Blog</a></li>--}}

                </ul>
            </nav>
                    @else
                    <nav class="navi main-nav">
                        <ul>
                            <li><a href="" style="font-size: 30px; font-weight:bold; color: #00A1CB;">{{ $Agent->company_name }}</a></li>
                        </ul>
                    </nav>
                    @endif
        </div>

        <div class="header-right">
            <div class="user">
               <?php if( !Auth::user()){ ?>
                   <a href="{{ url('add_property') }}" class="btn btn-default">Add Property</a>
                <a href="#" data-toggle="modal" data-target="#pop-login" class="btn btn-default">Add Property</a>
                <?php } ?>
            <?php if(!isset($_SESSION)){session_start();}
                if( Auth::user()){ ?>
                <a href="{{ url('add_property') }}" class="btn btn-default">Add Property</a>
                <a href="{{url("/logout")}}">SignOut</a>
                <a href="{{ url('/admin/') }}" class="">Profile</a>
                <?php }else{ ?>

                <a href="#" data-toggle="modal" data-target="#pop-login" >Sign In </a>
                    <a href="http://justdeal.pk/Signup">Register</a>
                <?php } ?>

            </div>
        </div>
    </div>
@if(\Request::path() != 'add_property')
    <!--start advanced search section-->
    @include('layouts.advance_search-sticky')
    <!--end advanced search section-->
    @endif

</header>
<div class="header-mobile visible-sm visible-xs">
    <div class="container">
        <!--start mobile nav-->
        <div class="mobile-nav">
            <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
            <div class="nav-dropdown main-nav-dropdown"></div>
        </div>
        <!--end mobile nav-->
        <div class="header-logo">
            <a href="{{ url('index') }}"><img src="{{asset('assets/images/logo-houzez-white.png')}}" alt="logo"></a>
        </div>
        <div class="header-user">
            <ul class="account-action">
                <li>
                    <span class="user-icon"><i class="fa fa-user"></i></span>
                    <div class="account-dropdown">
                        <ul>
                            <li> <a href=""> <i class="fa fa-plus-circle"></i>Add Property</a></li>
                            <li> <a href="#" data-toggle="modal" data-target="#pop-login"> <i class="fa fa-user"></i> Log in / Register </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--end header section header v1-->

