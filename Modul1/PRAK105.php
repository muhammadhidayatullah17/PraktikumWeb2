<?php
$dataHp = ['HP1'=>'Samsung Galaxy S22','HP2'=>'Samsung Galaxy S22+','HP3'=>'Samsung Galaxy A03','HP4'=>'Samsung Galaxy Xcover 5'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
        <style>
            table, tr, th, td {
                border:2px solid black;
                width: 400px;
            }
            th {
                background:red;
                font-size: 20px;
                padding: 20px 0px 20px 0px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <tr>
                <td><?php echo $dataHp['HP1']?></td>
            </tr>
            <tr>
                <td><?php echo $dataHp['HP2']?></td>
            </tr>
            <tr>
                <td><?php echo $dataHp['HP3']?></td>
            </tr>
            <tr>
                <td><?php echo $dataHp['HP4']?></td>
            </tr>
        </table>
    </body>
</html>