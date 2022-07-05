@extends('layouts.main')
@include('layouts.navbar1')
@section('container')
<div class="container-fluid mt-3" style="border-radius:50%">
        <div class="jumbotron bg-color" style="margin-top: 50px;">
            <div style="text-align:center;">
                <h1 id="title">Login</h1>
            </div>
            <div class="row">
                <div class="form-container">
                    <form action='login.php' method='post' enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username">Username </label> 
                        <input type='text' placeholder="Username" class="form-control" name='username'>
                    </div><br>
                    <div class="form-group">
                        <label for="passowrd">Password </label> 
                        <input type='password' placeholder="Password" class="form-control" name='password'>
                    </div><br>
                    <input type='submit' value='Login'  class="btn btn-primary"> 
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
