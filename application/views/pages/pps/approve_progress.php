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
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">Nama Proyek</label>
                                    <div class="col-md-8"><input class="form-control disabled"  placeholder="Nama Proyek" aria-label="Disabled input example" type="text"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">PPS IN.16</label>
                                    <div class="col-md-8"><input class="form-control" type="file"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">PPS IN.17</label>
                                    <div class="col-md-8"><input class="form-control" type="file"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label">Pesan</label>
                                    <div class="col-md-8"><textarea class="form-control" id="" rows="3" placeholder="Isi pesan...."></textarea></div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                        <a href="<?= base_url('seksi-pps/daftar_progress'); ?>" class="btn btn-light">Kembali</a>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>