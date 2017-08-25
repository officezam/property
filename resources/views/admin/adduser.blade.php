@extends('admin/layouts/app')

@section('pagecss')
    <!--page level css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/wizard/jquery-steps/css/wizard.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css')}}">
    <!--end of page level css-->

@endsection


@section('content')

    <?php
    //dd($data)
    ?>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <section class="content-header">
                <h1>Add New User</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li> <a href="{{url('admin/users')}}">Users </a></li>
                    <li class="active">Add New User</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                   <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                 Add New User
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <form action="/SignupForm" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                <div class="row">
                                    <input type="hidden"  name="BusinessType" value="1">
                                    <input type="hidden"  name="backrequest" value="1">
                                    <input type="hidden"  name="DisplayName" value="">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="FirstName"><strong>First Name*</strong></label>
                                            <input class="form-control" name="FirstName" value="{{old('FirstName')}}" id="FirstName"  placeholder="Enter your First Name">
                                            @if($errors->first('FirstName'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('FirstName') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name *</label>
                                            <input class="form-control"  name="lastname" value="{{ old('lastname') }}"id="lastname"  placeholder="Enter your Last Name">
                                            @if($errors->first('lastname'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('lastname') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12 hide " style="display: none">
                                        <div class="form-group">
                                            <label for="DomainName">Domain Name *</label>
                                            <input class="form-control" id="DomainName" name="DomainName" value="{{old('DomainName')}}" placeholder="Domain Name">
                                            @if($errors->first('DomainName'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('DomainName') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="CityName">City Name</label>
                                            <select class="form-control" title="Select an Agent City..."  selected="{{old('CityName')}}" name="CityName" id="CityName">
                                                @foreach($cities as $city)
                                                    <option @if(old('CityName') == $city->name) selected @endif value="{{ $city->name  }}">{{ $city->name  }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="CityName">Profile Image</label>
                                            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}"  placeholder="Choose Your Image">

                                            @if($errors->first('image'))
                                                <label class="error text-danger" for="image">*{{ $errors->first('image') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12 hide " style="display: none" >
                                        <div class="form-group">
                                            <label for="AgencyName">Agency Name *</label>
                                            <input class="form-control" id="AgencyName" name="AgencyName" value="{{old('AgencyName')}}"  placeholder="Enter yourAgency Name">
                                            @if($errors->first('AgencyName'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('AgencyName') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="emailAddress">Email Address</label>
                                            <input class="form-control" type="email" name="emailAddress"  value="{{ old('emailAddress') }}" id="emailAddress" placeholder="Enter your Email Address">
                                        </div>
                                        @if($errors->first('emailAddress'))
                                            <label class="error text-danger" for="FirstName">*{{ $errors->first('emailAddress') }}</label>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ConatctNumber">Conatact Number</label>
                                            <input class="form-control" type="text" id="ConatctNumber"  name="ConatctNumber" value="{{old('ConatctNumber')}}" placeholder="Enter your LandLine Number">
                                            @if($errors->first('ConatctNumber'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('ConatctNumber') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Short Description</label>
                                            <textarea class="form-control"  name="description"  id="description" placeholder="Enter your Short Description" >{{old('description')}}</textarea>
                                        </div>
                                        @if($errors->first('description'))
                                            <label class="error text-danger" for="description">*{{ $errors->first('description') }}</label>
                                        @endif
                                    </div>
                                    <div class="col-sm-6" style="display: none">
                                        <div class="form-group">
                                            <label for="ConatctNumber1">Cell Number 1*</label>
                                            <input class="form-control" type="text"  id="ConatctNumber1" name="ConatctNumber1" value="{{old('ConatctNumber1')}}" placeholder="Enter your Cell Number 1">
                                            @if($errors->first('ConatctNumber1'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('ConatctNumber1') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="display: none">
                                        <div class="form-group">
                                            <label for="ConatctNumber2">Cell Number 2</label>
                                            <input class="form-control" type="number"  id="ConatctNumber2" name="ConatctNumber2" value="{{old('ConatctNumber2')}}" placeholder="Enter your Cell Number 2">
                                            @if($errors->first('ConatctNumber2'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('ConatctNumber2') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password"  name="password" id="password" placeholder="Enter your Password" value="">
                                            @if($errors->first('password'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('password') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ConfrimPassword">Confirm Your Password</label>
                                            <input class="form-control"  type='password'  name="ConfrimPassword" id="ConfrimPassword" placeholder="Cofirm Your Password" value="">
                                            @if($errors->first('ConfrimPassword'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('ConfrimPassword') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name='iagree' id="iagree" value="1">
                                                        I Agree
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label>By clicking <b>Register</b>, you agree to the Terms and Conditions set out by this site, including our Cookie Use.</label>
                                                    @if($errors->first('iagree'))
                                                        <label class="error text-danger" for="iagree">*{{ $errors->first('iagree') }}</label>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg submit">Register</button>
                                    </div>
                                </div>
                                </form>

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