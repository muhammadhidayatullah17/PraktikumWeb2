<!DOCTYPE HTML>  
<html>
<head>
<title>PRAK 202</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// Inisiasi variable kosong
$namaError = $nimError = $jenisKelError = "";
$nama = $nim = $jenisKel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaError = "nama tidak boleh kosong";
  } else {
    $nama = test_input($_POST["nama"]);
  }
  
  if (empty($_POST["nim"])) {
    $nimError = "nim tidak boleh kosong";
  } else {
    $nim = test_input($_POST["nim"]);
  }
    
  if (empty($_POST["jenisKel"])) {
    $jenisKelError = "jenis kelamin tidak boleh kosong";
  } else {
    $jenisKel = test_input($_POST["jenisKel"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nama: <input type="text" name="nama" class="form-control" value="<?= test_input($nama) ?>">
  <span class="error">* <?php echo $namaError;?></span>
  <br><br>
  Nim: <input type="text" name="nim" class="form-control" value="<?= test_input($nim) ?>">
  <span class="error">* <?php echo $nimError;?></span>
  <br><br>
  Jenis Kelamin:
  <span class="error">* <?php echo $jenisKelError;?></span>
  <br><br>
  <input type="radio" name="jenisKel" value="Laki-laki" <?php if (isset($_POST["jenisKel"]) && $_POST["jenisKel"] == "Laki-laki") echo "checked";?>>Laki-Laki
  <br><br>
  <input type="radio" name="jenisKel" value="Perempuan" <?php if (isset($_POST["jenisKel"]) && $_POST["jenisKel"] == "Perempuan") echo "checked";?>>Perempuan
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Output:</h2>";
echo "$nama<br>";
echo "$nim<br>";
echo $jenisKel;
?>

</body>
</html>