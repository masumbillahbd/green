
@extends('backEnd.master')

@section('title')
	Admin | search

@endsection

@section('mainContent')
	
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
    <div class="title_left">
    <h3>Search Result</h3>
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


    <div class="col-md-12 col-sm-12">
      <div class="x_title"></div>

      @foreach($searchResult as $result)
        <h5> {{ $result->title }} </h5>
        <p> {{ $result->sub_title }} </p>
      @endforeach


    </div>



  </div>
</div>

@endsection











