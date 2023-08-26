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
		<?php $this->load->view('partials/alerts');?>
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
								<?php foreach ($data as $d) { ?>
								<tr>
									<td><?= $i++; ?></td>
									<td><?= $d->nama_pkjPE; ?></td>
									<td><a href="<?= base_url('./public/lampiran/').$d->s_permohonanPE?>" target="_blank" data-bs-toggle="tooltip" data-bs-placement="right"
											title="Download File"><?= pathinfo($d->s_permohonanPE, PATHINFO_BASENAME); ?></a>
									</td>
									<td><a href="<?= base_url('./public/lampiran/').$d->skp_straPE?>" data-bs-toggle="tooltip" data-bs-placement="right"
											title="Download File"><?= pathinfo($d->skp_straPE, PATHINFO_BASENAME); ?></a>
									</td>
									<td>
										<a href="#" class="span badge rounded-pill pill-badge-warning" type="button" data-bs-toggle="modal" data-bs-target="#modal-<?= $d->id_pemohonPE; ?>">Lihat Detail</a>
										<?php if ($d->jns_dokDO == 'Diterima') { ?>
											<a href="#" class="span badge rounded-pill pill-badge-success">Sedang Berjalan</a>	
										<?php } else if ($d->jns_dokDO == 'Ditindak lanjuti') { ?>
											<a href="<?= base_url('permohonan/terima/').$d->dokumen_idPE; ?>" class="span badge rounded-pill pill-badge-primary">Terima</a>	
											<a href="<?= base_url('permohonan/tolak/').$d->dokumen_idPE; ?>" class="span badge rounded-pill pill-badge-dark">Tolak</a>	
										<?php } else if ($d->jns_dokDO == 'Ditolak') { ?>
											<a href="#" class="span badge rounded-pill pill-badge-info">Berhenti</a>	
										<?php } else { ?>
											<a href="<?= base_url('permohonan/tindak_lanjuti/').$d->dokumen_idPE; ?>" class="span badge rounded-pill pill-badge-secondary">Tindak Lanjuti</a>	
										<?php }?>
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

<?php foreach ($data as $d) { ?>
<div class="modal fade bd-example-modal-lg" id="modal-<?= $d->id_pemohonPE; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
									<td class="f-w-600 txt-dark">: <?= $d->nama_pkjPE; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Sumber Pembiayaan</td>
									<td class="f-w-600 txt-dark">: <?= $d->sumber_pbyPE; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Pagu Anggaran</td>
									<td class="f-w-600 txt-dark">: <?= $d->pagu_aggPE; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Nilai Kontrak</td>
									<td class="f-w-600 txt-dark">: <?= $d->nil_kontrakPE; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Jangka Waktu Pelaksanaan</td>
									<td class="f-w-600 txt-dark" >: <?= $d->jw_pelaksanaanPE; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Lokasi Pekerjaan</td>
									<td class="f-w-600 txt-dark">: <?= $d->lokasi_pkjPE; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Timeline Pelaksanaan Tahapan</td>
									<td class="f-w-600 txt-dark"><a href="" data-bs-toggle="tooltip" data-bs-placement="right" title="Download File">: <?= pathinfo($d->timtah_pelakPE, PATHINFO_BASENAME); ?></a></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Surat Permohonan</td>
									<td class="f-w-600 txt-dark"><a href="" data-bs-toggle="tooltip" data-bs-placement="right" title="Download File">: <?= pathinfo($d->s_permohonanPE, PATHINFO_BASENAME); ?></a></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Surat Keputusan Proyek Strategis</td>
									<td class="f-w-600 txt-dark"><a href="" data-bs-toggle="tooltip" data-bs-placement="right" title="Download File">: <?= pathinfo($d->skp_straPE, PATHINFO_BASENAME); ?></a></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Tahapan Berjalan</td>
									<td class="f-w-600 txt-dark">: <?= $d->t_berjalanPE; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Potensi Pengaruh Keberhasilan</td>
									<td class="f-w-600 txt-dark">: <?= $d->pp_keberPE; ?></td>
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