<!DOCTYPE html>
<html>

<head>
    <title>SI Sekolah | Edit Data Siswa</title>
</head>

<body>

    <h2>SI Sekolah | Edit Data Siswa</h2>
    <br>
    <a href="index.php">KEMBALI</a>
    <br><br>
    <h3>Edit Data Siswa</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'"); 
    $data = mysqli_fetch_array($query);
    if (!$data) {
        echo "Data tidak ditemukan!";
        exit;
    }
    ?>

    <form method="post" action="edit_aksi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim" value="<?php echo $data['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td> 
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="submit" value="SIMPAN">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>