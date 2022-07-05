@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<div class="container-fluid mt-3" style="border-radius:50%">
    <div class="jumbotron bg-color" style="margin-top: 50px;">
        <div style="text-align:center;">
            <h1 id="title">Input Data Pelanggan</h1>
        </div>
        <div class="row">
            <div class="form-container2">
                <form action="{{ route('pelanggan.store') }}"  method='POST' enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="id">Id Pelanggan </label> 
                    <input type='text' class="form-control" name='id'>
                </div><br>
                <div class="form-group">
                    <label for="nama">Nama Pelanggan </label> 
                    <input type='text' class="form-control" name='nama'>
                </div><br>
                <div class="form-group">
                    <label for="alamat">Alamat </label> 
                    <input type='text' class="form-control" name='alamat'>
                </div><br>
                <div class="form-group">
                    <label for="telepon">Telepon </label> 
                    <input type='text' class="form-control" name='telepon'>
                </div><br>
                <div class="form-group">
                    <label for="norek">No. Rekening </label> 
                    <input type='text' class="form-control" name='norek'>
                </div><br>
                <input type='submit' value='Simpan' class="btn btn-primary"> 
                </form>
            </div>
        </div>
        <a class='btn' href="{{ route('pelanggan.index') }}">Kembali</a>
    </div>
</div>
@endsection