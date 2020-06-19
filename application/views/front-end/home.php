<main>
	<section class="jumbotron text-center" style="background-image: url(https://assets.kpmg/content/dam/kpmg/xx/images/2020/04/spherical-ball-of-connected-dots-blue-background.jpg/jcr:content/renditions/cq5dam.web.1400.350.jpg)">
		<div class="container mt-5">
			<h1>SH-Cov19</h1>
			<small>SH (Stay at Home) | COVID-19</small>
			<br>
			<br>
			<p>Website SH-Cov19 merupakan sebuah website untuk memberikan informasi mengenai virus Corona (Covid-19) di Negara Indonesia. Informasi yang diberikan meliputi : jumlah pasien positif, jumlah pasien sembuh, dan jumlah pasien meninggal. Data tersebut akan ter-update setiap harinya. Terima kasih.
			</p>
		</div>
	</section>
	<div class="pasien py-4 bg-light">
		<div class="container">
			<div class="alert alert-primary col-md-3" role="alert">
				Selamat datang, user...
				<i class="fa fa-smile-o" aria-hidden="true"></i>
			</div>
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


			</div>
			<hr>

			<div class="row">
				<div class="col-md-12 bg-light">
					<h2 class="mb-2">Tentang Kami</h2>
					<p>&emsp; Website SH-Cov19 untuk tugas besar mata kuliah Pemrograman Web 2. Dengan dosen Bapak Yono Cahyono. Website ini dibuat dengan menggunakan API <i>(Application Programming Interface)</i> dan menggunakan database MySQL.</p>
					<li>Berikut adalah link website penyedia API Covid-19 di Indonesia : <a href="https://github.com/mathdroid/covid-19-api" target="_blank"><i class="fab fa-github"></i> Github</a></li>
					<li>Dibuat menggunakan framework PHP dan CSS, yaitu Codeigniter dan Bootstrap.</li>
					<li>Full Responsive. Sangat mudah dilihat melalui perangkat mobile.</li>
					<br>
					<p>Anggota kelompok kami, sesuai Nama & NIM yang sudah ada di dalam footer ya pak. Terima kasih... <i class="far fa-thumbs-up"></i></p>

				</div>
			</div>
		</div>
		<hr>