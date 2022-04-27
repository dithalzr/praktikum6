<?php
echo "<b>Biodata Diri</b><br><br>";
if (empty($_POST['nama'])) {
	header("Location:kosong.php");
} else {
	echo "Nama : ".$_POST['nama']."<br>";
}
if (empty($_POST['email'])) {
	header("Location:kosong.php");
} else {
	echo "Email : ".$_POST['email']."<br>";
}
if (empty($_POST['npm'])) {
	header("Location:kosong.php");
} else {
	echo "NPM : ".$_POST['npm']."<br>";
}
if (empty($_POST['jnsklm'])) {
	header("Location:kosong.php");
} else {
	echo "Jenis Kelamin : ".$_POST['jnsklm']."<br>";
}
if (empty($_POST['hobi'])) {
	header("Location:kosong.php");
} else {
	echo "Hobi : ".$_POST['hobi']."<br>";
}
if (empty($_POST['alamat'])) {
	header("Location:kosong.php");
} else {
	echo "Alamat : ".$_POST['alamat']."<br><br>";
}
date_default_timezone_set('Asia/Jakarta');
echo "Tanggal dan waktu sekarang : ".date("l, d-M-Y, H:i:s a"."<br>");
?>