<?php
$con = mysqli_connect('localhost','root','','poshin');

$msg = '';
if (!empty($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $query = mysqli_query($con , "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'");
    if (mysqli_num_rows($query) > 0) {
        # code...
        header('Location:./admin/index.php');
    }else{
        $msg = 'ئیمەیڵ یان وشەی نهێنی هەڵەیە';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پۆشین</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link href="http://services.webchin.org/web-fonts/web-font?font=droidkufiregular" rel="stylesheet" type="text/css">
    <style>
        * {
            font-family: "Droid Arabic Kufi";
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card text-right">
                    <div class="card-title text-center">
                        <h2>پۆشین</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <label>ئیمەیڵ</label>
                                <input type="email" class="form-control" name="user_email">
                            </div>
                            <div class="form-group">
                                <label>وشەی نهێنی</label>
                                <input type="password" class="form-control" name="user_password">
                            </div>
                            <button type="submit" value="login" name="login" class="btn btn-primary btn-block">چونەژورەوە</button>
                        </form>
                        <br>
                        <p><?php echo $msg; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.4.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>
</html>