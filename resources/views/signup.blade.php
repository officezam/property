@extends('layouts.app')
@section('content')

    <div class="row"> </div>
    <div class="container">
        <div class="account-block">
            <div class="add-title-tab">
                <h3>Create Your Account</h3>

            </div>
            <form action="/SignupForm" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="add-tab-content">
                <div class="add-tab-row  push-padding-bottom">
                    <div class="row">
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
                        {{--<div class="col-sm-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="DisplayName">Display Name *</label>--}}
                                {{--<input class="form-control" name="DisplayName" value="{{old('DisplayName')}}" id="DisplayName"  placeholder="Enter your Display Name">--}}
                                {{--@if($errors->first('DisplayName'))--}}
                                    {{--<label class="error text-danger" for="FirstName">*{{ $errors->first('DisplayName') }}</label>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="BusinessType">Register As</label>
                                <select class="selectpicker" id="BusinessType" name="BusinessType"  selected="{{old('BusinessType')}}"  data-live-search="false" data-live-search-style="begins" title="Register As">
                                    <option @if(old('BusinessType') == 1) selected @endif value="1">Indivdual</option>
                                    <option @if(old('BusinessType') == 2) selected @endif value="2">Real Estate or Business</option>
                                </select>
                                @if($errors->first('BusinessType'))
                                    <label class="error text-danger" for="FirstName">*{{ $errors->first('BusinessType') }}</label>
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
                                <select class="selectpicker" selected="{{old('CityName')}}" name="CityName" id="CityName"  data-live-search="false" data-live-search-style="begins" title="City Name">
                                    @foreach($cities as $city)
                                    <option @if(old('CityName') == $city->name) selected @endif value="{{ $city->name  }}">{{ $city->name  }}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('CityName'))
                                    <label class="error text-danger" for="CityName">*{{ $errors->first('CityName') }}</label>
                                @endif
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
                        <div class="col-sm-6">
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


                        <div class="col-sm-9 col-xs-9 col-sm-offset-3 hide RealBusiness">
                            <h2>Please select a package or start with a FREE one</h2>
                        </div>

                        <div class="col-sm-12 hide RealBusiness">
                            <?php $pkgNumber = 1; ?>
                            @foreach($packages->slice(0,4) as $package)

                            <div class="col-md-3 col-sm-6">
                                <div id="page-block-{{ $pkgNumber }}" class="package-block">
                                    <h3 class="package-title">{{ $package->name }}</h3>

                                    <ul class="package-list">
                                        <?php $count = 0; ?>
                                        @foreach($Permission as $key=>$permission)
                                        <li>

                                            <br>
                                            {{--  {{ $permission->id }}--}}
                                            @if(isset($package->permissions[$count]) AND ($package->permissions[$count]->id = $permission->id ))
                                                <i class="fa fa-check " style="color: #00AA88;"></i>
                                            @else
                                                <i class=" fa fa-close" style="color: red;"></i>
                                            @endif
                                            {{ $permission->name  }}
                                        </li>
                                                <?php $count++;  ?>
                                        @endforeach

                                    </ul>
                                    <div class="package-link">
                                        <label class="btn btn-primary btn-lg" id="btn{{ $pkgNumber }}" >
                                            <input type="radio"  name="package" value="{{ $package->id }}" style=" visibility: hidden">
                                            <i class="fa fa-check fa-lg hide btn{{ $pkgNumber }}" ></i>Select Package
                                        </label>
                                    </div>
                                </div>
                                @if($errors->first('package'))
                                    <label class="error text-danger" for="package">*{{ $errors->first('package') }}</label>
                                @endif
                            </div>
                                    <?php $pkgNumber++; ?>
                            @endforeach

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

                </div>

            </div>
            </form>
        </div>
    </div>

@endsection

@section('pagejs')

    <script>
        $(document).ready(function(){


            $( "#btn1" ).click(function()
            {
                $('.btn1').removeClass('hide');
                $('#page-block-1').addClass('active')
                $('.btn2').addClass('hide');
                $('.btn3').addClass('hide');
                $('.btn4').addClass('hide');
                $('#page-block-2').removeClass('active')
                $('#page-block-3').removeClass('active')
                $('#page-block-4').removeClass('active')
            });

            $( "#btn2" ).click(function() {
                $('.btn2').removeClass('hide');
                $('#page-block-2').addClass('active')
                $('.btn1').addClass('hide');
                $('.btn3').addClass('hide');
                $('.btn4').addClass('hide');
                $('#page-block-1').removeClass('active')
                $('#page-block-3').removeClass('active')
                $('#page-block-4').removeClass('active')
            });
            $( "#btn3" ).click(function() {
                $('.btn3').removeClass('hide');
                $('#page-block-3').addClass('active')
                $('.btn1').addClass('hide');
                $('.btn2').addClass('hide');
                $('.btn4').addClass('hide');
                $('#page-block-2').removeClass('active')
                $('#page-block-1').removeClass('active')
                $('#page-block-4').removeClass('active')
            });
            $( "#btn4" ).click(function() {
                $('.btn4').removeClass('hide');
                $('#page-block-4').addClass('active')
                $('.btn1').addClass('hide');
                $('.btn2').addClass('hide');
                $('.btn3').addClass('hide');
                $('#page-block-2').removeClass('active')
                $('#page-block-3').removeClass('active')
                $('#page-block-1').removeClass('active')
            });

//BusinessType



            @if(old('BusinessType') == 2)
            $('.RealBusiness').removeClass('hide');
            @endif


            $('#BusinessType').on('change', function(){
                if($(this).val() == 2){
                    $('.RealBusiness').removeClass('hide');
                }else{
                    $('.RealBusiness').addClass('hide');
                }
            });
        });
    </script>
@endsection