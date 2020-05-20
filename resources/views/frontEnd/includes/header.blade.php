<header>
    <div class="top">
      <div class="main_body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="date_time">
                <p>Date-Time</p>
              </div>
            </div>
            <div class="col-sm-6 ">
              <div class="social float-right">
                <p>Social media</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="middle">
      <div class="main_body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3">
              <div class="logo">
                <a href="{{ url('/')}}">
                  <img class="img_size" src="{{ url('Upload/Logo/'.$logo->logo)}}">
                </a>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="search_bar">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Go</button>  
                   </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3">

            </div>
              
          </div>
        </div>
      </div> 
    </div>  <!-- middle -->

    <div class="menubar">
      <div class="main_body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="menu">
                <nav class="navbar navbar-expand-md  navbar-dark">
                  <!-- <a class="navbar-brand" href="#">Home</a> -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">

                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}"><i class="fa fa-home"></i></a>
                      </li>

                      @foreach($categories as $category)
                      <li class="nav-item">
                        <a class="nav-link" href="{{ $category->category_url}}"> {{ $category->category_name }}</a>
                      </li>
                      @endforeach
                    </ul>
                  </div>  
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="background: #e9e9e9;">
          <div class="main_menu">
            
          </div> <!-- main_menu -->
        </div>
      </div>
    </div>
  </header>