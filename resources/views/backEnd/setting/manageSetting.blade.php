
@extends('backEnd.master')

@section('title')
  Admin Panel | Manage General Setting
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
                    <h2> All Data <small>manage your Data</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      @if($count_data<1)
                      <a href="{{ url('/setting/add')}}" class="btn btn-success btn-sm" style="color: white;"> <i class="fa fa-plus-circle"></i> Add   </a>
                      @endif
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
                            <!-- <th class="column-title"># </th> -->
                            <th class="column-title">URL </th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Meta Description</th>
                            <th class="column-title">Meta Keywords</th>
                            <th class="column-title">Meta Author</th>
                            <th class="column-title">Address</th>
                            <th class="column-title">Copy right</th>
                            <th class="column-title">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($all_data as $data)
                            <tr class="even pointer">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <!-- <td> {{$data->id}}</td> -->
                              <td> {{$data->site_url}}</td>
                              <td> {{$data->title}}</td>
                              <td> {{$data->meta_description}}</td>
                              <td> {{$data->meta_keywords}}</td>
                              <td> {{$data->meta_author}}</td>
                              <td> {{$data->address}}</td>
                              <td> {{$data->copy_right}}</td>
                              <td>
                                <a href="{{ url('/setting/edit/'.$data->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </a>
                                <a href="{{ url('/setting/delete/'.$data->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this!')"><i class="fa fa-trash"></i> </a>
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
</div>


@endsection