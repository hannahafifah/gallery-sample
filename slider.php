<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">  
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
    	<?php
    		$slider = $sql->query("SELECT * FROM gambar WHERE id_kategori=1 ");
    		while($data = $slider->fetch_assoc()){
    	?>
    	<div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="overlay"></div>
            <div class="fill" style="background-image:url('img/slider/<?php echo $data['namafile']; ?>');"></div>
            <div class="carousel-caption">
            	<span class="caption-title"><?php echo $data['judul']; ?></span>
                <h3><?php echo $data['keterangan']; ?></h3>
            </div>
        </div>
    	<?php
    		}
    	?>
	</div> 

</header>