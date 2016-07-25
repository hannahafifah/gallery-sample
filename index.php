<?php
    $sql = new mysqli("localhost","root","","gallery");
?>

<html lang="en">
<head>
	<title>Beautiful Sakura</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Start Bootstrap</a> -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="border-navbar collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="col-md-offset-3">
            <ul class="menu-list nav navbar-nav">
                <li>
                    <a href="index.php" class="menu-link">
                        Home
                    </a>
                </li>
                <?php
                    $kategori = $sql->query("SELECT * FROM kategori WHERE id_kategori != 1 ");
                    while($data = $kategori->fetch_assoc()){
                ?>
                    <li>
                        <a href="thumbnails.php?id=<?php echo $data['id_kategori']; ?>" class="menu-link">
                            <?php echo $data['kategori']; ?>
                        </a>
                    </li>
                <?php
                    }
                ?>
            </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">  
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">

        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="overlay"></div>
            <div class="fill" style="background-image:url('img/slider/img1.jpg');"></div>
            <div class="carousel-caption">
            	<span class="caption-title">enjoy your luxurious bedroom design</span>
                <h3>enjoy your luxurious bedroom design</h3>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="overlay"></div>
            <div class="fill" style="background-image:url('img/slider/img4.jpg');"></div>
            <div class="carousel-caption">
            	<span class="caption-title">friendly living room design just for you</span>
                <h3>friendly living room design just for you</h3>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="overlay"></div>
            <div class="fill" style="background-image:url('img/slider/img3.jpg');"></div>
            <div class="carousel-caption">
            	<span class="caption-title">Vintage bedroom design just for you</span>
                <h3>Vintage bedroom design just for you</h3>
            </div>
        </div>
	</div> 

</header>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 10000 //changes the speed
})
</script>

</body>
</html>