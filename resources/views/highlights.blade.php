@extends('layouts.golden')



@section('content')


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-wrap text-center" style="background-image: url('{{ asset('frontend') }}/images/high.jpg');" data-stellar-background-ratio="0.5">
            <div class="hero-contents">
              <h2>Highlights</h2>
              <p><a href="/index">Home</a> <span class="mx-2">/</span> <strong>Highlights</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>

@foreach($highlights as $highlight)
    <div class="site-section">
      <div class="container section-title">
        <div class="row">


          <div class="col-lg-5">
            <h3 class="news">{{ $highlight->title }}</h3><br>
            <p>{{ $highlight->description }}</p>
            <p>{{ $highlight->body }}</p>
          </div>
          <div class="col-lg-7 mb-5 mb-md-0 mb-lg-0">
            <iframe width="560" height="315" src="{{ $highlight->link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>


        </div>
      </div>
    </div>
      @endforeach

    @endsection
