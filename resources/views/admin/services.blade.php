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
            <h1>Property Services</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/services') }}">Services</a>
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
                                All Property Services
                            </h3>
                            <span class="pull-right">
                                <i class="fa fa-fw fa-chevron-up clickable"></i>
                                <i class="fa fa-fw fa-times removepanel clickable"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <a href="/admin/services/create" class=" btn btn-primary btn-lg pull-right">Add Service</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered" id="citytable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Feature Name</th>
                                    <th>Feature Type</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $var = 1; ?>
                                @foreach ($data as $user)

                                    <tr>
                                        <td>{{  $var }}</td>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['type'] }}</td>
                                        <td>
                                            <a href="/admin/services/{{ $user['id'] }}/edit" class="btn default btn-xs purple">
                                                <i class="fa fa-edit"></i>
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/admin/servicedestroy/{{$user['id']}}" class="btn default btn-xs black">
                                                <i class="fa fa-trash-o"></i>
                                                Delete
                                            </a>
                                        </td>

                                    </tr>
                                    <?php $var++; ?>
                                @endforeach

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
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
    <!-- end of page level js -->
@endsection