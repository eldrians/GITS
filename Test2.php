<?php
$input = '';
$inputx = [];
$input1 = 0;
$input2 = ' ';
$input3 = 0;
$input4 = ' ';
$output = ' ';
$temp = ' ';

if (!empty($_POST)) {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];
    $input4 = $_POST['input4'];

    $input_string = $input2 . ' ' . $input4;
    $input_array = explode(" ", $input_string);
    $input_array_soal = explode(" ", $input4);

    $input = $input_string;
    $input_array_number = [];
    $input_array_number_soal = [];

    for ($i = 0; $i < $input1 + $input3; $i++) {
        $input_array_number[$i] = (int)$input_array[$i];
    }

    for ($ix = 0; $ix < $input3; $ix++) {
        $input_array_number_soal[$ix] = (int)$input_array_soal[$ix];
    }

    $numbers2 = $input_array_number;
    rsort($numbers2);

    $arrlength = count($numbers2);
    $rank = 1;
    $numbers2_rank = [];
    $test_test = 1;
    echo "bukti peringkat";

    echo "<br>";
    echo "<br>";
    for ($x = 0; $x < $arrlength; $x++) {
        if ($test_test == 1) {
            $numbers2_rank[$x] = $rank;
            $test_test++;
        } else {
            if ($numbers2[$x] == $numbers2[$x - 1]) {
                $numbers2_rank[$x] = $rank;
            } else {
                $rank++;
                $numbers2_rank[$x] = $rank;
            }
        }
        
        echo $numbers2[$x] . "--" . $numbers2_rank[$x];
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";

    $hasil_jadi = [];
    $k = 0;

    for ($y = 0; $y < $input3; $y++) {
        for ($z = 0; $z < $arrlength; $z++) {
            if ($input_array_number_soal[$y] == $numbers2[$z]) {
                $hasil_jadi[$k] = $numbers2_rank[$z];
                $k++;
                $z = $arrlength;
            }
        }
    }

    $hasil_final = '';
    for ($y = 0; $y < $input3; $y++) {
        $hasil_final .= strval($hasil_jadi[$y]) . ' ';
    }


    $output = $hasil_final;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 2</title>
</head>

<body>
    <form action="" method="post">
        <label for="input1">Masukan jumlah pemain yang ikut serta</label><br>
        <input type="number" name="input1"><br>
        <label for="input2">daftar skor</label><br>
        <input type="text" name="input2"><br>
        <label for="input3">Masukan jumlah pemain GITS</label><br>
        <input type="number" name="input3"><br>
        <label for="input4">daftar skor pemain gits</label><br>
        <input type="text" name="input4"><br>
        <input type="submit" value="proses">
    </form><br>
    <?php
    echo "output : " . $output;
    ?>
</body>

</html>