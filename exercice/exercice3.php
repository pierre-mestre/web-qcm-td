<?php
// /**
//  * Auto-generated code below aims at helping you parse
//  * the standard input according to the problem statement.
//  **/
// $N = array_shift($args);
// for ($i = 0; $i < $N; $i++) {
//     $spaghettiPart = $args[$i];
// }

// // Write an action using echo().
// echo('can u solv it?');

$a = str_split($args[0]);
$b = str_split($args[1]);
$w = $x = $i = 0;

if (count($a) != count($b)) {
    echo "ERROR";
} else {
    while ($i < count($a)) {
        if ($a[$i] == $b[$i]) {
            $w += 1;
            unset($a[$i]);
            unset($b[$i]);
            $a = array_values($a);
            $b = array_values($b);
        } else {
            $i += 1;
        }
    }
    foreach ($a as $i) {
        if (($del = array_search($i, $b)) !== false) {
            unset($b[$del]);
            $x += 1;
        }
    }
    if ($w == 0 && $x == 0) {
        echo "NOTHING";
    } else {
        echo str_repeat("+", $w).str_repeat('-', $x);
    }
}
