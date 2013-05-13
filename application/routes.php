<!---------------------------------------------------------------------------------------------------------------- 
		Copyright by Irvan Abdurrahman - 4510210003 | Wednesday, 24 April, 2013
 ------------------------------------------------------------------------------------------------------------------->

<?php

/* ----------------------------------------------------------
					Start Program
	----------------------------------------------------------*/
	
Route::get('/', function() {    
    return View::make('menu');
});


 
Route::get('nilai', array('before' => 'auth', 'do' => function() {
/* $nilais = Post::with('nilai')->order_by('updated_at', 'desc')->paginate(5);  */
    return View::make('nilai');
}));

Route::delete('hapus', function(){
		$nim = Input::get('nim');		
		mahasiswa::where('nim','=',$nim)->delete();
		return Redirect::to('mahasiswa');
	});
	
Route::delete('hapusNilai', function(){
		$nama = Input::get('nama');		
		nilai::where('nama','=',$nama)->delete();
		return Redirect::to('nilai');
	});


/* -------------------------------------------------------------------------------------------------------------
					Start Menu
	-------------------------------------------------------------------------------------------------------------*/
	//mahasiswa
		Route::get('mahasiswa', function() {
		//Pemanggilan halaman mahasiswa.blade.php
			return View::make('mahasiswa'); 
		});
	//nilai
		Route::get('cari', function() {
			return View::make('cari'); 
		});
/* -------------------------------------------------------------------------------------------------------------
					End of Menu
	-------------------------------------------------------------------------------------------------------------*/


/* -------------------------------------------------------------------------------------------------------------
					Insert to table mahasiswa in database
	-------------------------------------------------------------------------------------------------------------*/
Route::post('mahasiswa', array('before' => 'auth', 'do' => function() {
 
    $new_post = array(
        'nim'    => Input::get('nim'),
        'nama'     => Input::get('nama'),
        'alamat'   => Input::get('alamat')
    );
    
    $rules = array(
        'nim'     => 'required|min:3|max:20',
        'nama'      => 'required|min:3',
        'alamat'      => 'required|min:3'
    );
     
    $validation = Validator::make($new_post, $rules);
    if ( $validation -> fails() )
    {
         
        return Redirect::to('mahasiswa')
                ->with_errors($validation)
                ->with_input();
    }
    // create the new post after passing validation
    $post = new Mahasiswa($new_post);
    $post->save();
    // redirect to viewing all posts
    return Redirect::to('mahasiswa');
}));
/* -------------------------------------------------------------------------------------------------------------
					End Insert to table mahasiswa in database
	-------------------------------------------------------------------------------------------------------------*/


	
/* -------------------------------------------------------------------------------------------------------------
					Insert to table nilai in database
	-------------------------------------------------------------------------------------------------------------*/
Route::post('nilai', array('before' => 'auth', 'do' => function() {
 
    $new_post = array(
        'nim'    => Input::get('nim'),
        'nama'    => Input::get('nama'),
        'matakuliah'     => Input::get('matakuliah'),
        'tahun'   => Input::get('tahun'),
        'semester'   => Input::get('semester'),
        'nilai'   => Input::get('nilai')
    );
    
    $rules = array(
        'nim'     => 'required|min:3|max:20',
        'nama'     => 'required|min:3|max:20',
        'matakuliah'      => 'required|min:3',
        'tahun'      => 'required|min:3',
        'semester'      => 'required',
        'nilai'      => 'required'
    );
     
    $validation = Validator::make($new_post, $rules);
    if ( $validation -> fails() )
    {
         
        return Redirect::to('nilai')
                ->with_errors($validation)
                ->with_input();
    }
    // create the new post after passing validation
    $post = new Nilai($new_post);
    $post->save();
    // redirect to viewing all posts
    return Redirect::to('nilai');
}));
/* -------------------------------------------------------------------------------------------------------------
					End Insert to table nilai in database
	-------------------------------------------------------------------------------------------------------------*/
/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/
 
Event::listen('404', function()
{
    return Response::error('404');
});
 
Event::listen('500', function()
{
    return Response::error('500');
});
 
/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|       Route::filter('filter', function()
|       {
|           return 'Filtered!';
|       });
|
| Next, attach the filter to a route:
|
|       Router::register('GET /', array('before' => 'filter', function()
|       {
|           return 'Hello World!';
|       }));
|
*/
 
Route::filter('before', function()
{
    // Do stuff before every request to your application...
});
 
Route::filter('after', function($response)
{
    // Do stuff after every request to your application...
});
 
Route::filter('csrf', function()
{
    if (Request::forged()) return Response::error('500');
});
 
/* Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::to('menu');
});*/
?>