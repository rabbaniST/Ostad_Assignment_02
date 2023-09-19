<?php

function isEvenFor($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2  == 0) {
            echo $i . ", ";
        }
    }
}

isEvenFor(2, 20, 2);

echo " \n";
function isEvenWhile($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }

        $i += $step;
    }
}

isEvenWhile(2, 20, 2);


echo " \n";

function isEvenDo($start, $end, $step)
{
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }
        $i += $step;
    } while ($i <= $end);
}

isEvenDo(2, 20, 2);
