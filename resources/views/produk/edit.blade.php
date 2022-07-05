@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<div class="container-fluid mt-3" style="border-radius:50%">
    <div class="jumbotron bg-color" style="margin-top: 50px;" >
			<div style="text-align:center; ">
				<h1 id="title">Edit Data Produk</h1>
			</div>
      <div class="row">
        <div class="form-container2">
          <form action="{{ route('produk.update',$produk->id) }}" method='POST' enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label for="id">Id Produk </label> 
              <input type='text' class="form-control" name='id' value="{{ $produk->id }}" readonly> 
            </div><br>
            <div class="form-group">
              <label for="nama">Nama Produk </label> 
              <input type='text' class="form-control" name='nama' value="{{ $produk->nama }}" placeholder="nama"> 
            </div><br>
            <div class="form-group">
              <label for="harga">Harga </label> 
              <input type='text' class="form-control" name='harga' value="{{ $produk->harga }}" placeholder="harga"> 
            </div><br>
            <div class="form-group">
              <label for="jml_stok">Jumlah Stok </label> 
              <input type='text' class="form-control" name='jml_stok' value="{{ $produk->jml_stok }}" placeholder="jml_stok">  
            </div><br>
            <div class="form-group">
              <label for="gambar">Gambar </label> 
              <input type='file' class="form-control" name='gambar'>
            </div><br>
            <div class="form-group">
              <input type='hidden' class="form-control" name='foto_lama' value="{{ $produk->gambar }}">
              <img src="/img/{{ $produk->gambar }}" class="img" />
            </div><br>
            <input type='submit' class="btn btn-primary">
          </form>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pelanggan.index') }}"> Back</a>
        </div>
      </div>
    </div>
</div>