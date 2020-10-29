<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Males Design</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="css/tooplate-style_db.css"> 
<link rel="stylesheet" href="css/style.css">

<style type="text/css">
a:hover {
	color: #FFFFFF;
}
</style>
</head>

<body>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:dashboard.php'); }
?>
<div align="center">
  <table class="table-responsive-xl" width="1248" border="0" align="center">

    <tr>
      <th height="29" scope="row">&nbsp;</th>
      <td width="744" bgcolor="#42B568" style="border-top: solid 8px rgb(8, 140, 0);">
      <div align="center" class="style1">MALES DESIGN</div>
      </td>
    </tr>

    <tr>
      <th width="170" height="49" nowrap="nowrap"bgcolor="#42B548" style="border-top: solid 8px rgb(8, 140, 0);" scope="row">
      <div id="katalog">
      <a href="#">Hightlight Katalog </a></th></div>

      <th nowrap="nowrap" bgcolor="#42B548" style="border-top: solid 8px rgb(8, 140, 0);">
      <div id="menu" align="center">
      <a href="#">Home</a>
      <a href="#">Katalog</a>
      <a href="#">Design 2D</a>
      <a href="#">Design 3D</a>
      <a href="#">Kontak Kami </a></div></th>

      <td width="191" bgcolor="#42B548" style="border-top: solid 8px rgb(8, 140, 0);">
      <div id="register" align="center">
      <a href="register.php">Register</a>
  	</div>
  	  </td>
    </tr>

    <tr>
      <th height="130" scope="row">
      <div class="" align="center">
      <img class="foto" src="gambar/Kaos.jpg" alt="" width="100"height="128" align="middle"/>
      <img class="foto" src="gambar/SD_Masjid AL-Fatih.jpg" alt="" width="100"height="128" align="middle"/>
      <img class="foto" src="gambar/SD_Sepatu.jpg" alt="" width="150"height="100" align="middle"/>
      
      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div></th>

      <td><p align="center" class="judul"> <img src="gambar/males_design.png" width="150" height="100"/></p>

      <p class="judul"> <strong>Tentang Produk</strong></p>
      <p>Kami menerima berbagai macam design 2D maupun 3D , seperti design Poster, Undangan, juga design Rumah , Exterior dan Interior Kami juga menerima edit foto dan design vector untuk Kado ultah, Wisuda dan lain-lain. </p><hr/>
      </td>

     <td>
     <form class="login" action="" method="post">
      <br><center>Username<input type="text"  name="username"/></center>
      <br><center>Password<br><input type="password" name="password"/></center>
      <br><input type="submit" class="btn btn-success btn-block" name="login" value="Login">
    </form>
	</tr>

  <tr>
    <td>&nbsp;</td>
    <td >
        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slider1.jpg" class="d-block w-100" alt="gambar">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slider1.jpg" class="d-block w-100" alt="gambar">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slider1.jpg" class="d-block w-100" alt="gambar">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </td>
    <td>&nbsp;</td>
  </tr>
  	</table>
</div>

<?php
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
   }
   ?>
<script>
  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("foto");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<script>
 var renderPage = true;

   if (navigator.userAgent.indexOf('MSIE') !== -1
   || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
   alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   renderPage = false;
    }
</script>


<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<div id="footer"><center> <a href="#">homepage</a> | <a href="mailto:denise@mitchinson.net">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; <span class="tm-current-year">2020</span> | Design by <a href="http://www.instagram.com/hamzah_r27/">Hamzah Risvi</a><br/>
This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Males Design License</a></center> </div>
</body>
</html>
