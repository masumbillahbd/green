@extends('backEnd.master')

@section('title')
	Admin Panel | Edit Post
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
            <h2>Create a New Post <small>Please fill up this form carefully</small></h2>
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

            {!! Form::open(['url' => '/post/update', 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'name' => 'postForm' ]) !!}  

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Title <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" id="first-name" name="title" value="{{ $postById->title}}" class="form-control ">
                  <input type="text" id="first-name" name="id" value="{{ $postById->id}}" class="form-control ">
                  <span class="text-danger">{{ $errors->has('title') ? $errors->first('title'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Sub Title <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" id="first-name" name="sub_title" value="{{ $postById->sub_title}}" class="form-control ">
                  <span class="text-danger">{{ $errors->has('sub_title') ? $errors->first('sub_title'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Writer Name <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" id="writer_name" name="writer_name" value="{{ $postById->writer_name}}" class="form-control ">
                  <span class="text-danger">{{ $errors->has('writer_name') ? $errors->first('writer_name'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Post Content <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">

                  <textarea class="form-control tinymce" name="post_content"> {{ $postById->post_content}} </textarea>

                  <span class="text-danger">{{ $errors->has('post_content') ? $errors->first('post_content'):''}}</span>
                </div>
              </div>

             

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> News Image <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="file" id="image" name="image" accept="image/*">

                  <img src="{{ asset('Upload/News_Image/'.$postById->image)}}" alt="" height="150" width="150">

                  <span class="text-danger">{{ $errors->has('image') ? $errors->first('image'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name"> Publication Status <span class="required text-danger">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <span style="font-size: 11px; color: red;">Do you want to publish it?</span>
                  <select class="form-control" name="post_status">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>

                  <span class="text-danger">{{ $errors->has('post_status') ? $errors->first('post_status'):''}}</span>
                </div>
              </div>



              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
				          <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Create post</button>
                </div>
              </div>
            {!! Form::close() !!}  

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript"> 
  document.forms['postForm'].elements['post_status'].value={{ $postById->post_status }}
</script>

@endsection