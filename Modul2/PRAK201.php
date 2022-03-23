<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 201</title>
</head>
<body>
    <form action="" method="POST">
        Nama: 1 <input type = "text" name = "nama[]"><br>
        Nama: 2 <input type = "text" name = "nama[]"><br>
        Nama: 3 <input type = "text" name = "nama[]"><br>
        <input type = "submit" value = "Urutkan">
    </form>
</body>
</html>

<?php
    if(isset($_POST["nama"])){
        $nama=$_POST["nama"];
        // Mengambil ukuran array
        $count = count($nama);
        // Conditional with looping
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($nama[$i] > $nama[$j]) {
                    $temp = $nama[$i];
                    $nama[$i] = $nama[$j];
                    $nama[$j] = $temp;
                }
            }
        }
        //Print array yang sudah diurutkan
        foreach ($nama as $key => $val) {
            echo "$val<br>";
        }
    }
?>