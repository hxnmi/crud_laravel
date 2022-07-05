@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<div class="container-fluid mt-3" style="border-radius:50%">
    <div class="jumbotron bg-color" style="margin-top: 50px;">
        <div style="text-align:center;">
            <h1 id="title">Menu</h1>
        </div>
        <div class="row">
            <div class="form-container">
                <a class="btn" href="/produk">PRODUK</a>
                <a class="btn" href="/pelanggan">PELANGGAN</a>
            </div>
        </div>
    </div>
</div>
@endsection