@extends('backEnd.master')

@section('title')
	Admin Panel | Create a New Logo
@endsection

@section('mainContent')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Post</h3>
      </div>
    </div>

    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Create a Logo <small>Please fill up this form carefully</small> </h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <h4 class="text-center text-success"> {{ Session::get('message') }} </h4>

            {!! Form::open(['url' => '/logo/save', 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}  

      

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Logo <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="file" id="logo" name="logo">
                  <img id="showImage" src="{{ url('public/Upload/logo/no-image.png')}}" alt="" height="80" width="80">
                  <span class="text-danger">{{ $errors->has('logo') ? $errors->first('logo'):''}}</span>
                </div>
              </div>

              
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
				          <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Create Logo</button>
                </div>
              </div>
            {!! Form::close() !!}  

          </div>
        </div>
      </div>

      
    </div> <!-- row -->
  </div>
</div>

@endsection