<?php

/**

* Auto-generated code below aims at helping you parse

* the standard input according to the problem statement.

**/



$N = array_shift($args);

$K = array_shift($args);

$note = 0;

for ($i =0; $i < $N; $i++) {
$A = 
$args[$i];
$rep = $K[$i];
// In case there are ultiples X

$nbrRep = 0;

for($j =0; $j<strlen($A);$j++){if($A[$j] =='X') $nbrRep++;
}

if($nbrRep !=1) 
continue;

if($rep =='A' && $A[0] == 'X') $note++;
if($rep =='B' && $A[1] == 'X') $note++;
if($rep =='C' && $A[2] == 'X') $note++;
if($rep =='D' && $A[3] == 'X') $note++;
if($rep =='E' && $A[4] == 'X') $note++;

}


$note = ($note/$N)*100;

// Write an action using echo().



echo($note);

