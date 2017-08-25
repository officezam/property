@extends('admin/layouts/app')

@section('pagecss')
<!--page level css -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
<link href="{{asset('assets/css/pages/tables.css')}}" rel="stylesheet" type="text/css" />
<!-- end page css -->
@endsection
<style type="text/css">
    .red{
        color: red;
    }
    .green{
        color: green;
    }
</style>

@section('content')

<?php
//dd($data)
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Deleted users</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('admin/dashboard')}}">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Users</li>
            <li class="active">Deleted users</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="users-remove" data-size="18" data-c="#ffffff" data-hc="#ffffff"></i>
                        Deleted Users List
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>
                                    User E-mail
                                </th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_data as $data)
                            <tr>
                                <td>{{$data->first_name}}</td>
                                <td>{{$data->last_name}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                <i <?php
                                if ($data->status == 1) {
                                    echo 'class="fa fa-circle green"';
                                } else {
                                    echo 'class="fa fa-circle red"';
                                }
                                ?> > </i>
                                </td>
                                <td>{{$data->created_at}}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#delete_confirm">
                                        <i class="livicon" data-name="user-flag" data-size="18" data-loop="true" data-c="#01BC8C" data-hc="#01BC8C"  title="restore user"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Modal for showing delete confirmation -->
                            <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="user_delete_confirm_title">
                                                Approve User
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure to Approve this user? This operation is irreversible.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="{{url('admin/mark_user/unblock').'/'.$data->id}}" type="button" class="btn btn-success">Approve</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </tbody>
                    </table>
                              

                </div>
            </div>
        </div>
    </section>

</aside>
@endsection

@section('pagejs')
<!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/dataTables.bootstrap.js')}}"></script>
<script>
$(document).ready(function () {
$('#table').DataTable();
});
</script>
<!-- end of page level js -->
@endsection