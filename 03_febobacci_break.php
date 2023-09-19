<?php
$old = 0;
$new = 1;

for ($i = 0; $i < 10; $i++) {

    $result = $old + $new;
   
    if ($result > 100) {
            break;
        }
   
    echo $result . " ";
    $old = $new;
    $new = $result;

}
