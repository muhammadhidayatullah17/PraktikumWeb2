<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 203</title>
</head>
<body>
    <form action="" method="POST">
        Nilai : <input type ="number" name = "nilai">
        <br>
        Dari :
        <br>
        <input name="suhu1" id="Celcius" type="radio" value="Celcius" <?php if (isset($_POST["suhu1"]) && $_POST["suhu1"] == "Celcius") echo "checked";?>>Celcius<br>
        <input name="suhu1" id="Fahrenheit" type="radio" value="Fahrenheit" <?php if (isset($_POST["suhu1"]) && $_POST["suhu1"] == "Fahrenheit") echo "checked";?>>Fahrenheit<br>
        <input name="suhu1" id="Rheamur" type="radio" value="Rheamur" <?php if (isset($_POST["suhu1"]) && $_POST["suhu1"] == "Rheamur") echo "checked";?>>Rheamur<br>
        <input name="suhu1" id="Kelvin" type="radio" value="Kelvin" <?php if (isset($_POST["suhu1"]) && $_POST["suhu1"] == "Kelvin") echo "checked";?>>Kelvin<br>
        Ke :
        <br>
        <input name="suhu2" id="Celcius2" type="radio" value="Celcius2" <?php if (isset($_POST["suhu2"]) && $_POST["suhu2"] == "Celcius2") echo "checked";?>>Celcius<br>
        <input name="suhu2" id="Fahrenheit2" type="radio" value="Fahrenheit2" <?php if (isset($_POST["suhu2"]) && $_POST["suhu2"] == "Fahrenheit2") echo "checked";?>>Fahrenheit<br>
        <input name="suhu2" id="Rheamur2" type="radio" value="Rheamur2" <?php if (isset($_POST["suhu2"]) && $_POST["suhu2"] == "Rheamur2") echo "checked";?>>Rheamur<br>
        <input name="suhu2" id="Kelvin2" type="radio" value="Kelvin2" <?php if (isset($_POST["suhu2"]) && $_POST["suhu2"] == "Kelvin2") echo "checked";?>>Kelvin<br>
        <input type="submit" name="submit" value="Konversi">
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $nilai = $_POST['nilai'];
    $suhu1 = $_POST['suhu1'];
    $suhu2 = $_POST['suhu2'];

    // Skala Celcius ke (F)Fahrenheit, (R)Reamur, (K)Kelvin
    if ($suhu1 == "Celcius"){
        if ($suhu2 == "Fahrenheit2"){
            echo "<h2>Hasil Konversi: " . (9/5 * $nilai) + 32 . " °F</h2>";
        }
        else if ($suhu2 == "Rheamur2"){
            echo "<h2>Hasil Konversi: " . 4/5 * $nilai . " °R</h2>";
        }
        else if ($suhu2 == "Kelvin2"){
            echo "<h2>Hasil Konversi: " . $nilai + 273.15 . " °K</h2>";
        }
        else {
            echo "<h2>Hasil Konversi: $nilai °C</h2>";
        }
    }

    // Skala Fahrenheit ke (C)Celcius, (R)Reamur, (K)Kelvin
    else if ($suhu1 == "Fahrenheit"){
        if ($suhu2 == "Celcius2"){
            echo "<h2>Hasil Konversi: " .  (5/9) * ($nilai - 32) . " °C</h2>";
        }
        else if ($suhu2 == "Rheamur2"){
            echo "<h2>Hasil Konversi: " . 4/9 * ($nilai - 32) . " °R</h2>";
        }
        else if ($suhu2 == "Kelvin2"){
            echo "<h2>Hasil Konversi: " . ($nilai - 32) * 5/9 + 273.15 . " °K</h2>";
        }
        else {
            echo "<h2>Hasil Konversi: $nilai °F</h2>";
        }
    }

    // Skala Reamur ke (C)Celcius, (F)Fahrenheit, (K)Kelvin
    else if ($suhu1 == "Rheamur"){
        if ($suhu2 == "Celcius2"){
            echo "<h2>Hasil Konversi: " . 5/4 * $nilai . " °C</h2>";
        }
        else if ($suhu2 == "Fahrenheit2"){
            echo "<h2>Hasil Konversi: " . ($nilai * 9/4) + 32 . " °F</h2>";
        }
        else if ($suhu2 == "Kelvin2"){
            echo "<h2>Hasil Konversi: " . (5/4) * $nilai + 273.15 . " °K</h2>";
        }
        else {
            echo "<h2>Hasil Konversi: $nilai °R</h2>";
        }
    }

    // Skala Kelvin ke (C)Celcius, (F)Fahrenheit, (R)Reamur
    else if ($suhu1 == "Kelvin"){
        if ($suhu2 == "Celcius2"){
            echo "<h2>Hasil Konversi: " . $nilai - 273.15 . " °C</h2>";
        }
        else if ($suhu2 == "Fahrenheit2"){
            echo "<h2>Hasil Konversi: " . 9/5 * ($nilai - 273.15) + 32 . " °F</h2>";
        }
        else if ($suhu2 == "Rheamur2"){
            echo "<h2>Hasil Konversi: " . 4/5 * ($nilai - 273.15) . " °R</h2>";
        }
        else {
            echo "<h2>Hasil Konversi: $nilai °K</h2>";
        }
    }
}
?>