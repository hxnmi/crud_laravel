@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<div class="container-fluid mt-3" style="border-radius:50%">
    <div class="jumbotron bg-color" style="margin-top: 50px;">
        <div style="text-align:center;">
            <h1 id="title">Input Data Produk</h1>
        </div>
        <div class="row">
            <div class="form-container2">
                <form action="{{ route('produk.store') }}"  method='POST' enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="id">Id Produk </label> 
                    <input type='text' class="form-control" name='id'>
                </div><br>
                <div class="form-group">
                    <label for="nama">Nama Produk </label> 
                    <input type='text' class="form-control" name='nama'>
                </div><br>
                <div class="form-group">
                    <label for="harga">Harga </label> 
                    <input type='text' class="form-control" name='harga'>
                </div><br>
                <div class="form-group">
                    <label for="gambar">Gambar </label> 
                    <input type='file' class="form-control"  name='gambar'>
                </div><br>
                <div class="form-group">
                    <label for="jml_stok">Jumlah Stok </label> 
                    <input type='text' class="form-control" name='jml_stok'>
                </div><br>
                <input type='submit' value='Simpan' class="btn btn-primary"> 
                </form>
            </div>
        </div>
        <a class='btn' href="{{ route('produk.index') }}">Kembali</a>
    </div>
</div>
@endsection