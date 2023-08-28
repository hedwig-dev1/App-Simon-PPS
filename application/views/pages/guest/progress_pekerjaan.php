<div class="container-fluid">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6">
				<h5><?= $pageTitle ?></h6>
				<?php $this->load->view('partials/breadcumb');?>
				
			</div>
		</div>
	</div>
	<div class="row">
	<?php
            if (validation_errors() || $this->session->flashdata()) {?>
              <div class="card-body">
                <?php
                echo validation_errors('<div class="alert alert-danger dark alert-dismissible fade show" role="alert">',' <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button> </div>');

                 ?>
              </div>
            <?php } ?>
		<div class="col-sm-12">
			<div class="card">
				<form class="form theme-form" action="<?= base_url('progress/send_progress/').$data['id_progPR']; ?>" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
					<div class="card-body">
						<div class="row">
							<input type="hidden" name="id_pemohonPR" value="<?= $id_pemohonPE; ?>">
							<div class="col-md-4 mt-2">
								<label class="form-label f-w-700 txt-dark" for="">Nama Proyek <code>*bagian ini terisi otomatis</code></label>
								<input class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" type="text" value="<?= $data['pkj_namaPR']?>" disabled>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Rencana Progress <span class="txt-danger">*%</span></label>
								<input class="form-control" name="rencana_progress" id="rencana_progress" type="number" value="<?= set_value('rencana_progress'); ?>">
								<div class="txt-danger"><?= form_error('rencana_progress'); ?></div>
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Realisasi Progress <span class="txt-danger">*%</span></label>
								<input class="form-control" name="realisasi_progress" id="realisasi_progress" type="number" value="<?= set_value('realisasi_progress'); ?>">
								<div class="txt-danger"><?= form_error('realisasi_progress'); ?></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Deviasi <span class="txt-danger">*%</span></label>
								<input class="form-control" name="deviasi" id="deviasi" type="number" value="<?= set_value('deviasi'); ?>">
								<div class="txt-danger"><?= form_error('deviasi'); ?></div>
							</div>
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Realisasi Keuangan</label>
								<input class="form-control uang" name="realisasi_keuangan" id="realisasi_keuangan" type="text" value="<?= set_value('realisasi_keuangan'); ?>">
								<div class="txt-danger"><?= form_error('realisasi_keuangan'); ?></div>
							</div>
							<div class="col-md-4 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Laporan Bulanan</label>
								<input class="form-control" name="laporan_bulanan" id="laporan_bulanan" type="text" value="<?= set_value('laporan_bulanan'); ?>">
								<div class="txt-danger"><?= form_error('laporan_bulanan'); ?></div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label class="form-label f-w-700 txt-dark" for="">Waktu</label>
								<input class="form-control" name="waktu" id="waktu" type="date" value="<?= set_value('waktu'); ?>">
								<div class="txt-danger"><?= form_error('waktu'); ?></div>
							</div>
							<div class="col-md-8 mb-4">
								<label class="form-label f-w-700 txt-dark" for="">Item Pekerjaan <span class="txt-danger">*foto</span></label>
								<input class="form-control" name="it_pkjPR" id="it_pkjPR" type="file">
								<div class="txt-danger"><?= form_error('it_pkjPR'); ?></div>
							</div>
						</div>
					</div>
					<div class="card-footer text-start">
						<button class="btn btn-primary" type="submit">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>