<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body background="black">
    <h1>Masukan Jumlah Baris Segitiga</h1>
    <form action="" method="post">
        <input type="number" name="value" id="value" min="0" placeholder="0">
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <hr>
    <h1>Hasil</h1>
    <?php
    if (isset($_POST['simpan'])) {
        $baris  = (isset($_POST['value']) && $_POST['value'] > 0) ? $_POST['value'] : 0;
        echo "<p>segitiga : $baris Baris</p>";
        echo "<table style='background:black; color:white;'>";
        for ($i = 0; $i < $baris; $i++) {
            $no = $i + 1;
            echo "<tr align='center'>";
            echo "<td>" . $no . " => </td>";
            echo "<td>";
            echo " * ";
            for ($j = 0; $j < $i; $j++) {
                echo ' * ';
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>