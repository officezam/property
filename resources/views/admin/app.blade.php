<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}">
    {{--*/ $page =  Request::path() == '/' ? 'Home' : ucwords(str_replace('-', ' ', Request::path()))  /*--}}

    <title>{{env('project_name')}} - {{$page}}</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="vendors/jvectormap/jquery-jvectormap.css" />
    <link rel="stylesheet" href="vendors/animate/animate.min.css">
    <link rel="stylesheet" href="css/only_dashboard.css" />
    <!--end of page level css-->

</head>
<body class="skin-josh">
@include('layouts.header')
<div class="wrapper row-offcanvas row-offcanvas-left">

    @include('layouts.sidebar')
    @yield('content')

</div>

@include(('layouts.footer'))
<!-- global js -->
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--livicons-->
<script src="vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
<script src="vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
<script src="js/josh.js" type="text/javascript"></script>
<script src="js/metisMenu.js" type="text/javascript"> </script>
<script src="vendors/holder-master/holder.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!--  todolist-->
<script src="js/todolist.js"></script>
<!-- EASY PIE CHART JS -->
<script src="vendors/charts/easypiechart.min.js"></script>
<script src="vendors/charts/jquery.easypiechart.min.js"></script>
<!--for calendar-->
<script src="vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="vendors/fullcalendar/calendarcustom.min.js" type="text/javascript"></script>
<!--   Realtime Server Load  -->
<script src="vendors/charts/jquery.flot.min.js" type="text/javascript"></script>
<script src="vendors/charts/jquery.flot.resize.min.js" type="text/javascript"></script>
<!--Sparkline Chart-->
<script src="vendors/charts/jquery.sparkline.js"></script>
<!-- Back to Top-->
<script type="text/javascript" src="vendors/countUp/countUp.js"></script>
<!--   maps -->
<script src="vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="vendors/jscharts/Chart.js"></script>
<script src="js/dashboard.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var composeHeight = $('#calendar').height() +21 - $('.adds').height();
        $('.list_of_items').slimScroll({
            color: '#A9B6BC',
            height: composeHeight + 'px',
            size: '5px'
        });
    });
</script>
<!-- end of page level js -->

</body>
</html>
