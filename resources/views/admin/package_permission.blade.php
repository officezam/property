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
                                <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white" id="livicon-46" style="width: 16px; height: 16px;"></i>
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
