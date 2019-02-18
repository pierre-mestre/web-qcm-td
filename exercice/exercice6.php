<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$M = array_shift($args);
for ($i = 0; $i < $M; $i++) {
    $N = $args[$i];
   echo( $N%2 == 0 ? ($N+1) . "\n" : "{$N}\n" );
}

