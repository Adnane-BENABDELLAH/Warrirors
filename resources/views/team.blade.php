@extends('layouts.golden')



@section('content')


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-wrap text-center" style="background-image: url('{{ asset('frontend') }}/images/team2.png');" data-stellar-background-ratio="0.5">
            <div class="hero-contents">
              <h2>Players</h2>
              <p><a href="/index">Home</a> <span class="mx-2">/</span> <strong>Players</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container site-section pb-0">
      <div class="container"  style="background-color: #f7d031">

      <div class="row ">
          <div class="col-6">
            <h2 class="section-title">Leaders</h2>
          </div>
          <div class="col-6 text-right">
            <a href="#" class="custom-prev js-custom-prev-v2"><strong>Prev</strong></a>
            <span class="mx-2">/</span>
            <a href="#" class="custom-next js-custom-next-v2"><strong>Next</strong></a>
          </div>
        </div>

      <div class="owl-4-slider owl-carousel">

          @foreach($leaders as $leader)
          <div class="item player">
            <a href="https://www.nba.com/warriors/stats/leaders"><img src="/storage/{{ $leader->image }}" alt="Image" class="img-fluid"></a>
            <div class="p-4"> <center>
              <h3>{{ $leader->name }}</h3>
              <h6>{{ $leader->stats }}</h6>
            </center>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row align-items-center mb-2">
          <div class="col-6">
            <h2 class="section-title">Roster</h2>
          </div>
        </div>
        <div class="row">
          @foreach($rosters as $roster)
          <div style="padding-top: 3em">
          <img src="/storage/{{ $roster->image }}" alt="Image" class="img-fluid">
          </div>
          @endforeach
        

        </div>
      </div>
    </div>

  @endsection
