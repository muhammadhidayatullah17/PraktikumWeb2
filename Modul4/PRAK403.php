<?php

$mhs = [
    [
        "nama" => "Ridho",
        "matkul" => ["Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"],
        "SKS" => [2, 1, 2, 3]
    ],
    [
        "nama" => "Ratna",
        "matkul" => ["Basis Data I", "Praktikum Basis Data I", "Kalkulus"],
        "SKS" => [2, 1, 3]
    ],
    [
        "nama" => "Tono",
        "matkul" => ["Rekayasa Perangkat Lunak", "Analisis dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"],
        "SKS" => [3, 3, 3, 3]
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<style>
    table, td, th{
        border:1px solid black;
    }

    table {
        border-collapse: collapse;
    }

    td, th {
        width: 100px;
        padding-bottom: 10px;
        padding-left: 5px;
    }

    th {
        background-color: #ccc;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
        for ($i = 0; $i < count($mhs); $i++){
            $mhs[$i]["Total SKS"] = array_sum($mhs[$i]["SKS"]);
        }

        for ($j = 0; $j < count($mhs); $j++){
            for($k = 0; $k < count($mhs[$j]["matkul"]); $k++){
                echo "<tr>";
                if ($k == 0){
                    echo "<td>".($j+1)."</td>";
                    echo "<td>".$mhs[$j]["nama"]."</td>";
                    echo "<td>".$mhs[$j]["matkul"][$k]."</td>";
                    echo "<td>".$mhs[$j]["SKS"][$k]."</td>";
                    echo "<td>".$mhs[$j]["Total SKS"]."</td>";
                    if ($mhs[$j]["Total SKS"] >= 7){
                        $mhs[$j]["Keterangan"] = "Tidak Revisi";
                        echo "<td style='background-color:green;' >".$mhs[$j]["Keterangan"]."</td>";
                    } 
                    else {
                        $mhs[$j]["Keterangan"] = "Revisi KRS";
                        echo "<td style='background-color:red;' >".$mhs[$j]["Keterangan"]."</td>";
                    }
                }
                else {
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>".$mhs[$j]["matkul"][$k]."</td>";
                    echo "<td>".$mhs[$j]["SKS"][$k]."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
            }
        }
        ?>
    </table>
</body>
</html>