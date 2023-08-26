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
					<form class="needs-validation" action="<?= base_url($action); ?>" method="POST" enctype="multipart/form-data">
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Nama Pekerjaan</label>
								<input class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" type="text">
								<div class="txt-danger"><?= form_error('nama_pekerjaan'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Sumber Pembiayaan</label>
								<input class="form-control" name="sumber_pembiayaan" id="sumber_pembiayaan" type="text">
							    <div class="txt-danger"><?= form_error('sumber_pembiayaan'); ?></div>
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="paguAnggaranInput">Pagu Anggaran</label>
								<input class="form-control rupiah-input" name="pagu_anggaran" id="paguAnggaranInput" type="text">
							    <div class="txt-danger"><?= form_error('pagu_anggaran'); ?></div>
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="nilaiKontrakInput">Nilai Kontrak</label>
								<input class="form-control rupiah-input" name="nilai_kontrak" id="nilaiKontrakInput" type="text">
								<div class="txt-danger"><?= form_error('nilai_kontrak'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Jangka Waktu Pelaksanaan</label>
								<input class="form-control" name="jangka_waktu_pelaksanaan" id="jangka_waktu_pelaksanaan" type="text">
								<div class="txt-danger"><?= form_error('jangka_waktu_pelaksanaan'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Lokasi Pekerjaan</label>
								<input class="form-control" name="lokasi_pekerjaan" id="lokasi_pekerjaan" type="text">
								<div class="txt-danger"><?= form_error('lokasi_pekerjaan'); ?></div>
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Tahapan Yang Sedang Berjalan</label>
								<input class="form-control" name="tahapan_berjalan" id="tahapan_berjalan" type="text">
								<div class="txt-danger"><?= form_error('tahapan_berjalan'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Timeline Tahapan Pelaksanaan Pekerjaan</label>
								<input class="form-control" name="timtah_pelakPE" id="timtah_pelakPE" type="file">
								<div class="txt-danger"><?= form_error('timtah_pelakPE'); ?></div>
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Surat Keputusan Proyek Strategis Daerah</label>
								<input class="form-control" name="skp_straPE" id="skp_straPE" type="file">
								<div class="txt-danger"><?= form_error('skp_straPE'); ?></div>
							</div>
						</div>
						<div class="row g-3">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Surat Permohonan</label>
								<input class="form-control" name="s_permohonanPE" id="s_permohonanPE" type="file">
								<div class="txt-danger"><?= form_error('s_permohonanPE'); ?></div>
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Potensi Pengaruh Keberhasilan Pekerjaan</label>
                            	<textarea class="form-control" name="potensi_pengaruh_keberhasilan" id="potensi_pengaruh_keberhasilan" rows="3"></textarea>
								<div class="txt-danger"><?= form_error('potensi_pengaruh_keberhasilan'); ?></div>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Kirim Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mencari semua input dengan class "rupiah-input"
        let rupiahInputs = document.querySelectorAll('.rupiah-input');

        // Menggunakan loop untuk mengatur event listener pada masing-masing input
        rupiahInputs.forEach(function (input) {
            input.addEventListener('blur', formatRupiah);
        });

        function formatRupiah(event) {
            let input = event.target;
            let value = input.value;

            // Menghapus karakter non-digit (seperti titik dan koma) dari input
            value = value.replace(/[^\d]/g, '');

            // Mengubah angka menjadi format mata uang dengan titik sebagai separator ribuan
            // dan koma sebagai separator desimal
            let formattedValue = Number(value).toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });

            // Mengubah nilai input menjadi format mata uang yang diinginkan
            input.value = formattedValue;
        }
    });
</script>