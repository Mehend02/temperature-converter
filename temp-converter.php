<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Temperature Converter</title>
</head>

<body>
    <?php require "inc/nav.inc.html" ?>
    <div class="container-fluid bg-image">
        <div class="row py-sm-2 py-md-5 py-lg-5">
            <div class="col-6 p-5">
                <h1 class="py-4 text-light">Temperature Converter</h1>
                <h5 class="text-light">Quickly convert temperatures with this handy conversion tool</h5>
            </div>
        </div>
    </div>
    <?php require "inc/form-convert.inc.php" ?>
    <?php require "inc/tables.inc.html" ?>
    <?php require "inc/footer.inc.html" ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>