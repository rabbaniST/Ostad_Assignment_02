<?php
for($x = 1; $x <= 50; $x++){
    if($x % 5 == 0){
        continue;
    }
    echo $x . " ";
}