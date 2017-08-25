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
            <h1>Update Property Service</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/services') }}">Property Services</a>
                </li>

            </ol>
        </section>
        <!--section ends-->
        <section class="content">
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

                        <div class="panel-body">
                            <form action="{{ url('admin/updateservice', $service->id) }}" method="post"  class="form-horizontal">

                                {!! csrf_field() !!}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Service Name </label>
                                        <div class="col-md-8 @if($errors->first('name')) has-error @endif">
                                            <label class="control-label" for="inputError"><?php echo $errors->first('name'); ?></label>
                                            <input type="text" name="name" value="{{ $service->name }}" placeholder="Enter Service Name" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Select Type </label>
                                        <div class="col-md-8 @if($errors->first('name')) has-error @endif">
                                            <select name="type" class="form-control" required>
                                                <option value="house" @if($service->type == 'house') selected @endif>Residential / Homes</option>
                                                <option value="land" @if($service->type == 'land') selected @endif>Commercial / Land</option>
                                                <option value="projects" @if($service->type == 'projects') selected @endif>Projects</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button class="btn-success btn">Update</button>
                                        <button type="reset" class="btn-info btn">Reset</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- content -->
    </aside>
    <!-- right-side -->

@endsection