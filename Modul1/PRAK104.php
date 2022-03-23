<?php
$dataHp = ['Samsung Galaxy S22','Samsung Galaxy S22+','Samsung Galaxy A03','Samsung Galaxy Xcover 5'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PRAK104</title>
        <style>
            table, tr, th, td {
                border:2px solid black;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <tr>
                <td><?php echo $dataHp[0]?></td>
            </tr>
            <tr>
                <td><?php echo $dataHp[1]?></td>
            </tr>
            <tr>
                <td><?php echo $dataHp[2]?></td>
            </tr>
            <tr>
                <td><?php echo $dataHp[3]?></td>
            </tr>
        </table>
    </body>
</html>