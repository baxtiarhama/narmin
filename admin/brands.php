<?php
$con = mysqli_connect('localhost','root','','poshin');

if (!empty($_POST['add'])) {
    $slide_name = $_POST['slide_image'];
    $query = mysqli_query($con , "INSERT INTO brands VALUES(NULL , '$slide_name')");
} else if(!empty($_POST['remove'])){
    $id = $_POST['remove'];
    $query = mysqli_query($con , "DELETE FROM brands WHERE id = '$id'");
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
    <link href="http://services.webchin.org/web-fonts/web-font?font=droidkufiregular" rel="stylesheet" type="text/css">
    <style>
        * {
            font-family: "Droid Arabic Kufi";
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <h3 class="text-center">پۆشین - بەشی براندەکان</h3>
        </div>

    </div>
    <div class="container">
        <form method="post">
            <div class="row my-5 text-right">
                <div class="col-4">
                    <div class="form-group">
                        <label>لینکی وێنە</label>
                        <input type="text" name="slide_image" class="form-control" required>
                    </div>
                </div>
                <div class="col-4">
                    <br>
                    <div class="form-group">
                        <button type="submit" name="add" class="btn btn-primary" value="add">زیادکردن</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <?php
    $q = mysqli_query($con , "SELECT * FROM brands");
    while ($a = mysqli_fetch_array($q)) {
        ?>
            <div class="col-4">
            <div class="card text-right">
                <img class="card-img-top" src="<?php echo $a['image']; ?>" alt="">
                <div class="card-body">
                    <p class="card-text">
                    <form method="post">
                        <button type="submit" class="btn btn-danger btn-block" name="remove" value="<?php echo $a['id']; ?>">سڕینەوە</button>
                    </form>
                    </p>
                </div>
            </div>
            </div>
            <?php
    }
    
    ?>
        </div>
    </div>
    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>