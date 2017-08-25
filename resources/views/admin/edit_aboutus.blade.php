@extends('admin/layouts/app')

@section('pagecss')

<!--page level css -->
<link href="{{asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css')}}"  rel="stylesheet" media="screen"/>
<link href="{{asset('assets/css/pages/editor.css')}}" rel="stylesheet" type="text/css"/>
<!--end of page level css-->
@endsection


@section('content')
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>About Us</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('admin/dashboard')}}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li class="active">About Us</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="col-sm-6">
                @if(Session::has('Message'))
                <div class="alert alert-success">
                    <p class="errors">{!! Session::get('Message') !!}</p>
                </div>
                @endif
            </div></div>
        <!--main content-->
        <div class="row pd-15">
            <div class='col-lg-12'>
                <!-- /.box -->
                <div class='box well well-sm'>
                    <div class='box-header'>
                        <h3 class='box-title text-info'>
<!--                            About Us
                            <small>Edit</small>-->
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools"></div>
                        <!-- /. tools --> </div>
                    <!-- /.box-header -->
                    @foreach($data as $record)
                    <div class='box-body pad'>
                        <form method="POST" action="{{ URL::action('AboutUsController@update',['id' => $record]) }}">
                            {{ csrf_field() }}

                            <textarea class="textarea editor-cls" placeholder="Place some text here" value="" style="height:500px" id="description" name="description">{{ $record->description}}</textarea>

                            <div class="row">
                                <div class="form-group" style="margin-top: 30px">
                                    <div class="col-md-6 ">
                                        <button type="submit" class="btn btn-success">
                                            <i class="glyphicon glyphicon-file"></i> Update
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /.col--> </div>

        <!--main content ends--> </section>
    <!-- content --> </aside>
@endsection

@section('pagejs')


<!-- Bootstrap WYSIHTML5 -->
<script  src="{{asset('assets/vendors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script  src="{{asset('assets/vendors/ckeditor/adapters/jquery.js')}}" type="text/javascript" ></script>
<script  src="{{asset('assets/vendors/tinymce/js/tinymce/tinymce.min.js')}}" type="text/javascript" ></script>
<script  src="{{asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js')}}" type="text/javascript"></script>
<script  src="{{asset('assets/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js')}}" type="text/javascript"></script>
<script  src="{{asset('assets/js/pages/editor.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
@endsection

