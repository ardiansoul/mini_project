<?php 
include "47_object_class.php";
echo "<html><head><title>mahasiswa</title></head><body>";
$form = new form ("","input form");
$form->addfield ("txtnim","nim");
$form->addfield ("txtnama", "nama");
$form->addfield ("txtalamat", "alamat");
echo "silahkan isikan form berikut";
$form->displayform();
echo "</body></html>";

 ?>
