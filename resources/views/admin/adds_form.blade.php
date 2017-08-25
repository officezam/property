@extends('admin/layouts/app')

@section('pagecss')
    <!--page level css -->
    <link href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/vendors/x-editable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages/user_profile.css')}}" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
@endsection


@section('content')
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Save Advertisement</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('admin/dashboard')}}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li class="active">Adds</li>
            </ol>
        </section>

        <section class="content">
            <div class="col-md-12">
                @if(Session::has('Message'))
                    <div class="alert alert-success">
                        <p class="errors">{!! Session::get('Message') !!}</p>
                    </div>
                @endif
                @if(Session::has('success12'))
                    <div class="alert alert-success">
                        <p class="errors">{!! Session::get('success12') !!}</p>
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Save Your Adds</div>
                    <div class="panel-body">
                        <form action="{{URL::action('AddsController@store')}}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input id="id" type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="image">Adds Image</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}"  placeholder="Choose Your Image">
                                    @if($errors->first('image'))
                                        <label class="error text-danger" for="image">*{{ $errors->first('image') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="webSite_url">WebSite URL  *</label>
                                    <input  type="url"class="form-control" id="webSite_url" name="webSite_url" value="{{old('webSite_url')}}"  placeholder="Enter Link Name">
                                    @if($errors->first('webSite_url'))
                                        <label class="error text-danger" for="webSite_url">*{{ $errors->first('webSite_url') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="image">Expiry Date</label>
                                    <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{old('expiry_date')}}"  placeholder="Selcet Expiry Date">
                                    @if($errors->first('expiry_date'))
                                        <label class="error text-danger" for="image">*{{ $errors->first('expiry_date') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Dsiplay Adds</label>
                                    <select class="form-control" name="type">
                                        <option value="Front">Front Page</option>
                                        <option value="Single">Single</option>
                                        <option value="Listing">Listing</option>
                                    </select>
                                    @if($errors->first('type'))
                                        <label class="error text-danger" for="image">*{{ $errors->first('type') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Active</label>
                                    <div class="radio mar-left5">
                                        <label for="example-radio1">
                                            <input type="radio" id="example-radio1" name="status" value="1">Yes</label>
                                        <label for="example-radio2">
                                            <input type="radio" id="example-radio2" name="status" value="2">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">
                                        <i class="glyphicon glyphicon-file"></i> Save Advertisement
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </aside>


@endsection

@section('pagejs')
    <!-- begining of page level js -->
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="{{asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/x-editable/jquery.mockjax.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/x-editable/bootstrap-editable.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/pages/user_profile.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->
@endsection

