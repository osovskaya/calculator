<?php

require __DIR__.'/../vendor/autoload.php';

set_exception_handler(function ($exception)
{
    echo $exception->getMessage(), "\n";
});

$calculator = new Calculator;

echo $calculator->add(3, 2).PHP_EOL;
echo $calculator->subtract(3, 2).PHP_EOL;
echo $calculator->multiple(3, 2).PHP_EOL;
echo $calculator->divide(3, 2).PHP_EOL;
echo $calculator->powerOfTwo(2).PHP_EOL;


echo $calculator->add('8', 2).PHP_EOL;
echo $calculator->subtract(3.5, 2).PHP_EOL;
echo $calculator->multiple(true, 2).PHP_EOL;
echo $calculator->divide(3, 0).PHP_EOL;
echo $calculator->powerOfTwo('string').PHP_EOL;
