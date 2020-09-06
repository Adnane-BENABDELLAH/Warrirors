@extends('layouts.golden')



@section('content')


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-wrap text-center" style="background-image: url('{{ asset('frontend') }}/images/news0.jpg');" data-stellar-background-ratio="0.5">
            <div class="hero-contents">
              <h2>News</h2>
              <p><a href="/index">Home</a> <span class="mx-2">/</span> <strong>News</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  @foreach($news as $new)
    <div class="site-section ">
      <!-- <div class="section-title"> -->
      <div class="container section-title">
        <div class="row ">



          <div class="col-lg-5">
            <h3 class="news">{{ $new->title }}</h3><br>
            <font size="-1"><p>{{ $new->date }}</p></font>
            <p>{{ $new->body }}</p>
          </div>
          <div class="col-lg-7 mb-5 mb-md-0 mb-lg-0">
            <img src= "/storage/{{ $new->image }}"alt="Image" class="img-fluid">
          </div>

            <h5 class="news">{{ $new->game }}</h5>
            <p>{{ $new->game_description }}</p>


        </div>
      </div>
    </div>
      @endforeach
    

    @endsection
