@extends('admin/layouts/app')

@section('pagecss')
<!--page level css -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
<link href="{{asset('assets/css/pages/tables.css')}}" rel="stylesheet" type="text/css" />
<!-- end of page level css -->
@endsection
@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>All Blog Post view</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{url('admin/dashboard')}}">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Home
                </a>
            </li>
            <li class="active">Blog</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="offset2 col-lg-6">
            @if(Session::has('delete'))
    <div class="alert alert-danger ">
        <p class="errors">{!! Session::get('delete') !!}</p>
    </div>
    @endif
    @if(Session::has('Block'))
    <div class="alert alert-danger">
        <p class="errors">{!! Session::get('Block') !!}</p>
    </div>
    @endif
    @if(Session::has('Success'))
    <div class="alert alert-success">
        <p class="errors">{!! Session::get('Success') !!}</p>
    </div>
    @endif
        </div></div>
        <div class="row">
            <div class="panel panel-default1 ">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        
                    </h4>
                    <hr>
                </div>
                <br />
                <div class="panel-body">
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th>Id</th>
                                <th>Image</th>
                                <th>Post</th> 
                                <th>Created At</th>
                                @if( Auth::user()->type == 'admin')
                                <th>Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog_post as $data)
                            <tr>
                                <td>{{$data->id}} </td>
                                 <td>  <a href="#" ><img src="<?php echo url('BlogImages/') ?>/{{ $data->image }}" width="40" height="40"></a></td>
                                <td>{!! str_limit("$data->blog_post", 300) !!}.....</td>
                                <td>{{$data->created_at}}</td>
                               
                                <td>
                                   <a href="{{ URL::action('BlogController@edit', ['id' => $data]) }}" title="Edit"><button class="label label-primary"> <i class="fa fa-edit">Edit</i></button></a>
                                    <a href="{{ URL::action('BlogController@destroy_blogPost', ['id' => $data]) }}">
                                        <button class="label label-danger"> <i class="fa fa-trash-o">Delete</i></button>
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
                                            Status 
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete this Post? This operation is irreversible.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                                        <a href="#" type="button" class="btn btn-danger" >Delete</a>
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
        <!-- row--> </section>
</aside>
@endsection

@section('pagejs')
<!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/dataTables.bootstrap.js')}}"></script>
<script>
$(document).ready(function () {
    $('#table').dataTable();
});
</script>
<!-- end of page level js -->
@endsection