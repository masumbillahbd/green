
@extends('backEnd.master')

@section('title')
	Admin | View Post

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

                  <table class="table table-bordered">
                    <tr>
                      <th>ID</th>
                      <td>{{$postView->id}}</td>
                    </tr>

                    

                    <tr>
                      <th>Title</th>
                      <td>{{$postView->title}}</td>
                    </tr>

                    <tr>
                      <th>Sub Title</th>
                      <td>{{$postView->sub_title}}</td>
                    </tr>

                    <tr>
                      <th>post_content</th>
                      <td>{{$postView->post_content}}</td>
                    </tr>

                    <tr>
                      <th>Image</th>
                      <td> 
                        <img src="{{ asset('Upload/News_Image/'.$postView->image)}}" style="width: 100px;height: 100px;">
                      </td>
                    </tr>

                    <tr>
                      <th>writer_name</th>
                      <td>{{$postView->writer_name}}</td>
                    </tr>

                    <tr>
                      <th>post_status</th>
                      <td>{{$postView->post_status}}</td>
                    </tr>
                  </table>
						
                  </div>
                </div>
              </div>

              

          </div>
        </div>

@endsection











