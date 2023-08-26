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
						<h5>Data Progress Bulanan</h5>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display" id="basic-1">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal/Bulan/Tahun</th>
									<th>OPSI</th>
								</tr>
							</thead>
							<tbody>
                            <?php $no = 1 ;?>
								<?php foreach ($data as $d) { ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $d->waktuPR; ?></td>
										<td>
										<a href="#" class="span badge rounded-pill pill-badge-warning" type="button"
											data-bs-toggle="modal" data-bs-target="#modal-<?= $d->id_progPR; ?>">Lihat Detail</a>
										<a href="#" class="span badge rounded-pill pill-badge-secondary" type="button"
											data-bs-toggle="modal" data-bs-target="#modal-progress">Lihat Progress</a>
										<a href="<?= base_url('progress/kirim_pemberitahuan'); ?>" class="span badge rounded-pill pill-badge-success" >Terima</a>
										<a href="" class="span badge rounded-pill pill-badge-danger">Hapus</a>
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

<?php foreach ($data as $d) { ?>
<div class="modal fade bd-example-modal-lg" id="modal-<?= $d->id_progPR; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Progress Pekerjaan </h5>
				<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<table class="display table table-bordered" id="basic-2">
							<tbody>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Tanggal/Bulan/Tahun</td>
									<td class="f-w-600 txt-dark">: <?= $d->waktuPR; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Rencana Progress</td>
									<td class="f-w-600 txt-dark">: <?= $d->rcn_progPR; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Realisasi Progress</td>
									<td class="f-w-600 txt-dark">: <?= $d->rl_progPR; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Deviasi</td>
									<td class="f-w-600 txt-dark">: <?= $d->deviasiPR; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Realisasi Keuangan</td>
									<td class="f-w-600 txt-dark">: <?= $d->rl_keuanPR; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Realisasi Keuangan</td>
									<td class="f-w-600 txt-dark">: <?= $d->lp_bulanPR; ?></td>
								</tr>
								<tr>
									<td class="f-w-700 txt-dark" style="width:50%">Item Pekerjaan</td>
									<td class="f-w-600 txt-dark" >: <?= $d->it_pkjPR; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				</div>
		</div>
	</div>
</div>
<?php } ?>

<div class="modal fade bd-example-modal-lg" id="modal-progress" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Detail Progress Pekerjaan </h5>
				<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
				<div class="col-xl-5">
                <div class="card o-hidden">
                  <div class="card-header pb-0">
                    <h5>Total Earning</h5>
                  </div>
                  <div class="bar-chart-widget">
                    <div class="top-content bg-primary"></div>
                    <div class="bottom-content card-body">
                      <div class="row">
                        <div class="col-12">
                          <div id="chart-widget5"> </div>
                        </div>
                      </div>
                      <div class="row text-center">
                        <div class="col-4 b-r-light">
                          <div><span class="font-primary">12%<i class="icon-angle-up f-12 ms-1"></i></span><span class="text-muted block-bottom">Year</span>
                            <h4 class="num m-0"><span class="counter color-bottom">3659</span>M</h4>
                          </div>
                        </div>
                        <div class="col-4 b-r-light">
                          <div><span class="font-primary">15%<i class="icon-angle-up f-12 ms-1"></i></span><span class="text-muted block-bottom">Month</span>
                            <h4 class="num m-0"><span class="counter color-bottom">698</span>M</h4>
                          </div>
                        </div>
                        <div class="col-4">
                          <div><span class="font-primary">34%<i class="icon-angle-up f-12 ms-1"></i></span><span class="text-muted block-bottom">Today</span>
                            <h4 class="num m-0"><span class="counter color-bottom">9361</span>M</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
				</div>
				</div>
		</div>
	</div>
</div>