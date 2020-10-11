<?php

// FizzBuzz
// a. 1~100の数字を順に出力していく。ただし、3の倍数の時は’Fizz’、5の倍数の時は’Buzz’、3と5の倍数の時は’FizzBuzz’と出力する。なお、各出力の後には改行を入れること。

for ($i = 1; $i <= 100; $i++) {
    if ($i % 15 === 0) {
        echo 'FizzBuzz' . PHP_EOL;
    } elseif ($i % 3 === 0) {
        echo 'Fizz' . PHP_EOL;
    } elseif ($i % 5 === 0) {
        echo 'Buzz' . PHP_EOL;
    } else {
        echo $i . PHP_EOL;
    }
}
