<div class="pasien py-4 bg-light">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<h5 class="text-center mt-2">Pasien Positif</h5>

					<i class="far fa-3x fa-frown-open text-center mb-3 mt-3"></i>
					<h2 class="text-center"><?= $nasional['perawatan']; ?></h2>
					<div class="card-body">
						<h6 class="card-text text-center">Jumlah pasien positif hingga saat ini pertanggal <?= date('d-m-Y'); ?>.</h6>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<h5 class="text-center mt-2">Pasien Sembuh</h5>
					<i class="far fa-3x fa-smile text-center mb-3 mt-3"></i>
					<h2 class="text-center"><?= $nasional['sembuh']; ?></h2>
					<div class="card-body">
						<h6 class="card-text text-center">Jumlah pasien sembuh hingga saat ini pertanggal <?= date('d-m-Y'); ?>.</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
					<h5 class="text-center mt-2">Pasien Meninggal</h5>
					<i class="far fa-3x fa-sad-tear text-center mb-3 mt-3"></i>
					<h2 class="text-center"><?= $nasional['meninggal']; ?></h2>
					<div class="card-body">
						<h6 class="card-text text-center">Jumlah pasien meninggal hingga saat ini pertanggal <?= date('d-m-Y'); ?>.</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-16">
			<div class="card mb-4 shadow-sm">
				<h5 class="text-center mt-2">Total Kasus </h5>
				<i class="fas fa-3x fa-poll text-center mb-3 mt-3"></i>
				<h2 class="text-center"><?= $nasional['jumlahKasus']; ?></h2>
				<div class="card-body">
					<h6 class="card-text text-center">Update : Tanggal <?= date('d-m-Y'); ?>.</h6>
				</div>
			</div>
		</div>
		<hr>
	</div>


	<div id="artikel" class="artikel py-3 bg-light">
		<div class="container">
			<h2>Artikel</h2>
			<div class="row mb-2">
				<div class="col-md-6">
					<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<strong class="d-inline-block mb-2 text-primary">Indonesia</strong>
							<h3 class="mb-0">a</h3>
							<center>
								<img src="<?= base_url('assets/img/arti3.jpeg'); ?>" class="bd-img mt-2 center" width="350" height="227">
							</center>
							<br>
							<!-- <div class="mb-1 text-muted">Nov 12</div> -->
							<p class="card-text mb-auto">Pamulang - Jumlah pasien positif corona semakin hari semakin menambah...</p>
							<a href="#" class="stretched-link">Selengkapnya...</a>
						</div>
						<div class="col-auto d-none d-lg-block">
						</div>
					</div>
				</div>
				<div class=" col-md-6">
					<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<strong class="d-inline-block mb-2 text-primary">Indonesia</strong>
							<h3 class="mb-0">Pasien positif corona di daerah Jawa Timur semakin bertambah</h3>
							<center>
								<img src="<?= base_url('assets/img/arti2.jpeg'); ?>" class="bd-img mt-2 center" width="350" height="227">
							</center>
							<br>
							<!-- <div class="mb-1 text-muted">Nov 12</div> -->
							<p class="card-text mb-auto">Pamulang - Pasien positif corona di daerah Jawa Timur bertambah.</p>
							<a href="#" class="stretched-link">Selengkapnya...</a>
						</div>
						<div class="col-auto d-none d-lg-block">
						</div>
					</div>
				</div>
			</div>

			<hr>
			<div id="protokol" class="container protokol">
				<h2>Protokol Kesehatan</h2>
				<div class="row">
					<div class="col-lg-4 mt-4">
						<i class="fas fa-4x fa-hands-wash"></i>
						<h2>Cuci Tangan</h2>
						<p>Jangan lupa untuk sering mencuci tangan menggunakan sabun dan air mengalir. Jika berpergian, jangan lupa membawa hand-sanitizer ya..</p>
					</div>
					<div class="col-lg-4 mt-4">
						<i class="fas fa-4x fa-people-arrows"></i>
						<h2>Jaga Jarak</h2>
						<p>Menjaga jarak dengan orang sekitar minimal 1 meter. Hindari kerumunan.</p>
					</div>
					<div class="col-lg-4 mt-4">
						<i class="fas fa-4x fa-head-side-mask"></i>
						<h2>Gunakan Masker</h2>
						<p>Jika ingin berpergian, gunakanlah masker. Gunakan masker medis hanya untuk tenaga medis dan gunakan masker kain untuk masyarakat umum yang bisa di cuci kembali.</p>
					</div>
					<div class="col-lg-4 mt-4">
						<i class="fas fa-4x fa-house-user"></i>
						<h2>Stay at Home</h2>
						<p>Jika tidak ada kepentingan yang sangat mendesak, berdiam dirumah saja. Karena dapat membantu tenaga medis agar mereka tidak kewalahan.</p>
					</div>
					<div class="col-lg-4 mt-4">
						<i class="fas fa-4x fa-shield-virus"></i>
						<h2>Olahraga</h2>
						<p>Berolahraga dan mengkonsumsi makanan sehat dapat menambah imun pada tubuh kita. Dan jangan lupa untuk selalu berjemur dibawah matahari terbit dari pukul 09.00 s/d 10.00 pagi.</p>
					</div>
					<div class="col-lg-4 mt-4">
						<i class="fas fa-4x fa-viruses"></i>
						<h2>Mengalami Gejala Covid-19</h2>
						<p>Jika mengalami gejala covid-19. Segera pergi ke klinik/rumah sakit terdekat, guna melakukan rapid test atau swab test.</p>
					</div>

					<hr>