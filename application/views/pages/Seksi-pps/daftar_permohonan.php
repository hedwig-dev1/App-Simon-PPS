<div class="container-fluid">

	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h3><?= $pageTitle ?></h3>
				<?php $this->load->view('partials/breadcumb');?>
				<div class="col-md-4 mt-3">
				<?php if ($this->session->userdata('id_level') != 2 ) { ?>
					<a href="<?= base_url('add_permohonan')?>" class="btn btn-square btn-primary btn-sm"
						type="button">Ajukan Permohonan</a>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div class="row justify-content-between">
						<h5>Data Permohonan</h5>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="basic-1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pekerjaan</th>
									<th>Surat Permohonan</th>
									<th>Surat Keputusan Proyek Strategis</th>
									<th>OPSI</th>

								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($pemohon as $data) { ?>
								<tr>
									<td><?= $i++; ?></td>
									<td><?= $data->nama_pekerjaan; ?></td>
									<td><a href="" data-bs-toggle="tooltip" data-bs-placement="right"
											title="Download File"><?= pathinfo($data->surat_permohonan, PATHINFO_BASENAME); ?></a>
									</td>
									<td><a href="" data-bs-toggle="tooltip" data-bs-placement="right"
											title="Download File"><?= pathinfo($data->surat_keputusan_proyek_strategis, PATHINFO_BASENAME); ?></a>
									</td>
									<td>
										<a href="#" class="span badge rounded-pill pill-badge-warning" type="button"
											data-bs-toggle="modal" data-bs-target="#modal-<?= $data->id_pemohon; ?>">Lihat Detail</a>
										<?php if ($this->session->userdata('id_level') != 3) { ?>
										<a href="" class="span badge rounded-pill pill-badge-success" type="button" data-bs-toggle="modal" data-bs-target=".modal-terima">Terima</a>
										<?php } ?>

										<a href="" class="span badge rounded-pill pill-badge-danger">Hapus</a>	
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

<?php foreach ($pemohon as $data) { ?>
<div class="modal fade bd-example-modal-lg" id="modal-<?= $data->id_pemohon; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Pemohon </h5>
				<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<table class="display table table-bordered" id="basic-2">
							<tbody>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Nama Pekerjaan</td>
									<td class="f-w-600 txt-dark">: <?= $data->nama_pekerjaan; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Sumber Pembiayaan</td>
									<td class="f-w-600 txt-dark">: <?= $data->sumber_pembiayaan; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Jumlah Anggaran</td>
									<td class="f-w-600 txt-dark">: <?= $data->jumlah_anggaran; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Pagu Anggaran</td>
									<td class="f-w-600 txt-dark">: <?= $data->pagu_anggaran; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Nilai Kontrak</td>
									<td class="f-w-600 txt-dark">: <?= $data->nilai_kontrak; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Jangka Waktu Pelaksanaan</td>
									<td class="f-w-600 txt-dark" >: <?= $data->jangka_waktu_pelaksanaan; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Lokasi Pekerjaan</td>
									<td class="f-w-600 txt-dark">: <?= $data->lokasi_pekerjaan; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Timeline Pelaksanaan Tahapan</td>
									<td class="f-w-600 txt-dark"><a href="" data-bs-toggle="tooltip" data-bs-placement="right" title="Download File">: <?= pathinfo($data->timeline_pelaksanaan_tahapan, PATHINFO_BASENAME); ?></a></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Surat Permohonan</td>
									<td class="f-w-600 txt-dark"><a href="" data-bs-toggle="tooltip" data-bs-placement="right" title="Download File">: <?= pathinfo($data->surat_permohonan, PATHINFO_BASENAME); ?></a></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Surat Keputusan Proyek Strategis</td>
									<td class="f-w-600 txt-dark"><a href="" data-bs-toggle="tooltip" data-bs-placement="right" title="Download File">: <?= pathinfo($data->surat_keputusan_proyek_strategis, PATHINFO_BASENAME); ?></a></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Tahapan Berjalan</td>
									<td class="f-w-600 txt-dark">: <?= $data->tahapan_berjalan; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Potensi Pengaruh Keberhasilan</td>
									<td class="f-w-600 txt-dark">: <?= $data->potensi_pengaruh_keberhasilan; ?></td>
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

<!-- MODAL terima -->
<div class="modal fade bd-example-modal-lg modal-terima" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title">Kirim Balasan</h5>
		<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<form action="">
				<div class="row">
					<div class="col-md-12">
						<div class="mb-3 row">
							<label class="col-md-6 col-form-label">Undangan Pemaparan</label>
							<div class="col-md-6"><input class="form-control" type="file"></div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="mb-3 row">
							<label class="col-md-6 col-form-label">Dokumen Tindak Lanjuti</label>
							<div class="col-md-6"><input class="form-control" type="file"></div>
						</div>
					</div>
				</div>
				<button class="btn btn-primary" type="button">Kirim</button>
			</form>
		</div>
	</div>
	</div>
</div>