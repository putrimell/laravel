<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index() 
	{ 
	return 'Mengakses Fungsi di Controller menggunakan route'; 
	} 
}
Route::get('/barang', 'barangController@index'); 