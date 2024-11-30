<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktor Angka</title>
</head>

<body>
    <h1>Masukkan Angka untuk Mencari Faktornya</h1>

    <form method="POST" action="">
        <label for="angka">Masukkan angka: </label>
        <input type="number" name="angka" id="angka" required>
        <button type="submit">Cari Faktor</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $angka = $_POST['angka'];


        if ($angka > 0) {
            echo "<h2>Faktor-faktor dari angka $angka adalah:</h2>";


            for ($i = 1; $i <= $angka; $i++) {
                if ($angka % $i == 0) {
                    echo "$i<br>";
                }
            }
        } else {
            echo "Harap masukkan angka positif yang lebih besar dari 0.";
        }
    }
    ?>
</body>

</html>