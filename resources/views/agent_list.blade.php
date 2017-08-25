@extends('layouts.app')
@section('content')
    <!--start advanced search section-->
    @include('layouts.advance_search')
    <!--end advanced search section-->

    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="page-title breadcrumb-top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-left">
                            <h2>All Agents</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 list-grid-area container-contentbar">
                    <div id="content-area">
                        <div class="agent-listing">

                            @foreach($Agents as $Agent)
                            <div class="profile-detail-block">
                                <div class="media">
                                    <div class="media-left">
                                        <figure>
                                            <img src="{{ asset('public/ProfileImage/'.'239x239_'.$Agent->image )  }}" alt="{{ $Agent->first_name }} {{ $Agent->last_name }} " width="239" height="239">
                                        </figure>
                                        <a href="//{{ $Agent ->DisplayName  }}.justdeal.pk/" class="btn btn-primary btn-block hidden-xs">View My Properties</a>
                                    </div>
                                    <div class="media-body">
                                        <div class="profile-description">
                                            <h3>{{ $Agent->first_name }} {{ $Agent->last_name }}</h3>
                                            <h4 class="position">{{ $Agent->company_name }}</h4>
                                            <p>@if(empty($Agent->description)){{ $Agent->description }}@else {{ $Agent->company_about }} @endif</p>
                                            <ul class="profile-contact">
                                                <li><span>OFFICE:</span> <a href="#">(765) 234 5678</a></li>
                                                <li><span>MOBILE:</span> <a href="#">{{ $Agent->cell_phone }}</a></li>
                                                <li><span>FAX:</span> <a href="#">(765) 234 5678</a></li>
                                                <li class="email"><span>Email:</span> <a href="mailto:{{ $Agent->email }}">{{ $Agent->email }}</a></li>
                                            </ul>
                                            <ul class="profile-social">
                                                <li><a href="#"><i class="fa fa-phone-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                            </ul>
                                            <a href="//{{ $Agent->DisplayName  }}.justdeal.pk/" class="btn btn-primary btn-block visible-xs">View My Properties</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <hr>

                        <!--start Pagination-->
                        <div class="pagination-main">
                            <ul class="pagination">
                                {{ $Agents->render() }}
                            </ul>
                        </div>
                        <!--start Pagination-->

                    </div>
                </div>
                <!--start left sidebar section-->
            @include('layouts.leftsidebar')
            <!--end left sidebar section-->
            </div>
        </div>
    </section>
    <!--end section page body-->
@stop