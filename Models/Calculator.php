<?php

namespace modelpkg;

class Calculator
{
    var $firstNumber = 0, $secondNumber = 0, $operator = '';
    public function __construct($firstNumber = 0, $secondNumber =0, $operator = ''){
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operator= $operator;
    }

    /*
     * Converts the number and return the result
     * @return string the result of the conversion
     * */
    public function calculate()
    {
        $result = 'error';
        if (is_numeric($this->firstNumber) && is_numeric($this->secondNumber)) {
            if ($this->operator== '+') {
                $result = $this->firstNumber + $this->secondNumber;
            } else if ($this->operator == '-') {
                $result = $this->firstNumber - $this->secondNumber;
            } else if ($this->operator == '/') {
                if ($this->secondNumber != 0) {
                    $result = $this->firstNumber / $this->secondNumber;
                } else {
                    $result = 'Cannot divide by zero';
                }
            } else if ($this->operator == '*') {
                $result = $this->firstNumber * $this->secondNumber;
            }
        }
        return $result;
    }

    public function calculateExpression($expression)
    {
        $parts = explode(' ', $expression);

        if (count($parts) === 3) {
            $this->firstNumber = $parts[0];
            $this->operator = $parts[1];
            $this->secondNumber = $parts[2];

            if (is_numeric($this->firstNumber) && is_numeric($this->secondNumber) && in_array($this->operator, ['+', '-', '*', '/'])) {
                return $this->calculate();
            }
        }

        return 'error';
    }

}