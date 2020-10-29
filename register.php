<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Males Design</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="css/tooplate-style.css"> 
<link rel="stylesheet" href="css/style_regist.css"/>

<style type="text/css">
a:hover {
	color: #FFFFFF;
}
</style>
</head>

<body>
<div align="center">
  <table class="table-responsive-xl" width="1248" border="0" align="center">

    <tr>
  		<th height="29" width="744" bgcolor="#42B568" scope="row" style="border-top: solid 8px rgb(8, 140, 0);">
      <div align="center" class="style1">MALES DESIGN </div>
      	</th>
    </tr>

    <tr>
      <th width="170" height="49" nowrap="nowrap"bgcolor="#42B548" style="border-top: solid 8px rgb(8, 140, 0);" scope="row">
      <div align="center">
      <a href="index.php">Home</a>
      <a href="#">Katalog</a>
      <a href="#">Design 2D</a>
      <a href="#">Design 3D</a>
      <a href="#">Kontak Kami</a></div></th>
  	</tr>

      <tr>
      	<td height="29" bgcolor="#FFFFFF" style="border-top: solid 8px rgb(8, 140, 0); color: #FFF;"><p align="center" class="judul"> <img src="gambar/males_design.png" width="150" height="100"/></p>
    	</td>
    </tr>

    <tr>
      <td>
      <div class="row">
      <div class="col-lg-12">
      <div class="tm-tag-line">
          <h2 class="tm-tag-line-title">Music is your powerful energy.</h2>
      </div>
      </div>
      </div>

      <div class="row tm-mt-big tm-about-row tm-mb-medium">
      <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 tm-contact-col">
      <div class="tm-contact-left tm-bg-pink-light-2 tm-text-white text-right p-md-5 p-4">
      <i class="fas fa-3x fa-comments mb-4"></i>
         <h2 class="tm-media-2-header">Contact Us</h2>
      </div>
      
      <div class="tm-bg-gray tm-contact-middle">
        <form action="proses_input.php" method="post" enctype="multipart/form-data">
      <div class="form-group mb-4">
        <p><center><h1> Register here </h1></center></p>
        <input type="text" name="username" class="form-control" placeholder="Username" required/>
      </div>
      <div class="form-group mb-4">
        <input type="password" name="password" class="form-control" placeholder="Password" required/>
      </div>
      <div class="form-group mb-4">
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required/>
      </div>
      <div class="form-group mb-4">
        <input type="text" name="nohp" class="form-control" placeholder="No.HP" required/>
      </div>
      <div class="form-group mb-4">
      	<input type="email" name="email" class="form-control" placeholder="Email" required/>
      </div>
      <div class="form-group m4-4">
      	<input type="file" name="foto" class="form-control" placeholder="foto" required/>
      </div>
       <div class="form-group mb-4 tm-select-group">
         <label class="tm-radio-label mb-0"><input type="radio" name="jenkel" value="laki" class="mr-1" required> Pria</label>
         <label class="tm-radio-label"><input type="radio" name="jenkel" value="perempuan" class="mr-1" required> Wanita</label>
       </div>
       <div class="form-group mb-0">
         <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
       </div></div>
         </form>
       </div>
       </div>
       </div>

      </td>
    </tr>
       
    <tr>
      <td>
      <footer class="row tm-about-row">
      <div class="col-xl-12">
      <p class="text-center p-1"><center>Copyright &copy;Sobat Design</center><span class="tm-current-year">2020</span></p>
      </div>
      </footer>
      </td>
    </tr>
  </table>
</div>

<script>
 var renderPage = true;

   if (navigator.userAgent.indexOf('MSIE') !== -1
   || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
   alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   renderPage = false;
    }
</script>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
