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
            <h1>Update</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('admin/dashboard')}}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/view_adds')}}">View Adds</a>
                </li>
                <li class="active">Edit Adds</li>
            </ol>
        </section>

        <section class="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-11">
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
                    <div class="col-md-11">
                        <div class="panel panel-default">
                            <div class="panel-heading">Upload Your Adds</div>
                            <div class="panel-body">


                                    <form action="{{ URL::action('AddsController@update_adds') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $Adds_data->id }}" >
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="image">Change Image</label>
                                                <input type="file" class="form-control" id="image" name="image" value=""  placeholder="Choose Your Image">

                                                @if($errors->first('image'))
                                                    <label class="error text-danger" for="image">*{{ $errors->first('image') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="webSite_url">WebSite URL  *</label>
                                                <input  type="url"class="form-control" id="webSite_url" name="webSite_url" value="{{$Adds_data->webSite_url}}"  placeholder="Enter webSite_url Name">
                                                @if($errors->first('webSite_url'))
                                                    <label class="error text-danger" for="webSite_url">*{{ $errors->first('webSite_url') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="image">Change Expiry Date</label>
                                                <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{ $date }}"  placeholder="Selcet Expiry Date">

                                                @if($errors->first('expiry_date'))
                                                    <label class="error text-danger" for="image">*{{ $errors->first('expiry_date') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">Dsiplay Adds</label>
                                                <select class="form-control" name="type">
                                                    <option value="Front"   @if($Adds_data->type == 'Front') selected @endif>Front Page</option>
                                                    <option value="Single"  @if($Adds_data->type == 'Single') selected @endif>Single</option>
                                                    <option value="Listing" @if($Adds_data->type == 'Listing') selected @endif>Listing</option>
                                                </select>
                                                @if($errors->first('expiry_date'))
                                                    <label class="error text-danger" for="image">*{{ $errors->first('expiry_date') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Active</label>
                                                <div class="radio mar-left5">
                                                    <label for="example-radio1">
                                                        <input type="radio" id="example-radio1" name="status" value="1" @if($Adds_data->status == 1) checked @endif>Yes</label>
                                                    <label for="example-radio2">
                                                        <input type="radio" id="example-radio2" name="status" value="2" @if($Adds_data->status == 2) checked @endif>No</label>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="glyphicon glyphicon-file"></i> Update
                                                </button>
                                            </div>
                                        </div>

                                    </form>


                            </div>
                        </div>
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


