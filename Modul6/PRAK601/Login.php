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
    <?php
    session_start();
    include 'Koneksi.php';
    $nomorMember = $_POST['nomor_member'];
    $passwd = $_POST['passwd'];

    $db = connect()->prepare("SELECT * FROM member WHERE nomor_member = :nomorMember");
    $db -> bindParam('nomorMember', $nomorMember, PDO::PARAM_STR);
    $db -> execute();
    $hasil = $db->fetch();
    if ($hasil) {
        if (password_verify($passwd, $hasil["password"])) {
            $_SESSION["nomor_member"] = $hasil['nomor_member'];
            $_SESSION["nama_member"] = $hasil['nama'];
            header("Location: index.php");
        }
    } else {
        echo "Invalid Nomor Member/Password!<br>";
        echo "Click here to return <a href='FormLogin.php'>The previous page</a>";
    }
    ?>
</body>
</html>