<!-- Daftar FIlm  -->
<div class="container-fluid">
    <?php $kolom = 5; $baris = 5; ?>
    <div class="row">
        <?php 
            $kolom = 1;
            foreach ($film as $value) {
                if($kolom <=4) {
                
        ?>
        <div class="col-lg-3 film-menu">
            <a href="<?php echo site_url(); ?>Theater">
                <img class="lazy" src="<?php echo base_url('upload/movie/'.$value['image']) ?>" style="display: inline-block; background-size=absolute;">
            </a>
            <p class="judul_film"><?= $value['judul']; ?></p>
        </div>
        
        <?php
                };
                $kolom = $kolom + 1; 
            }; 
        ?>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-3 film-menu">
            <a href="jadwaltayang.html">
                <img class="lazy" src="<?php echo base_url(); ?>assets/images/endgame.jpg" style="display: inline-block;">
            </a>
            <p class="judul_film">Avengers End Game</p>
        </div>
        <div class="col-lg-3 film-menu">
            <a href="jadwaltayang.html">
                <img class="lazy" src="<?php echo base_url(); ?>assets/images/lallorona.jpg" style="display: inline-block;">
            </a>
            <p class="judul_film">The Curse of The Weeping Woman</p>
        </div>
        <div class="col-lg-3 film-menu">
            <a href="jadwaltayang.html">
                <img class="lazy" src="<?php echo base_url(); ?>assets/images/sunyi.jpg" style="display: inline-block;">
            </a>
            <p class="judul_film">Sunyi</p>
        </div>
        <div class="col-lg-3 film-menu">
            <a href="jadwaltayang.html">
                <img class="lazy" src="<?php echo base_url(); ?>assets/images/tetangga.jpg" style="display: inline-block;">
            </a>
            <p class="judul_film">Rumput Tetangga</p>
        </div>
    </div>
    <br>
    
</div>
<br>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="col-lg-3">
                    <ul class="nav navbar-nav navbar-left">
                        <!-- <li><button class="btn btn-danger navbar-btn">Back</button></li> -->
                    </ul>
                </div>
                <div class="col-lg-6"></div>
                <div class="col-lg-3">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><button class="btn btn-danger navbar-btn">Next</button></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>



