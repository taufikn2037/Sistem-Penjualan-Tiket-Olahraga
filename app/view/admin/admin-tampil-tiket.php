<h5 class="text-uppercase mb-3">Data | Tiket</h5>
<a href="?halaman=admin-data-tiket&menu=tambah-tiket" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Jenis Laga</td>
		<td>Jenis Kelas</td>
		<td>Jumlah Tiket</td>		
		<td>Harga Tiket</td>
		<td>Pertandingan</td>
		<td>Waktu</td>
		<td>Tanggal</td>
		<td>Venue</td>
		<td>Status</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM tiket a, pertandingan b WHERE a.idPertandingan = b.idPertandingan;";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['jenisLaga']?></td>
			<td><?= $data['jenisKelas']?></td>
			<td><?= $data['jumlahTiket']?></td>
			<td><?= $data['hargaTiket']?></td>
			<td><?= $data['tim1'] ?> VS <?= $data['tim2'] ?></td>
			<td><?= $data['waktuTanding']?></td>
			<td><?= $data['tanggalTanding']?></td>
			<td><?= $data['venue']?></td>
			<td><?= $data['status'] ?></td>
			<td>
				<a href="?halaman=admin-data-tiket&menu=edit-tiket&id=<?= $data['idTiket'] ?>" class="btn btn-warning btn-md" style="color:white"><i class="fas fa-user-edit"></i></a>
				<a href="../app/model/admin/admin-delete-tiket.php?id=<?= $data['idTiket'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-tiket') {
		include '../app/view/admin/admin-add-tiket.php';
	}else if($menu == 'edit-tiket'){
		include '../app/view/admin/admin-edit-tiket.php';
	}
} 

?>