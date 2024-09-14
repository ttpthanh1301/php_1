<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function giaiPTbachai($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            return "Phương trình không có nghiệm ";
        } else {
            return "Phương trình bậc nhất có nghiệm: " . (-$c / $b);
        }
    }
    $delta = $b * $b - 4 * $a * $c;
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có hai nghiệm phân biệt: x1 = " . $x1 . " và x2 = " . $x2;
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x = " . $x;
    } else {
        return "Phương trình vô nghiệm ";
    }
}
echo giaiPTbachai(-2,11,1);
echo'</br>';

function hCNrong($w, $h) {
    for ($i = 0; $i < $h; $i++) {
        if ($i == 0 || $i == $h - 1) {
            for ($j = 0; $j < $w; $j++) {
                echo '*';
            }
        } else {
            echo '*';
            for ($j = 1; $j < $w - 1; $j++) {
                echo ' ';
            }
            echo '*';
        }
        echo "</br>";
    }
}
echo hCNrong(7,5);

$arr = [1, 2, 3, 4];
function tBcong($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

echo tBcong($arr);

?>
</body>
</html>