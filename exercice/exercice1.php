<?php
$N = $args[0];

while ($N != strrev($N) && $N < pow(10, 19)) {
    echo $N.' ';
    $N += strrev($N);
}
echo $N;
