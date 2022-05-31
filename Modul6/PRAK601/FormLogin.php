<?php
session_start();
include 'Koneksi.php';
if (isset($_SESSION['nomor_member'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Patrick+Hand&display=swap');

    body {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to right bottom, #828282, #839fb5, #5fc5d0, #73e7b8, #d6fb84);
        flex-direction: column;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <table>
        <form action="Login.php" method="POST">
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" autofocus required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="passwd" required></td>
            </tr>
            <tr>
                <td></td>

                <td><button type="submit" name="login">Submit</button></td>
            </tr>
        </form>
    </table>
</body>

</html>