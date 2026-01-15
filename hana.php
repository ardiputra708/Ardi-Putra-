<?php
$data = json_decode(file_get_contents("data_gadget.json"), true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soal 3 - Data Gadget JSON</title>
    <style>
        table { border-collapse: collapse; width: 70%; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #ddd; }
        .merah { color: red; font-weight: bold; }
    </style>
</head>
<body>

<h2>Data Gadget</h2>

<table>
<tr>
    <th>Merek</th>
    <th>Seri</th>
    <th>Harga</th>
</tr>

<?php foreach($data as $g){ ?>
<tr>
    <td><?= $g['merek']; ?></td>
    <td><?= $g['seri']; ?></td>
    <td class="<?= ($g['harga'] > 14000000) ? 'merah' : ''; ?>">
        Rp <?= number_format($g['harga'],0,',','.'); ?>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
