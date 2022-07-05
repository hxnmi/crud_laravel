@extends('layouts.main')
@include('layouts.navbar2')
@section('container')
<?php
  include "koneksi.php";      
  $sql= "SELECT * from produks ORDER BY id";									
  $hasil=$conn->query($sql);  ?>
<div class="container-fluid mt-3">
    <div class="jumbotron bg-color" style="margin-top: 50px;" >
        <div style="text-align:center; ">
            <h1 id="title">List Table Produk</h1>
        </div><br>
        <table class="table" id="isi" style="width: 100%;">
                <thead class="">
                            <tr>
                <th style="width: 10%; font-size:120%;">Id Produk</th>
                                <th style="width: 10%; font-size:120%;">Nama</th>
                                <th style="width: 10%; font-size:120%;">Harga</th>
                                <th style="width: 20%; font-size:120%;">Gambar</th>
                <th style="width: 10%; font-size:120%;">Jumlah</th>
                                <th style="width: 0%; font-size:120%;"></th>
                            </tr>
                </thead>
        <?php 
            if ($hasil->num_rows>0) {
                    ?>
                    @foreach($produk as $p)
                    <tr>
                    <td>{{ $p->id}}</td>
			        <td>{{ $p->nama }}</td>
                    <td>{{ $p->harga }}</td>
                    <td><img src="img/{{ $p->gambar }}" class='img'></img></td>
                    <td>{{ $p->jml_stok }}</td>
                    <td><form action="{{ route('produk.destroy',$p->id) }}" method="POST" style="display:flex; justify-content: space-around; ">
                        <a class="btn1" style="margin-right:10px" href="{{ route('produk.show',$p->id) }}">Show</a>
                        <a class="btn3" style="margin-right:10px"href="{{ route('produk.edit',$p->id) }}">Edit</a>
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
        <a class='btn' href="{{ route('produk.create') }}">Tambah Data</a>
    </div>
</div>
@endsection