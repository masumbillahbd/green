@extends('backend.master')

@section('title')
	Admin Panel | Update User
@endsection

@section('mainContent')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users</h3>
      </div>
    </div>

    <div class="clearfix"></div>
    
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Create New User <small>Please fill up this form carefully</small></h2>
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

            {!! Form::open(['url' => '/user/update', 'method' => 'POST', 'class' => 'form-horizontal', 'id' =>'myForm']) !!}  
            
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" name="name" value="{{ $userById->name}}" class="form-control ">
                  <input type="hidden" id="first-name" name="id" value="{{ $userById->id}}" class="form-control ">
                  <span class="text-danger">{{ $errors->has('name') ? $errors->first('name'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> User Role <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select name="role" class="form-control">
                    <option value="">Choose..</option>
                    <option value="Admin">Admin</option>
                    <option value="Editor">Editor</option>
                    <option value="User">User</option>
                  </select>

                  <span class="text-danger">{{ $errors->has('role') ? $errors->first('role'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="first-name" name="email" value="{{ $userById->email}}" class="form-control ">
                  <span class="text-danger">{{ $errors->has('email') ? $errors->first('email'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Number <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" name="number" value="{{ $userById->number}}" class="form-control ">
                  <span class="text-danger">{{ $errors->has('number') ? $errors->first('number'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Password <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="password" id="password" name="password" class="form-control " >
                  <span class="text-danger">{{ $errors->has('password') ? $errors->first('password'):''}}</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Confirm Password <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="password" id="confirm_password" name="confirm_password" class="form-control" >
                  <span class="text-danger">{{ $errors->has('confirm_password') ? $errors->first('confirm_password'):''}}</span>
                  <span id="passMess" style="color: red;"> </span>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
				          <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success"> <i class="fa fa-btn fa-user"></i> Update </button>
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
  
  // $(document).ready(function (){

  //   $("#myForm").validate({
  //     rules: {
  //        password: { 
  //         required: true,
  //         minlength: 6,
  //         maxlength: 10,
  //        } , 
  //        confirm_password: { 
  //           equalTo: "#password",
  //           minlength: 6,
  //           maxlength: 10
  //         }
  //     },
  //       messages:{
  //         password: { 
  //          required:"the password is required"

  //         }
  //       }
  //   });


  // });


  $(function () {
        $("#myForm").click(function () {
            var password = $("#password").val();
            var confirm_password = $("#confirm_password").val();
            if (password != confirm_password) {
                var passMess = "Passwords do not match!";
                document.getElementById("passMess").innerHTML = passMess;
                return false;
            }
            return true;
        });

        
    });
   

</script>

@endsection