<section id="#jadwal" class="mb-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <h3 class="text-center">Jadwal Pertandingan</h3>
                <br>

                <div class="container">
                    <div class="row mt-3">

                    <?php 

					$sql  = "SELECT * FROM tiket a, pertandingan b WHERE a.idPertandingan = b.idPertandingan AND b.status = 'Belum Dimulai' AND a.jumlahTiket != 0";
					$exe  = $conn->query($sql);
					while ($data = $exe->fetch_array()) { ?>

                        <div class="col-sm-3 align-self-center mb-3">
                            <div class="card" style="width: 100%">
                                <div class="card-body">
                                    <p class="card-text text-center"><b><?= $data['tim1'] ?> VS <?= $data['tim2'] ?></b>
                                    <br>Waktu : <?= $data['waktuTanding']?> - <?= $data['tanggalTanding']?>
                                    <br>Seat : <?= $data['jenisKelas']?> <?= $data['hargaTiket']?>
                                    <br>Venue : <?= $data['venue']?>
                                    <br>
                                    <a href="Dashboard/" class="btn btn-danger mt-3">Book Now</a>
                                    </p>
                                </div> 
                            </div>      
                        </div>

                    <?php }	?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>