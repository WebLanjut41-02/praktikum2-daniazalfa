<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center>
    <h3>Tambah penghuni</h3>
</center>
<form action="<?php echo base_url(). 'tambah/tambah_aksi'; ?>" method="post">
    <table style="margin:20px auto;">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>unit</td>
            <td><input type="text" name="unit"></td>
        </tr>
        <tr>
            <td>no ktp</td>
            <td><input type="text" name="noktp"></td>
        </tr>
    </table>
</form>
</body>
</html>