@extends('backEnd.master')

@section('title')
	Admin | Manage Sub Category

@endsection

@section('mainContent')
	
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sub Categories</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>All Sub Categories <small>manage your Sub Categories</small></h2>
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
                    <th class="column-title">Parent </th>
                    <th class="column-title">Parent ID</th>
                    <th class="column-title"> Sub Category </th>
                    <th class="column-title">Sub Category URL</th>
                    <th class="column-title">Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($subCategories as $subCategory)
                  <tr class="even pointer">

                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td>{{ $subCategory->id }}</td>
                    <td>{{ $subCategory->category->category_name }}</td>
                    <td>{{ $subCategory->category_id }}</td>
                    <td>{{ $subCategory->sub_category_name }}</td>
                    <td>{{ $subCategory->sub_category_url }}</td>
                    <td>
                    	<a href="{{ url('subCategory/edit/'.$subCategory->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </a>
                    	<a href="{{ url('subCategory/delete/'.$subCategory->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this!')"> <i class="fa fa-trash"></i> </a>
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











