<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pakistan Property Real Estate</title>
    <!--Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Sell Buy Rent Homes & Properties In Pakistan Real Estate justdeal">
    <meta name="description" content=" justdeal -the leading property portal based in Pakistan - offering the highest levels of service to property buyers sellers landlords tenants alike and to real estate agents in Karachi Lahore Islamabad and all over Pakistan. We are providing quality property - commercial plots, lands and markets - villas - apartments - bungalows - home buying and villa rentals.">
    <meta name="author" content="Favethemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('assets/images/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('assets/images/favicons/safari-pinned-tab.svg')}}" >
    <meta name="theme-color" content="#ffffff">

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />

    <!-- // SLIDER -->
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet" type="text/css" />
    <!--   // END SLIDER -->
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />


    <!-- begining of page level css -->
@yield('pagecss')
<!-- end of page level css -->

</head>
<body>
<?php  $server = explode('.', Request::server('HTTP_HOST')); ?>
@if($server[0] != 'justdeal')
@include('layouts.header')
@endif
    @yield('content')


@include(('layouts.footer'))


<script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script type="text/javascript" src="{{asset('assets/js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- // SLIDER  js  -->
<script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- END SLIDER  -->
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-select.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/vegas.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/infobox.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/markerclusterer.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- end of global js -->
{{--<script src="http://code.jquery.com/jquery-1.10.2.js"></script>--}}
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



<script>
    $( "#keyword" ).autocomplete({
        source: function( request, response ) {
            $.ajax( {
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "searchajax",
                dataType: "html",
                data: {
                    term: request.term, "_token": "{{ csrf_token() }}",
                },
                success: function( data ) {
                    var dataArray;
                    data = JSON.parse(data);
//                        response( data );
                    response($.map(data, function (el) {
                        dataArray =  {
                            label: el.value,
                            value: el.value
                        };
                        console.log(dataArray);
                        return dataArray;
                    }));
                }
            } );
        },
        minLength: 2,
        select: function( event, ui ) {
            $("#keyword").text( "Selected: " + ui.item.value );
        }
    } );
</script>

<script>
    $( "#keywordsidebar" ).autocomplete({
        source: function( request, response ) {
            $.ajax( {
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "searchajax",
                dataType: "html",
                data: {
                    term: request.term, "_token": "{{ csrf_token() }}",
                },
                success: function( data ) {
                    var dataArray;
                    data = JSON.parse(data);
//                        response( data );
                    response($.map(data, function (el) {
                        dataArray =  {
                            label: el.value,
                            value: el.value
                        };
                        console.log(dataArray);
                        return dataArray;
                    }));
                }
            } );
        },
        minLength: 2,
        select: function( event, ui ) {
            $("#keyword").text( "Selected: " + ui.item.value );
        }
    } );
</script>

<!-- begining of page level js -->
@yield('pagejs')
<!-- end of page level js -->

</body>
</html>
