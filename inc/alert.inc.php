<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $originalTemperature = $_POST['originaltemp'];
    $originalUnit = $_POST['originalunit'];
    $conversionUnit = $_POST['conversionunit'];

    if ($originalUnit == "--Select--" && $conversionUnit == "--Select--" && !is_numeric($originalTemperature)) {
        echo "<div class='alert alert-danger' role='alert'>Please select the units of measurement.</div>";
        echo "<div class='alert alert-danger' role='alert'>Please enter a temperature in numeric format.</div>";
    } else if ($originalUnit == "--Select--" || $conversionUnit == "--Select--") {
        echo "<div class='alert alert-danger' role='alert'>Both temperature units need to be selected.</div>";
        if (!is_numeric($originalTemperature)) {
            echo "<div class='alert alert-danger' role='alert'>Please enter a temperature in numeric format.</div>";
        }
    } else if ($originalUnit !== "--Select--" && $conversionUnit !== "--Select--" && $originalUnit == $conversionUnit) {
        echo "<div class='alert alert-danger' role='alert'>Please select a conversion unit that is different than the original unit.</div>";
        if (!is_numeric($originalTemperature)) {
            echo "<div class='alert alert-danger' role='alert'>Please enter a temperature in numeric format.</div>";
        }
    } else if ($originalUnit !== "--Select--" && $conversionUnit !== "--Select--" && !is_numeric($originalTemperature)) {
        echo "<div class='alert alert-danger' role='alert'>Please enter a temperature in numeric format.</div>";
    } else {
        $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
    }
} else {
    $originalTemperature = null;
    $originalUnit = null;
    $conversionUnit = null;
}
