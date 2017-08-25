@extends('layouts.app')
@section('pagecss')

@endsection
@section('content')
    <style>
        .hide{ display:none;}
        .outline{
            border-color: rgba(64,79,239,0.8);
            box-shadow: 0 1px 1px rgba(0,0,0,0.03) inset, 0 0 8px rgba(123,137,239,0.6);
            outline: 0 none;
        }
        .font-color{ color:white;}
        .add-title-tab {
            background-color: #7ca1f9;
        }
        .bold-class{ font-weight: bold;}
    </style>

    <!--start section page body-->
    <section id="section-body">

        <div class="container" style="background: #ebe5d9 url('assets/images/texture.jpg')">
            <div class="membership-page-top">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="membership-page-title ">
                            <?php
                            if (!isset($_SESSION)) {
                                session_start();
                            }
                            if (isset($_SESSION['Message'])) {
                            ?>
                            <h3 class="page-title alert alert-success">{{ $_SESSION['Message'] }}</h3>

                            <?php } unset($_SESSION['Message']) ?>

                            <h1 class="page-title font-color"> Add New Property </h1>
                            <p class="page-subtitle font-color"> Please enter your property Detail Below! </p>
                        </div>
                        <ol class="pay-step-bar ">
                            <li class="pay-step-block font-color active" id="headone"><span>1. <span><b>Type & Purpose</b></span></span></li>
                            <li class="pay-step-block font-color" id="headtwo"><span>2. <span><b>Location</b></span></span></li>
                            <li class="pay-step-block font-color" id="headthree"><span>3. <span><b>Property Detail</b></span></span></li>
                            <li class="pay-step-block font-color" id="headfour"><span>4. <span><b>Features & Services</b></span></span></li>
                            <li class="pay-step-block font-color" id="headfive"><span>6. <span><b>Done</b></span></span></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="membership-content-area" >
                <form action="{{url('/add_property')}}" method="post" enctype="multipart/form-data"  class="form-horizontal" id="myForm">
                    {!! csrf_field() !!}
                    <div class="account-block " id="blockone" style="background: #ebe5d9 url('assets/images/texture.jpg')">
                        <div class="add-title-tab ">
                            <h3>Property Purpose</h3>
                        </div>
                        <div class="add-tab-content" >
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="purpose" value="sell" id="purpose">
                                                <strong class="bold-class" > For Buy / Sale </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="purpose" value="rent" id="purpose">
                                                <strong class="bold-class" > For Rent</strong>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <label class=" alert-danger hide" id="purpose_error"> Please Select One Property Purpose </label>

                            </div>
                        </div>
                        <div class="add-title-tab">
                            <h3>Property Type </h3>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="type" value="house" id="onlyhouse">
                                                <strong class="bold-class" > Residential / Homes </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="type" value="land" id="onlyland">
                                                <strong class="bold-class" > Commercial / Land </strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="radio" name="type" value="projects" id="onlyprojects">
                                                <strong class="bold-class" > Projects </strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <label class=" alert-danger hide" id="type_error"> Please Select One Property Type </label>

                            </div>
                        </div>


                        <div class="house hide" id="house">
                            <div class="add-title-tab " id="titlehouse">
                                <h3>Property Sub Category</h3>
                            </div>
                            <div class="add-tab-content " >
                                <div class="add-tab-row push-padding-bottom">
                                    <div class="row" >
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Houses / Villas" id="greenproperty">
                                                    <strong class="bold-class" >Houses / Villas </strong>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="subtype" value="Plots / Files" id="notgreenproperty" >
                                                    <strong class="bold-class" > Plots / Files </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="radio" name="subtype" value="Flats / Appartments" id="greenproperty">
                                                    <strong class="bold-class" > Flats / Appartments </strong>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="radio" name="subtype" value="Form Houses" id="greenproperty">
                                                    <strong class="bold-class" > Form Houses </strong>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="radio" name="subtype" value="Upper Portion" id="greenproperty">
                                                    <strong class="bold-class" > Upper Portion </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="radio" name="subtype" value="Lower Protion" id="greenproperty">
                                                    <strong class="bold-class" > Lower Protion</strong>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                    <label class=" alert-danger hide" id="house_error"> Please Select One Property Sub Category </label>
                                </div>
                            </div>

                        </div>

                        <div class="commercial hide" id="commercial">
                            <div class="add-title-tab " id="titlehouse">
                                <h3>Property Sub Category</h3>
                            </div>
                            <div class="add-tab-content " >
                                <div class="add-tab-row push-padding-bottom">
                                    <div class="row" >
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Commercial Plots / Files" id="notgreenproperty">
                                                    <strong class="bold-class" >Commercial Plots / Files </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Agricultural Land" id="notgreenproperty">
                                                    <strong class="bold-class" >Agricultural Land</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Industrial Land" id="notgreenproperty">
                                                    <strong class="bold-class" > Industrial Land </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Office" id="greenproperty" >
                                                    <strong class="bold-class" >Offices </strong>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Shops / Showrooms" id="notgreenproperty">
                                                    <strong class="bold-class" >Shops / Showrooms </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Commercial Plots / Files" id="notgreenproperty">
                                                    <strong class="bold-class" >Commercial Plots / Files </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Building" id="notgreenproperty">
                                                    <strong class="bold-class" >Building </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Factories" id="notgreenproperty">
                                                    <strong class="bold-class" >Factories </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Warehouses / Godown" id="notgreenproperty">
                                                    <strong class="bold-class" >Warehouses / Godown</strong>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Guest House/Banquet Hall" id="greenproperty">
                                                    <strong class="bold-class" >Guest House/Banquet Hall </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="School / College" id="greenproperty">
                                                    <strong class="bold-class" >School / College</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Hotel / Resturant" id="notgreenproperty">
                                                    <strong class="bold-class" >Hotel / Resturant</strong>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <label class=" alert-danger hide" id="land_error"> Please Select One Property Sub Category </label>
                                </div>
                            </div>
                        </div>

                        <div class="projects hide" id="projects">
                            <div class="add-title-tab " id="titlehouse">
                                <h3 class="bold-class">Property Sub Category</h3>
                            </div>
                            <div class="add-tab-content ">
                                <div class="add-tab-row push-padding-bottom">
                                    <div class="row" >
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Residental Town / Schemes" id="notgreenproperty">
                                                    <strong class="bold-class">Residental Town / Schemes </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Land Sub Divisions" id="notgreenproperty">
                                                    <strong class="bold-class">Land Sub Divisions</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Commercial Plaza / Tower" id="notgreenproperty">
                                                    <strong class="bold-class">Commercial Plaza / Tower</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="subtype" value="Industrial Estates /Zone" id="notgreenproperty">
                                                    <strong class="bold-class" >Industrial Estates /Zone</strong>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <label class=" alert-danger hide" id="projects_error"> Please Select One Property Sub Category </label>
                                </div>
                            </div>

                        </div>

                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="account-block text-right">
                                    <button type="button" id="buttonone" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="account-block hide " id="blocktwo">

                        <div class="add-title-tab">
                            <h3 class="bold-class">Select Property Location</h3>
                        </div>
                        <div class="add-tab-content">

                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="">
                                            <label for="property-price-before" class="bold-class">City</label>
                                            <select class="selectpicker target" id="city" name="city" data-live-search="false" dat-live-search-style="begins" title="Select">
                                                @foreach($city as $city)
                                                    <option class="{{ $city->latitude }},{{ $city->longitude }}" value="{{ $city->name }}">{{ $city->name }}</option>
                                                @endforeach

                                            </select>
                                            <label class=" alert-danger hide" id="city_error"> Please Select City of Property </label>

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="">
                                            <label for="property-price" class="bold-class">Location / Address</label>
                                            <input type="text" class="form-control" id="address" name="address" value="" placeholder="Enter address">
                                            <label class=" alert-danger hide" id="address_error"> Please Enter Property Address </label>

                                        </div>
                                    </div>
                                </div>
                                <br>


                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="add-title-tab bold-class">Google Map</div>
                                        <div id="map"></div>
                                        <label class=" alert-danger hide" id="map_error"> Please Select Location of Property </label>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <label for="property-price" class="bold-class">Longitude</label>
                                            <input type="text" class="form-control" id="longitude" name="longitude" value="" placeholder="Enter Longitude">
                                            <label class=" alert-danger hide" id="longitude_error"> Please Enter Property Longitude </label>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <label for="property-price-before" class="bold-class">Latitude</label>
                                            <input type="text" class="form-control" id="latitude" name="latitude" value="" placeholder="Enter latitude">
                                            <label class=" alert-danger hide" id="latitude_error"> Please Enter Property Latitude </label>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="add-tab-row push-padding-bottom">
                                <div class="account-block text-right">
                                    <button type="button" id="buttonbackone" class="btn btn-info">Back</button>
                                    <button type="button" id="buttontwo" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="account-block hide" id="blockthree">
                        <div class="add-title-tab">
                            <h3>Property  Detail</h3>
                        </div>
                        <div class="add-tab-content">

                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="">
                                            <label for="property-title" class="bold-class">Property Title</label>
                                            <input class="form-control" id="property_title" name="title" value="" placeholder="Enter your property title">
                                            <label class=" alert-danger hide" id="title_error"> Please Enter Title of Property </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="">
                                            <label for="description" class="bold-class">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter your property Description"></textarea>
                                            <label class=" alert-danger hide" id="description_error"> Please Enter Description of Property </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                            <label for="property-price-after" class="bold-class">Land Area</label>
                                            <input class="form-control" id="area" name="area" value="" placeholder="Enter Area" type="number" min="1">
                                            <label class=" alert-danger hide" id="area_error"> Please Enter Property Area </label>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="property-price-before" class="bold-class">Unit</label>
                                        <select class="selectpicker" id="area_unit" name="area_unit" data-live-search="false" data-live-search-style="begins" title="Select">
                                            <option value="Marla">Marla</option>
                                            <option value="Kanal">Kanal</option>
                                            <option value="acres">Acres</option>
                                            <option value="Square Yard">Square Yard</option>
                                            <option value="Square Feet">Square Feet</option>
                                        </select>
                                        <label class=" alert-danger hide" id="area_unit_error"> Please Select Anyone Area Unit </label>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="alert-success">
                                            <label for="property-price-after hide" class="bold-class">Price: Rs.</label>
                                            <input class="form-control outline" id="price" name="price" min="1" value="" placeholder="Enter Prices" type="number" >
                                            <label class=" alert-danger hide" id="price_error"> Please Enter Price of Property </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="property-price-before" class="bold-class">Label</label>
                                        <select class="selectpicker" id="Label" name="Label" data-live-search="false" data-live-search-style="begins" title="Select">
                                            <option value="PerMonth">Per Month</option>
                                            <option value="PerYear">Per Year</option>
                                            <option value="Final">Final </option>
                                            <option value="Negotiable">Negotiable</option>
                                        </select>
                                        <label class=" alert-danger hide" id="Label_error"> Please Select Anyone label </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="property-price-after" class="bold-class">Constructed Area</label>
                                        <input class="form-control" id="ConstructedArea" name="ConstructedArea" value="" placeholder="Enter Constructed Area">
                                        <label class=" alert-danger hide" id="ConstructedArea_error"> Please Enter Property Constructed Area </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="property-price-after" class="bold-class">Open Area</label>
                                        <input class="form-control" id="OpenArea" name="OpenArea" value="" placeholder="Enter Open Area">
                                        <label class=" alert-danger hide" id="OpenArea_error"> Please Enter Property Open Area </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="property-price-after" class="bold-class">Construction Year</label>
                                        <input type="date" class="form-control" id="ConstructionYear" name="ConstructionYear" value="" placeholder="Enter Construction Year">
                                        <label class=" alert-danger hide" id="ConstructionYear_error"> Please Enter Property Construction Year </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="property-price-after" class="bold-class">Owner Ship Status</label>
                                        <select class="selectpicker" id="OwnerShipStatus" name="OwnerShipStatus" data-live-search="false" data-live-search-style="begins" title="Select">
                                            <option value="Allotment">Allotment </option>
                                            <option value="Registered">Registered </option>
                                            <option value="Leased">Leased  </option>
                                        </select>
                                        <label class=" alert-danger hide" id="OwnerShipStatus_error"> Please Select Anyone Owner Ship Status </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="">
                                            <label for="property-price-before" class="bold-class">Expiry Date</label>
                                            <select class="selectpicker" id="propertexpire" name="propertexpire" data-live-search="false" data-live-search-style="begins" title="Select" tabindex="-98">
                                                <option class="bs-title-option" value="">Select</option>
                                                <option value="1"> One Months</option>
                                                <option value="2"> Two Months</option>
                                                <option value="3"> Three Months</option>
                                                <option value="4"> Four Months</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="">
                                            <label for="property-price-before" class="bold-class">Please Enter Property Video Url</label>
                                            <input type="text" class="form-control" id="video_url" name="video_url" value="" placeholder="Enter Property Video Url Link">
                                            <label class="alert-info"> Optional (Enter If you have your property Video on youtube) </label>
                                        </div>
                                    </div>



                                </div>
                                <br>
                                <div class="projects hide" id="green_property">

                                    <div class="add-title-tab" >
                                        <h3 style="color: #fff;">More Details</h3>
                                    </div>

                                    <div class="add-tab-row push-padding-bottom">

                                            <div class="col-sm-6">
                                                    <label for="property-price-after">Rooms / Bed Rooms</label>
                                                    <input class="form-control outline" id="beds" type="number" min="1" name="beds" value="" placeholder="Enter Number of Beds ">
                                                    <label class=" alert-danger hide" id="beds_error"> Please Enter Number of Beds </label>
                                            </div>
                                            <div class="col-sm-6">
                                                    <label for="property-price-after">Bath / Wash Rooms</label>
                                                    <input class="form-control outline" id="bathroom" type="number" min="1" name="bathroom" value="" placeholder="Enter Number of Bathroom ">
                                                    <label class=" alert-danger hide" id="bathroom_error"> Please Enter Number of Bathroom </label>
                                            </div>
                                            <div class="col-sm-6">
                                                    <label for="property-price-after">Floors</label>
                                                    <input class="form-control outline" id="floor" name="floor"  type="number" min="1" value="" placeholder="Enter Number of Floor ">
                                                    <label class=" alert-danger hide" id="floor_error"> Please Enter Number of Floor </label>
                                            </div>
                                            <div class="col-sm-6">
                                                    <label for="property-price-after">Kitchens</label>
                                                    <input class="form-control outline" id="kitchens" name="kitchens" type="number" min="1" value="" placeholder="Enter Number of Kitchens ">
                                                    <label class=" alert-danger hide" id="kitchens_error"> Please Enter Number of kitchens </label>
                                            </div>
                                    </div>
                                </div>
                                <div class="homeandcommercial hide" id="homeandcommercial">
                                    <div class="add-title-tab">
                                        <h3>Measurement </h3>
                                        <!--<div class="add-expand"></div>-->
                                    </div>
                                    <div class="add-tab-row push-padding-bottom">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after" >Height</label>
                                                    <input class="form-control" id="height" name="height" value="" placeholder="Enter height ft">
                                                    <label class=" alert-danger hide" id="height_error"> Please Enter Property Height </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Width</label>
                                                    <input class="form-control" id="width" name="width" value="" placeholder="Enter width ft">
                                                    <label class=" alert-danger hide" id="width_error"> Please Enter Property Width </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="projects hide" id="projects_size">
                                    <div class="add-title-tab">
                                        <h3 style="color: #fff;">Plans & Payments</h3>
                                    </div>
                                    <div class="add-tab-row push-padding-bottom">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Size</label>
                                                    <input class="form-control outline" id="size1" name="size1" value="" type="number" min="1" placeholder="Enter Size ">
                                                    <label class=" alert-danger hide" id="size1_error"> Please Enter Size </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Rate</label>
                                                    <input class="form-control outline" id="rate1" name="rate1" value="" type="number" min="1" placeholder="Enter Rate ">
                                                    <label class=" alert-danger hide" id="rate1_error"> Please Enter Rate </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Size</label>
                                                    <input class="form-control outline" id="size2" name="size2" value="" type="number" min="1" placeholder="Enter Size ">
                                                    <label class=" alert-danger hide" id="size2_error"> Please Enter Size </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Rate</label>
                                                    <input class="form-control outline" id="rate2" name="rate2" value="" type="number" min="1" placeholder="Enter Rate ">
                                                    <label class=" alert-danger hide" id="rate2_error"> Please Enter Rate </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Size</label>
                                                    <input class="form-control outline" id="size3" name="size3" value="" type="number" min="1" placeholder="Enter Size ">
                                                    <label class=" alert-danger hide" id="size3_error"> Please Enter Size </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Rate</label>
                                                    <input class="form-control outline" id="rate3" name="rate3" value="" type="number" min="1" placeholder="Enter Rate ">
                                                    <label class=" alert-danger hide" id="rate3_error"> Please Enter Rate </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Size</label>
                                                    <input class="form-control outline" id="size4" name="size4" value="" type="number" min="1" placeholder="Enter Size ">
                                                    <label class=" alert-danger hide" id="size4_error"> Please Enter Size </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="property-price-after">Rate</label>
                                                    <input class="form-control outline" id="rate4" name="rate4" value="" type="number" min="1" placeholder="Enter Rate ">
                                                    <label class=" alert-danger hide" id="rate4_error"> Please Enter Rate </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="add-title-tab">
                                        <h3>Maps & Plan</h3>
                                    </div>

                                    <div class="add-tab-row push-padding-bottom">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="property-price-after">Upload Pdf</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <button class="btn btn-primary">
                                                        <input type="file" name="pdf" value="" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" >
                                                    </button>
                                                    <label class=" alert-danger hide" id="size1_error"> Please Select Property Pdf </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-title-tab">
                                    <h3>Maps & Plan</h3>
                                </div>

                                <div class="add-tab-row push-padding-bottom">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="property-price-after">Upload Pdf</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary">
                                                    <input type="file" name="pdf" value="" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" >
                                                </button>
                                                <label class=" alert-danger hide" id="size1_error"> Please Enter Size </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="add-tab-row push-padding-bottom">
                                <div class="account-block text-right">
                                    <button type="button" id="buttonbacktwo" class="btn btn-info">Back</button>
                                    <button type="button" id="buttonthree" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="account-block hide" id="blockfour">
                        <div class="add-title-tab">
                            <h3>Property Features</h3>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">

                                <div class="row hide" id="housefeature">
                                    @foreach($housefeature as $feature)
                                        <div class="col-sm-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="feature[]" value="{{ $feature->id }}">
                                                    {{ $feature->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <div class="row hide" id="landfeature">
                                    @foreach($landfeature as $feature)
                                        <div class="col-sm-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="feature[]" value="{{ $feature->id }}">
                                                    {{ $feature->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <div class="row hide" id="projectsfeature">
                                    @foreach($projectsfeature as $feature)
                                        <div class="col-sm-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="feature[]" value="{{ $feature->id }}">
                                                    {{ $feature->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>




                            </div>
                        </div>

                        <div class="add-title-tab">
                            <h3>Extra Features</h3>

                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row hide" id="houseservices">
                                    @foreach($houseservices as $services)
                                        <div class="col-sm-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="services[]" value="{{ $services->id }}">
                                                    {{ $services->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="row hide" id="landservices">
                                    @foreach($landservices as $services)
                                        <div class="col-sm-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="services[]" value="{{ $services->id }}">
                                                    {{ $services->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="row hide" id="projectsservices">
                                    @foreach($projectsservices as $services)
                                        <div class="col-sm-2">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="services[]" value="{{ $services->id }}">
                                                    {{ $services->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="add-tab-row push-padding-bottom">
                                <div class="account-block text-right">
                                    <button type="button" id="buttonbackfour" class="btn btn-info">Back</button>
                                    <button type="button" id="buttonfour" class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="account-block hide " id="blockfive">

                        <div class="add-title-tab">
                            <h3>Property media</h3>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row">
                                <div class="property-media "  id="fileupload33">
                                    <div class="media-gallery" >
                                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="btn btn-info">
                                                <input type="file" name="image[]" required accept="image/*">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="btn btn-danger">
                                                <input type="file" name="image[]"  accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="btn btn-primary">
                                                <input type="file" name="image[]"   accept="image/*">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="btn btn-success">
                                                <input type="file" name="image[]"  accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="btn btn-warning">
                                                <input type="file" name="image[]"  accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{--<div class="add-title-tab">--}}
                            {{--<h3>Property Expire</h3>--}}
                            {{--</div>--}}
                            {{--<div class="add-tab-content">--}}
                            {{--<div class="add-tab-row">--}}
                            {{--<div class="col-sm-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<select class="selectpicker" id="propertexpire" name="propertexpire" data-live-search="false" data-live-search-style="begins" title="Select" tabindex="-98">--}}
                            {{--<option class="bs-title-option" value="">Select</option>--}}
                            {{--<option value="1"> One Months</option>--}}
                            {{--<option value="2"> Two Months</option>--}}
                            {{--<option value="3"> Three Months</option>--}}
                            {{--<option value="4"> Four Months</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="add-tab-content">--}}
                            {{--<div class="add-tab-row">--}}
                            {{--<div class="col-sm-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="property-price-before" class="bold-class">Please Enter Property Video Url</label>--}}
                            {{--<input type="text" class="form-control" id="video_url" name="video_url" value="" placeholder="Enter Property Video Url Link">--}}
                            {{--<label class="alert-info"> Optional (Enter If you have your property Video on youtube) </label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}






                            <div class="add-tab-row push-padding-bottom">
                                <div class="account-block text-right">
                                    <button type="button" id="buttonbackfive" class="btn btn-info">Back</button>
                                    <button type="Submit" class="btn btn-primary">Save Property</button>
                                </div>
                            </div>
                        </div>



                    </div>

                </form>
            </div>
        </div>

    </section>

    <!--end section page body-->
@endsection

@section('pagejs')

    <script>

        $('.target').change(function() {
            //alert($('select[name="city"]').find(':selected').attr('class').split(','));

            var coordinate = $('select[name="city"]').find(':selected').attr('class').split(',');//$('select option:selected').val().split(',');
            map.setCenter(new google.maps.LatLng(coordinate[0], coordinate[1]));
        });




        var map;
        var previousMarker; // global variable to store previous marker
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 33.7294,
                    lng: 73.0931
                },
                zoom: 10
            });
            map.addListener('click', function (e) {
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
        }
    </script>



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0C1Dmi-PE4nrIHJ3sxb2NqBdS6pj2n1o&callback=initMap" async defer></script>

    <script>
        $(document).ready(function ()
        {
            var subtype = '';

            $("#onlyhouse").click(function () {
                $("#house").removeClass("hide");
                $("#commercial").addClass("hide");
                $("#projects").addClass("hide");

                $("#housefeature").removeClass("hide");
                $("#houseservices").removeClass("hide");

                $("#landfeature").addClass("hide");
                $("#projectsfeature").addClass("hide");
                $("#landservices").addClass("hide");
                $("#projectsservices").addClass("hide");
            });
            $("#onlyland").click(function () {
                $("#house").addClass("hide");
                $("#commercial").removeClass("hide");
                $("#projects").addClass("hide");

                $("#landfeature").removeClass("hide");
                $("#landservices").removeClass("hide");

                $("#projectsfeature").addClass("hide");
                $("#projectsservices").addClass("hide");
                $("#housefeature").addClass("hide");
                $("#houseservices").addClass("hide");

            });
            $("#onlyprojects").click(function () {
                $("#house").addClass("hide");
                $("#commercial").addClass("hide");
                $("#projects").removeClass("hide");


                $("#projectsfeature").removeClass("hide");
                $("#projectsservices").removeClass("hide");

                $("#landfeature").addClass("hide");
                $("#landservices").addClass("hide");
                $("#housefeature").addClass("hide");
                $("#houseservices").addClass("hide");

            });



            $("form input:radio").change(function () {
                    subtype = $(this).val();

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

            $("#buttonone").click(function () {

                if (!($('input[name=purpose]:checked').length > 0)) {
                    $('#purpose_error').removeClass("hide");
                }
                if (!($('input[name=type]:checked').length > 0)) {
                    $('#type_error').removeClass("hide");
                }
                if (!($('input[name=subtype]:checked').length > 0) && $('input[name=type]:checked').val() == 'house') {
                    $('#house_error').removeClass("hide");
                }
                if (!($('input[name=subtype]:checked').length > 0) && $('input[name=type]:checked').val() == 'land') {
                    $('#land_error').removeClass("hide");
                }
                if (!($('input[name=subtype]:checked').length > 0) && $('input[name=type]:checked').val() == 'projects') {
                    $('#projects_error').removeClass("hide");
                }



                if (($('input[name=purpose]:checked').length > 0) && ($('input[name=type]:checked').length > 0) && ($('input[name=subtype]:checked').length > 0))
                {
                    $("#headone").removeClass("active");
                    $("#headtwo").addClass("active");
                    $("#blockone").addClass("hide");
                    $("#blocktwo").removeClass("hide");
                    initMap();
                }

            });

            $("#buttonbackone").click(function () {
                $("#headtwo").removeClass("active");
                $("#headone").addClass("active");
                $("#blocktwo").addClass("hide");
                $("#blockone").removeClass("hide");

            });




            $("#buttontwo").click(function () {

                var city = $("#city").val();
                if (city == '') {
                    $("#city").focus();
                    $('#city_error').removeClass("hide");
                }
                var address = $("#address").val();
                if (address == '') {
                    $("#address").focus();
                    $('#address_error').removeClass("hide");
                }
                var latitude = $("#latitude").val();
                var longitude = $("#longitude").val();
                if (latitude == '' || longitude == '') {
                    $('#map_error').removeClass("hide");
                }

                if (latitude != '' && longitude != '' && address != '' && address != '') {

                    $("#headtwo").removeClass("active");
                    $("#headthree").addClass("active");
                    $("#blockthree").removeClass("hide");
                    $("#blocktwo").addClass("hide");
                    if ($('input[name=type]:checked').val() == 'projects') {
                        $('#projects_size').removeClass("hide");
                        $('#homeandcommercial').addClass("hide");
                    } else {
                        $('#homeandcommercial').removeClass("hide");
                        $('#projects_size').addClass("hide");
                    }
                }
            });

            $("#buttonbacktwo").click(function () {

                $("#headthree").removeClass("active");
                $("#headtwo").addClass("active");
                $("#blockthree").addClass("hide");
                $("#blocktwo").removeClass("hide");

            });

            $("#buttonthree").click(function () {
                var property_title = $("#property_title").val();
                if (property_title == '') {
                    $('#title_error').removeClass("hide");
                }
                var description = $("#description").val();
                if (description == '') {
                    $('#description_error').removeClass("hide");
                }
                var area = $("#area").val();
                if (area == '') {
                    $('#area_error').removeClass("hide");
                }
                var area_unit = $("#area_unit").val();
                if (area_unit == '') {
                    $('#area_unit_error').removeClass("hide");
                }
                var Label = $("#Label").val();
                if (Label == '') {
                    $("#Label").focus();
                    $('#Label_error').removeClass("hide");
                }

                var ConstructedArea = $("#ConstructedArea").val();
                if (ConstructedArea == '') {
                    $("#ConstructedArea").focus();
                    $('#ConstructedArea_error').removeClass("hide");
                }
                var OwnerShipStatus = $("#OwnerShipStatus").val();
                if (OwnerShipStatus == '') {
                    $("#OwnerShipStatus").focus();
                    $('#OwnerShipStatus_error').removeClass("hide");
                }
                var ConstructionYear = $("#ConstructionYear").val();
                if (ConstructionYear == '') {
                    $("#ConstructionYear").focus();
                    $('#ConstructionYear_error').removeClass("hide");
                }
                var OpenArea = $("#OpenArea").val();
                if (OpenArea == '') {
                    $("#OpenArea").focus();
                    $('#OpenArea_error').removeClass("hide");
                }

                if ($('input[name=type]:checked').val() == 'projects')
                {
                    var size1 = $("#size1").val();
                    if (size1 == '') {
                        $('#size1_error').removeClass("hide");
                    }
                    var rate1 = $("#rate1").val();
                    if (rate1 == '') {
                        $('#rate1_error').removeClass("hide");
                    }
                    var size2 = $("#size2").val();
                    if (size2 == '') {
                        $('#size2_error').removeClass("hide");
                    }
                    var rate2 = $("#rate2").val();
                    if (rate2 == '') {
                        $('#rate2_error').removeClass("hide");
                    }
                    var size3 = $("#size3").val();
                    if (size3 == '') {
                        $('#size3_error').removeClass("hide");
                    }
                    var rate3 = $("#rate3").val();
                    if (rate3 == '') {
                        $('#rate1_error').removeClass("hide");
                    }
                    var size4 = $("#size4").val();
                    if (size4 == '') {
                        $('#size4_error').removeClass("hide");
                    }
                    var rate4 = $("#rate4").val();
                    if (rate4 == '') {
                        $('#rate4_error').removeClass("hide");
                    }

                    if (area != '' && area_unit != '' && property_title != '' && description != '' && size1 != '' && rate1 != '' && size2 != '' && rate2 != '' && ConstructedArea != '' && OwnerShipStatus != '' && ConstructionYear != '' && OpenArea != '')
                    {
                        $("#headthree").removeClass("active");
                        $("#headfour").addClass("active");
                        $("#blockthree").addClass("hide");
                        $("#blockfour").removeClass("hide");
                    }

                } else {

                    var price = $("#price").val();
                    if (price == '') {
                        $('#price_error').removeClass("hide");
                    }
                    var height = $("#height").val();
                    if (height == '') {
                        $('#height_error').removeClass("hide");
                    }
                    var width = $("#width").val();
                    if (width == '') {
                        $('#width_error').removeClass("hide");
                    }


                    if ( subtype == 'School / College' ||
                        subtype == 'Guest House/Banquet Hall' ||
                        subtype == 'Office' ||
                        subtype == 'Lower Protion' ||
                        subtype == 'Upper Portion' ||
                        subtype == 'Form Houses' ||
                        subtype == 'Flats / Appartments' ||
                        subtype == 'Houses / Villas'
                    ) {
                        var beds = $("#beds").val();
                        if (beds == '') {
                            $("#beds").focus();
                            $('#beds_error').removeClass("hide");
                        }
                        var bathroom = $("#bathroom").val();
                        if (bathroom == '') {
                            $("#bathroom").focus();
                            $('#bathroom_error').removeClass("hide");
                        }
                        var floor = $("#floor").val();
                        if (floor == '') {
                            $("#floor").focus();
                            $('#floor_error').removeClass("hide");
                        }
                        var kitchens = $("#kitchens").val();
                        if (kitchens == '') {
                            $("#kitchens").focus();
                            $('#kitchens_error').removeClass("hide");
                        }


                        if (beds != '' && bathroom != '' && floor != '' && floor != '' && kitchens != '' && area != '' && area_unit != '' && property_title != '' && description != '' && height != '' && width != '' && ConstructedArea != '' && OwnerShipStatus != '' && ConstructionYear != '' && OpenArea != '')
                        {
                            $("#headthree").removeClass("active");
                            $("#headfour").addClass("active");
                            $("#blockthree").addClass("hide");
                            $("#blockfour").removeClass("hide");
                        }


                    }else {

                        if (area != '' && area_unit != '' && property_title != '' && description != '' && height != '' && width != '' && ConstructedArea != '' && OwnerShipStatus != '' && ConstructionYear != '' && OpenArea != '')
                        {
                            $("#headthree").removeClass("active");
                            $("#headfour").addClass("active");
                            $("#blockthree").addClass("hide");
                            $("#blockfour").removeClass("hide");
                        }

                    }


                }


            });

            $("#buttonbackfour").click(function () {
                $("#headfour").removeClass("active");
                $("#headthree").addClass("active");
                $("#blockfour").addClass("hide");
                $("#blockthree").removeClass("hide");

            });
            $("#buttonbackfive").click(function () {
                //alert('buttonbackfive');
                $("#headfive").removeClass("active");
                $("#headfour").addClass("active");
                $("#blockfive").addClass("hide");
                $("#blockfour").removeClass("hide");

            });


            $("#buttonfour").click(function ()
            {

                $("#headfour").removeClass("active");
                $("#headfive").addClass("active");
                $("#blockfour").addClass("hide");
                $("#blockfive").removeClass("hide");
                //initMap();

            });



            $(function () {
                $("input#files[type='file']").change(function () {
                    var $fileUpload = $("input#files[type='file']");
                    if (parseInt($fileUpload.get(0).files.length) > 5) {
                        alert("You can only upload a maximum of 5 files");
                        return false;
                    }
                });
            });



            $("#one").click(function () {

                $('.one').removeClass('hide');
                $('#page-block-1').addClass('active')
                $('.two').addClass('hide');
                $('.three').addClass('hide');
                $('.four').addClass('hide');
                $('#page-block-2').removeClass('active')
                $('#page-block-3').removeClass('active')
                $('#page-block-4').removeClass('active')


            });
            $("#two").click(function () {
                $('.two').removeClass('hide');
                $('#page-block-2').addClass('active')
                $('.one').addClass('hide');
                $('.three').addClass('hide');
                $('.four').addClass('hide');
                $('#page-block-1').removeClass('active')
                $('#page-block-3').removeClass('active')
                $('#page-block-4').removeClass('active')
            });
            $("#three").click(function () {
                $('.three').removeClass('hide');
                $('#page-block-3').addClass('active')
                $('.one').addClass('hide');
                $('.two').addClass('hide');
                $('.four').addClass('hide');
                $('#page-block-2').removeClass('active')
                $('#page-block-1').removeClass('active')
                $('#page-block-4').removeClass('active')
            });
            $("#four").click(function () {
                $('.four').removeClass('hide');
                $('#page-block-4').addClass('active')
                $('.one').addClass('hide');
                $('.two').addClass('hide');
                $('.three').addClass('hide');
                $('#page-block-2').removeClass('active')
                $('#page-block-3').removeClass('active')
                $('#page-block-1').removeClass('active')
            });
        });
    </script>


    <!-- The template to display files available for upload -->
    {{--<script id="template-upload" type="text/x-tmpl">--}}
    {{--{% for (var i=0, file; file=o.files[i]; i++) { %}--}}
    {{--<tr class="template-upload fade">--}}
    {{--<td>--}}
    {{--<span class="preview"></span>--}}
    {{--</td>--}}

    {{--<td>--}}

    {{--{% if (!i) { %}--}}
    {{--<button class="btn btn-warning cancel">--}}
    {{--<i class="glyphicon glyphicon-ban-circle"></i>--}}
    {{--<span>Cancel</span>--}}
    {{--</button>--}}
    {{--{% } %}--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--{% } %}--}}
    {{--</script>--}}
    <!-- The template to display files available for download -->
    {{--<script id="template-download" type="text/x-tmpl">--}}
    {{--{% for (var i=0, file; file=o.files[i]; i++) { %}--}}
    {{--<tr class="template-download fade">--}}
    {{--<td>--}}
    {{--<span class="preview">--}}
    {{--{% if (file.thumbnailUrl) { %}--}}
    {{--<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>--}}
    {{--{% } %}--}}
    {{--</span>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<p class="name">--}}
    {{--{% if (file.url) { %}--}}
    {{--<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>--}}
    {{--{% } else { %}--}}
    {{--<span>{%=file.name%}</span>--}}
    {{--{% } %}--}}
    {{--</p>--}}
    {{--{% if (file.error) { %}--}}
    {{--<div><span class="label label-danger">Error</span> {%=file.error%}</div>--}}
    {{--{% } %}--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<span class="size">{%=o.formatFileSize(file.size)%}</span>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--{% if (file.deleteUrl) { %}--}}
    {{--<button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>--}}
    {{--<i class="glyphicon glyphicon-trash"></i>--}}
    {{--<span>Delete</span>--}}
    {{--</button>--}}
    {{--<input type="checkbox" name="delete" value="1" class="toggle">--}}
    {{--{% } else { %}--}}
    {{--<button class="btn btn-warning cancel">--}}
    {{--<i class="glyphicon glyphicon-ban-circle"></i>--}}
    {{--<span>Cancel</span>--}}
    {{--</button>--}}
    {{--{% } %}--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--{% } %}--}}
    {{--</script>--}}




    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
    {{--<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->--}}
    {{--<script src="{{asset('assets/js/vendor/jquery.ui.widget.js')}}"></script>--}}
    {{--<!-- The Templates plugin is included to render the upload/download listings -->--}}
    {{--<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>--}}
    {{--<!-- The Load Image plugin is included for the preview images and image resizing functionality -->--}}
    {{--<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>--}}

    {{--<!-- The basic File Upload plugin -->--}}
    {{--<script src="{{asset('assets/js/jquery.fileupload.js')}}"></script>--}}
    {{--<!-- The File Upload processing plugin -->--}}
    {{--<script src="{{asset('assets/js/jquery.fileupload-process.js')}}"></script>--}}
    {{--<!-- The File Upload image preview & resize plugin -->--}}
    {{--<script src="{{asset('assets/js/jquery.fileupload-image.js')}}"></script>--}}



    {{--<!-- The File Upload user interface plugin -->--}}
    {{--<script src="{{asset('assets/js/jquery.fileupload-ui.js')}}"></script>--}}
    {{--<!-- The main application script -->--}}
    {{--<script src="{{asset('assets/js/main.js')}}"></script>--}}

@endsection