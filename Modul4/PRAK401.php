<?php
//Inisiasi empty variable
$panjang = null;
$lebar = null;
$nilai = null;
$split = null;

//function isset
if(isset($_POST['submit'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = $_POST['nilai'];
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
    table, td, th{
        border:1px solid black;
    }
    table{
        border-collapse: collapse;
        width:50px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <form action="" method="POST">
        Panjang : <input type="text" name="panjang"><br>
        Lebar : <input type="text" name="lebar"><br>
        Nilai : <input type="text" name="nilai"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <table>
        <?php
        if (isset($_POST['submit'])){
            
            if (!empty($nilai)){
                $split = explode(" ", $nilai);
                $count = count($split);
                if ($count > $panjang * $lebar){
                    echo "Panjang Nilai tidak sesuai dengan ukuran matriks";
                }
                else{
                    $k = 0;
                    for ($i=0; $i < $panjang; $i++) { 
                        echo "<tr>";
                        for ($j=0; $j < $lebar; $j++) { 
                            echo "<td>".$split[$k]."</td>";
                            $k++;
                        }
                        echo "</tr>";
                    }
                }
            }
        }
        ?>
        </table>
</body>
</html>