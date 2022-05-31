<?php
require("./Koneksi.php");

//CRUD Function
//CREATE
function insertDataBuku($judul,$penulis,$penerbit,$thnterbit){
    $database = "INSERT INTO `buku` ( `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES (:judul,:penulis,:penerbit,:tahun_terbit)";
    $statement = connect()->prepare($database);
    $returns = $statement->execute(array(':judul' => $judul, ':penulis' => $penulis, ':penerbit' => $penerbit, ':tahun_terbit' => $thnterbit));
    if (!empty($returns)) {
        header('location:Buku.php');
    }
}

function insertDataMember($nama, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar){
    $database = "INSERT INTO `member` ( `nama`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES (:nama,:nomor_member,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
    $statement = connect()->prepare($database);
    $returns = $statement->execute(array(':nama' => $nama, ':nomor_member' => $nomor_member, ':alamat' => $alamat, ':tgl_mendaftar' => $tgl_mendaftar, ':tgl_terakhir_bayar' => $tgl_terakhir_bayar));
    if (!empty($returns)) {
        header('location:Member.php');
    }
}

function insertDataPeminjaman($tglpinjam, $tglkembali){
    $database = "INSERT INTO `peminjaman` (`tgl_pinjam`, `tgl_kembali`) VALUES (:tglpinjam,:tglkembali)";
    $statement = connect()->prepare($database);
    $returns = $statement->execute(array(':tglpinjam' => $tglpinjam, ':tglkembali'=> $tglkembali));
    if (!empty($returns)) {
        header('location:Peminjaman.php');
    }
}

//READ
function showData($tabel){
    $statement = connect()->prepare("SELECT * FROM $tabel");
    $statement->execute();
    $returns = $statement->fetchAll();

    if (!empty($returns)) {
        if ($tabel == "buku") {
            foreach ($returns as $row) {
                echo "<tr>";
                echo "<td>" . $row['judul_buku'] . "</td>";
                echo "<td>" . $row['penulis'] . "</td>";
                echo "<td>" . $row['penerbit'] . "</td>";
                echo "<td>" . $row["tahun_terbit"] . "</td>";
                echo "<td>";
                echo "<a href='FormBuku.php?id_buku=" . $row['id_buku'] . "' color=\"green\">EDIT</a>";
                echo " or ";
                echo "<a href='Buku.php?id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Are you sure to delete this data?')\" color=\"red\">DELETE</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($returns)." data";
        }
        elseif ($tabel == "member") {
            foreach ($returns as $row) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['nomor_member'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row["tgl_mendaftar"] . "</td>";
                echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
                echo "<td>";
                echo "<a href='FormMember.php?id_member=" . $row['id_member'] . "' color=\"green\">EDIT</a>";
                echo " or ";
                echo "<a href='Member.php?id_member=" . $row['id_member'] . "' onclick=\"return confirm('Are you sure to delete this data?')\" color=\"red\">DELETE</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($returns)." data";
        }
        elseif ($tabel == "peminjaman") {
            foreach ($returns as $row) {
                echo "<tr>";
                echo "<td>" . $row["tgl_pinjam"] . "</td>";
                echo "<td>" . $row["tgl_kembali"] . "</td>";
                echo "<td>";
                echo "<a href='FormPeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' color=\"green\">EDIT</a>";
                echo " or ";
                echo "<a href='Peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' onclick=\"return confirm('Are you sure to delete this data?')\" color=\"red\">DELETE</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "Menampilkan ".count($returns)." data";
        }
    }
}

//UPDATE
function editMember(){
    $statement = connect()->prepare("SELECT * FROM member where id_member=" . $_GET["id_member"]);
    $statement->execute();
    $GLOBALS['result'] = $statement->fetchAll();
}

function editBuku(){
    $statement = connect()->prepare("SELECT * FROM buku where id_buku=" . $_GET["id_buku"]);
    $statement->execute();
    $GLOBALS['result'] = $statement->fetchAll();
}

function editPeminjaman(){
    $statement = connect()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman =". $_GET['id_peminjaman']);
    $statement->execute();
    $GLOBALS['result'] = $statement->fetchAll();
}

function updateDataMember($id, $nama, $no_member, $almt, $tgl_daftar, $tgl_terakhir_bayar){
    $pdo_statement = connect()->prepare(
        "UPDATE member SET nama='" . $nama . "', nomor_member='" . $no_member . "', alamat='" . $almt . "', tgl_mendaftar='" . $tgl_daftar . "', tgl_terakhir_bayar='" . $tgl_terakhir_bayar . "' where id_member=" . $id
    );
    $returns = $pdo_statement->execute();
    if ($returns){
        header('location:Member.php');
    }
}

function updateDataBuku($id, $judul, $penulis, $penerbit, $thnterbit){
    $pdo_statement = connect()->prepare(
        "UPDATE buku SET judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $thnterbit . "' where id_buku=" . $id
    );
    $returns = $pdo_statement->execute();
    if ($returns){
        header('location:Buku.php');
    }
}

function updateDataPeminjaman($id, $tglpinjam, $tglkembali) {
    $pdo_statement = connect()->prepare(
        "UPDATE peminjaman SET tgl_pinjam='" . $tglpinjam ."', tgl_kembali='" . $tglkembali . "' WHERE id_peminjaman = ". $id
    );
    $returns = $pdo_statement->execute();
    if (!empty($returns)){
        header('location:Peminjaman.php');
    }
}


//DELETE
function deleteMember($id_member){
    $statement = connect()->prepare("DELETE FROM member where id_member=" . $id_member);
    $returns = $statement->execute();
    if ($returns) {
        header('location:Member.php');
    }
}

function deleteBuku($id_buku){
    $statement = connect()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $returns = $statement->execute();
    if ($returns){
        header('location:Buku.php');
    }
}

function deletePeminjaman($id_peminjaman){
    $statement = connect()->prepare("DELETE FROM peminjaman WHERE id_peminjaman=" . $id_peminjaman);
    $returns = $statement->execute();
    if ($returns){
        header('location:Peminjaman.php');
    }
}