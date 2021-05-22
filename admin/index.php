<?php
if (empty($_COOKIE['user'])) {
    # code...
    header('Location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پۆشین</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="index.css">
    <link href="http://services.webchin.org/web-fonts/web-font?font=droidkufiregular" rel="stylesheet" type="text/css">
    <style>
        * {
            font-family: "Droid Arabic Kufi";
        }
    </style>
</head>

<body>

    <div class="container ">
            <h3>پۆشین - پەڕەی بەڕێوەبەر:</h3>
        </div> <hr > <br> <br><br>
        <div class="row">
            <div class="col">
                <div class="card text-right">
                    <div class="card-body bg-warning">
                        <h4 class="card-title">جل و بەرگ</h4>
                        <p class="card-text">
                            <a class="btn btn-danger" href="./clothes.php" role="button">جل و بەرگ</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-right">
                    <div class="card-body bg-warning">
                        <h4 class="card-title">براندەکان</h4>
                        <p class="card-text">
                            <a class="btn btn-danger" href="./brands.php" role="button">براندەکان</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>