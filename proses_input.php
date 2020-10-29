<?php 
$konek=mysqli_connect("localhost","root","") or die ("gagal konek");
mysqli_select_db($konek,"sobatdesign");
?> 
 
<?php
if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$alamat   = $_POST['alamat'];
	$nohp     = $_POST['nohp'];
	$email	  = $_POST['email'];
	$foto	  = $_FILES['foto']['name'];
	$tmp_name = $_FILES['foto']['tmp_name'];
	$jenkel	  = $_POST['jenkel'];
	if (!$username||!$password||!$alamat||!$nohp||!$email||!$foto||!$jenkel)
	{echo "silahkan di isi dulu kakak..!";} else {

			// tentukan lokasi file akan dipindahkan

			// pindahkan file
			move_uploaded_file($tmp_name, 'images/'.$foto); {

				$sql = mysqli_query($konek,"INSERT INTO pelanggan VALUES ('$username','$password','$alamat','$nohp','$email','$foto','$jenkel')") or die (mysqli_error());
			if($sql){

				echo "Data berhasil di input";
				echo "<meta http-equiv = 'Refresh' content= '0; url =index.php'>";
			}else{

				echo "Data gagal di input";
			}

			}
	}
}
 ?>