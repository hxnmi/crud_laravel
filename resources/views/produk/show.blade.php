@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<div class="container-fluid mt-3">
    <div class="jumbotron bg-color" style="margin-top: 50px;" >
        <div style="text-align:center; ">
            <h1 id="title">Show Produk</h1>
        </div><br> 
        <div class="form-container" style="width:50%; margin:auto; border:3px; padding:10px;">
            <div class="row" style="margin:auto; padding:50px; display: flex;align-items: center;justify-content: center;">
                <strong style="font-size:150%">Id Produk : {{ $produk->id }}</strong>
                <strong style="font-size:150%">Name : {{ $produk->nama }}</strong>
                <strong style="font-size:150%">Harga :  {{ $produk->harga }}</strong>
                <strong style="font-size:150%">Gambar : </strong>
                <img src="/img/{{ $produk->gambar }}" class="img" style="width:40%"></strong>
                <strong style="font-size:150%">Jumlah : {{ $produk->jml_stok }}</strong></img>
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('produk.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection