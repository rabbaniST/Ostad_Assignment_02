<?php

function isEvenFor($start, $end, $step)
{
    for ($i = $start+1; $i <= $end; $i +=$step) {
        if ($i % 2  == 0) {
            echo  $i . ", ";
        }
    }
}

isEvenFor(1, 20, 2);

echo " \n";
function isEvenWhile($start, $end, $step)
{
    $i = $start+1;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }

        $i += $step;
    }
}

isEvenWhile(1, 20, 2);


echo " \n";

function isEvenDo($start, $end, $step)
{
    $i = $start + 1;
    do {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }
        $i += $step;
    } while ($i <= $end);
}

isEvenDo(1, 20, 2);
