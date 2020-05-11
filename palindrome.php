<?php

 $largest = 0;

	for ($i = 100; $i <= 999; $i++) {
        for ($j = 100; $j <= 999; $j++) {

            if ($i*$j== palindrome($i*$j) && $i * $j > $largest)
                $largest = $i*$j;
        }
	}
    echo  $largest;

function palindrome(int $n)
{
    $m = 0;

    while ($n > 0) {

        $m = $m * 10 + $n % 10;
        $n = $n / 10;
    }

    return $m;
}