@extends('backEnd.master')

@section('title')
	Admin | Create Photo
@endsection

@section('mainContent')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>photos</h3>
      </div>
    </div>

    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-6 col-sm-6 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Update a Photo <small>Please fill up this form carefully</small></h2>
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

            {!! Form::open(['url' => '/photo/update', 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}  

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Photo Tag <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="photo_tag" name="photo_tag" value="{{ $photo->photo_tag }}" class="form-control ">
                  <input type="hidden" id="photo_tag" name="id" value="{{ $photo->id }}" class="form-control ">
                  <span class="text-danger">{{ $errors->has('photo_tag') ? $errors->first('photo_tag'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Photo <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="file" id="photo" name="photo" >

                  <img src="{{ asset('Upload/Photos/'.$photo->photo)}}" alt="" width="" height="150px" style="max-width: 150px; max-height: 150px; ">

                  <span class="text-danger">{{ $errors->has('photo') ? $errors->first('photo'):''}}</span>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
				          <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Photo Update</button>
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