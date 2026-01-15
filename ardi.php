<?php
// Koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_kampus";

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query mengambil data
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Program Studi</th>
    </tr>

    <?php
    $no = 1;
    while ($data = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['nim']."</td>";
        echo "<td>".$data['prodi']."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
