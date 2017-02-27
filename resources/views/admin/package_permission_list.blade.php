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
                    <div class="panel-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <span class="glyphicon glyphicon-hand-right"></span>
                                   Select/Unselect Package Permissions
                                </h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Brazil</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Netherlands</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">France</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Germany</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">Others</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-footer text-center">
                                <button type="button" class="btn btn-primary btn-block btn-sm">Vote</button>
                                <a href="#" class="small">View Result</a>
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
