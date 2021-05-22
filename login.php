<?php
include("admin/connection.php");
$error = '';
if (!empty($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
   
    $query = mysqli_query($con , "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = '$user_password'");
    if (mysqli_num_rows($query) > 0) {
        # code..
        setcookie('user' , $user_email);
        header('Location:./admin/index.php');
        mysqli_close($con);
    }else{
        $error = '<b class="error">ئیمەیڵ یان وشەی نهێنی هەڵەیە</b>';

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

<body style="background: url(img/admin5.jpg); background-size:cover">
    <div class="container">
        <div class="row justify-content-right align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card text-right bg-info ">
                    <div class="card-title text-center text-white">
                        <h2>پۆشین</h2>
                    </div>
                    <div class="card-title text-center text-white ">
                    <div class="card-body bg-dark ">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <label>ئیمەیڵ</label>
                                <input type="email" class="form-control" name="user_email">
                            </div>
                            <div class="form-group">
                                <label>وشەی نهێنی</label>
                                <input type="password" class="form-control" name="user_password">
                            </div>
                            <button type="submit" value="login" name="login" class="btn btn-info btn-block">چونەژورەوە</button>
                        </form>
                        <br>
                        <p><?php echo  $error; ?></p>
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