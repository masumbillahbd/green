
@extends('backEnd.master')

@section('title')
  Admin Panel | Create General Setting
@endsection

@section('mainContent')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <!-- <h3>Post</h3> -->
      </div>
    </div>

    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Create General Data <small>Please fill up this form carefully</small> </h2>
            <ul class="nav navbar-right panel_toolbox">
              
              
              <a href="{{ url('/setting/manage')}}" class="btn btn-success btn-sm" style="color: white;"> <i class="fa fa-list"></i> List   </a>

              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <h4 class="text-center text-success"> {{ Session::get('message') }} </h4>

            {!! Form::open(['url' => '/setting/save', 'method' => 'POST', 'class' => 'form-horizontal' ]) !!}  
              @csrf
              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Site URL<span class="required text-danger"></span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" id="logo" name="site_url"  class="form-control">
                  <span class="text-danger">{{ $errors->has('site_url') ? $errors->first('site_url'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Site Title <span class="required text-danger"></span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" id="logo" name="title" class="form-control ">
                  <span class="text-danger">{{ $errors->has('title') ? $errors->first('title'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Meta Description <span class="required text-danger"></span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <textarea id="meta_description" name="meta_description"  class="form-control" rows="5"> </textarea>
                  <!-- <input type="text" id="meta_description" name="meta_description"  class="form-control "> -->
                  <span class="text-danger">{{ $errors->has('meta_description') ? $errors->first('meta_description'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Meta Keywords <span class="required text-danger"></span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <textarea id="meta_description" name="meta_keywords"  class="form-control" rows="5"> </textarea>
                  <!-- <input type="text" id="meta_keywords" name="meta_keywords" class="form-control "> -->
                  <span class="text-danger">{{ $errors->has('meta_keywords') ? $errors->first('meta_keywords'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Address <span class="required text-danger"></span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <textarea id="meta_description" name="address"  class="form-control" rows="5"> </textarea>
                  <!-- <input type="text" id="address" name="address"  class="form-control "> -->
                  <span class="text-danger">{{ $errors->has('address') ? $errors->first('address'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Meta Author <span class="required text-danger"></span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" id="meta_author" name="meta_author" class="form-control ">
                  <span class="text-danger">{{ $errors->has('meta_author') ? $errors->first('meta_author'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Copy right <span class="required text-danger"></span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" id="copy_right" name="copy_right" class="form-control ">
                  <span class="text-danger">{{ $errors->has('copy_right') ? $errors->first('copy_right'):''}}</span>
                </div>
              </div>


              
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Create Data</button>
                </div>
              </div>
            {!! Form::close() !!}  

          </div>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection