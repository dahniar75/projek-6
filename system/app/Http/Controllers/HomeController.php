<?php 

namespace App\Http\Controllers;

 class HomeController extends Controller{


 	function Showindex(){
 		return view('index');
 	}

 	function Showpostingan(){
 		return view('postingan');
 	}

 	function Showgrafik(){
 		return view('grafik');
 	}


 	function Showdashboard(){
 		return view('dashboard');
 	}


 	function Showdaftarpesanan(){
 		return view('daftarpesanan');
 	}


 	function Showprofil(){
 		return view('profil');
 	}


 	function Showterkirim(){
 		return view('terkirim');
 	}

	function showproduk(){
		return view('produk');
	}

}