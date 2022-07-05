<?php
include "koneksi.php";
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
}
$qry = mysqli_query($conn, "SELECT * FROM login WHERE username = '$username' AND password ='$password'");
$cek = mysqli_num_rows($qry);
if($cek==1){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('location:dashboard');
}
else{ ?>
    <script> alert ("username atau password salah")
    window.location="/";</script>
<?php
} 
?>