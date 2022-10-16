<?php
$id = $this->session->userdata('id_user');
$this->db->join('biodata', 'biodata.id_user = user.id_user');
$cek_biodata = $this->db->get_where('user', ['user.id_user' => $id])->row_array();
?>
<!DOCTYPE html>
<html lang="en" id="page-top">

<head>
	<?php include 'include-css.php'; ?>
	<title><?= $title; ?></title>
	<style>
		body {
			transition: all ease-in-out 0.3s;
		}

		.switch {
			position: relative;
			display: inline-block;
			width: 60px;
			height: 34px;
		}

		.switch input {
			opacity: 0;
			width: 0;
			height: 0;
		}

		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #eee;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.slider:before {
			position: absolute;
			content: "";
			height: 26px;
			width: 26px;
			left: 4px;
			bottom: 4px;
			background-color: rgb(255, 210, 64);
			border: 2px solid rgb(255, 166, 0);
			box-shadow: 1px 1px 1px #999;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.dl+.slider {
			outline: 2px solid #333;
		}

		.dl:checked+.slider {
			background-color: #222;
			/* outline: 2px solid #333; */
		}

		.dl:focus+.slider {
			box-shadow: 0 0 1px #333;
		}

		.dl:checked+.slider:before {
			-webkit-transform: translateX(26px);
			-ms-transform: translateX(26px);
			transform: translateX(26px);
		}

		/* Rounded sliders */
		.slider.round {
			border-radius: 34px;
		}

		.slider.round:before {
			border-radius: 50%;
		}
	</style>
</head>

