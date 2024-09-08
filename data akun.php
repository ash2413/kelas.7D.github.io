<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data akun</title>
</head>
<body>
    <h2>Data Akun</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
        </tr>

        <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT *From akun");
        while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
            <td>
                <a href="#">Edit</a>
                <a href="hapus.php?kode=<?php echo $row['username'];?>"
                onclick="return confirm('apakah Anda Yakin Akan Menghapus Data Ini?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>