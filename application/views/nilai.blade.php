@layout('templates.main')
@section('content')
<blockquote>
			<h1>Master Nilai</h1>
			<small>Merupakan form untuk input data nilai mahasiswa</small>
			<small><a href="{{URL::to('../index.php')}}">Kembali Ke Menu</a></small>
</blockquote><hr>
{{ Form::open('nilai') }}
        <!-- NIM field -->
        {{ $errors->first('nim', Alert::error(":message")) }}
        {{ Form::text('nim', Input::old('nim'),array('placeholder'=>'Nim'))}}<br>
		<!-- Nama field -->
        {{ $errors->first('nama', Alert::error(":message")) }}
        {{ Form::text('nama', Input::old('nama'),array('placeholder'=>'Nama'))}}<br>
		 <!-- NIM field -->
        {{ $errors->first('matakuliah', Alert::error(":message")) }}
        {{ Form::text('matakuliah', Input::old('matakuliah'),array('placeholder'=>'Matakuliah'))}}<br>
		 <!-- NIM field -->
        {{ $errors->first('tahun', Alert::error(":message")) }}
        {{ Form::text('tahun', Input::old('tahun'),array('placeholder'=>'Tahun'))}}<br>
		 <!-- NIM field -->
        {{ $errors->first('semester', Alert::error(":message")) }}
        {{ Form::text('semester', Input::old('semester'),array('placeholder'=>'Semester'))}}<br>
		 <!-- NIM field -->
        {{ $errors->first('nilai', Alert::error(":message")) }}
        {{ Form::text('nilai', Input::old('nilai'),array('placeholder'=>'Nilai'))}}<br>
		<!-- button submit -->
        {{Button::info_submit('Tambah')}}
		{{Button::info_reset('Batal')}}
		
		<br><br>
    {{ Form::close() }}
	<hr><blockquote>
			<h1>Tabel Nilai Mahasiswa</h1>
			<small>Tabel dibawah ini merupakan daftar nilai mahasiswa</small>
	</blockquote><hr>
	<table class="table table-hover">
				<tr class="info">
						<td>No</td>
						<td>NIM</td>
						<td>Nama</td>
						<td>Matakuliah</td>
						<td>Tahun</td>
						<td>Semester</td>
						<td>Nilai</td>
						<td>Aksi</td>
				</tr>
				
				{{Form::hidden($no=1)}}
				@foreach(Nilai::with('Mahasiswa')->order_by('created_at', 'desc')->take(10)->get() as $mahasiswa)
				<tr class="error">
					<td>{{$no++}}</td>
					<td>{{$mahasiswa->nim}}</td>					
					<td>{{$mahasiswa->nama}}</td>					
					<td>{{$mahasiswa->matakuliah}}</td>				
					<td>{{$mahasiswa->tahun}}</td>				
					<td>{{$mahasiswa->semester}}</td>				
					<td>{{$mahasiswa->nilai}}</td>				
					<td>{{Form::open('hapusNilai','delete')}}
					{{ Button::success_submit('Hapus', array('class' => 'btn-small')) }}
					{{ Form::hidden('nama',$mahasiswa->nama)}}
					{{ Form::close() }}</td>
				{{ Form::close() }}
				</tr>
				 @endforeach
			  </table>
			  <br>
	

@endsection