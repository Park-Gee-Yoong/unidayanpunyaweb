<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="<?php echo base_url('asset/img/unidayanbrand2.png'); ?>" alt="forufans Brand">
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.css'); ?>" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url('asset/js/jquery-2.1.3.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js'); ?>"></script>
	<link rel="stylesheet" href="<?php echo base_url('asset/css/unidayan.css'); ?>" type="text/css" />
</head>
<body>
	<div class="uninavtop">
		<div class="mainbox">
			<div class="col-md-4 paddingnone">
				<a href="#" class="unimedsos"><i class="fa fa-facebook"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-twitter"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-instagram"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-youtube"></i></a>
				<a href="#" class="unimedsos"><i class="fa fa-google-plus"></i></a>
				<div class="sambungfloat"></div>
			</div>
			<div class="col-md-8 paddingnone">
				<div class="unimenav kanan"><i class="fa fa-phone-square"></i> Layanan</div>
				<div class="unimenav kanan"><i class="fa fa-suitcase"></i> Fasilitas</div>
				<div class="unimenav kanan"><i class="fa fa-mortar-board"></i> Akademik</div>
				<div class="unimenav kanan"><i class="fa fa-bell"></i> Fakultas</div>
				<div class="unimenav kanan"><i class="fa fa-sitemap"></i> Organisasi</div>
				<div class="unimenav kanan"><i class="fa fa-university"></i> Tentang UNIDAYAN</div>
			</div>
			<div class="sambungfloat"></div>
		</div>
	</div>
	<header class="bgheader">
		<div class="mainbox">
			<div class="col-md-1 unipd">
				<div class="unidayanbrand">
					<img class="brandsize" src="<?php echo base_url('asset/img/unidayanbrand2.png'); ?>" width="100%" alt="Unidayan" title="Home"></div>
				</div>
			<div class="col-md-8 unipd">
				<h4 class="taglineuni"><?php echo $taglineuni; ?>.</h4>
				<h1 class="unibrand bbrand"><?php echo $title; ?></h1>
				<nav class="unimenavbox">
					<div class="unimenavu">Berita</div>
					<div class="unimenavu">Sambutan Rektor</div>
					<div class="unimenavu">Agenda</div>
					<div class="unimenavu">Lembaga</div>
					<div class="unimenavu">Dosen</div>
					<div class="unimenavu">Kemahasiswaan</div>
					<div class="unimenavu">Kontak Universitas</div>
					<div class="sambungfloat"></div>
				</nav>
			</div>
			<div class="col-md-3 unipd bgloginav">
				<h4 class="mainlbl">Login Mahasiswa / Dosen</h4>
				<form method="#" action="post">
					<div class="input-group input-group-sm bts-bwh">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="useername" placeholder="Username">
					</div>
					<div class="input-group input-group-sm bts-bwh">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					<a href="#" class="unibtn">login</a>
				</form>
				<div class="sambungfloat"></div>
			</div>
			<div class="sambungfloat"></div>
		</div>
	</header>
	<div class="mainbox bts-ats">
		<?php $this->load->view($page); ?>
	</div>
	<footer class="unifooter">
		<div class="mainbox">
			<div class="unirow">
				<div class="col-md-4 unipd">
					<div class="bixbox2">
						<div class="lblttlbox ftrttl"><i class="fa fa-user"></i> Sambutan Rektor UNIDAYAN</div>
						<div class="media">
							<div class="media-left media-top">
								<a href="#"><img class="media-object" src="<?php echo base_url('asset/img/userimage/rektor.png'); ?>" alt="Rektor Unidayan"></a>
							</div>
							<div class="media-body">
								<h4 class="media-heading">Sambutan Rektor UNIDAYAN</h4>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in ...
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2 unipd">
					<h4 class="lblttldefault">FACULTY</h4>
					<div class="isidefault">Law</div>
					<div class="isidefault">Economics and Business</div>
					<div class="isidefault">Administration Science</div>
					<div class="isidefault">Agriculture</div>
					<div class="isidefault">Animal Husbandry</div>
					<div class="isidefault">Engineering</div>
					<div class="isidefault">Medical</div>
					<div class="isidefault">Fishery and Marine Sciences</div>
					<div class="isidefault">Mathematics and Natural Sciences</div>
					<div class="isidefault">Agriculture Technology</div>
					<div class="isidefault">Social and Political Sciences</div>
					<div class="isidefault">Cultural Studies</div>
					<div class="isidefault">Veterinary Medicine</div>
				</div>
				<div class="col-md-2 unipd">
					<h4 class="lblttldefault">INSTITUTIONS</h4>
					<div class="isidefault">The Center of Quality Assurance (PJM)</div>
					<div class="isidefault">Economics and Business</div>
					<div class="isidefault">The Center of Biological Sciences Lab (LSIH)</div>
					<div class="isidefault">Bioscience Lab</div>
					<div class="isidefault">Education Research and Development (LP3)</div>
					<div class="isidefault">Community Research and Services (LPPM)</div>
					<div class="isidefault">International Publication Enhancement of Lecturers Scientific Works (PPIKID)</div>
					<div class="isidefault">UB Library</div>
				</div>
				<div class="col-md-2 unipd">
					<h4 class="lblttldefault">UKM</h4>
					<div class="isidefault">Mapala</div>
					<div class="isidefault">Enggine robotic</div>
					<div class="isidefault">Tim Bantuan Medis (TBM)</div>
					<div class="isidefault">Creograpf of Unidayan</div>
					<div class="isidefault">Cross Ball teknik</div>
				</div>
				<div class="sambungfloat"></div>
			</div>			
		</div>
		<div class="unicopy">
			<div class="mainbox">
				<div class="kiri">Copyright © 2015 <?php echo $title; ?></div>
				<div class="kanan"></div>
				<div class="sambungfloat"></div>
			</div>
		</div>
	</footer>
</body>
</html>