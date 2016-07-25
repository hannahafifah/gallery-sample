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
<body class="image-background">
<div class="overlay"></div>
<!-- Navigation -->
<div class="container">
<nav class="navbar margin-navbar" role="navigation">
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
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
</div>
<div class="container content-gallery col-md-9">
    <?php
    $start=0;
    $limit=4;
    $pages= isset($_GET['pages']) ? $_GET['pages'] : null; 
    if(isset($_GET['pages']))
    {
        $pages=$_GET['pages'];
        $start=($pages-1)*$limit;
    } 
    
    $detail = $sql->query("SELECT * FROM kategori WHERE id_kategori = $_GET[id]");
    while($data = $detail->fetch_assoc()){
    ?>
    <div class="row title">
        <h3><?php echo $data['kategori']; ?> Gallery</h3>
        <p>Menampilkan berbagai macam contoh design ruangan sebagai inspirasi bagi yang sedang mendesign interior rumah</p>
    </div>
    <?php } 
    ?>
    <div class="row">
        <div class="col-md-11 col-md-offset-1 padding-row">
         <?php
            $gambar = $sql->query("SELECT * FROM gambar WHERE id_kategori = $_GET[id] LIMIT $start, $limit");
            while($data = $gambar->fetch_assoc()){
        ?>
        <div class="col-md-5 img-thumb">
            <div class="img-container">
                <img src="img/<?php echo $data['namafile']?>" width="120%">
            </div>
            <span>
                <?php echo $data['judul']; ?>
            </span>
        </div>

        <?php
        }
        ?>
        </div>
        <?php
            $img = $sql->query("SELECT * FROM gambar WHERE id_kategori = $_GET[id]");
            $rows = mysqli_num_rows($img);
            $total=ceil($rows/$limit);


        ?>
        <nav>
        <ul class="pagination">
            <?php
                if($pages>1){
            ?>
            <li><a href="thumbnails.php?id=<?php echo $_GET['id']; ?><?php echo '&pages='.($pages-1); ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <?php
                }
                for($i=1;$i<=$total;$i++){
                    if($i==$pages) {
            ?>
                <li class="active"><a href=""><?php echo $i; ?></a></li>
            <?php
                    }
                    else{ ?>
                    <li><a href="thumbnails.php?id=<?php echo $_GET['id']; ?><?php echo '&pages='.$i; ?>"><?php echo $i; ?></a></li>
            <?php
                    }
                }
                if($pages!=$total){
            ?>
            <li><a href="thumbnails.php?id=<?php echo $_GET['id']; ?><?php echo '&pages='.($pages+1); ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            <?php
                    }
            ?>
        </ul>
    </nav>
    </div>
</div>
<div class="container col-md-10 col-md-offset-1">
    <footer class="footer">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2016</p>
            </div>
        </div>
    </footer>
</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>

</body>
</html>