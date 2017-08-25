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
            <h1>Property Cities</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="dashboard">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('city/create') }}">Cities</a>
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

                            <form action="{{ url('admin/city') }}" method="post"  class="form-horizontal">
                                {!! csrf_field() !!}

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label > City Name </label>
                                        <div class="@if($errors->first('city')) has-error @endif">
                                            <label class="control-label" for="inputError"><?php echo $errors->first('city'); ?></label>
                                            <input type="text" name="city" value="" placeholder="Enter City Name" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label > City Zipcode  </label>
                                        <div class="@if($errors->first('zipcode')) has-error @endif">
                                            <label class="control-label" for="inputError"><?php echo $errors->first('zipcode'); ?></label>
                                            <input type="text" name="zipcode" value="" placeholder="Enter City Zipcode" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label > Add Latitude </label>
                                        <div class="@if($errors->first('latitude')) has-error @endif">
                                            <label class="control-label" for="inputError"><?php echo $errors->first('latitude'); ?></label>
                                            <input type="text" id="latitude" name="latitude" value="" placeholder="Enter Latitude" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label > Add longitude  </label>
                                        <div class="@if($errors->first('longitude')) has-error @endif">
                                            <label class="control-label" for="inputError"><?php echo $errors->first('longitude'); ?></label>
                                            <input type="text" id="longitude" name="longitude" value="" placeholder="Enter Longitude" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="" for="example-select">Location on Map</label>
                                        <div id="map" style="height: 300px;"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <button class="btn-success btn">Save City</button>
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
    <script>
        var map;
        var previousMarker; // global variable to store previous marker
        function initMap() {

            var myLatLng = {
                lat: 33.72148,
                lng: 73.04329
            };


            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 33.72148,
                    lng: 73.04329
                },
                zoom: 5
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
                title: '{{ 'Multan'  }} !'
            });

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0C1Dmi-PE4nrIHJ3sxb2NqBdS6pj2n1o&callback=initMap" async defer></script>


@endsection