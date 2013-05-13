@layout('templates.main')
@section('content')
<blockquote>
			<h1>Entri Nilai</h1>
			<small>Form untuk input nim mahasiswa</small>
			<small><a href="{{URL::to('../index.php')}}">Kembali Ke Menu</a></small>
</blockquote><hr>
{{ Form::inline_open('nilai')}}
        <!-- NIM field -->
        <p>{{ Form::label('nim', 'Masukkan NIM : ') }} 
        {{ $errors->first('nim', Alert::error(":message")) }}
        {{ Form::text('nim', Input::old('nim'),array('placeholder'=>'Nim'))}}
       {{Button::info_submit('OK')->with_icon('search')}}
		<br><br>
{{ Form::close()}}
@endsection