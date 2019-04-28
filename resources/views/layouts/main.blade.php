<!doctype html>
<!--
la view principale qui contient le squelete  
-->
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>
<div id="app">

</div>


 <nav class="navbar navbar-default navbar-static-top navbar-fixed-top top-bar">
            <div class="container">
        
                <div class="container collapse navbar-collapse" id="app-navbar-collapse">
               

                    <ul class=" navbar-left menu">
                                    
                          <li>Blog</li>
                          <li><a href="/Home">Home</a></li>
                          <li><a href="/Articles">Article</a></li>
                          <li><a href="/Contact">Contacte</a></li>
                          
                         </ul>

                        <!-- Right Side Of Navbar -->
                    <ul class=" navbar-right menu ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
              <ul class=" navbar-right menu ">
                <li ><a href="#"  role="button" aria-expanded="false">{{ Auth::user()->name }}   </a>
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>        
                                  
                          
                          </li>
                      </ul>
                  </li>
              @endif
          </ul>
      </div>
            </div>
        </nav>
</div>

<div class="  callout large primary text-center  ">
@yield ('article')
@yield('articlediv')
</div>





<div class="row medium-8 large-7 columns" >

@yield('content')
@yield('content1')
@yield('articleun')
@yield('contact')
</div>

<div class="row">
@yield('articletotale')
</div>




<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
