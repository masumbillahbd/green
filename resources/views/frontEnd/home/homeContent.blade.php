@extends('frontEnd.master')

@section('title')

	Home | Greenherald

@endsection

@section('mainContent')

  <div class="news_body">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-5">
        @foreach($post as $post)
          <a href="{{ url('/single/news/'.$post->id.'/'.$post->slug)}}">
            <div class="lead_body">
              <div class="lead_img">
                <img class="img-responsive img-thumbnail"  style="max-height: 50%;" src="{{ url('Upload/News_image/'.$post->image )}}">
              </div>
              <div class="lead_info">
                <h2 class="title"> {{ $post->title}} </h2>
              </div>
            </div>
          </a>
        @endforeach
        </div>

        <div class="col-sm-7">
          <div class="row">

            <div class="col-sm-6">
              @foreach($posts as $posts)
              <div class="f_r_s_c">
                <div class="panel_body">
                  <div class="news_list">
                    <a href="">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="image">
                            <img class="img_size" src="{{ url('Upload/News_image/'.$posts->image )}}">
                          </div>
                        </div>
                        <div class="col-sm-8 text_list">
                          <div class="info">
                            <h2 class="title">{{ $posts->title }}</h2>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div> <!-- f_r_s_c -->
              @endforeach

              


            </div> <!-- col-sm-6 -->

            <div class="col-sm-6">
              <div class="f_r_l_c">
                <p>Ad/Video</p>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <br>

    <section>
      
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-5">

            <dov class="row">
              @foreach($posts4 as $posts4)
              <dov class="col-sm-6">
                <div class="s_r_f_c">
                  <a href="">
                    <div class="image">
                      <img class="img_size" src="{{ url('Upload/News_image/'.$posts4->image )}}">
                    </div>
                    <div class="info">
                      <h2 class="title">{{ $posts4->title}}</h2>
                    </div>
                  </a>
                  <div class="category">
                    <a href="">Soprts</a>
                  </div>
                </div>
              </dov>
              @endforeach


            </dov>
          </div>

          <div class="col-sm-7">
            <div class="row">

              <div class="col-sm-6">
                @foreach($posts7 as $posts7)
                <div class="f_r_s_c">
                  <div class="panel_body">
                    <div class="news_list">
                      <a href="https://prothomalo.com">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="image">
                              <img class="img_size" src="{{ url('Upload/News_image/'.$posts7->image )}}">
                            </div>
                          </div>
                          <div class="col-sm-8 text_list">
                            <div class="info">
                              <h2 class="title">{{ $posts7->title}}</h2>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div> <!-- f_r_s_c -->
                @endforeach

                


              </div> <!-- col-sm-6 -->

              <div class="col-sm-6">
                <div class="LatestNewstab">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home">Latest</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#menu1">Popular</a>
                    </li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content" style="background: aliceblue;">
                    <div id="home" class="container tab-pane active"><br>
                      <ul style="list-style:square; ">
                        @foreach($latest as $latest)
                        <li style="padding-top: 5px;"><a href=""> {{ $latest->title }}  </a></li>
                        @endforeach
                      </ul>
                      
                      <p><a href=""> </a></p>
                      
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                      <h3>Popular</h3>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </section>

    <br>

  </div>  <!-- news_body -->







  <section class="one_cat pt-5 pb-5">
    <div class="news_body">
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-12">
            <div class="cat_name">
              <div class="headbar">
                <a href="">Government</a>
              </div>
            </div>
          </div>  
          
           

          <div class="col-sm-3">
            <div class="gov_news">
              <a href="">
                <div class="gov_img">
                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                </div>
                <div class="gov_info">
                  <h2 class="title">করোনার ‘সংক্রমণ’ হতে পারে বাংলাদেশের ম্যাচেও</h2>
                </div>
                <div class="summery">
                  জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...         
                </div>
              </a>
            </div>
          </div>


          <div class="col-sm-3">
            <div class="gov_news">
              <a href="">
                <div class="gov_img">
                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                </div>
                <div class="gov_info">
                  <h2 class="title">করোনার ‘সংক্রমণ’ হতে পারে বাংলাদেশের ম্যাচেও</h2>
                </div>
                <div class="summery">
                  জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...         
                </div>
              </a>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="gov_news">
              <a href="">
                <div class="gov_img">
                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                </div>
                <div class="gov_info">
                  <h2 class="title">করোনার ‘সংক্রমণ’ হতে পারে বাংলাদেশের ম্যাচেও</h2>
                </div>
                <div class="summery">
                  জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...         
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="gov_news">
              <a href="">
                <div class="gov_img">
                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                </div>
                <div class="gov_info">
                  <h2 class="title">করোনার ‘সংক্রমণ’ হতে পারে বাংলাদেশের ম্যাচেও</h2>
                </div>
                <div class="summery">
                  জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...         
                </div>
              </a>
            </div>
          </div>

        </div> <!-- row -->
     </div>         


    </div>
    
  </section>























  <section class="environment pt-5 pb-5">

    <div class="news_body">

      

      <div class="container-fluid">

        <div class="env_cat_name">
          <a href="">Environment</a>
        </div>


        <div class="row">
          <div class="col-sm-4">
            <div class="env_f_c">
              <div class="panel_body">
                <a href="">
                  <div class="image">
                    <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                  </div>
                  <div class="info">
                    <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...   </h2>
                    <p class="sub_title">ওয়ানডেতে এমন ইনিংস বাংলাদেশ ক্রিকেট এর আগে দেখেনি। চোখজুড়ানো সৌন্দর্যের ভয়াল সুন্দর ব্যাটিং। জিম্বাবুয়ের বিপক্ষে তৃতীয় ওয়ানডেতে এমন ব্যাটিং করেই রেকর্ড গড়া ১৭৬ রানের ইনিংস খেলেছেন লিটন দাস।  </p>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="env_m_c">
              <div class="panel_body">
                <div class="news_list">
                  <a href="">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                      </div>
                      <div class="col-sm-8 p-0">
                        <div class="info">
                          <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...   </h2>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="env_m_c">
              <div class="panel_body">
                <div class="news_list">
                  <a href="">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                      </div>
                      <div class="col-sm-8 p-0">
                        <div class="info">
                          <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...   </h2>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="env_m_c">
              <div class="panel_body">
                <div class="news_list">
                  <a href="">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                      </div>
                      <div class="col-sm-8 p-0">
                        <div class="info">
                          <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...   </h2>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="env_m_c">
              <div class="panel_body">
                <div class="news_list">
                  <a href="">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                      </div>
                      <div class="col-sm-8 p-0">
                        <div class="info">
                          <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...   </h2>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="env_m_c">
              <div class="panel_body">
                <div class="news_list">
                  <a href="">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                      </div>
                      <div class="col-sm-8 p-0">
                        <div class="info">
                          <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...   </h2>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-4">
            
          </div>
        </div>
      </div>
    </div> <!-- news_body -->
  </section>


  <section class="three_cat pt-5 pb-5">
    <div class="news_body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <div class="panel_body">
              <div class="category-heading">
                <a href="">Category</a>
              </div>

              <div class="section_col_4">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="link-hover-homepage">
                      <a href="">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                        <div class="title">
                          <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="col-sm-12">

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  <!-- col-sm-4 -->



          <div class="col-sm-4">
            <div class="panel_body">
              <div class="category-heading">
                <a href="">Category</a>
              </div>

              <div class="section_col_4">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="link-hover-homepage">
                      <a href="">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                        <div class="title">
                          <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="col-sm-12">

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  <!-- col-sm-4 -->


          <div class="col-sm-4">
            <div class="panel_body">
              <div class="category-heading">
                <a href="">Category</a>
              </div>

              <div class="section_col_4">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="link-hover-homepage">
                      <a href="">
                        <div class="image">
                          <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                        </div>
                        <div class="title">
                          <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="col-sm-12">

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="news_list">
                      <div class="link-hover-homepage">
                        <div class="single_news">
                          <a href="">
                            <div class="row">
                              <div class="col-sm-4">
                                <div class="image">
                                  <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                                </div>
                              </div>
                              <div class="col-sm-8 p-0">
                                <div class="title_heading">
                                  <h3>জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে...</h3>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  <!-- col-sm-4 -->


        </div>  <!-- row -->
      </div> <!-- container_fluid -->
    </div> <!-- news_body -->
  </section>




  <section class="seven pt-5 pb-5">
    <div class="news_body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="cat_name">
              <a href=""> Cateogry </a>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="panel_body">
                  <a href="">
                    <div class="image">
                      <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                    </div>
                    <div class="info">
                      <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>

                      <h2 class="sub_title">ওয়ানডেতে এমন ইনিংস বাংলাদেশ ক্রিকেট এর আগে দেখেনি। চোখজুড়ানো সৌন্দর্যের ভয়াল সুন্দর ব্যাটিং।</h2>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div> <!-- col-sm-6 -->

          <div class="col-sm-6">
            <div class="cat_name">
              <a href=""> Cateogry </a>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="panel_body">
                  <a href="">
                    <div class="image">
                      <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                    </div>
                    <div class="info">
                      <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>

                      <h2 class="sub_title">ওয়ানডেতে এমন ইনিংস বাংলাদেশ ক্রিকেট এর আগে দেখেনি। চোখজুড়ানো সৌন্দর্যের ভয়াল সুন্দর ব্যাটিং।</h2>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="news_list">
                      <div class="panel_body">
                        <a href="">
                          <div class="image">
                            <img class="img_size" src="{{ asset('public/frontEnd/')}}/images/prothomalo.webp">
                          </div>
                          <div class="info">
                            <h2 class="title">জিম্বাবুয়ের বিপক্ষে টি-টোয়েন্টি সিরিজের দল ঘোষণা করেছে... </h2>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div> <!-- col-sm-6 -->

        </div> <!-- row -->
      </div> <!-- container-fluid -->
    </div> <!-- news_body -->
  </section>

@endsection