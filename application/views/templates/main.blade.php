<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Pemrograman Internet 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    {{ Asset::container('bootstrapper')->styles(); }}
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    {{ Asset::container('bootstrapper')->scripts(); }} 
</head>
<body>
<div class="navbar navbar-inverse">
     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand">Booststrap</a>
		  <div class="btn-group pull-right">
              <a class="btn btn-success"><i class="icon-user"></i> Irvan Abdurrahman</a>
          </div>		  
            <ul class="nav">
			<li class="divider-vertical"></li>
              <li><a href="{{ URL::base() }}"><i class="icon-home" ></i> Home</a></li><li class="divider-vertical"></li>
              <li><a href="{{ URL::to('mahasiswa') }}"><i class="icon-user" ></i> Mahasiswa</a></li><li class="divider-vertical"></li>
              <li><a href="{{ URL::to('cari') }}"><i class="icon-pencil"></i> Entri</a></li><li class="divider-vertical"></li>
              <li><a href="{{ URL::to('nilai') }}"><i class="icon-book"></i> Nilai</a></li><li class="divider-vertical"></li>
            </ul>
          </div>
          </div>
    </div>
    </div>
 
    <div class="container">
          <div class="row">
          @yield('content')
          </div>
          @yield('pagination')
    </div><!--/container-->
 
    <div class="container">
        <footer>
            
        </footer>
      </div>
</body>
</html>