@extends('admin/layouts/app')

<!--page level css -->

@section('pagecss')

@endsection
<!--end of page level css-->

@section('content')

    <?php
    //dd($permission)
    ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Package Listing</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="dashboard">
                        <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('add_package') }}">Package List Detail</a>
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">

            <!-- row-->
            <div class="row">


                @if(session('Message'))
                    {{session('Message')}}
                @endif
                @if(Session::has('Message'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ $message }}
                    </div>
                @endif


                <div class="col-lg-12">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white" id="livicon-46" style="width: 16px; height: 16px;"><svg height="16" version="1.1" width="16" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-46"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#ffffff" stroke="none" d="M23,13H9V12H23V13ZM23,15H9V16H23V15ZM23,18H9V19H23V18ZM23,21H9V22H23V21ZM23,24H9V25H23V24ZM23,27H9V28H23V27Z" opacity="0" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#ffffff" stroke="none" d="M26,10C26,8,22,4,20,4H6.6C6.269,4,6,4.269,6,4.6V12H5C3.3440000000000003,12,2,13.094,2,14.75V23.4C2,23.73,2.269,24,2.6,24H6V27.4C6,27.73,6.269,28,6.6,28H25.4C25.729999999999997,28,26,27.73,26,27.4V24H29.4C29.729999999999997,24,30,23.73,30,23.4V14.749999999999998C30,13.093999999999998,28.656,11.999999999999998,27,11.999999999999998H26V10ZM24,26H8V23H24V26ZM24,12H8V6H20C21.199,6,20,10,20,10S24,8.1,24,10V12ZM27,16C26.447,16,26,15.553,26,15S26.447,14,27,14S28,14.447,28,15S27.553,16,27,16Z" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                Please Select Any One Package Below
                            </h3>
                            <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="bs-example">


                                <div class="row">
                                    <div class="col-xs-12 col-md-12">

                                        <?php
                                        $btnArray = array('danger' , 'warning' , 'primary' , 'success' , 'info' );

                                        foreach ($package as $packageData) {
                                        ?>
                                        <a href="{{ url('admin/packagepermission/'. $packageData['id']) }}" class="btn btn-{{ $btnArray[array_rand($btnArray)] }} btn-lg btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-new-window"></span>
                                            <br>
                                          {{ $packageData['name'] }}
                                        </a>
                                       <?php } ?>
                                    </div>
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

    <!-- end of page level js -->
@endsection
