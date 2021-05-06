<?php
$con = mysqli_connect('localhost','root','','poshin');

if (!empty($_POST['add'])) {
    $clothe_name = $_POST['clothe_name'];
    $image_url = $_POST['clothe_image'];
    $query = mysqli_query($con , "INSERT INTO clothes VALUES(NULL , '$clothe_name','$image_url')");
} else if(!empty($_POST['remove'])){
    $id = $_POST['remove'];
    $query = mysqli_query($con , "DELETE FROM clothes WHERE id = '$id'");
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
            <h3 class="text-center">پۆشین - بەشی جل و بەرگەکان</h3>
        </div>

    </div>
    <div class="container">
        <form method="post">
            <div class="row my-5 text-right">
                <div class="col-4">
                    <div class="form-group">
                        <label>ناوی جل و بەرگ</label>
                        <input type="text" name="clothe_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label>لینکی وێنە</label>
                        <input type="text" name="clothe_image" class="form-control" required>
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
    $q = mysqli_query($con , "SELECT * FROM clothes");
    while ($a = mysqli_fetch_array($q)) {
        ?>
            <div class="col-3">
            <div class="card text-right">
                <img class="card-img-top" src="<?php echo $a['image']; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $a['name']; ?></h4>
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