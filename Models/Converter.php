<?php

namespace modelpkg;

class Converter
{
    var $number = 0, $unit = '';
    public function __construct($number = 0, $unit = ''){
        $this->number = $number;
        $this->unit = $unit;
    }

    /*
     * Converts the number and return the result
     * @return string the result of the conversion
     * */
    public function convert()
    {
        $result = 'error';
        if (is_numeric($this->number)) {
            if ($this->unit == 'miles = km') {
                $result = $this->number * 1.609;
            } else if ($this->unit == 'km = miles') {
                $result = $this->number * 0.621;
            } else if ($this->unit == 'kg = pound') {
                $result = $this->number * 2.205;
            } else if ($this->unit == 'pound = kg') {
                $result = $this->number * 0.454;
            } else if ($this->unit == 'meter = inch') {
                $result = $this->number * 39.370;
            } else if ($this->unit == 'inch = meter') {
                $result = $this->number * .0254;
            }
        }
        return $result;
    }
}