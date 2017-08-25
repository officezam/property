@extends('admin/layouts/app')

@section('pagecss')
    <!--page level css -->
    <link href="{{asset('assets/css/pages/form_layouts.css')}}" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->

@endsection


@section('content')

    <?php
    // dd($property)
    ?>
    <style>

        .hide{ display: none;}
    </style>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Edit Property</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('admin/dashboard') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/property') }}">Property</a>
                </li>
                <li class="active">Edit Property</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="tab-content mar-top">

                        <div id="tab3" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="bell" data-loop="true" data-color="#fff" data-hovercolor="#fff" data-size="18"></i>
                                                Update This Property
                                            </h3>
                                            <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                                        </div>
                                        <div class="panel-body border">
                                            <form action="/admin/update_property" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="id" value="{{ $property->id }}" >
                                                <input type="hidden" name="created_by" value="{{ $property->created_by }}" >


                                                @if( Auth::user()->type == 'admin')
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Show Front Page</label>
                                                        <div class="col-md-9">
                                                            <div class="radio mar-left5">
                                                                <label for="example-radio1">
                                                                    <input type="radio" @if($property->number == '1' ) checked @endif id="example-radio1" name="number" value="1">Yes</label>
                                                            </div>
                                                            <div class="radio mar-left5">
                                                                <label for="example-radio2">
                                                                    <input type="radio" id="example-radio2" @if($property->number == '2' ) checked @endif name="number" value="2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Property Purpose</label>
                                                    <div class="col-md-9">
                                                        <div class="radio mar-left5">
                                                            <label for="example-radio1">
                                                                <input type="radio" @if($property->purpose == 'sell' ) checked @endif id="example-radio1" name="purpose" value="sell">For Buy / Sale</label>
                                                        </div>
                                                        <div class="radio mar-left5">
                                                            <label for="example-radio2">
                                                                <input type="radio" id="example-radio2" @if($property->purpose == 'rent' ) checked @endif name="purpose" value="rent">For Rent</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group striped-col">
                                                    <label class="col-md-3 control-label">Property Type</label>
                                                    <div class="col-md-9">
                                                        <label class="radio-inline " for="example-inline-radio1">
                                                            <input type="radio" id="house" name="type" @if($property->type == 'house' ) checked @endif   value="house">Residential / Homes</label>
                                                        <label class="radio-inline" for="example-inline-radio2">
                                                            <input type="radio" id="land" name="type" @if($property->type == 'land' ) checked @endif value="land">Commercial / Land </label>
                                                        <label class="radio-inline" for="example-inline-radio3">
                                                            <input type="radio" id="projects" name="type" @if($property->type == 'projects' ) checked @endif value="projects">Projects</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">

                                                    <label class="col-md-3 control-label">Property Sub Category</label>
                                                    <div class="col-md-9">

                                                        <div class="house @if($property->type != 'house' ) hide @endif">
                                                            <div class="col-md-9">
                                                                <label class="radio-inline " for="example-inline-radio1">
                                                                    <input type="radio" id="example-inline-radio1" name="subtype" @if($property->subtype == 'Houses / Villas' ) checked @endif value="Houses / Villas">Houses / Villas
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio2">
                                                                    <input type="radio" id="example-inline-radio2" name="subtype" @if($property->subtype == 'Plots / Files' ) checked @endif value="Plots / Files">Plots / Files
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Flats/Appartments' ) checked @endif value="Flats/Appartments">Flats/Appartments
                                                                </label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Form Houses' ) checked @endif value="Form Houses">Form Houses
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Upper Portion' ) checked @endif value="Building">Upper Portion
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Lower Protion' ) checked @endif value="Lower Protion">Lower Protion
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="land @if($property->type != 'land' ) hide @endif">
                                                            <div class="col-md-9">
                                                                <label class="radio-inline " for="example-inline-radio1">
                                                                    <input type="radio" id="example-inline-radio1" name="subtype" @if($property->subtype == 'Commercial Plots / Files' ) checked @endif value="Commercial Plots / Files">Commercial Plots / Files
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio2">
                                                                    <input type="radio" id="example-inline-radio2" name="subtype" @if($property->subtype == 'Agricultural Land' ) checked @endif value="Agricultural Land">Agricultural Land
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Offices' ) checked @endif value="Offices">Offices
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Industrial Land' ) checked @endif value="Industrial Land">Industrial Land
                                                                </label>

                                                            </div>
                                                            <div class="col-md-9">
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Shops / Showrooms' ) checked @endif value="Shops / Showrooms">Shops / Showrooms
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Building' ) checked @endif value="Building">Building
                                                                </label>

                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Factories' ) checked @endif value="Factories">Factories
                                                                </label>

                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Warehouses / Godown' ) checked @endif value="Warehouses / Godown">Warehouses / Godown
                                                                </label>

                                                            </div>
                                                            <label class="col-md-3 control-label"></label>
                                                            <div class="col-md-9">
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Guest House/Banquet Hall' ) checked @endif value="Guest House/Banquet Hall">Guest House/Banquet Hall
                                                                </label>

                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'School / College' ) checked @endif value="School / College">School / College
                                                                </label>

                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Hotel / Resturant' ) checked @endif value="Hotel / Resturant">Hotel / Resturant
                                                                </label>

                                                            </div>
                                                        </div>

                                                        <div class="projects @if($property->type != 'projects' ) hide @endif">
                                                            <div class="col-md-9">
                                                                <label class="radio-inline " for="example-inline-radio1">
                                                                    <input type="radio" id="example-inline-radio1" name="subtype" @if($property->subtype == 'Residental Town / Schemes' ) checked @endif value="Residental Town / Schemes">Residental Town / Schemes
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio2">
                                                                    <input type="radio" id="example-inline-radio2" name="subtype" @if($property->subtype == 'Land Sub Divisions' ) checked @endif value="Land Sub Divisions">Land Sub Divisions
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Commercial Plaza / Tower' ) checked @endif value="Commercial Plaza / Tower">Commercial Plaza / Tower
                                                                </label>
                                                                <label class="radio-inline" for="example-inline-radio3">
                                                                    <input type="radio" id="example-inline-radio3" name="subtype" @if($property->subtype == 'Industrial Estates /Zone' ) checked @endif value="Industrial Estates /Zone">Industrial Estates /Zone
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group striped-col">
                                                    <label class="col-md-3 control-label" for="example-select">Property Location</label>
                                                    <div class="col-md-9">
                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">City</label>
                                                            <select id="example-select" name="city" class="form-control  target" size="1">
                                                                @foreach($city as $cityname)
                                                                    <option class="{{ $cityname->latitude }},{{ $cityname->longitude }}" value="{{ $cityname->name }}" @if($cityname->name ==  $property->city) selected @endif>{{ $cityname->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <label class="" for="example-select">Address</label>
                                                            <input type="text" id="address" required name="address" value="{{ $property->address }}" class="form-control" placeholder="Enter property Address" >
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label class="" for="example-select">Location on Map</label>
                                                            <div id="map" style="height: 200px;"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">Latitude</label>
                                                            <input type="text" id="latitude" name="latitude" value="{{ $property->latitude }}" class="form-control" placeholder="Enter Latitude" >
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">Longitude</label>
                                                            <input type="text" id="longitude" name="longitude" value="{{ $property->longitude }}" class="form-control" placeholder="Enter Longitude" >
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-text-input">Property Title</label>
                                                    <div class="col-md-6">
                                                        <input type="text" id="example-text-input" name="title" value="{{ $property->title }}" class="form-control" placeholder="Enter your property title">
                                                    </div>
                                                </div>
                                                <div class="form-group striped-col">
                                                    <label class="col-md-3 control-label" for="example-email">Description</label>
                                                    <div class="col-md-6">
                                                        <textarea id="example-textarea-input" name="description" rows="6" class="form-control" placeholder="Description..">{{ $property->description }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-select">Area & Unit</label>
                                                    <div class="col-md-9">
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">Area</label>
                                                            <input type="text" id="example-disabled" name="area" value="{{ $property->area }}" class="form-control" placeholder="Enter Area" >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">Area Unit</label>
                                                            <select id="example-multiple-select" name="area_unit" class="form-control" size="1">
                                                                <option value="Marla" @if($property->area_unit == 'Marla') selected @endif>Marla</option>
                                                                <option value="Kanal" @if($property->area_unit == 'Kanal') selected @endif>Kanal</option>
                                                                <option value="Square Yard" @if($property->area_unit == 'Square Yard') selected @endif>Square Yard</option>
                                                                <option value="Square Feet" @if($property->area_unit == 'Square Feet') selected @endif>Square Feet</option>
                                                            </select>                                                                  </div>
                                                    </div>
                                                </div>
                                                <div class="form-group striped-col">
                                                    <label class="col-md-3 control-label" for="example-email">Detail</label>
                                                    <div class="col-md-9">
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">label</label>
                                                            <select id="example-multiple-select" name="Label" class="form-control" size="1">
                                                                <option value="PerMonth" @if($property->Label == 'PerMonth') selected @endif>Per Month</option>
                                                                <option value="PerYear" @if($property->Label == 'PerYear') selected @endif>Per Year</option>
                                                                <option value="Final" @if($property->Label == 'Final') selected @endif>Final</option>
                                                                <option value="Negotiable" @if($property->Label == 'Negotiable') selected @endif>Negotiable</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">Constructed Area</label>
                                                            <input type="text" id="example-disabled" required name="ConstructedArea" value="{{ $property->ConstructedArea }}" class="form-control" placeholder="Enter Constructed Area" >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">Open Area</label>
                                                            <input type="text" id="example-disabled" required name="OpenArea" value="{{ $property->OpenArea }}" class="form-control" placeholder="Enter Open Area" >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">Construction Year</label>
                                                            <input type="date" id="example-disabled" name="ConstructionYear" required value="{{ $property->ConstructionYear }}" class="form-control" placeholder="Enter Construction Year" >
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">Owner Ship Status</label>
                                                            <select id="example-multiple-select" name="OwnerShipStatus" class="form-control" size="1">
                                                                <option value="Allotment"  @if($property->OwnerShipStatus == 'Allotment') selected @endif>Allotment </option>
                                                                <option value="Registered"  @if($property->OwnerShipStatus == 'Registered') selected @endif>Registered </option>
                                                                <option value="Leased"  @if($property->OwnerShipStatus == 'Leased') selected @endif>Leased  </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">Poperty Price</label>
                                                            <input class="form-control" id="price" name="price" value="{{ $property->price }}" placeholder="Enter Prices">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="example-file-input">Property Video Url</label>
                                                            <input type="text" class="form-control" id="video_url" name="video_url" value="{{ $property->video_url }}" placeholder="Enter Property Video Url Link">
                                                            <label class="alert-info"> Optional (Enter If you have your property Video on youtube) </label>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <label for="example-disabled">Property Expire</label>

                                                            <select id="example-multiple-select" name="propertexpire" class="form-control" size="1">
                                                                <option value="1" @if($property->propertexpire == '1') selected @endif> One Months</option>
                                                                <option value="2" @if($property->propertexpire == '2') selected @endif> Two Months</option>
                                                                <option value="3" @if($property->propertexpire == '3') selected @endif> Three Months</option>
                                                                <option value="4" @if($property->propertexpire == '4') selected @endif> Four Months</option>
                                                            </select>
                                                            <div class="btn-primary" > This Property Expired at  {{ $property->propertexpire }} Change Exipre Date </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-select">Property Document</label>
                                                    <div class="col-md-9">
                                                        <div class="col-md-6">
                                                            <a href="{{ asset('propetyImages/'.$property->id.'/'.$property->pdf)  }}" class="btn btn-primary" target="_blank" download >Download Property Document</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="" for="example-select">(Change pdf)</label>
                                                            <input type="file" name="pdf" value="" >
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="form-group <?php if ( $property->subtype == 'School / College' ||
                                                $property->subtype == 'Guest House/Banquet Hall' ||
                                                $property->subtype == 'Office' ||
                                                $property->subtype == 'Lower Protion' ||
                                                $property->subtype == 'Upper Portion' ||
                                                $property->subtype == 'Form Houses' ||
                                                $property->subtype == 'Flats / Appartments' ||
                                                $property->subtype == 'Houses / Villas'
                                                ){ ?> hide <?php } ?>" id="green_property" >
                                                    <label class="col-md-3 control-label" for="example-select">More Detail</label>
                                                    <div class="col-md-9">
                                                        <div class="col-sm-6">
                                                            <label for="property-price-after">Rooms / Bed Rooms</label>
                                                            <input class="form-control outline" id="beds" name="beds" value="{{ $property->beds }}" placeholder="Enter Number of Beds ">
                                                            <label class=" alert-danger hide" id="beds_error"> Please Enter Number of Beds </label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="property-price-after">Bath / Wash Rooms</label>
                                                            <input class="form-control outline"  id="bathroom" name="bathroom" value="{{ $property->bathroom }}" placeholder="Enter Number of Bathroom ">
                                                            <label class=" alert-danger hide" id="bathroom_error"> Please Enter Number of Bathroom </label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="property-price-after">Floors</label>
                                                            <input class="form-control outline" required id="floor" name="floor" value="{{ $property->floor }}" placeholder="Enter Number of Floor ">
                                                            <label class=" alert-danger hide" id="floor_error"> Please Enter Number of Floor </label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label for="property-price-after">Kitchens</label>
                                                            <input class="form-control outline" id="kitchens" name="kitchens" value="{{ $property->kitchens }}" placeholder="Enter Number of Kitchens ">
                                                            <label class=" alert-danger hide" id="kitchens_error"> Please Enter Rate </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="projects" class="projects @if($property->type != 'projects' ) hide @endif ">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="example-select">Offers & Payment Plans</label>
                                                        <div class="col-md-9">
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Size</label>
                                                                <input class="form-control" id="size1" name="size1" value="{{ $property->size1 }}" placeholder="Enter Size ">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Rate</label>
                                                                <input class="form-control" id="rate1" name="rate1" value="{{ $property->rate1 }}" placeholder="Enter Rate ">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Size</label>
                                                                <input class="form-control" id="size2" name="size1" value="{{ $property->size2 }}" placeholder="Enter Size ">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Rate</label>
                                                                <input class="form-control" id="rate2" name="rate2" value="{{ $property->rate1 }}" placeholder="Enter Rate ">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Size</label>
                                                                <input class="form-control" id="size3" name="size3" value="{{ $property->size3 }}" placeholder="Enter Size ">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Rate</label>
                                                                <input class="form-control" id="rate3" name="rate3" value="{{ $property->rate3 }}" placeholder="Enter Rate ">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Size</label>
                                                                <input class="form-control" id="size4" name="size4" value="{{ $property->size4 }}" placeholder="Enter Size ">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Rate</label>
                                                                <input class="form-control" id="rate4" name="rate4" value="{{ $property->rate4 }}" placeholder="Enter Rate ">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="homeandcommercial" class="homeandcommercial @if($property->type == 'projects' ) hide @endif ">
                                                    <div class="form-group ">
                                                        <label class="col-md-3 control-label" for="example-select">Measurement & Price</label>
                                                        <div class="col-md-9">
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Height</label>
                                                                <input class="form-control" id="height" name="height" value="{{ $property->height }}" placeholder="Enter height ft">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="" for="example-select">Width</label>
                                                                <input class="form-control" id="width" name="width" value="{{ $property->width }}" placeholder="Enter width ft">
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group striped-col">
                                                    <label class="col-md-3 control-label">Property Features</label>
                                                    <div class="col-md-9 @if($property->type != 'house' ) hide @endif" id="housefeature">
                                                        @foreach($housefeature as $Allfeature)
                                                            <div class="col-sm-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="feature[]" @if(isset($Selectedfeature[$Allfeature->id] ) && $Selectedfeature[$Allfeature->id] == $Allfeature->id) checked @endif value="{{ $Allfeature->id }}">
                                                                        {{ $Allfeature->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <div class="col-md-9 @if($property->type != 'land' ) hide @endif" id="landfeature">
                                                        @foreach($landfeature as $Allfeature)
                                                            <div class="col-sm-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="feature[]" @if(isset($Selectedfeature[$Allfeature->id] ) && $Selectedfeature[$Allfeature->id] == $Allfeature->id) checked @endif value="{{ $Allfeature->id }}">
                                                                        {{ $Allfeature->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-9 @if($property->type != 'projects' ) hide @endif" id="projectsfeature">
                                                        @foreach($projectsfeature as $Allfeature)
                                                            <div class="col-sm-4">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="feature[]" @if(isset($Selectedfeature[$Allfeature->id] ) && $Selectedfeature[$Allfeature->id] == $Allfeature->id) checked @endif value="{{ $Allfeature->id }}">
                                                                        {{ $Allfeature->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>



                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Extra Features</label>
                                                    <div class="col-md-9 @if($property->type != 'house' ) hide @endif" id="houseservices">
                                                        @foreach($houseservices as $Allservice)
                                                            <div class="col-sm-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="services[]" @if(isset($Selectedservice[$Allservice->id]) && $Selectedservice[$Allservice->id] == $Allservice->id) checked @endif value="{{ $Allservice->id }}">
                                                                        {{ $Allservice->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-9 @if($property->type != 'land' ) hide @endif" id="landservices">
                                                        @foreach($landservices as $Allservice)
                                                            <div class="col-sm-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="services[]" @if(isset($Selectedservice[$Allservice->id]) && $Selectedservice[$Allservice->id] == $Allservice->id) checked @endif value="{{ $Allservice->id }}">
                                                                        {{ $Allservice->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-md-9 @if($property->type != 'projects' ) hide @endif" id="projectsservices">
                                                        @foreach($projectsservices as $Allservice)
                                                            <div class="col-sm-3">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="services[]" @if(isset($Selectedservice[$Allservice->id]) && $Selectedservice[$Allservice->id] == $Allservice->id) checked @endif value="{{ $Allservice->id }}">
                                                                        {{ $Allservice->name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-select">Property Images</label>
                                                    <div class="col-md-9">

                                                        <div class="col-md-2">
                                                            <label class="" for="example-select">Image 1</label>
                                                            <img src="{{ asset('public/propetyImages/'.$property->id.'/100x75'.$property->image0)  }}" alt="{{ $property->title }}">
                                                        </div>
                                                        @if($property->image1 != '')
                                                            <div class="col-md-2">
                                                                <label class="" for="example-select">Image 2</label>
                                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/100x75'.$property->image1)  }}" alt="{{ $property->title }}">
                                                            </div>
                                                        @endif
                                                        @if($property->image2 != '')
                                                            <div class="col-md-2">
                                                                <label class="" for="example-select">Image 3</label>
                                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/100x75'.$property->image2)  }}" alt="{{ $property->title }}">
                                                            </div>
                                                        @endif
                                                        @if($property->image3 != '')
                                                            <div class="col-md-2">
                                                                <label class="" for="example-select">Image 4</label>
                                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/100x75'.$property->image3)  }}" alt="{{ $property->title }}">
                                                            </div>
                                                        @endif
                                                        @if($property->image4 != '')
                                                            <div class="col-md-2">
                                                                <label class="" for="example-select">Image 5</label>
                                                                <img src="{{ asset('public/propetyImages/'.$property->id.'/100x75'.$property->image4)  }}" alt="{{ $property->title }}">
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>

                                                <div class="form-group striped-col">
                                                    <label class="col-md-3 control-label" for="example-select">Change Property Images</label>
                                                    <div class="col-md-9">

                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">Image 1</label>
                                                            <input type="hidden" name="old_image0" value="{{ $property->image0 }}" >
                                                            <input type="file" id="example-file-input" name="new_image0" accept="image/x-png,image/gif,image/jpeg">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">Image 2</label>
                                                            <input type="hidden" name="old_image1" value="{{ $property->image1 }}" >
                                                            <input type="file" id="example-file-input" name="new_image1" accept="image/x-png,image/gif,image/jpeg">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">Image 3</label>
                                                            <input type="hidden" name="old_image2" value="{{ $property->image2 }}" >
                                                            <input type="file" id="example-file-input" name="new_image2" accept="image/x-png,image/gif,image/jpeg">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">Image 4</label>
                                                            <input type="hidden" name="old_image3" value="{{ $property->image3 }}" >
                                                            <input type="file" id="example-file-input" name="new_image3" accept="image/x-png,image/gif,image/jpeg">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="" for="example-select">Image 5</label>
                                                            <input type="hidden" name="old_image4" value="{{ $property->image4 }}" >
                                                            <input type="file" id="example-file-input" name="new_image4" accept="image/x-png,image/gif,image/jpeg">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="example-file-input"></label>
                                                    <div class="col-md-9 col-md-offset-3">
                                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Update Property</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- content --> </aside>
@endsection

@section('pagejs')
    <!-- begining of page level js -->
    <script type="text/javascript" src="{{asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wizard/jquery-steps/js/wizard.js')}}"></script>
    <script src="{{asset('assets/vendors/wizard/jquery-steps/js/jquery.steps.js')}}"></script>
    <script src="{{asset('assets/vendors/wizard/jquery-steps/js/form_wizard.js')}}"></script>
    <!-- end of page level js -->
    <script>
        $( document ).ready(function()
        {



            $("form input:radio").change(function () {
                var subtype = $(this).val();

                if ( subtype == 'School / College' ||
                    subtype == 'Guest House/Banquet Hall' ||
                    subtype == 'Office' ||
                    subtype == 'Lower Protion' ||
                    subtype == 'Upper Portion' ||
                    subtype == 'Form Houses' ||
                    subtype == 'Flats / Appartments' ||
                    subtype == 'Houses / Villas'
                ) {
                    $('#green_property').removeClass("hide");
                }else {
                    $('#green_property').addClass("hide");
                }

            });



            $("input[name='type']").click(function(){

                if(($('input[name=type]:checked').val() == 'house'))
                {
                    $(".house").removeClass("hide");
                    $(".land").addClass("hide");
                    $(".projects").addClass("hide");
                    $("#homeandcommercial").removeClass("hide");
                    $("#projects").add("hide");

                    $("#housefeature").removeClass("hide");
                    $("#houseservices").removeClass("hide");

                    $("#landfeature").addClass("hide");
                    $("#projectsfeature").addClass("hide");
                    $("#landservices").addClass("hide");
                    $("#projectsservices").addClass("hide");

                }

                if(($('input[name=type]:checked').val() == 'land'))
                {
                    $(".house").addClass("hide");
                    $(".land").removeClass("hide");
                    $(".projects").addClass("hide");
                    $("#homeandcommercial").removeClass("hide");
                    $("#projects").add("hide");

                    $("#landfeature").removeClass("hide");
                    $("#landservices").removeClass("hide");

                    $("#projectsfeature").addClass("hide");
                    $("#projectsservices").addClass("hide");
                    $("#housefeature").addClass("hide");
                    $("#houseservices").addClass("hide");
                }

                if(($('input[name=type]:checked').val() == 'projects'))
                {
                    $(".house").addClass("hide");
                    $(".land").addClass("hide");
                    $(".projects").removeClass("hide");
                    $("#homeandcommercial").addClass("hide");
                    $("#projects").removeClass("hide");

                    $("#projectsfeature").removeClass("hide");
                    $("#projectsservices").removeClass("hide");

                    $("#landfeature").addClass("hide");
                    $("#landservices").addClass("hide");
                    $("#housefeature").addClass("hide");
                    $("#houseservices").addClass("hide");

                }

            })
        });
    </script>

    <script>

        $('.target').change(function() {
            //alert($('select[name="city"]').find(':selected').attr('class').split(','));

            var coordinate = $('select[name="city"]').find(':selected').attr('class').split(',');//$('select option:selected').val().split(',');
            map.setCenter(new google.maps.LatLng(coordinate[0], coordinate[1]));
        });

        var map;
        var previousMarker; // global variable to store previous marker
        function initMap(latitude , longitude ) {

            var latitude = {{ $property->latitude }};
            var longitude= {{ $property->longitude }};

            var myLatLng = {
                lat: latitude,
                lng: longitude
            };


            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: latitude,
                    lng: longitude
                },
                zoom: 8
            });


            map.addListener('click', function(e) {
                    // if the previousMarker exists, remove it
                    if (previousMarker)
                        previousMarker.setMap(null);

                    latLng = e.latLng;

                    var latitude = e.latLng.lat();
                    var longitude = e.latLng.lng();

                    $('#latitude').val(latitude);
                    $('#longitude').val(longitude);

                    //image = clientURL + "/common/images/markers/red.png";

                    previousMarker = new google.maps.Marker({
                        position: latLng,
                        map: map
                    });
                }

            );


            var previousMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: '{{ $property->title }} !'
            });

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0C1Dmi-PE4nrIHJ3sxb2NqBdS6pj2n1o&callback=initMap" async defer></script>


@endsection