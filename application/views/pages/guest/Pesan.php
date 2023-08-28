<style>
    .text-wrap {
        white-space: normal;
        word-wrap: break-word;
    }
</style>
<div class="container-fluid">

	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3><?= $pageTitle ?></h3>
				<?php $this->load->view('partials/breadcumb');?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div class="row justify-content-between">
						<h5>Daftar Pesan</h5>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="basic-1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Proyek</th>
									<th>Status</th>
									<th>OPSI</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;?>
								<?php foreach ($data as $d) { ?>
									<tr>
										<td><?= $no++ ?></td>
										 <td><?= $d->pkj_namaDO; ?></td>
										 <?php if ($d->jns_dokDO == 'Ditindak lanjuti') { ?>
										 <td><span class="btn btn-pill btn-info btn-air-info btn-xs">Ditindak Lanjuti</span></td>
										 <?php } elseif ($d->jns_dokDO == 'Diterima') { ?>
											<td><span class="btn btn-pill btn-success btn-air-success btn-xs">Diterima</span></td>
										 <?php } elseif ($d->jns_dokDO == 'Ditolak') { ?>
											<td><span class="btn btn-pill btn-danger btn-air-danger btn-xs">Ditolak</span></td>
										<?php } else { ?>
											<td><span class="btn btn-pill btn-secondary btn-air-secondary btn-xs">Belum diperiksa</span></td>
										 <?php } ?>
										 <td>
										 <a href="#" class="span badge rounded-pill pill-badge-warning" type="button"
											data-bs-toggle="modal" data-bs-target="#modal-<?= $d->id_dokumenDO; ?>">Lihat Detail</a>
										 </td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php foreach ($data as $d) { ?>
	<div class="modal fade bd-example-modal-lg" id="modal-<?= $d->id_dokumenDO; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Dokumen </h5>
				<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<table class="display table table-bordered" id="basic-2">
							<tbody>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Nama Pekerjaan</td>
									<td class="f-w-600 txt-dark">: <?= $d->pkj_namaDO; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Jenis Dokumen</td>
									<td class="f-w-600 txt-dark">: <?= $d->jns_dokDO; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Dokumen IN13 <code>disetujui</code></td>
									<td class="f-w-600 txt-dark">: <?= pathinfo($d->IN13DO, PATHINFO_BASENAME); ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Dokumen IN2 <code>disetujui</code></td>
									<td class="f-w-600 txt-dark">: <?= pathinfo($d->IN2DO, PATHINFO_BASENAME); ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Dokumen IN14 <code class="txt-danger">ditolak</code></td>
									<td class="f-w-600 txt-dark">: <?= pathinfo($d->IN14DO, PATHINFO_BASENAME); ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%;">Pesan</td>
									<td class="f-w-600 txt-dark text-wrap">: <?= $d->ket_dokDO ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Undangan Pemaparan</td>
									<td class="f-w-600 txt-dark">: <?= $d->ud_pprDO; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

