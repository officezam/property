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
            <h1>Add Package Form</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/add_package')}}">Add Package</a>
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
                            <form action="{{url('admin/add_package')}}" method="post"  class="form-horizontal">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Package Name</label>
                                    <div class="col-md-8 @if($errors->first('packagename')) has-error @endif">
                                        <label class="control-label" for="inputError"><?php echo $errors->first('packagename'); ?></label>
                                        <input type="text" name="packagename" value="" placeholder="Enter Package Name" class="form-control">
                                    </div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group ">
                                    <label class="col-md-2 control-label" for="message">Your Description</label>
                                    <div class="col-md-8 @if($errors->first('description')) has-error @endif">
                                        <label class="control-label" for="inputError"><?php echo $errors->first('description'); ?></label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Please enter your description here..." rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button class="btn-success btn">Submit</button>
                                            <button type="reset" class="btn-info btn">Reset</button>
                                        </div>
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