@extends('backEnd.master')

@section('title')
	Admin | Manage Tag

@endsection

@section('mainContent')
	
<div class="right_col" role="main">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
      </div>
    </div>
    <div class="clearfix"></div>
    


    <div class="col-md-6 col-sm-6 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Create New Tag <small>Please fill up this form carefully</small></h2>
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

          {!! Form::open(['url' => 'tag/save', 'method' => 'POST', 'class' => 'form-horizontal']) !!}  

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tag Name <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="first-name" name="tag_name" class="form-control ">
                <span class="text-danger">{{ $errors->has('tag_name') ? $errors->first('tag_name'):''}}</span>
              </div>
            </div>

            <div class="ln_solid"></div>
            <div class="item form-group">
              <div class="col-md-6 col-sm-6 offset-md-3">
                <button class="btn btn-primary" type="reset">Reset</button>
                <button type="submit" class="btn btn-success">Tag Save</button>
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>


    <div class="col-md-6 col-sm-6">
      <div class="x_panel">
        <div class="x_title">
          <h2>All Tag <small>manage your Tag</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr class="headings">
                  <th>
                    <input type="checkbox" id="check-all" class="flat">
                  </th>
                  <th class="column-title"># </th>
                  <th class="column-title">Tag Name </th>
                  <th class="column-title">Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($tags as $tag)
                <tr class="even pointer">
                  <td class="a-center ">
                    <input type="checkbox" class="flat" name="table_records">
                  </td>
                  <td>{{$tag->id}}</td>
                  <td>{{$tag->tag_name}}</td>
                  <td>
                  	<!-- <a href="" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </a> -->
                  	<a href="{{ url('/tag/delete/'.$tag->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this!')"> <i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- row -->
</div>

@endsection











