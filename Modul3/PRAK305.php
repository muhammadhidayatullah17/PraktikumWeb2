<?php
$input = null;
if(isset($_POST["input"])){
    $input = $_POST["input"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="input"></input>
        <input type="submit" name="submit" value="Submit"></input><br>
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    $lenInput = strlen($input);
    $splitInput = str_split($input);

    echo "<h2>Input:</h2><br>";
    echo "$input<br>";
    echo "<h2>Output:</h2><br>";

    $i = 0;
    while($i < $lenInput){
        echo strtoupper($splitInput[$i]);

        $j = 1;
        while($j < $lenInput){
            echo strtolower($splitInput[$i]);
            $j++;
        }
        $i++;
    }
}
?>