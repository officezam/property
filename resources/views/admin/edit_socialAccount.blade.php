@extends('admin/layouts/app')
@section('content')
<!--page level css -->
<link href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/pages/calendar_custom.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/only_dashboard.css')}}" />
<!--end of page level css-->
<aside class="right-side">


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>Social Accounts</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('admin/dashboard')}}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Social Account</a>
            </li>

        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-sm-6">
            @if(Session::has('Message'))
            <div class="alert alert-success">
                <p class="errors">{!! Session::get('Message') !!}</p>
            </div>
            @endif
            </div></div>
              <div class="row">
            <div class="col-md-12">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                            Please Fill Below Form
                        </h3>
                        <span class="pull-right">
                            <i class="fa fa-fw fa-chevron-up clickable"></i>
                            <i class="fa fa-fw fa-times removepanel clickable"></i>
                        </span>
                    </div>
                    @foreach($data as $record)
                    <div class="panel-body">
                        <form action="{{ URL::action('SocialAccountController@update',['id' => $record]) }}" method="post"  class="form-horizontal">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-2 control-label"> Facebook </label>
                                <div class="col-md-8 ">

                                    <input type="text" name="facebook" value="{{$record->facebook}}" placeholder="Enter facebook" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"> Twitter </label>
                                <div class="col-md-8">

                                    <input type="text" name="twitter" value="{{$record->twitter}}" placeholder="Enter twitter" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"> Google Pluse </label>
                                <div class="col-md-8">

                                    <input type="text" name="google_pluse" value="{{$record->google_pluse}}" placeholder="Enter google_pluse" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"> LinkedIn </label>
                                <div class="col-md-8">

                                    <input type="text" name="linked_In" value="{{$record->linked_In}}" placeholder="Enter linked_In" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button class="btn-success btn">Update</button>

                                </div>
                            </div>

                        </form>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- content -->
</aside>
<!-- right-side -->

@endsection