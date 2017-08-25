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
            <h1>User Profile</h1>
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
                <li class="active">User Profile</li>
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
                                Your Profile</a>
                        </li>
                        <li>
                            <a href="#tab2" data-toggle="tab">
                                <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Change Password</a>
                        </li>
                        <li>
                            <a href="#tab3" data-toggle="tab">
                                {{--<a href="{{ URL::action('UserController@edit_user', ['id' =>Auth::user()]) }}" >--}}
                                <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Update Profile</a>
                        </li>
                        @if( Auth::user()->BusinessType == '2')
                            <li>
                                <a href="#tab4" data-toggle="tab">
                                    {{--<a href="{{ URL::action('UserController@edit_user', ['id' =>Auth::user()]) }}" >--}}
                                    <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Update Company</a>
                            </li>
                            <li>
                                <a href="#tab6" data-toggle="tab">
                                    <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    CEO Detail</a>
                            </li>
                        @else
                            <li>
                                <a href="#tab5" data-toggle="tab">
                                    {{--<a href="{{ URL::action('UserController@edit_user', ['id' =>Auth::user()]) }}" >--}}
                                    <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                    Profile Detail</a>
                            </li>
                        @endif



                    </ul>
                    <div  class="tab-content mar-top">

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                <p class="errors">{!! Session::get('success') !!}</p>
                            </div>
                        @endif
                        @if(Session::has('success12'))
                            <div class="alert alert-success">
                                <p class="errors">{!! Session::get('success12') !!}</p>
                            </div>
                        @endif


                        <div id="tab1" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">

                                                Your Profile
                                            </h3>

                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail img-file">
                                                        <img src="<?php echo url('public/ProfileImage') ?>/330x330_{!! $data['image'] !!}"></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped" id="users">


                                                            <tr>
                                                                <td>Full Name</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit User Name">{!! $data['first_name'] !!} &nbsp;{!! $data['last_name'] !!}</a>

                                                                </td>
                                                            </tr>
                                                            @if(Auth::user()->DisplayName <> '')
                                                                <tr>
                                                                    <td>User Name</td>
                                                                    <td >
                                                                        <a href="//{!! $data['DisplayName'] !!}.justdeal.pk" target="_blank" data-pk="1" class="editable" data-title="Edit" style="color: #0d70b7">{!! $data['DisplayName'] !!}</a>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            @if(Auth::user()->BusinessType == 2)
                                                                <tr>
                                                                    <td>Your Website</td>
                                                                    <td >
                                                                        <a href="//{!! $data['DisplayName'] !!}.justdeal.pk" target="_blank" data-pk="1" class="editable" data-title="Edit User Name" style="color: #0d70b7">http://{!! $data['DisplayName'] !!}.justdeal.pk</a>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            <tr>
                                                                <td>E-mail</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">{!! $data['email'] !!}</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">{!! $data['cell_phone'] !!}</a>
                                                                </td>
                                                            </tr>
                                                            @if(Auth::user()->DisplayName == 2)
                                                                <tr>
                                                                    <td>Display Name</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Edit Address">{!! $data['DisplayName'] !!}</a>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            <tr>
                                                                <td>Status</td>
                                                                <td>
                                                                    <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status">
                                                                        @if($data['status'] == 1)
                                                                            <button class="btn btn-info">
                                                                                <i class="livicon" data-name="user-flag" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-436" > </i>Active
                                                                            </button>
                                                                        @else
                                                                            <button class="btn btn-danger">
                                                                                <i class="livicon" data-name="user-ban" data-size="50" data-c="#fff" data-hc="#fff" data-loop="true" id="livicon-435" >  </i>Blocked
                                                                            </button>
                                                                        @endif
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Created At</td>
                                                                <td>
                                                                    {!! $data['created_at'] !!}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>City</td>
                                                                <td>
                                                                    <a href="#" data-pk="1"  class="editable" data-title="Edit City">{!! $data['city'] !!}</a>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
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
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="tab3" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top">

                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form class="form-wizard" method="POST" action="{{URL::action('UserController@update_profile')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <section>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="first_name">First Name *</label>
                                                    <input value="{{Auth::user()->first_name}}" id="first_name" name="first_name" placeholder="Enter your First name"type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name *</label>
                                                    <input value="{{Auth::user()->last_name}}" id="last_name" name="last_name" type="text" placeholder=" Enter your Last name" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input value="{{ Auth::user()->email }}" id="email" name="email" placeholder="Enter your Email" type="email" class="form-control required email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" placeholder="Phone number" name="cell_phone" value="{{Auth::user()->cell_phone}}"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Chage Profile Image</label>
                                                    <input type="file" placeholder="Phone number" name="profile_image" value=""class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>CEO Name</label>
                                                    <input type="text" placeholder="CEO Name" name="ceo_name" value="{{Auth::user()->ceo_name}}"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Change CEO Image</label>
                                                    <input type="file" placeholder="CEO Image" name="ceo_image" value=""class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>CEO Description</label>
                                                    <textarea rows="5" class="form-control" placeholder="CEO Description" name="ceo_description">{{Auth::user()->ceo_description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="col-md-9">
                                                    <button type="submit" class="btn btn-primary">Update profile </button>

                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->


                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top" >

                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form class="form-wizard" method="POST" action="{{URL::action('UserController@update_company')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <section>
                                            <input type="hidden" name="oldbackimage" value="{{Auth::user()->background_image}}">
                                            <input type="hidden" name="oldcompanylogo" value="{{Auth::user()->company_logo}}">

                                            <div class="col-md-12"  style="height: 50%; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; background-image:url('<?php echo url('public/CompanyImage') ?>/{{Auth::user()->background_image}}');background-repeat: no-repeat; ">
                                                <div class="form-group">
                                                    <img src="<?php echo url('public/CompanyImage') ?>/{{Auth::user()->company_logo}}" >
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="company_name">Agency Name *</label>
                                                    <input value="{{Auth::user()->company_name}}" id="company_name" name="company_name" placeholder="Enter your Company name"type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Agency Address*</label>
                                                    <input value="{{Auth::user()->address}}" id="address" name="address" type="text" placeholder=" Enter your address" class="form-control required">

                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Change Background Image</label>
                                                    <input value="{{Auth::user()->background_image}}" type="file" placeholder="Company Background Image" name="background_image" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Change Agency Logo</label>
                                                    <input value="{{Auth::user()->company_logo}}" type="file" placeholder="Company logo" name="company_logo" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agency Phone Number</label>
                                                    <input type="text" value="{{Auth::user()->company_phone}}" placeholder="Enter Company number" name="company_phone" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agency Fax Number</label>
                                                    <input value="{{Auth::user()->fax_phone}}" type="text" placeholder="Enter Company fax_phone" name="fax_phone" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agency LinkedIn Link</label>
                                                    <input value="{{Auth::user()->linkedin}}" type="text" placeholder="Enter Company linkedin" name="linkedin" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Google+ Link*</label>
                                                    <input value="{{Auth::user()->googleplus}}" id="googleplus" name="googleplus" type="text" placeholder=" Enter your Link" class="form-control required">
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agency FaceBook Link</label>
                                                    <input value="{{Auth::user()->facebook}}" type="text" placeholder="Enter facebook" name="facebook" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agency Twitter link</label>
                                                    <input value="{{Auth::user()->twitter}}" type="text" placeholder="Enter Company twitter" name="twitter"  class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agency Description</label>
                                                    <textarea placeholder="Company logo" name="description" value=""class="form-control">{{Auth::user()->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email2">Company Email *</label>
                                                    <input value="{{Auth::user()->email2}}" id="email2" name="email2" placeholder="Enter your Email" type="email" class="form-control required email">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Agency About</label>
                                                    <textarea placeholder="Company About" style="height: 150px;" name="company_about" value=""class="form-control">{{Auth::user()->company_about}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Save Changes </button>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top" >

                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form class="form-wizard" method="POST" action="{{URL::action('UserController@update_company')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <section>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Office Phone Number</label>
                                                    <input type="text" value="{{Auth::user()->company_phone}}" placeholder="Enter Company number" name="company_phone" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Office Fax Number</label>
                                                    <input value="{{Auth::user()->fax_phone}}" type="text" placeholder="Enter Company fax_phone" name="fax_phone" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> LinkedIn Link</label>
                                                    <input value="{{Auth::user()->linkedin}}" type="text" placeholder="Enter Company linkedin" name="linkedin" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Google+ Link*</label>
                                                    <input value="{{Auth::user()->googleplus}}" id="googleplus" name="googleplus" type="text" placeholder=" Enter your Link" class="form-control required">
                                                </div>

                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> FaceBook Link</label>
                                                    <input value="{{Auth::user()->facebook}}" type="text" placeholder="Enter facebook" name="facebook" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Twitter link</label>
                                                    <input value="{{Auth::user()->twitter}}" type="text" placeholder="Enter Company twitter" name="twitter"  class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Description</label>
                                                    <textarea placeholder="Company logo" name="description" value=""class="form-control">{{Auth::user()->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email2">Other Email *</label>
                                                    <input value="{{Auth::user()->email2}}" id="email2" name="email2" placeholder="Enter your Email" type="email" class="form-control required email">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label> About</label>
                                                    <textarea placeholder="Company About" style="height: 150px;" name="company_about" value=""class="form-control">{{Auth::user()->company_about}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Save Changes </button>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->
                                </div>
                            </div>
                        </div>
                        <div id="tab6" class="tab-pane fade ">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">

                                                  CEO Image
                                                </h3>

                                            </div>
                                            <div class="panel-body">
                                                <div class="col-md-4">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail img-file">
                                                            <img src="<?php echo url('public/ProfileImage') ?>/{{Auth::user()->ceo_image}}"></div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail img-max"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped" id="users">


                                                                <tr>
                                                                    <td>CEO Name</td>
                                                                    <td>
                                                                        <a href="#" data-pk="1" class="editable" data-title="Edit User Name">{{Auth::user()->ceo_name}}</a>

                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>CEO Description</td>
                                                                    <td>
                                                                        {{Auth::user()->ceo_description}}
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content -->
    </aside>
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