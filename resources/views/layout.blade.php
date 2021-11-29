<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600;700&display=swap" rel="stylesheet">

     
        <link href="/css/app.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Rubik', sans-serif;
                background: #4CB6D9;
            }
            .bg-dark {
                background-color: #4CB6D9 !important;
            }
            #hero-banner {
    background: #FFFFFF url(https://cdn.luxe.digital/media/2020/12/15110747/fastest-cars-world-2021-luxe-digital%402x-1536x768.jpg) no-repeat 100% bottom;
}
#main-nav.navbar-default {
background: #FFFFFF;
}
#main-nav.navbar-default .navbar-nav > li.active > a, #main-nav.navbar-default .navbar-nav > li.open > a, #main-nav.navbar-default .navbar-nav > li:hover > a {
background: transparent;
color: #FFFFFF;
}
.navbar.navbar-default {
  border: 0;
  border-radius: 0;
  margin-bottom: 0;
}
.navbar.navbar-default .navbar-toggle {
  margin-top: 32px;
}
.navbar.navbar-default .navbar-brand {
  height: auto;
  padding: 22px 15px 16px;
}
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus{
color: #FFFFFF;
 
background: transparent;
}
.navbar-default .navbar-nav>li>a{
color: #FFFFFF;
}
#main-nav.navbar-default {
background: #141414;
}
@media only screen and (min-width: 768px) {
  #main-nav.navbar-default {
    background: #4E4E4E;
  }
  #main-nav.navbar-default .navbar-nav > li > a {
    padding-top: 40px;
    padding-bottom: 36px;
    transition: background 0.4s;
  
}
  .navbar-default .navbar-nav>li>a {
	color: #FFFFFF;
	}
  #main-nav.navbar-default .navbar-nav > li.active > a,

  #main-nav.navbar-default .navbar-nav > li.open > a,
  #main-nav.navbar-default .navbar-nav > li:hover > a {
	color: #4E4E4E;
	background: #F4DD61;
}

#main-nav.navbar-default .dropdown-menu {
    padding: 0;
    min-width: 220px;
    background-color: #F4DD61;
    border: 0;
    border-radius: 0;
    box-shadow: none;
    -webkit-box-shadow: none;
    background-clip: inherit;
}.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: #F4DD61;
    border: 0;
}
  #main-nav.navbar-default .dropdown-menu > li {
    border-left: 3px solid transparent;
    margin-left: -20px;
    padding-left: 17px;
    -webit-transition: border-color 400ms;
    transition: border-color 400ms;
  }
  #main-nav.navbar-default .dropdown-menu > li > a { 
    padding: 15px 0;
    color:#A8A8A8;     
    transition: background 0.4s;
  }
  #main-nav.navbar-default .dropdown-menu > li:first-child > a {
    border-top: 0;
  }
  #main-nav.navbar-default .dropdown-menu > li.active,
  #main-nav.navbar-default .dropdown-menu > li.open,
  #main-nav.navbar-default .dropdown-menu > li:hover {
    border-left-color: #45aed6;
  }
  #main-nav.navbar-default .dropdown-menu > li.active > a,
  #main-nav.navbar-default .dropdown-menu > li.open > a,
  #main-nav.navbar-default .dropdown-menu > li:hover > a {
    color: #F4DD61;
    background-color: transparent;
  }
}
#hero-banner {
    overflow: hidden;
    height: 650px;
    color: #4C4C4C;
}.btn.btn-primary {
    background: #F4DD61;
    color: #040404;
}.btn {
    border-width: 0;
    border-radius: 0;
}
#hero-banner h2 {
    margin-top: 180px;
    font-size: 39px;
    line-height: 49px;
    color: #black;
}#hero-banner h2, #hero-banner p {
    color: #040404;
    background: #F4DD61;
    padding: 15px;
}
        </style>
        <!--- 4CB6D9
        F4DD61--->
    </head>
    <body id="home">

    <header id="header">
    <nav id="main-nav" class="navbar navbar-default navbar-expand-lg navbar-dark bg-dark" style="padding:0px;">
      <div class="container">
        <a class="navbar-brand" href="/">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-right" id="navbarsExample07">
          <ul class="nav navbar-nav">
            <li class="nav-item  {{ (request()->is('/')) ? 'active' : '' }}">
              <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Nosotros</a>
            </li>
            <li class="nav-item dropdown {{ (request()->is('servicios*')) ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="/servicios" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a class="dropdown-item" href="/servicios">Arrendamiento</a>
                <a class="dropdown-item" href="/servicios">Estrena tu auto</a>
              </div>
            </li>
            <li class="nav-item {{ (request()->is('contacto*')) ? 'active' : '' }}">
              <a class="nav-link" href="/contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header><!--/header-->
    @yield('content')
    <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
