<h5 class="text-uppercase mb-3">Laporan | Pemesanan</h5>
<a href="?halaman=admin-laporan-pemesanan&menu=tambah-pemesanan" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
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
	
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM pemesanan a, tiket b, user c, pertandingan d WHERE a.idTiket = b.idTiket AND a.idUser = c.idUser AND b.idPertandingan = d.idPertandingan ORDER BY a.idPemesanan ASC;";
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
			<td><?= $data['statusPemesanan']?></td>
			<td><?= $data['statusTiket']?></td>
			<td>
				<a href="../app/model/admin/admin-delete-pemesanan.php?id=<?= $data['idPemesanan'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
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