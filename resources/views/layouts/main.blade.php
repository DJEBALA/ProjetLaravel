<!doctype html>
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


<div class="navbar-fixed-top top-bar ">
<div class="top-bar-left px-2">
<ul class="menu">
<li class="">Blog</li>
<li><a href="/Home">Home</a></li>
<li><a href="/Articles">Article</a></li>
<li><a href="/Contact">Contact</a></li>

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
