@extends('frontEnd.master')

@section('title')
	Single | Greenherald
@endsection 

@section('mainContent')
	
  <section class="single_p_t_url pt-2">
    <div class="news_body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="cat_url">
              <ul class="cat_ul">
                <li class="itemscope">
                  <a href="">

                    <strong class="home">
                      <i class="fa fa-home"></i>
                     </strong>
                  </a>
                </li>
                <li class="list_slash">/</li>
                <li class="itemscope">
                  <a href="">
                    <strong>category</strong>
                  </a>
                </li>
                <li class="list_slash">/</li>
                <li class="itemscope">
                  <span>{{ $single_post->title }}</span>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  
  <section class="single_page_body pt-3 pb-5">
    <div class="news_body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-3">
                <div class="panel_body">
                  <div class="top_left"></div>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="panel_body">
                  <div class="top_right">
                    <h2 class="title">{{ $single_post->title }}</h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-3"></div>

            <div class="row">
              <div class="col-sm-3">
                <div class="panel_body">
                  <div class="left">
                    <div class="additional_info">
                      <div class="author">
                        <span>{{ $single_post->writer_name }}</span>
                      </div>
                      <div class="published">
                        <span>{{date_format($single_post->created_at, 'd-m-Y, H:i:s') }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="panel_body">
                  <div class="right">
                    <div class="featured_image">
                      <img class="img_size img-thumbnail" src="{{ url('Upload/News_Image/'.$single_post->image)}}">
                    </div>
                    <article>
                      <div class="artical_body">

                        <p>{{$single_post->post_content}}</p>

                      </div>
                    </article>      
                  </div>
                </div>
              </div>
            </div>
          </div>  


          <aside class="col-sm-4">
            <div class="mt-5"></div>
            @foreach($single_page_latest as $latest)
            <div class="panel panel-success">
              <div class="media">
                <a href="">
                  <div class="media_left">
                    <img class="img_size" src="{{ url('Upload/News_Image/'.$latest->image)}}">
                  </div>
                  <div class="media_right">
                    <h2 class="title"> {{ $latest->title }}</h2>
                  </div>
                </a>
              </div>
            </div>
            @endforeach

          </aside>
        </div>
      </div>
    </div>
  </section>

@endsection