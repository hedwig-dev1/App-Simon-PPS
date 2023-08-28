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
					<form method="POST" action="<?= base_url($action); ?>" class="needs-validation">
						<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label text-dark" for="">Nama Satuan Kerja</label>
								<input class="form-control" name="nama_satker" id="name_satker" type="text" required="">
								<div class="form-text text-danger"><?= form_error('nama_satker'); ?></div>

							</div>
							<div class="col-md-6">
								<label class="form-label text-dark" for="">Username</label>
								<input class="form-control" name="user" id="user" type="text" required="">
								<div class="form-text text-danger"><?= form_error('user'); ?></div>

							</div>
							<div class="col-md-6">
								<label class="form-label text-dark" for="">Password</label>
								<input class="form-control" name="pass" id="pass" type="text" required="">
								<div class="form-text text-danger"><?= form_error('pass'); ?></div>

							</div>
							<div class="col-md-6 mb-3">
								<label class="form-label text-dark" for="">Level Akses</label>
								<select class="form-select digits" name="level" id="level">
									<option default>-- Pilih --</option>
									<option value="admin">Admin</option>
									<option value="guest">Guest</option>
									<option value="seksi-pps">Seksi PPS</option>
								</select>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Buat Akun</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>