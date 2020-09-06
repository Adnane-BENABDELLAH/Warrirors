<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Golden State Warriors</title>
      <link rel="shortcut icon" type="image/png" href="{{ asset('frontend') }}/images/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/fonts/flaticon/font/flaticon.css">

    <!-- my css -->
    <link rel="stylesheet" href="{{ asset('mycss') }}/colors.css">


    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">


    <style>
    .news {
      color:#00008B;
    }

    .login{
      background-color: #191970;
    }

    .ctspawn{
      color:red;
    }

    div.videotest{
      margin: 20px;
      padding: 20px;
      float:left;
    }

    .icon{
      width: 28px;
      height: 28px;
      background-size: 938px 318px;
      background-position: -624px -48px;
      font-size: 35px;
    }

    .video iframe{
      position: relative;
      right: -800px;
      top: -431px;
      height: 220px;
      width: 350px;
      padding: 30px;
      margin: auto;
    }

    .wrapper{
      display: grid;
      grid-template-columns:repeat(2, 1fr);
      grid-gap: 1em;
      grid-auto-rows: minmax(50px, auto);
      padding: 10px;
    }



    .box1{
      grid-column: 1/2;
      grid-row: 1/2;
      align-self: flex-start;
    }

    .box2{
      display: grid;
      grid-template-columns:repeat(2, 1fr);
      grid-column-gap: 1em;
      grid-column: 2;
      grid-row: 1;
    }


    </style>


  </head>
  <body>
    <!-- style -->
    <style>
      #colorblue{
        color:#0b3d6b;
        font-weight: bold;
      }



    </style>



  <div class="site-wrap">


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="container">

      <div class="row no-gutters site-navbar align-items-center py-3">

        <div class="col-6 col-lg-2 site-logo">
          <nav>
            <a href="/" id="colorblue"><img src="{{ asset('frontend') }}/images/gswlogo.png" alt="Image" class="img-fluid" height="50" width="70"> GSW</a>
          </nav>

          <!-- <a href="index.blade.php" id="colorblue">GSW</a> -->

        </div>
        <div class="col-6 col-lg-10 text-right menu">
          <nav class="site-navigation text-right text-md-right" >

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">

                  <a href="/" id="colorblue"><strong>HOME</strong></a>
                </li>
                <li><a href="/news" id="colorblue"> <strong>NEWS</strong> </a> </li>
                <li class="has-children">
                  <a href="/team" id="colorblue"> <strong>TEAM</strong> </a>
                  <ul class="dropdown arrow-top">
                    <li><a href="/team">Ky Bowman</a></li>
                    <li><a href="/team">Marquese Chriss</a></li>
                    <li><a href="/team">Stephen Curry</a></li>
                    <li><a href="/team">Draymond Green</a></li>
                    <li><a href="/team">Damion Lee</a></li>
                    <li><a href="/team">Kevon Looney</a></li>
                    <li><a href="/team">Mychal Mulder</a></li>
                    <li><a href="/team">Eric Paschall</a></li>
                    <li><a href="/team">Jordan Poole</a></li>
                    <li><a href="/team">Alen Smailagic</a></li>
                    <li><a href="/team">Klay Thompson</a></li>
                    <li><a href="/team">Juan Toscano-Anderson</a></li>
                    <li><a href="/team">Andrew Wiggings</a></li>
                    <li class="has-children">
                      <a href="/team">Coaching</a>
                      <ul class="dropdown">
                        <li><a href="/team">Steve Kerr</a></li>
                        <li><a href="/team">Ron Adams</a></li>
                        <li><a href="/team">Mike Brown</a></li>
                        <li><a href="/team">Jarron Collins</a></li>
                        <li><a href="/team">Bruce Fraser</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="/schedule" id="colorblue"> <strong>SCHEDULE</strong> </a></li>
                <li><a href="/about" id="colorblue"> <strong>ABOUT</strong> </a></li>
                <li><a href="/contact" id="colorblue"> <strong>CONTACT</strong> </a></li>
                <!-- <li> <button type="button" name="button"><a href="login.blade.php" id="login">SIGN IN</a></button> </li> -->
                <li>

                  <!-- <div class="row form-group">
                    <div class="col-md-12">
                      <input type="submit" value="SIGN IN" class="btn btn-primary py-2 px-3">
                    </div>
                  </div> -->

                <div class="row justify-content-center">
                  <div class="col-lg-8 text-center">
                    <a href="/admin" class="btn btn-primary py-2  px-3"><strong>LOGIN</strong></a>
                  </div>
                </div>
                </li>
              </ul>

              <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a>
            </nav>
        </div>
      </div>

    </div>

    <!-- LA PARTIE DYNAMIQUE -->
    @yield('content')






    <div class="footer">
      <div class="container">
        <div class="row footer-inner">
          <div class="col-lg-3">
            <div class="widget mb-4">
              <a href="/about"><h3>About Us</h3></a>
              <p>The Golden State Warriors are an American professional basketball team based in San Francisco. The Warriors compete in the National Basketball Association (NBA), as a member of the league's Western Conference Pacific Division...</p>
            </div>
          </div>
          <div class="col-lg-2 pl-4">
            <div class="widget mb-4">
              <h3>Navigation</h3>
              <ul class="list-unstyled links">
                <li><a href="/news">News</a></li>
                <li><a href="/team">Team</a></li>
                <li><a href="/schedule">Schedule</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-4">
              <h3>Highlights</h3>
              <ul class="list-unstyled links">
                  <li><p class="mb-0"><a href="/highlights" ><span class="mr-2">+</span>Plays Of The Week</a></p></li>
                  <li><br></li>
                  <li><img src="{{ asset('frontend') }}/images/gswlogo.png" alt="Image" class="img-fluid" height="50" width="120"></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="widget mb-4">
              <h3>Social</h3>
              <ul class="list-unstyled social">
                <li><a href="https://web.facebook.com/warriors/"><span class="mr-2 icon-facebook"></span> Facebook</a></li>
                <li><a href="https://twitter.com/warriors"><span class="mr-2 icon-twitter"></span> Twitter</a></li>
                <li><a href="https://www.instagram.com/warriors/"><span class="mr-2 icon-instagram"></span> Instagram</a></li>
                <li><a href="https://www.youtube.com/user/GoldenStateWarriors"><span class="mr-2 icon-youtube"></span> Youtube</a></li>
              </ul>
            </div>
          </div>

          <div class="col-12 mt-5 text-center copyright">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>

        </div>
      </div>
    </div >


  </div>

  <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>
  <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
  <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery.fancybox.min.js"></script>
  <script src="{{ asset('frontend') }}/js/aos.js"></script>

  <script src="{{ asset('frontend') }}/js/main.js"></script>

  </body>
</html>
