<?php 
session_start();
require('./Model.php');
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
if (isset($_GET['id_buku'])) {
    editBuku();
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Patrick+Hand&display=swap');

    .button {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        padding: 3px;
        border-radius: 6px;
        position: relative;
        overflow: hidden;
    }
    .button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        background:
        linear-gradient(115deg, #4fcf70, #fad648, #a767e5, #12bcfe, #44ce7b);
        background-size: 50% 100%;
        border-radius: inherit;
    }
    .button:hover::before {
        animation: animate_border
        .75s linear infinite;
    }
    .button span{
        display: block;
        background-color: #000;
        padding: 3px 3px;
        border-radius: 3px;
        position: relative;
        z-index: 2;
    }
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Patrick Hand', cursive;
        color: rgb(238, 236, 236);
    }
    body {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to right bottom, #828282, #839fb5, #5fc5d0, #73e7b8, #d6fb84);
    }
    #table{
        border-collapse: collapse;
    }
    .items {
        padding: 15px 35px;
        font-size: 19px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.7);
    }
    .header-row {
        background-color: rgba(255, 255, 255, 0.31);
    }
    @keyframes animate_border {
        to {
            transform: translateX(-50%)
        }
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
   <?php echo (isset($_GET['id_buku'])) ? "<title>Update Data | Buku</title>": "<title>Tambah Data | Buku</title>" ?> 
</head>

<body>
    <form action="" method="post">
    <div class="table-section">
        <table id="table">
            <tr class="header-row">
                <td>Judul Buku</td>
                <td><input type="text" name="judul" placeholder="Judul Buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td>Nama Penulis</td>
                <td><input type="text" name="penulis" placeholder="Nama Penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" placeholder="Penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td>Tahun Terbit</td>
                <td><input type="text" name="thnterbit" placeholder="Tahun Terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr>
                <td></td>
                <td><?php 
                        if (isset($_GET['id_buku'])) {
                            echo "<button type=\"submit\" name=\"update\" class=\"button\"><span>Update</span></button>";
                        }else {
                            echo "<button type=\"submit\" name=\"submit\" class=\"button\"><span>Tambah</span></button>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>
    </form>

    <?php
    if (isset($_POST['submit'])){
        insertDataBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])){
        updateDataBuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>
</body>
</html>