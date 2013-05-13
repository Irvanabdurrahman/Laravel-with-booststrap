@layout('templates.main')
@section('content')
<div class="span10 offset1 well">
<blockquote>
			<h1>Menu</h1>
			<small>Halaman utama web</small>
	</blockquote><hr>
<ul class="nav nav-list">
	<li ><a href="{{URL::to('mahasiswa')}}"><i class="icon-user"></i> Master Mahasiswa</a></li>
	<li ><a href="{{URL::to('cari')}}"><i class="icon-book"></i> Enteri Nilai</a></li>
</ul>
</div>
@endsection