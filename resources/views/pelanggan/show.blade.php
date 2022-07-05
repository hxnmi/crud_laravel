@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<div class="container-fluid mt-3">
    <div class="jumbotron bg-color" style="margin-top: 50px;" >
        <div style="text-align:center; ">
            <h1 id="title">Show Pelanggan</h1>
        </div><br> 
        <div class="form-container" style="width:50%; margin:auto; border:3px; padding:10px;">
            <div class="row" style="margin:auto; padding:50px; display: flex;align-items: center;justify-content: center;">
                <strong style="font-size:150%">Id Pelanggan : {{ $pelanggan->id }}</strong>
                <strong style="font-size:150%">Name : {{ $pelanggan->nama }}</strong>
                <strong style="font-size:150%">Alamat :  {{ $pelanggan->alamat }}</strong>
                <strong style="font-size:150%">Telepon : {{ $pelanggan->telepon }}</strong>
                <strong style="font-size:150%">No. Rekening : {{ $pelanggan->norek }}</strong>
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pelanggan.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection