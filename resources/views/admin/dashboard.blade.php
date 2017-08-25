@extends('admin/layouts/app')

@section('pagecss')

    <link href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages/calendar_custom.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/only_dashboard.css')}}" />
@endsection
<!--end of page level css-->

@section('content')
    <aside class="right-side">
        <!-- Main content -->
        <section class="content-header">
            <h1>Welcome to Dashboard</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <a href="/admin/">
                        <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                        Home
                    </a>
                </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                @if( Auth::user()->type == 'admin')
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Agency</span>
                                            <div class="number" id="myTargetElement4"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if( Auth::user()->user_id == '')
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Agent</span>
                                            <div class="number" id="totalAgent"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="totalAgentLastweek"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="totalAgentLast30days"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="lightbluebg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 text-right">
                                        <span>Total Property</span>
                                        <div class="number" id="myTargetElement1"></div>
                                    </div>
                                    <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement1.1"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement1.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="redbg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 pull-left">
                                        <span>Total Sale Property</span>
                                        <div class="number" id="myTargetElement2"></div>
                                    </div>
                                    <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement2.1"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement2.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="goldbg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 pull-left">
                                        <span>Total Rent Property</span>
                                        <div class="number" id="myTargetElement3"></div>
                                    </div>
                                    <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="myTargetElement3.1"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="myTargetElement3.2"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                    <!-- Trans label pie charts strats here-->
                    <div class="goldbg no-radius">
                        <div class="panel-body squarebox square_boxs">
                            <div class="col-xs-12 pull-left nopadmar">
                                <div class="row">
                                    <div class="square_box col-xs-7 pull-left">
                                        <span>Total Projects Property</span>
                                        <div class="number" id="totalprojectsProperty"></div>
                                    </div>
                                    <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <small class="stat-label">Last Week</small>
                                        <h4 id="totalprojectsPropertyLastweek"></h4>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <small class="stat-label">Last Month</small>
                                        <h4 id="totalprojectsPropertyLast30days"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/row-->

        </section>
    </aside>
    <!-- right-side -->



@endsection

@section('pagejs')
    <!-- begining of page level js -->
    <!--  todolist-->
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- EASY PIE CHART JS -->
    <script src="{{asset('assets/vendors/charts/easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/charts/jquery.easypiechart.min.js')}}"></script>
    <!--for calendar-->
    <script src="{{asset('assets/vendors/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/fullcalendar/calendarcustom.min.js')}}" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="{{asset('assets/vendors/charts/jquery.flot.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/charts/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="{{asset('assets/vendors/charts/jquery.sparkline.js')}}"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="{{asset('assets/vendors/countUp/countUp.js')}}"></script>
    <!--   maps -->
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendors/jscharts/Chart.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
                @if( Auth::user()->type == 'admin')
        var demo = new countUp("myTargetElement4", 1254, {{ $totalAgency }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement4.1", 2544, {{ $totalAgencyLastweek }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement4.2", 1584, {{ $totalAgencyLast30days }}, 0, 6, options);
        demo.start();
                @endif
                @if( Auth::user()->user_id == '')
        var demo = new countUp("totalAgent", 1254, {{ $totalAgent }}, 0, 6, options);
        demo.start();
        var demo = new countUp("totalAgentLastweek", 2544, {{ $totalAgentLastweek }}, 0, 6, options);
        demo.start();
        var demo = new countUp("totalAgentLast30days", 1584, {{ $totalAgentLast30days }}, 0, 6, options);
        demo.start();
                @endif
        var demo = new countUp("myTargetElement1", 12.52,{{ $totalProperty }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement1.1", 1254, {{ $totalPropertyLastweek }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement1.2", 1254, {{ $totalPropertyLast30days }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement2", 1, {{ $totalSaleProperty }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement2.1", 154, {{ $totalSalePropertyLastweek }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement2.2", 2582, {{ $totalSalePropertyLast30days }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement3", 24.02, {{ $totalRentProperty }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement3.1", 2582, {{ $totalRentPropertyLastweek }}, 0, 6, options);
        demo.start();
        var demo = new countUp("myTargetElement3.2", 25858, {{ $totalRentPropertyLast30days }}, 0, 6, options);
        demo.start();
        var demo = new countUp("totalprojectsProperty", 24.02, {{ $totalprojectsProperty }}, 0, 6, options);
        demo.start();
        var demo = new countUp("totalprojectsPropertyLastweek", 2582, {{ $totalprojectsPropertyLastweek }}, 0, 6, options);
        demo.start();
        var demo = new countUp("totalprojectsPropertyLast30days", 25858, {{ $totalprojectsPropertyLast30days }}, 0, 6, options);
        demo.start();
    </script>
    <!-- end of page level js -->
@endsection
