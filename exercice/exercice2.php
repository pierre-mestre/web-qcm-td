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
// echo('the_complete_spaghetti');

$nb_spagh = array_shift($args);
$spagh_parts = [];

for ($i = 0; $i < $nb_spagh; $i++) {
    $spagh_part = $args[$i];
    $first_char = substr($spagh_part, 0, 1);
    $other_chars = substr($spagh_part, 1);
    $spagh_parts[$first_char] = $other_chars;
}

$current_extremity = 'A';
$whole_spagh = 'A';
while ($current_extremity != 'Z') {
    $next_part = $spagh_parts[$current_extremity];
    $whole_spagh .= $next_part;
    $current_extremity = substr($whole_spagh, -1, 1);
}

echo $whole_spagh;
