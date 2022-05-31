<?php 
session_start();
require('./Model.php');
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
if (isset($_GET['id_member'])) {
    editMember();
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
    <title>Form Member</title>
</head>
<body>
    <form action="" method="post">
    <div class="table-section">
        <table id="table">
            <tr class="header-row">
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Nama" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" placeholder="Nomor Member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td>Alamat</td>
                <td><textarea name="alamat" placeholder="Alamat" cols="30" rows="10" required><?php echo (isset($_GET['id_member'])) ?  $result[0]["alamat"]  : ""; ?></textarea><br></td>
            </tr>
            <tr class="header-row">
                <td>Tanggal Mendaftar</td>
                <td><input type="datetime-local" name="tgl_daftar" <?php echo (isset($_GET['id_member'])) ?  "value = " .date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td>Tanggal Terakhir bayar</td>
                <td><input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td></td>
                <td>
                    <?php 
                    if (isset($_GET['id_member'])) {
                        echo "<button type=\"submit\" name=\"update\" class=\"button\"><span>Update</span></button>";
                    }
                    else {
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
        $tgl_daftar = date_create($_POST['tgl_daftar']);
        $tgl_daftar = date_format($tgl_daftar,"Y-m-d H:i:s");
        print_r($_POST);
        insertDataMember($_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])){
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        updateDataMember($_GET['id_member'],$_POST['nama'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    ?>
</body>
</html>