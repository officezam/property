@extends('layouts/app')


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
                        <ol class="breadcrumb">
                            <li><a href="{{url('index')}}"><i class="fa fa-home"></i></a></li>
                            <li class="active">Privacy & Policy</li>
                        </ol>
                        <div class="page-title-left">
                            <h2>Privacy & Policy</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                    <div class="page-main">
                        <div class="article-detail">
                            <div class='box-body pad'>
                            @foreach($privacy_policy as $policy)
                            
                            {!!$policy->description !!}
          

                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--start sidebar section-->
            @include('layouts.leftsidebar')
            <!--end sidebar section-->
            </div>
        </div>
    </section>
    <!--end section page body-->
@endsection