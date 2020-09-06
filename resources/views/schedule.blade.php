@extends('layouts.golden')



@section('content')


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-wrap text-center" style="background-image: url('{{ asset('frontend') }}/images/sched1.jpg');" data-stellar-background-ratio="0.5">
            <div class="hero-contents">
              <h2>Schedule</h2>
              <p><a href="/index">Home</a> <span class="mx-2">/</span> <strong>Events</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>



<div class="site-section">

  <div class="specialNotice">
  <style>
      .specialNotice {
          padding: 10px 0;
          margin: 15px;
          text-align: center;
          background: #F5F5F5;
          border: 1px solid #e22925
      }
      .specialNotice p {
          max-width: 900px;
          margin: 0 auto;
      }
      .specialNotice a {
          text-decoration: underline;
          color: #e22925;
      }
  </style>
  <p>
     The NBA approved a competitive format to resume the 2019-20 season with 22 teams returning to play and a tentative start date of September 30.
  </p>
  <br>
 <p>
    <strong>The Golden State Warriors will be among the eight teams that are not participating in the restart. </strong>  <!-- The NBA will use this hiatus to determine next steps for moving forward in regard to the coronavirus pandemic. <a href="https://www.nba.com/warriors/news/nba-season-suspended-20200311" target="_blank">Warriors Statement</a>--->
</p>
</div>

  <div class="container">

  <p>All 2019-20 NBA Restart games are played across three venues at the ESPN Wide World of Sports Complex in Orlando, Florida and will begin on July 30. Based on a competitive format approved by the NBA Board of Governors and the NBPA, 22 teams will return to play during the 2019-20 NBA season. The 22 teams consist of the 16 teams (eight per conference) in current playoff positions and the six teams that are currently six games or fewer behind the eighth seed in their respective conferences.</p>
</div>


</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">


          <h1>Previous Dates</h1>

          <table class="table">
            <head>
              <tr>
                <th>Date</th>
                <th>Teams</th>
                <th>Score</th>
                <th>Arena</th>
              </tr>
            </head>

            <body>
              @foreach($games as $game)
              <tr>
                <td><h6 class="news">{{ $game->Date }}</h6>
                  <font size="-1"><p>{{ $game->week }}</p></font>
                </td>
                <td><span class="news">{{ $game->Team1 }} <br>{{ $game->Team2 }} </span></td>
                @if($game->Score1 > $game->Score2)
                <td> <span class="news"> <strong>{{ max($game->Score1, $game->Score2) }}</strong></span> <br> {{ min($game->Score1, $game->Score2) }}</td>
                @else
                <td> {{ min($game->Score1, $game->Score2) }} <br><span class="news"> <strong>{{ max($game->Score1, $game->Score2) }}</strong></span></td>
                @endif
                <td> <p>{{ $game->Arena }} <br>{{ $game->State }} </p> </td>
              </tr>


              @endforeach

            </body>

          </table>
        </div>

    </div>


</div>



    @endsection
