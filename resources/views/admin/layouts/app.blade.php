

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}">
    {{--*/ $page =  Request::path() == '/' ? 'Home' : ucwords(str_replace('-', ' ', Request::path()))  /*--}}

    <title> User-Pannel Real Estate </title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{asset('assets/vendors/font-awesome-4.2.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/styles/black.css')}}" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="{{asset('assets/css/panel.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/metisMenu.css')}}" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->

    <!-- begining of page level css -->
    @yield('pagecss')
    <!-- end of page level css -->

</head>
<body class="skin-josh">
@include('admin.layouts.header')
<div class="wrapper row-offcanvas row-offcanvas-left">

    @include('admin.layouts.sidebar')


    @yield('content')

</div>

@include(('admin.layouts.footer'))
<!-- global js -->
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!--livicons-->
<script src="{{asset('assets/vendors/livicons/minified/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/livicons/minified/livicons-1.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/josh.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/metisMenu.js')}}" type="text/javascript"> </script>
<script src="{{asset('assets/vendors/holder-master/holder.js')}}" type="text/javascript"></script>
<!-- end of global js -->

<!-- begining of page level js -->
@yield('pagejs')
<!-- end of page level js -->

</body>
</html>
