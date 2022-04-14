<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <form action="" method="POST">
        Jumlah Peserta : <input type="text" name="nilai"></input><br>
        <input type="submit" name="submit" value="Cetak"></input><br>
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])){
    $nilai = $_POST["nilai"];
    $i = 1;
    while($i <= $nilai ){
        if ($i % 2 != 0){
            echo "<h2 style='color:red'>Peserta ke-$i</h2>";
        }
        else {
            echo "<h2 style='color:green'>Peserta ke-$i</h2>";
        }
        $i++;
    }
}
?>