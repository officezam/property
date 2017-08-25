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
                <h1>Add New Agent</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('admin/dashboard')}}">
                            <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li> <a href="{{url('admin/users')}}">Agents </a></li>
                    <li class="active">Add New Agent</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                   <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                 Add New Agent
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <form action="/admin/UpdateAgent" method="post" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                    <input type="hidden" name="id" value="{{ $agents->id }}">
                                    <input type="hidden" name="old_image" value="{{ $agents->logo }}">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name"><strong>Edit Name*</strong></label>
                                            <input class="form-control" name="name" value="{{  $agents->name or old('name') }}" id="name"  placeholder="Enter your Agent Name">
                                            @if($errors->first('name'))
                                                <label class="error text-danger" for="FirstName">*{{ $errors->first('name') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <label for="CityName"> Edit City Name</label>
                                            <select class="form-control" title="Select an Agent City..."  selected="{{old('CityName')}}" name="CityName" id="CityName">
                                                @foreach($cities as $city)
                                                    <option @if(old('CityName') == $agents->city) selected @endif value="{{ $city->name  }}">{{ $city->name  }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="CityName">Change Logo</label>
                                            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}"  placeholder="Choose Your Image">

                                            @if($errors->first('image'))
                                                <label class="error text-danger" for="image">*{{ $errors->first('image') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ConatctNumber">Edit Conatact Number</label>
                                            <input class="form-control" type="text" id="number"  name="number" value="{{ $agents->number or old('number')  }}" placeholder="Enter your Agent Number">
                                            @if($errors->first('number'))
                                                <label class="error text-danger" for="number">*{{ $errors->first('number') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg submit">Save Agent</button>
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