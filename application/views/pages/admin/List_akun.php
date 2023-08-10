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
				<div class="card-header">
					<div class="row justify-content-between">
						<h5>List Akun</h5>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="basic-1">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Satuan Kerja</th>
									<th>Username</th>
									<th>Level Akses</th>
									<th>Terdaftar</th>
									<th>Aksi</th>
									<th>Hapus</th>
								</tr>
							</thead>
                            <tbody>
                            <?php $no = 1; 
                            foreach ($pengguna as $data) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->nama_satuan_kerja ?></td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->level_akses ?></td>
                                    <td><?= $data->terdaftar ?></td>
									<td>
										<?php if ($data->is_activate == 1) { ?>
											<a href="<?= base_url('aktivasi') ?>" class="span badge rounded-pill pill-badge-primary" disabled="disabled">Done</a>
										<?php } ?>
										<?php if ($data->is_activate == 0) { ?>
										<a href="<?= base_url('aktivasi/' . $data->id_pengguna) ?>" class="span badge rounded-pill pill-badge-danger">Aktivasi</a>
										<?php } ?>                               
									</td>
									<td>
										<a href="<?= base_url('delete/' . $data->id_pengguna) ?>" class="span badge rounded-pill pill-badge-danger">Hapus</a>
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