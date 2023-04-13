<h5 class="text-uppercase mb-3">Data | Pertandingan</h5>
<a href="?halaman=admin-data-pertandingan&menu=tambah-pertandingan" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Tim</td>
		<td>Waktu</td>
		<td>Tanggal</td>
		<td>Venue</td>		
		<td>Status Pertandingan</td>
		<td>Jenis Olahraga</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM pertandingan a, jenispertandingan b WHERE a.idJenispertandingan = b.idJenispertandingan";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['tim1']?> VS <?= $data['tim2']?></td>
			<td><?= $data['waktuTanding']?></td>
			<td><?= $data['tanggalTanding']?></td>
			<td><?= $data['venue']?></td>
			<td><?= $data['status']?></td>
			<td><?= $data['namaJenispertandingan']?></td>
			<td>
				<a href="?halaman=admin-data-pertandingan&menu=edit-pertandingan&id=<?= $data['idPertandingan'] ?>" class="btn btn-warning btn-md" style="color:white"><i class="fas fa-user-edit"></i></a>
				<a href="../app/model/admin/admin-delete-pertandingan.php?id=<?= $data['idPertandingan'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-pertandingan') {
		include '../app/view/admin/admin-add-pertandingan.php';
	}else if($menu == 'edit-pertandingan'){
		include '../app/view/admin/admin-edit-pertandingan.php';
	}
} 

?>