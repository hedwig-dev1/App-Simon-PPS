</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
		<!-- footer start-->
		<footer class="footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 footer-copyright text-center font-dark">
						<script>
						document.write(new Date().getFullYear())
					</script> © SIMON-PPS
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!-- latest jquery-->
	<script src="<?= base_url('public/')?>js/jquery-3.5.1.min.js"></script>
	<!-- feather icon js-->
	<script src="<?= base_url('public/')?>js/icons/feather-icon/feather.min.js"></script>
	<script src="<?= base_url('public/')?>js/icons/feather-icon/feather-icon.js"></script>
	<!-- Sidebar jquery-->
	<script src="<?= base_url('public/')?>js/sidebar-menu.js"></script>
	<script src="<?= base_url('public/')?>js/config.js"></script>
	<!-- Bootstrap js-->
	<script src="<?= base_url('public/')?>js/bootstrap/popper.min.js"></script>
	<script src="<?= base_url('public/')?>js/bootstrap/bootstrap.min.js"></script>

	<?php if ($this->uri->segment(1) == 'daftar_permohonan' || $this->uri->segment(1) == 'daftar_progress'|| $this->uri->segment(1) == 'pesan'|| $this->uri->segment(1) == 'list_user') { ?>
	<!-- table start -->
	<script src="<?= base_url('public/')?>js/datatable/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('public/')?>js/datatable/datatables/datatable.custom.js"></script>
	<script src="<?= base_url('public/')?>js/tooltip-init.js"></script>
	<script src="<?= base_url('public/')?>js/chart-widget.js"></script>
	<!-- table end -->
	<?php } ?>

	<?php if ($this->uri->segment(2) == 'daftar_permohonan' || $this->uri->segment(2) == 'daftar_progress' ) { ?>
	<!-- table start -->
	<script src="<?= base_url('public/')?>js/datatable/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('public/')?>js/datatable/datatables/datatable.custom.js"></script>
	<script src="<?= base_url('public/')?>js/tooltip-init.js"></script>
	<script src="<?= base_url('public/')?>js/chart-widget.js"></script>
	<!-- table end -->
	<?php } ?>

	<!-- Theme js-->
	<script src="<?= base_url('public/')?>js/script.js"></script>
	<script src="<?= base_url('public/')?>js/theme-customizer/customizer.js"></script>
	<!-- login js-->
	<!-- Plugin used-->
	<script src="<?= base_url('public/')?>js/extra-js/jquery.mask.js"></script>
	<script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $( '.uang' ).mask('000.000.000.000.000', {reverse: true});

            })
        </script>
</body>

</html>