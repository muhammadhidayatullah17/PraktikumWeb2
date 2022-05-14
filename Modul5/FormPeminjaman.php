<?php require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    editPeminjaman();
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
    <title>Tambah Data | Peminjaman</title>
</head>
<body>
    <form action="" method="post">
    <div class="table-section">
        <table id="table">
            <tr class="header-row">
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td>Tanggal Pengembalian</td>
                <td><input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?>><br></td>
            </tr>
            <tr class="header-row">
                <td></td>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
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
        insertDataPeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])){
        updateDataPeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    ?>
</body>
</html>