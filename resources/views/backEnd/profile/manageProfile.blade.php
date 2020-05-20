@extends('backEnd.master')

@section('title')
	Admin | Manage Categoty

@endsection

@section('mainContent')
	
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>My Profile <small style="font-size: 15px; font-style:italic; font-family: serif; "> ({{ $user->name}})</small> </h3>



      </div>
    </div>
    <div class="clearfix"></div>
    

    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2>All Post <small></small></h2>
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
                    <th class="column-title"> Syb Title </th>
                    <!-- <th class="column-title">Position</th> -->
                    <!-- <th class="column-title">Image</th> -->
                    <th class="column-title">Action</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($user->posts as $post )
                  <tr class="even pointer">

                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->sub_title}}</td>
                    <!-- <td>{{$post->post_content}}</td> -->
                    <!-- <td>
                      <img src="{{ asset('Upload/News_Image/'.$post->image)}}" width="70" height="80">
                    </td> -->
                    <td>{{ $post->post_status == 1 ? 'Active' : 'Inactive'}}</td>
                    
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
