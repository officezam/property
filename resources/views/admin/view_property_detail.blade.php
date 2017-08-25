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
            <h1>Propert Deatil</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/property') }}">Properties</a>
                </li>
                <li class="active"> <a href="{{ '/admin/property_detail/'.$singleproperty->id }}">Single Property </a> </li>
            </ol>
        </section>

        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav  nav-tabs ">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">
                                <i class="livicon" data-name="umbrella" data-size="18" data-c="black" data-hc="#fff" ></i>
                                Type & Purpose
                            </a>
                        </li>

                        <li>
                            <a href="#tab3" data-toggle="tab">
                                <i class="livicon" data-name="zoom-in" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Property Detail
                            </a>
                        </li>

                        <li>
                            <a href="#tab4" data-toggle="tab">
                                <i class="livicon" data-name="gift" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Features & Services
                            </a>
                        </li>
                        <li>
                            <a href="#tab5" data-toggle="tab" >
                                <i class="livicon" data-name="image" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Property Images
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/admin/edit_property/'.$singleproperty->id)}}" >
                                <i class="livicon" data-name="pen" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                Edit Property
                            </a>
                        </li>

                    </ul>
                    <div  class="tab-content mar-top">
                        <div id="tab1" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel">
                                        <div class="panel-body">

                                            <div class="col-md-12">
                                                <table class="table table-bordered table-striped" id="users">
                                                    <tr>
                                                        <th>Property Purpose</th>
                                                        <td class="text-capitalize">{{ $singleproperty->purpose }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Property Type</th>
                                                        <td class="text-capitalize">{{ $singleproperty->type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Property Sub Category</th>
                                                        <td class="text-capitalize">{{ $singleproperty->subtype }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>City</th>
                                                        <td class="text-capitalize">
                                                            {{ $singleproperty->city }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Latitude</th>
                                                        <td class="text-capitalize">
                                                            {{ $singleproperty->latitude }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Longitude</th>
                                                        <td class="text-capitalize">
                                                            {{ $singleproperty->longitude }}
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div id="map" style="height: 200px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top">

                                    <table class="table table-bordered table-striped" id="users">

                                        <tr>
                                            <th>Property Title</th>
                                            <td>
                                                {{ $singleproperty->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Property Description</th>
                                            <td>
                                                {{ $singleproperty->description }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Property Area</th>
                                            <td>{{ $singleproperty->area }}</td>
                                        </tr>
                                        <tr>
                                            <th>Area Unit </th>
                                            <td>{{ $singleproperty->area_unit }}</td>
                                        </tr>
                                        @if($singleproperty->type == 'projects')

                                            <tr>
                                                <th>Size </th>
                                                <td>{{ $singleproperty->size1 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td>{{ $singleproperty->rate1 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Size </th>
                                                <td>{{ $singleproperty->size2 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td>{{ $singleproperty->rate2 }}</td>
                                            </tr>

                                            <tr>
                                                <th>Size </th>
                                                <td>{{ $singleproperty->size3 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td>{{ $singleproperty->rate3 }}</td>
                                            </tr>

                                            <tr>
                                                <th>Size </th>
                                                <td>{{ $singleproperty->size4 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Rate</th>
                                                <td>{{ $singleproperty->rate4 }}</td>
                                            </tr>
                                            <tr>
                                                <th>Property Documents</th>
                                                <td><a href="{{ asset('public/propetyImages/'.$singleproperty->id.'/'.$singleproperty->pdf)  }}" class="btn btn-primary" target="_blank" download >Download Property Document</a>
                                                </td>
                                            </tr>

                                        @endif
                                        @if($singleproperty->type != 'projects')
                                            <tr>
                                                <th>Property Height </th>
                                                <td>{{ $singleproperty->height }}</td>
                                            </tr>
                                            <tr>
                                                <th>Property Width</th>
                                                <td>{{ $singleproperty->width }}</td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <th>Property Expire Date</th>
                                            <td>{{ $singleproperty->propertexpire }}</td>
                                        </tr>
                                        <tr>
                                            <th>Property Viseo Url</th>
                                            <td>{{ $singleproperty->video_url }}</td>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top">

                                    <div class="col-md-6">
                                        <ul>
                                            @foreach($propertyFeatures as $propertyFeature)
                                                <li>{{ $propertyFeature->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            @foreach($propertyServices as $propertyService)
                                                <li>{{ $propertyService->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12 pd-top">

                                    <div class="col-md-4">
                                        <label class="" for="example-select">Image 1</label>
                                        <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/355x240'.$singleproperty->image0)  }}" alt="{{ $singleproperty->title }}">
                                    </div>
                                    @if($singleproperty->image1 != '')
                                        <div class="col-md-4">
                                            <label class="" for="example-select">Image 2</label>
                                            <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/355x240'.$singleproperty->image1)  }}" alt="{{ $singleproperty->title }}">
                                        </div>
                                    @endif
                                    @if($singleproperty->image2 != '')
                                        <div class="col-md-4">
                                            <label class="" for="example-select">Image 3</label>
                                            <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/355x240'.$singleproperty->image2)  }}" alt="{{ $singleproperty->title }}">
                                        </div>
                                    @endif
                                    @if($singleproperty->image3 != '')
                                        <div class="col-md-4">
                                            <label class="" for="example-select">Image 4</label>
                                            <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/355x240'.$singleproperty->image3)  }}" alt="{{ $singleproperty->title }}">
                                        </div>
                                    @endif
                                    @if($singleproperty->image4 != '')
                                        <div class="col-md-4">
                                            <label class="" for="example-select">Image 5</label>
                                            <img src="{{ asset('public/propetyImages/'.$singleproperty->id.'/355x240'.$singleproperty->image4)  }}" alt="{{ $singleproperty->title }}">
                                        </div>
                                    @endif


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
    <script  src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/x-editable/jquery.mockjax.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/x-editable/bootstrap-editable.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/pages/user_profile.js')}}" type="text/javascript"></script>

    <script>

        function initMap() {
            var myLatLng = {
                lat: {{ $singleproperty->latitude }},
                lng: {{ $singleproperty->longitude }}
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: myLatLng
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: '{{ $singleproperty->title }}'
            });
        }
    </script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0C1Dmi-PE4nrIHJ3sxb2NqBdS6pj2n1o&callback=initMap" async defer></script>


    <!-- end of page level js -->
@endsection
