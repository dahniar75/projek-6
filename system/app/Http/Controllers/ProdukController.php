<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
    function index(){
            $data['list_produk'] =  Produk::all();
            return view('produk.index', $data);
    }
    function create(){
            return view('produk.create');
    }
    function store(){
            $produk = new Produk;
            $produk->nama = request('nama');
            $produk->stock = request('stock');
            $produk->harga = request('harga');
            $produk->berat = request('berat');
            $produk->deskripsi = request('deskripsi');
            $produk->save();

            return redirect('produk');
    }
    function show(Produk $produk){
            $data['produk'] = $produk;
            return view('produk.show', $data);
    }
    function edit(Produk $produk){
            $data['produk'] = $produk;
            return view('produk.edit', $data);
    }
    function update(Produk $produk){
            $produk->nama = request('nama');
            $produk->stock = request('stock');
            $produk->harga = request('harga');
            $produk->berat = request('berat');
            $produk->deskripsi = request('deskripsi');
            $produk->save();

            return redirect('produk');

    }
    function destroy(Produk $produk){
        $produk->delete();

        return redirect('produk');
    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        //$data['harga_min'] = $harga_min = explode('harga_min');
        //$data['harga_max'] = $harga_max = explode('harga_max');
        //$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        $data['list_produk'] = Produk::whereIn('stok',  $stok)->get();
        //$data['list_produk'] = Produk::whereBetween('harga',  [$harga_min, $harga_max])->get();
        //$data['list_produk'] = Produk::where('nama', '<>', "$nama")->get();
        //$data['list_produk'] = Produk::whereNotIn('stok',  $stok)->get();
        //$data['list_produk'] = Produk::whereNotBetween('harga',  [$harga_min, $harga_max])->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');
        return view('produk.index', $data);
    }
}