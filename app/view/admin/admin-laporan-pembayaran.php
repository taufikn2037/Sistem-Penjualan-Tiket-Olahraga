<h5 class="text-uppercase mb-3">Laporan | Pembayaran</h5>
<div class="table-responsive">
	
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Id Pemesanan</td>
		<td>Nama</td>			
		<td>Pertandingan</td>
		<td>Venue</td>
		<td>Waktu Main</td>
		<td>Jenis Tiket</td>
		<td>Qty</td>
		<td>Harga</td>
		<td>Total Bayar</td>
		<td>foto Pembayaran</td>			
		<td>Status Pembayaran</td>
	
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM buktipembayaran a, pemesanan b, user c, tiket d, pertandingan e WHERE a.idPemesanan = b.idPemesanan AND b.idUser = c.idUser AND b.idTiket = d.idTiket AND d.idPertandingan = e.idPertandingan AND a.statusBuktipembayaran = 'Pending' ORDER BY a.idPemesanan ASC;";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['idPemesanan']?></td>
			<td><?= $data['namaUser']?></td>
			<td><?= $data['tim1']?> VS <?= $data['tim2']?></td>
			<td><?= $data['venue']?></td>
			<td><?= $data['waktuTanding']?> - <?= $data['tanggalTanding']?></td>
			<td><?= $data['jenisKelas']?></td>
			<td><?= $data['qty']?></td>
			<td><?= $data['hargaTiket']?></td>
			<td><?= $data['totalBayar']?></td>
			<td><img src="../gambar/pembayaran/<?= $data['fotoBuktipembayaran']?>" class="img-fluid" width="100"></td>
			<td><?= $data['statusBuktipembayaran']?></td>
			<td>
				<a href="../app/model/admin/admin-validasi-pembayaran.php?id=<?= $data['idPemesanan'] ?>&idV=<?= $data['idBuktipembayaran'] ?>" class="btn btn-success btn-md">VALIDASI</i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-pemesanan') {
		include '../app/view/admin/admin-add-pemesanan.php';
	}else if($menu == 'edit-pemesanan'){
		include '../app/view/admin/admin-edit-pemesanan.php';
	}
} 

?>