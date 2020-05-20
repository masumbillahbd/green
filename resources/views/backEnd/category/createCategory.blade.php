@extends('backEnd.master')

@section('title')
	Admin | Create Category
@endsection

@section('mainContent')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Categories</h3>
      </div>
    </div>

    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Create New Category <small>Please fill up this form carefully</small></h2>
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

            {!! Form::open(['url' => 'category/save', 'method' => 'POST', 'class' => 'form-horizontal']) !!}  

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" name="category_name" required="required" class="form-control ">
                  <span class="text-danger">{{ $errors->has('category_name') ? $errors->first('category_name'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> URL <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="category_url" required="required" class="form-control">
                  <span class="text-danger">{{ $errors->has('category_url') ? $errors->first('category_url'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Position <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="middle-name" class="form-control" type="number" name="category_position">
                  <span class="text-danger">{{ $errors->has('category_position') ? $errors->first('category_position'):''}}</span>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
				          <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Category Save</button>
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