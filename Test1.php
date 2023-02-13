<?php
$input = 0;
$output = ' ';
$temp = ' ';

if (!empty($_POST)) {
    $input = $_POST['angka'];
    for($i = 0; $i < $input; $i++){
        $rumus = ($i * ($i + 1)) / 2;
        $hasil = ($rumus) + 1;
        if($i < $input - 1){
            $str = strval($hasil).',';
        }else{
            $str = strval($hasil);
        }
        $temp .= $str;
    }
    $output = $temp;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
</head>

<body>
    <form action="" method="post">
        <label for="angka">Masukan Angka</label><br>
        <input type="number" name="angka"><br>
        <input type="submit" value="proses">
    </form><br>
    <?php 
    echo "input : ".$input."</br>";
    echo "output : ".$output;
    ?>
</body>

</html>