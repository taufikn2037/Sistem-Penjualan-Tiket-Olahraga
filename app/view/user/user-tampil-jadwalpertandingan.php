<h5 class="text-uppercase mb-3">Jadwal Pertandingan</h5>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Laga</td>
		<td>Tim</td>
		<td>Waktu</td>
		<td>Tanggal</td>
		<td>Venue</td>
		<td>Seat</td>		
		<td>Harga Tiket</td>
		<td>Tiket Tersisa</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM tiket a, pertandingan b WHERE a.idPertandingan = b.idPertandingan AND b.status = 'Belum Dimulai'";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['jenisLaga']?></td>
			<td><?= $data['tim1'] ?> VS <?= $data['tim2'] ?></td>
			<td><?= $data['waktuTanding']?></td>
			<td><?= $data['tanggalTanding']?></td>
			<td><?= $data['venue']?></td>
			<td><?= $data['jenisKelas']?></td>
			<td><?= $data['hargaTiket']?></td>
			<td><?= $data['jumlahTiket']?></td>
			<td>
				<a href="?halaman=user-jadwalPertandingan&menu=book&id=<?= $data['idTiket'] ?>" class="btn btn-warning btn-md" style="color:white">+</a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'book') {
		include '../app/view/user/user-book.php';
	}
}

?>