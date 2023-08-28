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
		<div class="col-sm-8">
			<div class="card">
				<div class="card-body">
					<form action="<?= base_url('permohonan/pro/approve/').$data['id_dokumenDO']; ?>" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
						<div class="row">
						<input type="hidden" name="id_dokumenDO" value="<?= $id_dokumenDO; ?>">
							<div class="col-md-12">
								<div class="mb-3 row">
									<label class="col-md-4 col-form-label">Nama Proyek</label>
									<div class="col-md-8"><input class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" type="text" value="<?= $data['pkj_namaDO']?>" disabled></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3 row">
									<label class="col-md-4 col-form-label">PPS IN.13</label>
									<div class="col-md-8"><input class="form-control" name="IN13DO" id="IN13DO" type="file"></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3 row">
									<label class="col-md-4 col-form-label">PPS IN.2</label>
									<div class="col-md-8"><input class="form-control" name="IN2DO" id="IN2DO" type="file"></div>
								</div>
							</div>
						</div>
						<div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                            <a href="<?= base_url('seksi-pps/daftar_permohonan'); ?>" class="btn btn-light">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>