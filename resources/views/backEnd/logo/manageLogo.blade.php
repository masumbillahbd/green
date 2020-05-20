
@extends('backEnd.master')

@section('title')
	Admin | Manage Logo

@endsection

@section('mainContent')
	
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Logo</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Logo <small>manage your Logo</small></h2>
                    <ul class="nav navbar-right panel_toolbox">

                      @if($count_logo<1)
                      <a href="{{ url('/logo/add')}}" class="btn btn-success btn-sm" style="color: white;"> <i class="fa fa-plus-circle"></i> Add Logo  </a>
                      @endif

                       &nbsp;
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i> </a></li>
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
                            <th class="column-title">ID </th>
                            <th class="column-title">Logo </th>
                            <th class="column-title">Action</th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($logos as $logo)
                          <tr class="even pointer">

                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$logo->id}}</td>
                            <td> <img src="{{ asset('Upload/logo/'.$logo->logo)}}" style="max-width: 100px; max-height: 100px;transform: rotate(0deg);"> </td>
                            <td>
                              <a href="{{ url('/logo/edit/'. $logo->id)}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> </a>
                              <a href="{{ url('/logo/delete/'. $logo->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this!')"><i class="fa fa-trash"></i> </a>
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











