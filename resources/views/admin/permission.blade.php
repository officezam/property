@extends('admin/layouts/app')

<!--page level css -->

@section('pagecss')

    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.colReorder.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.scroller.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link href="{{asset('assets/css/pages/tables.css')}}" rel="stylesheet" type="text/css">

@endsection
<!--end of page level css-->

@section('content')

<?php
//dd($data)
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
                        <a href="permission">Package List Detail</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">

                <!-- row-->
                <div class="row">

                    <div class="col-lg-12">
                        <a href="{{ url('admin/permission/create') }}" >
                        <button class="btn btn-primary btn-lg pull-right" >
                            Add New Package List
                        </button>
                        </a>
                    </div>

                    @if(Session::has('Message'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <?php echo $Message; ?>
                        </div>
                    @endif


                    <div class="col-lg-12">

                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Re-order Columns
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Package Permission List Name</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($data as $user) { ?>

                                        <tr>
                                            <td><?php echo $user['id']; ?></td>
                                            <td><?php echo $user['name']; ?></td>

                                        </tr>
                                    <?php
                                    }
                                    ?>

                                    </tbody>
                                </table>
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
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/dataTables.tableTools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/dataTables.colReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/table-advanced.js')}}"></script>
    <!-- end of page level js -->
@endsection
