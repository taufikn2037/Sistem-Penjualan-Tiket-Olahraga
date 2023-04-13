<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tiket Pertandingan</title>
  </head>
  <body onload="print()">
<div class="container mb-10">
<h5 class="text-uppercase mb-3 mt-5 text-center">Detail Tiket</h5>
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Id Pemesanan</td>
		<td>Tanggal Pemesanan</td>		
		<td>User</td>		
		<td>Pertandingan</td>
		<td>Venue</td>
		<td>Waktu Main</td>
		<td>Jenis Tiket</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total Bayar</td>
		<td>Status Pemesanan</td>			
		<td>Status Tiket</td>
	</tr>
	<?php 

    include '../conn/conn.php';

    if(isset($_GET['id'])){
        $idPemesanan = $_GET['id'];
        $idUser      = $_GET['idU'];

        $sqlUp = "UPDATE pemesanan SET statusTiket = 'Terpakai' WHERE idpemesanan = '$idPemesanan'";
        $exeup = $conn->query($sqlUp);
    
        $sql  = "SELECT * FROM pemesanan a, tiket b , pertandingan c, user d WHERE a.idUser = '$idUser'AND d.idUser = '$idUser' AND a.idTiket = b.idTiket AND b.idPertandingan = c.idPertandingan AND a.idPemesanan = '$idPemesanan';";
	    $exe  = $conn->query($sql);
	    $no = 1;

            while ($data = $exe->fetch_array()) { ?>
                <tr>
                    <td><?= $no ++ ?></td>
                    <td><?= $data['idPemesanan']?></td>
                    <td><?= $data['tglPemesanan']?></td>
                    <td><?= $data['namaUser']?></td>
                    <td><?= $data['tim1']?> VS <?= $data['tim2']?></td>
                    <td><?= $data['venue']?></td>
                    <td><?= $data['waktuTanding']?> - <?= $data['tanggalTanding']?></td>
                    <td><?= $data['jenisKelas']?></td>
                    <td><?= $data['qty']?></td>
                    <td><?= $data['hargaTiket']?></td>
                    <td><?= $data['hargaTiket']*$data['qty']?></td>
                    <td>
                        <?php
                            if($data['statusPemesanan'] == 'Selesai'){ ?>
                                <p class="btn btn-success btn-md" style="color:white">Selesai</p>	
                            <?php }else{ ?>
                                <p class="btn btn-warning btn-md" style="color:white">Diproses</p>	
                            <?php } ?>
                    </td>
                    <td><?= $data['statusTiket']?></td>
                </tr>
            
        <?php }}	?>

   
    
	
</table>
<div class="table-responsive">   
</div>
<script src="https://kit.fontawesome.com/0b9574c8b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>