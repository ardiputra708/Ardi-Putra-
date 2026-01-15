<?php
/*
Nama  : NAMA KAMU
NIM   : NIM KAMU
Prodi : PRODI KAMU
*/

$xml = simplexml_load_file("data_buku.xml");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 2 - XML</title>
</head>
<body>

<h2>Daftar Buku</h2>

<ul>
<?php foreach ($xml->Buku as $buku) { ?>
    <li>
        <strong>Judul:</strong> <?= $buku->Judul ?><br>
        <strong>Penulis:</strong> <?= $buku->Penulis ?><br>
        <strong>Tahun:</strong> <?= $buku->Tahun ?>
    </li><br>
<?php } ?>
</ul>

</body>
</html>
