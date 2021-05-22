<?php
include("admin/connection.php");
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://services.webchin.org/web-fonts/web-font?font=droidkufiregular" rel="stylesheet" type="text/css">
  <style>
    * {
      font-family: "Droid Arabic Kufi";
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">پۆشین</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">سەرەکی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">بازاڕ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">دەربارە</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="گەڕان" aria-label="Search">
        <button class="btn btn-outline bg-white my-2 mx-2 my-sm-0" type="submit">گەڕان</button>
      </form>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/slider-1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slider-2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slider-3.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slider-2.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
    <div class="row my-4">
      <div class="col">
        <h1 class="display-4 text-right">براندەکەمان</h1>
      </div>
    </div>
    <div class="row">
      <?php
    $q = mysqli_query($con , "SELECT * FROM brands");
    while ($a = mysqli_fetch_array($q)) {
        ?>
      <div class="col-lg-3 col-sm-6 col-6 col-md-3 col-xl-3">
        <img src="<?php echo $a['image']; ?>" style="border-radius: 10px; border: 0px;" class="img-thumbnail my-img"
          alt="">
      </div>
      <?php
    }
      ?>
    </div>
    <hr>

    <div class="row my-4">
      <div class="col">
        <h1 class="display-4 text-right">جلو بەرگ</h1>
      </div>
    </div>

    <div class="row">
      <?php
    $q = mysqli_query($con , "SELECT * FROM clothes");
    while ($a = mysqli_fetch_array($q)) {
        ?>
      <div class="col-6 col-lg-3 col-xl-3 col-sm-6">
        <div class="card shadow">
          <img class="card-img-top" src="<?php echo $a['image']; ?>" alt="">
          <div class="card-img-overlay">
            <h5 class="card-title text-center bg-primary text-white card-texts"><?php echo $a['name']; ?></h5>
          </div>
        </div>
      </div>
      <?php
    }
      ?>
    </div>
    <div class="row my-4">
      <div class="col">
        <h1 class="display-4 text-right">بۆچی پۆشین ؟</h1>
      </div>
    </div>
    <div class="row">
      <div class="embed-responsive embed-responsive-16by9 mx-3">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/jCeNbupHgy0" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="row my-4">
      <div class="col">
        <h1 class="display-4 text-right">کێ پۆشین بەکاردێنێت ؟</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4">
        <img src="./img/makeup-1.jpg" style="border: 0px;filter: grayscale(100%);" class="my-img img-thumbnail" alt="">
      </div>
      <div class="col-12 col-lg-4">
        <img src="./img/makeup-2.jpg" style="border: 0px;filter: grayscale(100%);"
          class="my-img img-thumbnail shadow-lg" alt="">
      </div>
      <div class="col-12 col-lg-4">
        <img src="./img/makeup-3.jpg" style="border: 0px;filter: grayscale(100%);" class="my-img img-thumbnail" alt="">
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12 col-lg-6">
        <img src="./img/sport.jpg" style="border: 0px;" class="img-thumbnail" alt="">
      </div>
      <div class="col-12 col-lg-6">
        <div class="row">
          <div class="col">
            <h1 class="display-4 text-right">
              پۆشین چیە ؟
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col text-right">
            <p class="lead text-right">
            پۆشین براندێکی جل و بەرگە و ماوەی ٣ ساڵە کار دەکات و تایبەتمەندی خۆی هەیە
               کە لە ماوەیەکی کەمدا توانی خۆی بناسێنێ  ڕۆژ بە ڕۆژ زیاتر پەرەدەسێنێ
                بەرەو پێش دەچێ لە ڕووی شێواز و جوانترین جۆری مۆدێل و لە هەمان کاتدا
                نرخی هەموو جۆرە کاڵاکانی گونجاندووە بۆ بەکارهێنەرەکانی.
            </p>
            </p>
          </div>
        </div>
      
      </div>
    </div>
  </div>
  <hr>
<?php include("templates/footer.php");?>
  <script src="./js/jquery-3.4.1.slim.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/bootstrap.js"></script>
</body>

</html>