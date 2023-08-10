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
					<form method="POST" action="<?= base_url('set_akun'); ?>" class="needs-validation">
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label text-dark" for="">Nama Satuan Kerja</label>
								<input class="form-control" name="nama_satuan_kerja" id="name_satuan_kerja" type="text" required="">
								<div class="form-text text-danger"><?= form_error('nama_satuan_kerja'); ?></div>

							</div>
							<div class="col-md-6">
								<label class="form-label text-dark" for="">Username</label>
								<input class="form-control" name="username" id="username" type="text" required="">
								<div class="form-text text-danger"><?= form_error('username'); ?></div>

							</div>
							<div class="col-md-6">
								<label class="form-label text-dark" for="">Password</label>
								<input class="form-control" name="password" id="password" type="text" required="">
								<div class="form-text text-danger"><?= form_error('password'); ?></div>

							</div>
							<div class="col-md-6 mb-3">
								<label class="form-label text-dark" for="">Level Akses</label>
								<select class="form-select digits" name="level_akses" id="level_akses">
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