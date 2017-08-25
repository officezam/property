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

                <form action="{{ url('admin/packagepermission') }}" method="post"  class="form-horizontal">
                    {!! csrf_field() !!}
                    <input type="hidden" name="package_id" value="{{ $package[0]->id }}">

                    <div class="col-lg-12">
                        <div class="panel-body">
                            <button class="panel-body btn btn-primary">
                                <span class="glyphicon glyphicon-hand-right"></span>
                                {{   $package[0]->name }}
                            </button>
                        </div>

                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-hand-right"></span>
                                        Select/Unselect Package Permissions
                                    </h3>
                                </div>
                                <div class="panel-body">

                                    @if (Session::has('Success'))
                                        <div class="alert alert-info">{{ Session::get('Success') }}</div>
                                    @endif

                                    <ul class="list-group">
                                        <?php $count = 0; ?>
                                        @foreach($permission as $key => $value)

                                            <li class="list-group-item">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="permission_id[]" type="checkbox" @if(isset($permission_id[$value->id])) checked @endif value="{{ $value->id }}" >{{ $value->name }}</label>
                                                </div>
                                            </li>
                                            <?php $count++; ?>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="panel-footer text-center">
                                    <button type="SUBMIT" class="btn btn-primary btn-block btn-sm">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
