<div class="container mt-5">
    <?php require "inc/functions.inc.php"; ?>
    <form class="form rounded-top border border-3 border-success pb-3" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="row">
            <div class="col text-center">
                <h3 class="bg-success text-light p-2">Temperature Conversion Calculator</h3>
            </div>
        </div>
        <?php require "inc/alert.inc.php"; ?>
        <div class="row mb-3">
            <div class="col-sm-12 col-md-6 px-5 py-3">
                <label class="form-label" for="originalunit">Original Unit of Measurement</label>
                <select class="form-select" name="originalunit" id="originalunit">
                    <option value="--Select--" <?= $originalUnit == '--Select--' ? "selected" : null ?>>--Select--</option>
                    <option value="celsius" <?= $originalUnit == 'celsius' ? "selected" : null ?>>Celsius</option>
                    <option value="fahrenheit" <?= $originalUnit == 'fahrenheit' ? "selected" : null ?>>Fahrenheit</option>
                    <option value="kelvin" <?= $originalUnit == 'kelvin' ? "selected" : null ?>>Kelvin</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-6 px-5 py-3">
                <label class="form-label" for="temp">Original Temperature</label>
                <input class="form-control" type="text" value="<?= isset($_POST['originaltemp']) ? $_POST['originaltemp'] : null ?>" name="originaltemp" id="temp">
            </div>
            <div class="col-sm-12 col-md-6 px-5 py-3">
                <label class="form-label" for="conversionunit">Conversion Unit of Measurement</label>
                <select class="form-select" name="conversionunit" id="conversionunit">
                    <option value="--Select--" <?= $conversionUnit == '--Select--' ? "selected" : null ?>>--Select--</option>
                    <option value="celsius" <?= $conversionUnit == 'celsius' ? "selected" : null ?>>Celsius</option>
                    <option value="fahrenheit" <?= $conversionUnit == 'fahrenheit' ? "selected" : null ?>>Fahrenheit</option>
                    <option value="kelvin" <?= $conversionUnit == 'kelvin' ? "selected" : null ?>>Kelvin</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-6 px-5 py-3">
                <label class="form-label" for="convertedtemp">Converted Temperature</label>
                <input class="form-control" type="text" value="<?= isset($convertedTemp) ? "$convertedTemp" : null ?>" name="convertedtemp" id="convertedtemp" disabled>
            </div>
            <div class="col-12 px-5 pt-3">
                <button type="submit" class="btn btn-success">Convert</button>
            </div>
        </div>
    </form>
</div>