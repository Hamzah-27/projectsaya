<?php
   session_start();
   require_once("koneksi.php");
   $username = @$_POST['username'];
   $password = @$_POST['password'];
   
   $query = mysqli_query($konek,"SELECT * FROM pelanggan WHERE (username = '$username' AND password = '$password')");
   $data = mysqli_fetch_array($query);
   $jml = mysqli_num_rows($query);

   if ($jml > 0) {
     $_SESSION['username'] = $data['username'];
     $_SESSION['password'] = $data['password'];

     header("location: dashboard.php");
   }else{
    echo "<p align='center'>Login Gagal :(</p>";
    echo "<meta http-equiv='refresh'content='2;url=index.php'>";
   }
   ?>