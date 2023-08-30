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
				<?php $this->load->view('partials/alerts'); ?>
				<div class="card-body">
					<form class="needs-validation" action="<?= base_url($action); ?>" method="POST"
						enctype="multipart/form-data">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
							value="<?= $this->security->get_csrf_hash(); ?>">
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Nama Pekerjaan</label>
								<input class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" type="text"
									value="<?= set_value('nama_pekerjaan')?>">
								<div class="txt-danger"><?= form_error('nama_pekerjaan'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Sumber Pembiayaan</label>
								<input class="form-control" name="sumber_pembiayaan" id="sumber_pembiayaan" type="text"
									value="<?= set_value('sumber_pembiayaan'); ?>">
								<div class="txt-danger"><?= form_error('sumber_pembiayaan'); ?></div>
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Pagu Anggaran</label>
								<input class="form-control uang" name="pagu_anggaran" type="text"
									value="<?= set_value('pagu_anggaran'); ?>">
								<div class="txt-danger"><?= form_error('pagu_anggaran'); ?></div>
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Nilai Kontrak</label>
								<input class="form-control uang" name="nilai_kontrak" type="text"
									value="<?= set_value('nilai_kontrak'); ?>">
								<div class="txt-danger"><?= form_error('nilai_kontrak'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Jangka Waktu Mulai</label>
								<input class="form-control" name="jangka_waktu_start" id="jangka_waktu_start"
									type="date" value="<?= set_value('jangka_waktu_start'); ?>">
								<div class="txt-danger"><?= form_error('jangka_waktu_start'); ?></div>
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Jangka Waktu Berakhir</label>
								<input class="form-control" name="jangka_waktu_end" id="jangka_waktu_end" type="date"
									value="<?= set_value('jangka_waktu_end'); ?>">
								<div class="txt-danger"><?= form_error('jangka_waktu_end'); ?></div>
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Lokasi Pekerjaan</label>
								<input class="form-control" name="lokasi_pekerjaan" id="lokasi_pekerjaan" type="text"
									value="<?= set_value('lokasi_pekerjaan'); ?>">
								<div class="txt-danger"><?= form_error('lokasi_pekerjaan'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Tahapan Yang Sedang Berjalan</label>
								<input class="form-control" name="tahapan_berjalan" id="tahapan_berjalan" type="text"
									value="<?= set_value('tahapan_berjalan'); ?>">
								<div class="txt-danger"><?= form_error('tahapan_berjalan'); ?></div>
							</div>

						</div>
						<div class="row g-3 mt-2">
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Timeline Tahapan Pelaksanaan
									Pekerjaan</label>
								<input class="form-control" name="timtah_pelakPE" id="timtah_pelakPE" type="file" accept=".pdf">
								<div class="txt-danger"><?= form_error('timtah_pelakPE'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Surat Keputusan Proyek Strategis
									Daerah</label>
								<input class="form-control" name="skp_straPE" id="skp_straPE" type="file" accept=".pdf">
								<div class="txt-danger"><?= form_error('skp_straPE'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Surat Permohonan</label>
								<input class="form-control" name="s_permohonanPE" id="s_permohonanPE" type="file" accept=".pdf">
								<div class="txt-danger"><?= form_error('s_permohonanPE'); ?></div>
							</div>

						</div>
						<div class="row g-3 mt-2">

							<div class="col-md-8 mb-8">
								<label class="form-label f-w-700 txt-dark" for="">Potensi Pengaruh Keberhasilan
									Pekerjaan</label>
								<textarea class="form-control" name="potensi_pengaruh_keberhasilan"
									id="potensi_pengaruh_keberhasilan"
									rows="3"><?= set_value('potensi_pengaruh_keberhasilan'); ?></textarea>
								<div class="txt-danger"><?= form_error('potensi_pengaruh_keberhasilan'); ?></div>
							</div>
						</div>
						<div class="row g-3 mt-2">
							<div class="col-md-4">

								<button class="btn btn-primary" type="submit">Kirim Data</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
