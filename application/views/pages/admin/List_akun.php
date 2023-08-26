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
					<?php $this->load->view('partials/alerts');?>
					<div class="row justify-content-between">
						<h5>List User</h5>
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
                            foreach ($data as $d) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d->nama_satker ?></td>
                                    <td><?= $d->user ?></td>
                                    <td><?= $d->level ?></td>
                                    <td><?= $d->terdaftar ?></td>
									<td>
										<?php if ($d->is_activate == 1) { ?>
											<a href="<?= base_url('aktivasi') ?>" class="span badge rounded-pill pill-badge-primary" disabled="disabled">Done</a>
										<?php } ?>
										<?php if ($d->is_activate == 0) { ?>
										<a href="<?= base_url('aktivasi/' . $d->id_pengguna) ?>" class="span badge rounded-pill pill-badge-danger">Aktivasi</a>
										<?php } ?>                               
									</td>
									<td>
										<a href="<?= base_url('delete/' . $d->id_pengguna) ?>" class="span badge rounded-pill pill-badge-danger">Hapus</a>
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