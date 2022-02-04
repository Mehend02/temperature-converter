<?php
function convertTemp($temp, $unit1, $unit2)
{
    if ($unit1 == 'celsius' && $unit2 == 'fahrenheit') {
        $convertedTemp = ($temp * (9 / 5) + 32);
    }
    if ($unit1 == 'celsius' && $unit2 == 'kelvin') {
        $convertedTemp = $temp + 273.15;
    }
    if ($unit1 == 'fahrenheit' && $unit2 == 'celsius') {
        $convertedTemp = (($temp - 32) * 5 / 9);
    }
    if ($unit1 == 'fahrenheit' && $unit2 == 'kelvin') {
        $convertedTemp = (($temp + 459.67) * 5 / 9);
    }
    if ($unit1 == 'kelvin' && $unit2 == 'fahrenheit') {
        $convertedTemp = (($temp * (9 / 5)) - 459.67);
    }
    if ($unit1 == 'kelvin' && $unit2 == 'celsius') {
        $convertedTemp = $temp - 273.15;
    }
    return $convertedTemp;
}
