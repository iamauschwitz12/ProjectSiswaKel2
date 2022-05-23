<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts3/icomoon/style.css">

    <link rel="stylesheet" href="css3/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css3/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css3/style.css">

    <title>Lihat Xiomi</title>
  </head>
  <body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js3-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target bg-white" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="lihat" class="nav-link">Xiomi</a></li>
                  <li><a href="lihatvivo" class="nav-link">Vivo</a></li>
                  <li><a href="lihatoppo" class="nav-link">Oppo</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="index.html">Kelompok 2</a>
              </div>


              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="masuk" class="nav-link">Login</a></li>
                  <li><a href="" class="nav-link">Register</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>
      
  </div>
</nav>

<div class="hero" style="background-image: url('images3/back1.jpg');">

<div class="container text-center mt-5 mb-2">
    <h1 class="mb-0">Daftar handphone</h1>
    <span style="font-weight: bold;">
    	XIOMI
    </span>
</div>
<div class="container mt-3" style="
display: grid;
  grid-template-columns: auto auto auto auto;
">
@foreach ($xiomi as $swa)
    <div class="row">
        <div class="col-md-10">
            <div class="bg-white p-3 text-center rounded box"><img class="img-responsive rounded-circle" src="/image/{{ $swa->image }}" width="90" height="90">
                <h5 class="mt-3 name">{{$swa->nama}}</h5><span class="work d-block">{{$swa->prosesor}}</span><span class="work d-block">{{$swa->penyimpanan}}</span>
                <div class="mt-4 about"><span>{{$swa->harga}}</span></div>
                <div class="mt-4">
					<a href="masuk" class="v-profile" style="text-decoration: none; font-weight: bold;">View Profile</a>
                </div>
            </div>
            <br>
        </div>
    </div>
    @endforeach

    </div>

    <br>
    <div style="margin-left:100px;">
    {{$xiomi->links()}}
    </div>

  </header>
  
    <script src="js3/jquery-3.3.1.min.js"></script>
    <script src="js3/popper.min.js"></script>
    <script src="js3/bootstrap.min.js"></script>
    <script src="js3/jquery.sticky.js"></script>
    <script src="js3/main.js"></script>
  </body>
</html>