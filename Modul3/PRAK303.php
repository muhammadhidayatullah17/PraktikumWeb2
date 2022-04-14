<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="text" name="bawah"></input><br>
        Batas Atas : <input type="text" name="atas"></input><br>
        <input type="submit" name="submit" value="Cetak"></input><br>
    </form>
</body>
</html>

<?php
if (isset($_POST["submit"])){
    $atas = $_POST["atas"];
    $bawah = $_POST["bawah"];
    while($bawah <= $atas ){
        if(($bawah + 7) % 5 == 0){
            echo "<img src='star-images-9441.png' width='20px' height='20px'/>";
        }
        else {
            echo "$bawah ";
        }
        $bawah++;
    }
}
?>