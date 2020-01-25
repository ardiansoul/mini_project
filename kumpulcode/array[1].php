<?php 
$mhs = [
	["ardi","224551811050", "teknik informatika" , "yanaardi523@gmail.com"],["budi","224551811430", "teknik industri" , "budi523@gmail.com"],["cindi","42351811050", "sistem	informatika" , "cidnand@gmail.com"],["dani","224555431050", "matematika" , "dandandi@gmail.com"]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 <h1>daftar mahasiswa</h1>

<?php foreach ($mhs as $mahasiswa) : ?>

<ul> 
<li><?= $mahasiswa[0];?></li>
<li><?= $mahasiswa[1];?></li>
<li><?= $mahasiswa[2];?></li>
<li><?= $mahasiswa[3];?></li>

</ul>
<?php endforeach; ?>
 </body>
 </html>