@extends('admin/layouts/app')

@section('pagecss')
<!--page level css -->
<link href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/vendors/x-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/pages/user_profile.css')}}" rel="stylesheet" type="text/css"/>
<!--end of page level css-->
@endsection


@section('content')


<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>User Details</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('admin/dashboard')}}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Users</a>
            </li>
            <li class="active">User Detail</li>
        </ol>
    </section>

    <!--section ends-->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav  nav-tabs ">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">
                            <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                            User Profile</a>
                    </li>
<!--                    <li>
                        <a href="#tab2" data-toggle="tab">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Change Password</a>
                    </li>-->
<!--                    <li>
                        <a href="#" >
                            <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                            Advanced User Profile</a>
                    </li>-->

                </ul>
                <div  class="tab-content mar-top">
                    <div id="tab1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">

                                            User Profile
                                        </h3>

                                    </div>
                                    @foreach($user_data as $data)
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail img-file">
                                                    <img src="<?php echo url('ProfileImage') ?>/{!! $data->image !!}"></div>
                                                <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
<!--                                                <div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="..."></span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped" id="users">

                                                        <tr>
                                                            <td>User Name</td>
                                                            <td>
                                                                <a href="#" data-pk="1" class="editable" data-title="Edit User Name">{{$data->first_name}} &nbsp;{{$data->last_name}}</a>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>E-mail</td>
                                                            <td>
                                                                <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">{{$data->email}}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone Number</td>
                                                            <td>
                                                                <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">{{$data->cell_phone}}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Display Name</td>
                                                            <td>
                                                                <a href="#" data-pk="1" class="editable" data-title="Edit Address">{{$data->DisplayName}}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>
                                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status">{{$data->status}}</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Created At</td>
                                                            <td>
                                                                {{$data->created_at}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>City</td>
                                                            <td>
                                                                <a href="#" data-pk="1"  class="editable" data-title="Edit City">{{$data->city}}</a>
                                                            </td>
                                                        </tr>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12 pd-top">
                                <form method="POST" action="{{URL::action('UserController@Edit_Profile')}}" class="form-horizontal">
                                    <div class="form-body">
                                        {{ csrf_field() }}
                                        <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        <div class="form-group">
                                            <label for="inputpassword" class="col-md-3 control-label">
                                                Password
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                    </span>
                                                    <input type="password" placeholder="Password" name="password" class="form-control" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputnumber" class="col-md-3 control-label">
                                                Confirm Password
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                    </span>
                                                    <input required id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                            &nbsp;
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content --> </aside>
<!-- right-side -->


@endsection

@section('pagejs')
<!-- begining of page level js -->
<!-- Bootstrap WYSIHTML5 -->
<script  src="{{asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('vendors/x-editable/jquery.mockjax.js')}}" type="text/javascript"></script>
<script src="{{asset('vendors/x-editable/bootstrap-editable.js')}}" type="text/javascript"></script>
<script src="{{asset('js/pages/user_profile.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
@endsection
