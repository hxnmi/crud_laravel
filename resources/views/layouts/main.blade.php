<?php
@include "koneksi.php";
session_start();
if (!empty($_SESSION['user']) && !empty($_SESSION['password'])){
    header('Location: dashboard');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Toko JKL</title>
  <style>
    .row{
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .form-container{
        background: #FFF;
        padding: 30px;
        border-radius: 10px;
        width: auto;
        box-shadow: 2px 2px 10px 0 #a8d480;
    }
    .form-container2{
        background: #FFF;
        padding: 30px;
        border-radius: 10px;
        width: 420px;
        box-shadow: 2px 2px 10px 0 #a8d480;
    }
    .btn {
      padding-left: 10px;
      padding-right: 10px;
      background-color: #a8d480;
      border-radius: 5px; 
      color: white;
	    font-size: 130%;
    }
	  .btn:hover {
      transition: 0.7s;
      transform: scale(1.1);
      font-weight: bolder;
      font-size: 135%;
      box-shadow: 2px 2px 10px lightgrey;
    }
    .btn1 {
      padding: 5px;
      padding-left: 10px;
      padding-right: 10px;
      background-color: skyblue;
      border-radius: 5px; 
      color: white;
	    font-size: 100%;
    }
	  .btn1:hover {
      transition: 0.7s;
      transform: scale(1.1);
      font-weight: bolder;
      font-size: 105%;
      box-shadow: 2px 2px 10px lightgrey;
    }
    .btn2 {
      padding: 5px;
      padding-left: 10px;
      padding-right: 10px;
      background-color: red;
      border-radius: 5px; 
      color: white;
      font-size: 100%;
    }
	  .btn2:hover {
      transition: 0.7s;
      transform: scale(1.1);
      font-weight: bolder;
      font-size: 105%;
      box-shadow: 2px 2px 10px lightgrey;
    }
    .btn3 {
      padding: 5px;
      padding-left: 10px;
      padding-right: 10px;
      background-color: greenyellow;
      border-radius: 5px; 
      color: green;
      font-size: 100%;
    }
	  .btn3:hover {
      transition: 0.7s;
      transform: scale(1.1);
      font-weight: bolder;
      font-size: 105%;
      box-shadow: 2px 2px 10px lightgrey;
    }
    .check{
      vertical-align: middle;
    }
    .check label{
      padding: 6px;
    }
  </style>
</head>
<body>
    @yield('container')
    <footer class="footer" style="margin-top: 50px;">
        <span class=""><center>Copyright &copy; 2021 Hantech Inc . Hanif Fahmi _ A11.2020.12418 _ A11.44UG , All Right Reserved</center></span>
        <br>
  </footer>
</body>
</html>