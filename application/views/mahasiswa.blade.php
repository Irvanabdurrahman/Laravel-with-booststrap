@layout('templates.main')
@section('content')
<blockquote>
			<h1>Master Mahasiswa</h1>
			<small>Merupakan form untuk input data mahasiswa</small>
			<small><a href="{{URL::to('../index.php')}}">Kembali Ke Menu</a></small>
</blockquote><hr>
{{ Form::open('mahasiswa') }}
		<!-- NIM field-->
        {{ $errors->first('nim', Alert::error(":message")) }}
        {{ Form::text('nim', Input::old('nim'),array('placeholder'=>'Nim'))}}<br>
        
		<!-- Nama field-->
        {{ $errors->first('nama', Alert::error(":message")) }}
        {{ Form::text('nama', Input::old('nama'), array('placeholder'=>'Nama'))}}<br>
		
		<!-- Alamat field-->
        {{ $errors->first('alamat', Alert::error(":message")) }}
        
        {{Form::textarea('alamat', Input::old('alamat'), array('rows' => '3', 'placeholder'=>'Alamat'))}}<br>
		<!-- Button Submit-->
        {{Button::info_submit('Tambah')}}
        {{Button::info_reset('Batal')}}
		<br>
    {{ Form::close() }}<br>
	<hr><blockquote>
			<h1>Tabel Mahasiswa</h1>
			<small>Tabel dibawah ini merupakan data diri mahasiswa</small>
	</blockquote><br>
<table class="table table-hover">
				<tr class="info">
						<td><b>No</b></td>
						<td><b>NIM</b></td>
						<td><b>Nama</b></td>
						<td><b>Alamat</b></td>
						<td><b>Aksi</b></td>
				</tr>
				{{Form::hidden($no=1)}}
				@foreach(Mahasiswa::with('Nilai')->order_by('created_at', 'desc')->take(10)->get() as $mahasiswa)
				<tr class="error">
					<td>{{$no++}}</td>
					<td>{{$mahasiswa->nim}}</td>				
					<td>{{$mahasiswa->nama}}</td>					
					<td>{{$mahasiswa->alamat}}</td>
					<td>{{Form::open('hapus','delete')}}
					{{ Button::success_submit('Hapus', array('class' => 'btn-small')) }}
					{{ Form::hidden('nim',$mahasiswa->nim)}}
					{{ Form::close() }}</td>
				</tr>
				  @endforeach
			  </table>
			  <br>
			  </div>

@endsection