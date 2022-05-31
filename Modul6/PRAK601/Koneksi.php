<?php
function connect()
{
    try {
        $pdo_connect = new PDO(
            'mysql:host=localhost;dbname=prak501',
            'root',
            '',
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    } catch (PDOException $exc) {
        print "Error on PDO/Koneksi.php" . $exc->getMessage() . "<br/>";
        die();
    }
    return $pdo_connect;
}