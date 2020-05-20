
@extends('backEnd.master')

@section('title')
	Admin | Manage Post

@endsection

@section('mainContent')
	
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All Post</h3>
              </div>

              <div class="title_right">

                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <form  action="{{ url('/search') }}" method="get">
                    <div class="input-group">
                      <input type="text" name="search" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit"  style="color: white;">Go!</button>
                      </span>
                    </div>
                  </form>
                
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            

            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Post <small>manage your Post</small></h2>
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
                            <th class="column-title">Title </th>
                            <th class="column-title">Sub Title </th>
                            <!-- <th class="column-title">Post Content</th> -->
                            <th class="column-title">Writer </th>
                            <th class="column-title">User ID </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Image </th>
                            <th class="column-title">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($posts as $post)
                          <tr class="even pointer">

                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->sub_title}}</td>
                            <!-- <td>{{$post->post_content}}</td> -->
                            <td>{{$post->writer_name}}</td>
                            <td>{{$post->user_id}}</td>
                            <td> {{ $post->post_status == 1 ? 'active' : 'inactive'  }} </td>
                            <td> <img src="{{ asset('Upload/News_Image/'.$post->image) }}" style="max-width: 100px; max-height: 100px;transform: rotate(0deg);"> </td>
                            <td>
                              <a href="{{ url('post/view/'.$post->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>
                              <a href="{{ url('post/edit/'.$post->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </a>
                              <a href="{{ url('post/delete/'.$post->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this!')"><i class="fa fa-trash"></i> </a>
                            </td>

                          </tr>
                          @endforeach


                        </tbody>
                      </table>

                      {{ $posts->links() }} 

                      <!-- {{ $posts->onEachSide(5)->links() }} -->
                    </div>
							
						
                  </div>
                </div>
              </div>

              

          </div>
        </div>

@endsection











