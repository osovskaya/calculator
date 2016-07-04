<?php

declare(strict_types=1);


class Calculator
{
    private $logger;
    const LOG_FILE = 'log.txt';

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    public function add(int $number1, int $number2): int
    {
        $result = $number1 + $number2;
        $this->logger->log($this::LOG_FILE, __METHOD__, $result, $number1, $number2);
        return $result;
    }

    public function subtract(int $number1, int $number2): int
    {
        $result = $number1 - $number2;
        $this->logger->log($this::LOG_FILE, __METHOD__, $result, $number1, $number2);
        return $result;
    }

    public function multiple(int $number1, int $number2): int
    {
        $result = $number1 * $number2;
        $this->logger->log($this::LOG_FILE, __METHOD__, $result, $number1, $number2);
        return $result;
    }

    public function divide(int $number1, int $number2): int
    {
        $result = intdiv($number1, $number2);
        $this->logger->log($this::LOG_FILE, __METHOD__, $result, $number1, $number2);
        return $result;
    }

    public function powerOfTwo(int $number1): int
    {
        $result = pow(2, $number1);
        $this->logger->log($this::LOG_FILE, __METHOD__, $result, $number1);
        return $result;
    }
}
