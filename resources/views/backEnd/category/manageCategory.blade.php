@extends('backEnd.master')

@section('title')
	Admin | Manage Categoty

@endsection

@section('mainContent')
	
<div class="right_col" role="main">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
        <h3>Categories</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    

    <div class="col-md-12 col-sm-12  ">
      <div class="x_panel">
        <div class="x_title">
          <h2>All Category <small>manage your Category</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <h4 class="text-center text-success"> {{ Session::get('message') }} </h4>
          <div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
              <thead>
                <tr class="headings">
                  <th>
                    <input type="checkbox" id="check-all" class="flat">
                  </th>
                  <th class="column-title"># </th>
                  <th class="column-title">Category Name </th>
                  <th class="column-title"> URL </th>
                  <th class="column-title">Position</th>
                  <th class="column-title">Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($categories as $category)
                <tr class="even pointer">
                  <td class="a-center ">
                    <input type="checkbox" class="flat" name="table_records">
                  </td>
                  <td>{{$category->id}}</td>
                  <td>{{$category->category_name}}</td>
                  <td>{{$category->category_url}}</td>
                  <td>{{$category->category_position}}</td>
                  <td>
                  	<a href="{{ url('/category/edit/'.$category->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </a>
                  	<a href="{{ url('/category/delete/'.$category->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this!')"> <i class="fa fa-trash"></i> </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection











