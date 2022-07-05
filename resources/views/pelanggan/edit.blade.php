@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<div class="container-fluid mt-3" style="border-radius:50%">
    <div class="jumbotron bg-color" style="margin-top: 50px;" >
			<div style="text-align:center; ">
				<h1 id="title">Edit Data Pelanggan</h1>
			</div>
      <div class="row">
        <div class="form-container2">
          <form action="{{ route('pelanggan.update',$pelanggan->id) }}" method='POST' enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label for="id">Id Pelanggan </label> 
              <input type='text' class="form-control" name='id' value="{{ $pelanggan->id }}" readonly> 
            </div><br>
            <div class="form-group">
              <label for="nama">Nama Pelanggan </label> 
              <input type='text' class="form-control" name='nama' value="{{ $pelanggan->nama }}" placeholder="nama"> 
            </div><br>
            <div class="form-group">
              <label for="alamat">Alamat </label> 
              <input type='text' class="form-control" name='alamat' value="{{ $pelanggan->alamat }}" placeholder="alamat"> 
            </div><br>
            <div class="form-group">
              <label for="telepon">Telepon </label> 
              <input type='text' class="form-control" name='telepon' value="{{ $pelanggan->telepon }}" placeholder="telepon">  
            </div><br>
            <div class="form-group">
              <label for="norek">No. Rekening </label> 
              <input type='text' class="form-control" name='norek' value="{{ $pelanggan->norek }}" placeholder="norek">  
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