<body>
	<?php if ($cek_biodata !== NULL) : ?>
		<div class="wrapper">
			<!-- Sidebar  -->
			<nav id="sidebar">
				<div class="sidebar-header">				
					<img class="img-fluid" src="<?= base_url('assets/img/img_properties/header.png'); ?>" alt="logo">
				</div>
				<ul class="list-unstyled components">
					<li class="p-2">
						<div class="neu bg-dark">
							<div class="modal-body">
								<div class="d-flex">
									<div>
										<img src="<?= base_url('assets/img/img_profiles/') . $dataUser['foto']; ?>" class="card-img-top rounded" alt="..."  style="height: 84px; width: 68px;">
									</div>
									<div class="ml-2" style="width: 100%;">
										<h5 style="font-size: 0.8rem;" class=""><?= $dataUser['username']; ?></h5>
										<h5 style="font-size: 0.65rem;" class=""><?= $dataUser['nama_jabatan']; ?></h5>
										<a href="<?= base_url('main/profile'); ?>" class="btn btn-secondary my-0" style="width: 70%; height: auto; font-size: 12px;">Edit Profile</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- <p class="bg-success my-0"><strong>Pengguna</strong> : <?= $dataUser['username']; ?></p>
					<p class="bg-danger my-0"><strong>Jabatan</strong> : <?= $dataUser['nama_jabatan']; ?></p> -->
					<li class="p-2">
						<a href="<?= base_url('main'); ?>" class="rounded"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</a>
					</li>
					<?php if ($this->session->userdata('id_jabatan') !== '4') : ?>
						<!-- <li class="p-2">
							<a href="<?= base_url('member/tambahMember'); ?>" class="rounded"><i class="fas fa-fw fa-users"></i> <sup><i class="fas fa-fw fa-plus"></i></sup> Tambah Member</a>
						</li>
						<li class="p-2">
							<a href="<?= base_url('transaksi/tambahTransaksi'); ?>" class="rounded"><i class="fas fa-fw fa-handshake"></i> <sup><i class="fas fa-1x fa-plus"></i></sup> Tambah Transaksi</a>
						</li> -->
						<li class="p-2">
							<a href="<?= base_url('transaksi'); ?>" class="rounded"><i class="fas fa-fw fa-handshake"></i> Transaksi</a>
						</li>
					<?php endif ?>
					<li class="p-2">
						<a href="#manajemenSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle rounded"><i class="fas fa-fw fa-align-justify"></i> Manajemen Data</a>
						<ul class="collapse list-unstyled" id="manajemenSubmenu">
							<!-- Jika yang login super administrator -->
							<?php if ($this->session->userdata('id_jabatan') == '1') : ?>
								<li class="">
									<a href="<?= base_url('outlet'); ?>"><i class="fas fa-fw fa-store"></i> Outlet</a>
								</li>
								<li class="">
									<a href="<?= base_url('jabatan'); ?>"><i class="fas fa-fw fa-user"></i> <sup><i class="fas fa-1x fa-chart-line"></i></sup> Jabatan</a>
								</li>
							<?php endif ?>
							<li class="">
								<a href="<?= base_url('user'); ?>"><i class="fas fa-fw fa-user"></i> Pengguna</a>
							</li>
							<!-- Jika yang login super administrator atau administrator -->
							<?php if ($this->session->userdata('id_jabatan') == '1') : ?>
								<li class="">
									<a href="<?= base_url('jenisPaket'); ?>"><i class="fas fa-fw fa-boxes"></i> Jenis Paket</a>
								</li>
							<?php endif ?>
							<?php if ($this->session->userdata('id_jabatan') == '1' or $this->session->userdata('id_jabatan') == '2') : ?>
								<li class="">
									<a href="<?= base_url('paket'); ?>"><i class="fas fa-fw fa-box"></i> Paket</a>
								</li>
							<?php endif ?>
							<li class="">
								<a href="<?= base_url('member'); ?>"><i class="fas fa-fw fa-users"></i> Member</a>
							</li>
						</ul>
					</li>
					<li class="p-2">
						<a href="<?= base_url('laporan'); ?>" class="rounded"><i class="fas fa-fw fa-file-signature"></i> Laporan</a>
					</li>
					<!-- Jika yang login super administrator atau administrator -->
					<?php if ($this->session->userdata('id_jabatan') == '1' or $this->session->userdata('id_jabatan') == '2') : ?>
						<li class="p-2">
							<a href="<?= base_url('log'); ?>" class="rounded"><i class="fas fa-fw fa-file-alt"></i> Catatan</a>
						</li>
					<?php endif ?>
					<li class="p-2">
						<a data-toggle="modal" data-target="#logoutModal" href="" class="rounded"><i class="fas fa-fw fa-sign-out-alt"></i> Keluar</a>
					</li>
					<li class="p-2 position-relative">

					</li>
				</ul>

				<ul class="list-unstyled">
					<li class="p-2">
						<p>Copyright &#169; <script type='text/javascript'>
								var creditsyear = new Date();
								document.write(creditsyear.getFullYear());
							</script>
						</p>
					</li>
				</ul>
			</nav>

			<!-- Page Content  -->
			<div id="content">
				<nav class="navbar navbar-expand-lg navbar-light bg-light shadow rounded" id="top-nav">
					<div class="container-fluid">
						<button type="button" id="sidebarCollapse" class="btn btn-info">
							<i class="fas fa-chevron-left" id="sidebar-icon"></i>
						</button>

						<!-- <ul class="nav navbar-nav ml-auto my-2">
			          <li class="nav-item active">
			            <a href="<?= base_url('main/profile'); ?>" class="btn btn-primary"><i class="fas fa-fw fa-user"></i> <?= $dataUser['username']; ?></a>
			          </li>
			        </ul> -->
						<label class="switch my-auto">
							<input type="checkbox" class="dl" id="dl">
							<span class="slider round">
								<i class="fa fa-sun mt-2 ml-2 text-warning" aria-hidden="true"></i>
								<i class="fa fa-moon mt-2 ml-2 text-warning" aria-hidden="true"></i>
							</span>
						</label>
					</div>
				</nav>

				<div class="container-fluid">

					<!-- Modal Logout -->
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="logoutModalLabel">Keluar Aplikasi Permata Laundry</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Apakah <?= $dataUser['username']; ?> yakin ingin keluar aplikasi?
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
									<a href="<?= base_url('auth/logout'); ?>" class="btn btn-primary"><i class="fas fa-fw fa-sign-out-alt"></i> Keluar</a>
								</div>
							</div>
						</div>
					</div>
				<?php endif ?>