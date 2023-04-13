<section id="heroimage" class="mb-5">
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="false" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>            </div>
            <div class="carousel-inner">
            <?php 

            include 'conn/conn.php';

            $sql = "SELECT * FROM berita ORDER BY idBerita DESC LIMIT 3";
            $exe = $conn->query($sql);
            $i = 0;
            $active = "";
            while($res = $exe->fetch_array()){ 
                if($i == 0){
                        $active = "active";
                } ?>
                <div class="carousel-item <?= $active ?>">
                    <img src="gambar/berita/<?= $res['fotoBerita']?>" class="d-block w-100" style="filter: brightness(80%) opacity(67%) contrast(113%) drop-shadow(0px 0px 5px rgba(0,0,0,0.79));
                        -webkit-filter: brightness(80%) opacity(67%) contrast(113%) drop-shadow(0px 0px 5px rgba(0,0,0,0.79));
                        -moz-filter: brightness(80%) opacity(67%) contrast(113%) drop-shadow(0px 0px 5px rgba(0,0,0,0.79));">
                    <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 0px 5px #000000;">
                            <h5><?= $res['judulBerita']?></h5>
                            <p><?= $res['isiBerita'] ?></a></p>
                    </div>
                </div>
         <?php $i++;} ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>