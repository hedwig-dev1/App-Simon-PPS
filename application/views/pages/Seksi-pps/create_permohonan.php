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
				<div class="card-body">
					<form class="needs-validation" action="<?= base_url('pro_permohonan_add'); ?>" method="POST" enctype="multipart/form-data">
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Nama Pekerjaan</label>
								<input class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" type="text">
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Sumber Pembiayaan</label>
								<input class="form-control" name="sumber_pembiayaan" id="sumber_pembiayaan" type="text">
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Jumlah Angaraan</label>
								<input class="form-control" name="jumlah_anggaran" id="jumlah_anggaran" type="text" placeholder="Rp10.000.000">
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Pagu Angaraan</label>
								<input class="form-control" name="pagu_anggaran" id="pagu_anggaran" type="text" placeholder="Rp10.000.000">
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Nilai Kontrak</label>
								<input class="form-control" name="nilai_kontrak" id="nilai_kontrak" type="text" placeholder="Rp10.000.000">
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Jangka Waktu Pelaksanaan</label>
								<input class="form-control" name="jangka_waktu_pelaksanaan" id="jangka_waktu_pelaksanaan" type="text">
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Lokasi Pekerjaan</label>
								<input class="form-control" name="lokasi_pekerjaan" id="lokasi_pekerjaan" type="text">
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Tahapan Yang Sedang Berjalan</label>
								<input class="form-control" name="tahapan_berjalan" id="tahapan_berjalan" type="text">
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Timeline Tahapan Pelaksanaan Pekerjaan</label>
								<input class="form-control" name="timeline_pelaksanaan_tahapan" id="timeline_pelaksanaan_tahapan" type="file">
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Surat Keputusan Proyek Strategis Daerah</label>
								<input class="form-control" name="surat_keputusan_proyek_strategis" id="surat_keputusan_proyek_strategis" type="file">
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Surat Permohonan</label>
								<input class="form-control" name="surat_permohonan" id="surat_permohonan" type="file">
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Potensi Pengaruh Keberhasilan Pekerjaan</label>
                            	<textarea class="form-control" name="potensi_pengaruh_keberhasilan" id="potensi_pengaruh_keberhasilan" rows="3"></textarea>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Kirim Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>