@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<?php
  include "koneksi.php";      
  $sql= "SELECT * from pelanggans ORDER BY id";									
  $hasil=$conn->query($sql);  ?>
<div class="container-fluid mt-3">
    <div class="jumbotron bg-color" style="margin-top: 50px;" >
        <div style="text-align:center; ">
            <h1 id="title">List Table Pelanggan</h1>
        </div><br>
        <table class="table" id="isi" style="width: 100%;">
                <thead class="">
                            <tr>
                                <th style="width: 10%; font-size:120%;">Id Pelanggan</th>
                                <th style="width: 10%; font-size:120%;">Nama</th>
                                <th style="width: 10%; font-size:120%;">Alamat</th>
                                <th style="width: 20%; font-size:120%;">Telepon</th>
                                <th style="width: 10%; font-size:120%;">No. Rekening</th>
                                <th style="width: 0%; font-size:120%;"></th>
                            </tr>
                </thead>
        <?php 
            if ($hasil->num_rows>0) {
                    ?>
                    @foreach($pelanggan as $p)
                    <tr>
                    <td>{{ $p->id}}</td>
			        <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->telepon }}</td>
                    <td>{{ $p->norek }}</td>
                    <td><form action="{{ route('pelanggan.destroy',$p->id) }}" method="POST" style="display:flex; justify-content: space-around; ">
                        <a class="btn1" style="margin-right:10px" href="{{ route('pelanggan.show',$p->id) }}">Show</a>
                        <a class="btn3" style="margin-right:10px"href="{{ route('pelanggan.edit',$p->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn2">Delete</button>
                    </form></td>
                    </tr>
                    @endforeach
                    <?php
                    echo "</table>";
                }
            else {
                echo "</table><center><h2 id='title2'> TABEL KOSONG </h2></center><br>" ;
            }
            $conn->close();?>
        <a class='btn' href="{{ route('pelanggan.create') }}">Tambah Data</a>
    </div>
</div>
@endsection