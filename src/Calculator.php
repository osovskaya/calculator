<?php

declare(strict_types=1);


class Calculator
{
    private $logger;
    const LOG_FILE = 'log.txt';

    public function setLogger()
    {
        $this->logger = new class {

            public function log($fileName, $operator, $result, $operand1, $operand2 = '')
            {
                $fp = fopen($fileName, 'a+');
                fwrite($fp, date('r').' '.$operator.' '.$operand1.' and '.$operand2.', result '.$result."\n");
                fclose($fp);
                return true;
            }
        };
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
