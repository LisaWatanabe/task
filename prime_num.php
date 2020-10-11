<?php

// 素数算出
// a. 1~10000までの数字の中で素数を割り出し、その素数のみを順に出力する。なお、各出力の後には改行を入れること。

for ($i=2; $i<=10000; $i++) {
    // 素数判定用変数
    $prime = true;

    for ($j=2; $j<$i; $j++) {
        if ($i % $j == 0) {
            $prime = false;
        }
    }
    if ($prime == true) {
        echo $i . PHP_EOL;
    }
}
