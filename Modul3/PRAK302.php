<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi : <input type="text" name="tinggi"></input><br>
        Alamat Gambar : <input type="text" name="gambar"></input><br>
        <input type="submit" name="submit" value="Cetak"></input><br>
    </form>
<table>
<?php
if (isset($_POST["submit"])){
    $tinggi = $_POST["tinggi"];
    $gambar = $_POST["gambar"];
    
    $i = 1;
    while($i <= $tinggi){
        $j = 1;
        ?><tr><?php
        while($j <= $tinggi){
            if ($i <= $j){
                ?><td><?php echo "<img src='$gambar' width='50px' height='50px'>"; ?></td><?php
            }
            else {
                ?><td><?php echo "" ; ?></td><?php
            }
            $j++;
        }
        echo "<br>";
        $i++;
        ?></tr><?php
    }
}
?>
</table>
</body>
</html>