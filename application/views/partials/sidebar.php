			<!-- Page Sidebar Start-->
			<header class="main-nav">
				<div class="sidebar-user text-center"><img class="img-90 rounded-circle"
						src="<?= base_url('public/')?>images/dashboard/1.png" alt="">
					<div class="badge-bottom"><span class="badge badge-primary">New</span></div><a
						href="user-profile.html">
						<h6 class="mt-3 f-14 f-w-600"><?= ucfirst($this->session->userdata('username')); ?></h6>
					</a>
					<p class="mb-0 font-roboto"><?= ucfirst($this->session->userdata('level_akses')); ?></p>
				</div>
				<nav>
					<div class="main-navbar">
						<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
						<div id="mainnav">
							<ul class="nav-menu custom-scrollbar">
								<li class="back-btn">
									<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
											aria-hidden="true"></i></div>
								</li>
								<li class="sidebar-main-title">
									<div>
										<h6>General </h6>
									</div>
								</li>
								
								<li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url()?>"><i data-feather="home"></i><span>Dashboard</span></a></li>
								<li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url('list_permohonan')?>"><i data-feather="file-text"></i><span>Permohonan</span></a></li>
								<li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url('daftar_progress')?>"><i data-feather="box"></i><span>Progress Pekerjaan</span></a></li>
								<li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url('arsip_berkas')?>"><i data-feather="check-square"></i><span>Arsip</span></a></li>
								
								<?php if ($this->session->userdata('id_level') == 1 ) { ?>
									<li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Akun</span></a>
										<ul class="nav-submenu menu-content">
										<li><a href="<?= base_url('daftar_akun')?>">Buat Akun</a></li>
										<li><a href="<?= base_url('list_akun')?>">List Akun</a></li>
										</ul>
									</li>
								<?php } ?>
								
								<li class="sidebar-main-title">
									<div>
										<h6>Other </h6>
									</div>
								</li>
								<li class="dropdown"><a class="nav-link menu-title link-nav" href="<?= base_url('login')?>"><i data-feather="log-out"></i><span>Keluar</span></a></li>

							</ul>
						</div>
						<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
					</div>
				</nav>
			</header>
			<!-- Page Sidebar Ends-->