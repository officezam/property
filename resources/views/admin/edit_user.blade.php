@extends('admin/layouts/app')

@section('pagecss')
    <!--page level css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/wizard/jquery-steps/css/wizard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css')}}">
    <!--end of page level css-->

@endsection


@section('content')

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <section class="content-header">
                <h1>Update Your Information</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>Users</li>
                    <li class="active">Update Profile</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                   <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                               
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">
                    
                                <div class="col-md-12">
                                  @foreach($user_data as $data)
                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form class="form-wizard" method="POST" action="{{URL::action('UserController@update_profile')}}">
                                         {{ csrf_field() }}
                                        <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        <h1>User Profile</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="DisplayName">Display Name *</label>
                                                <input value="{{$data->DisplayName}}"id="DisplayName" name="DisplayName" type="text" placeholder="Enter your Display name" class="form-control required">
                                            </div>
                                          <div class="form-group">
                                                <label for="email">Email *</label>
                                                <input value="{{$data->email}}" id="email" name="email" placeholder="Enter your Email" type="text" class="form-control required email">
                                            </div>
                                      
                                            <div class="form-group">
                                                <label for="first_name">First Name *</label>
                                                <input value="{{$data->first_name}}" id="first_name" name="first_name" placeholder="Enter your First name"type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="last_name">Last Name *</label>
                                                <input value="{{$data->last_name}}" id="last_name" name="last_name" type="text" placeholder=" Enter your Last name" class="form-control required">
                                            </div>
                                           
                                       
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" placeholder="Phone number" name="cell_phone" value="{{$data->cell_phone}}"class="form-control">
                                        </div>
                                             <div class="form-actions">
                                        <div class="col-md-9">
                                            <button type="submit" class="btn btn-primary">Update profile </button>

                                        </div>
                                    </div>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->
                                    @endforeach
                                </div>
                                </div>
                                <!--main content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--row end-->
            </section>
        </aside>
@endsection

@section('pagejs')
    <!-- begining of page level js -->
    <script type="text/javascript" src="{{asset('vendors/wizard/jquery-steps/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('vendors/wizard/jquery-steps/js/wizard.js')}}"></script>
    <script src="{{asset('vendors/wizard/jquery-steps/js/jquery.steps.js')}}"></script>
    <script src="{{asset('vendors/wizard/jquery-steps/js/form_wizard.js')}}"></script>
    <!-- end of page level js -->
@endsection