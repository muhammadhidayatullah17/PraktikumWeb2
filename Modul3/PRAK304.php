<?php
$nilai = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["nilai"])){
            $nilai = $_POST["nilai"];
        }
    }
    if (isset($_POST["tambah"])){
        $nilai++;
    }
    if (isset($_POST["kurang"])){
        $nilai--;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
<?php
    if($nilai == 0){ ?>
    <form action="" method="POST">
        Jumlah bintang <input type="text" name="nilai"></input><br>
        <input type="submit" name="submit" value="Submit"></input><br>
    </form>
    <?php }

    if (isset($_POST['nilai']) and $nilai != 0){
        echo "Jumlah bintang $nilai:<br><br><br>";
        $i = 1;
        do{
            echo "<img src='star-images-9441.png' width='50px' height='50px'>";
            $i++;
        } while($i <= $nilai);
    }

    if ($nilai != 0){
        ?> <form action="" method="POST">
            <input type="submit" name="tambah" value="Tambah"></button>
            <input type="hidden" name="nilai" value="<?= $nilai?>"/>
            <input type="submit" name="kurang" value="Kurang"></button>
        </form>
        <?php
    }
    ?>
</body>
</html>