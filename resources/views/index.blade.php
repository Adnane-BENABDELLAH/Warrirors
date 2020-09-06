@extends('layouts.golden')



@section('content')




    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-wrap" style="background-image: url('{{ asset('frontend') }}/images/gsw1.jpg');" data-stellar-background-ratio="0.5">
            <div class="hero-contents">
              <h2>News </h2>
                <h5 class="news">Warriors Archive: Dubs Set NBA Record for Consecutive Home Wins</h5>
              <font size="-1">
              <p>June 25, 2020 <br> Warriors Archive: 73-Win Season, presented by Oracle, continues on Friday with a look back at a historic night on Warriors Ground when the Dubs set a...</p>
              </font>
              <p class="mb-0"><a href="/news" class="more"><span class="mr-2">+</span>Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="col-lg-15 ml-auto">
          <div class="row">
            <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
              <div class="custom-media d-flex">
                <div class="img-wrap mr-3">
                  <a href="/news"><img src="{{ asset('frontend') }}/images/newsimg1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>
                  <!-- <span class="caption">Latest News</span> -->
                  <h5 class="news"><a href="/news">Dubs Weekly: The Starting Five</a></h5>
                  <font size="-1"> <p>June 24, 2020 <br>Take note of some select headlines that every Dubs fan should access to stay up to date on the squad, both on and off the court.</p> </font>
                  <p class="mb-0"><a href="/news" class="more"><span class="mr-2">+</span>Learn More</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 mb-5 mb-lg-0">
              <div class="custom-media d-flex">
                <div class="img-wrap mr-3">
                  <a href="/news"><img src="{{ asset('frontend') }}/images/newsimg2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div>

                  <h5 class="news"><a href="/news">Warriors Archive: Dubs Home Winning Streak Continues</a></h5>
                  <font size="-1"> <p>June 24, 2020 <br>Warriors Archive: 73-Win Season, presented by Oracle, continued with a look back at the Dubs' 41st straight regular-season home win from the 2015-16...</p> </font>
                  <p class="mb-0"><a href="/news" class="more"><span class="mr-2">+</span>Learn More</a></p>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container"  style="background-color: #f7d031">
        <div class="row">
          <div class="col-6">
            <h2 class="section-title">Our Players</h2>
          </div>
          <div class="col-6 text-right">
            <a href="#" class="custom-prev js-custom-prev-v2"><strong>Prev</strong></a>
            <span class="mx-2">/</span>
            <a href="#" class="custom-next js-custom-next-v2"><strong>Next</strong></a>
          </div>
        </div>

        <div class="owl-4-slider owl-carousel">

          @foreach($players as $player)

          <div class="item player">
            <a href="/team"><img src="/storage/{{ $player->image }}" alt="Image" class="img-fluid"></a>
            <div class="p-4">
              <h3>{{ $player->full_name }}</h3>
              <h5>#{{ $player->no }} / {{ $player->position }}</h5>
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
              <h2 class="section-title">Highlights</h2>
            </div>
          </div>
  <div class="wrapper">
    <div class="box box1">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/sV14CTbWIA0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h4><span class="news">Stephen Curry IN MVP MODE!</span></h4>
        <p class="mb-0"><a href="https://www.youtube.com/embed/sV14CTbWIA0" class="more"><span class="mr-2">+</span>Watch video</a></p>
    </div>
    <div class="box box2">
      <div>
        <iframe src="https://www.youtube.com/embed/jue-q2Y8nLA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


      </div>
      <div>
        <h4><span class="news">Stephen Curry LEGENDARY 51 Points!</span></h4>
        <p class="mb-0"><a href="https://www.youtube.com/embed/jue-q2Y8nLA" class="more"><span class="mr-2">+</span>Watch video</a></p>
        </div>
        <div>
          <iframe src="https://www.youtube.com/embed/LKLPaIeiKQM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div>
          <h4><span class="news"> WARRIORS vs 76ERS</span></h4>
            <p class="mb-0"><a href="https://www.youtube.com/embed/LKLPaIeiKQM" class="more"><span class="mr-2">+</span>Watch video</a></p>
          </div>
    </div>

  </div>

   </div>
          </div>




    <div class="site-section">
      <div class="container" style="background-color: #f7d031">
        <div class="row align-items-center mb-2">
          <div class="col-6">
            <h2 class="section-title">Matches of this week</h2>
          </div>
        </div>

        <div class="row mb-5">
          @foreach($matches as $match)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-5 mb-lg-0">
            <div class="custom-media d-block">
              <div class="img-wrap mb-3">
                <a href="/schedule"><img src="/storage/{{ $match->image }}" alt="Image" class="img-fluid"></a>
              </div>
              <div>
                <font size="-1">{{ $match->date }} <strong class="ctspawn">{{ $match->status }}</strong></font>
                <h3><a href="#">{{ $match->teams }}</a></h3>
                <p class="mb-0"><a href="/schedule" class="more"><span class="mr-2">+</span>Learn More</a></p>
              </div>
            </div>
          </div>
          @endforeach


        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 text-center">
            <a href="/schedule" class="btn btn-primary py-3 px-4">View Schedule</a>
          </div>
        </div>
      </div>
    </div>


    @endsection
