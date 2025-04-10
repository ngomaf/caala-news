<?php

echo PHP_EOL;

$arr = ['aa', 'bb', 'cc'];

array_splice($arr, 2, 0, [['zz', 10]]);

$num = number_format(12345, 2, ',', '.');

print_r($num);

echo PHP_EOL;

print_r($arr);

