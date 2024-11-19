<?php $locations = $data['lokasi']?>
		<!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?=baseurl?>img/maskot.png')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Tsunami<span> Coordination</span> System</h1>
									<p>Sistem Informasi Manajemen Bencana Tsunami</p>
									<div class="button">
										<a href="#kontak" class="btn">Kontak Darurat</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?=baseurl?>img/2.png')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Apa itu<span> Tsunami?</span></h1>
									<p>  sebuah ombak yang terjadi setelah sebuah gempa bumi, gempa laut, gunung berapi meletus, atau hantaman meteor di laut.</p>
									<div class="button">
										<a href="<?=baseurl?>home/definisi" class="btn">Pelajari Lebih lanjut</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('<?=baseurl?>img/7.png')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Berita <span>Tsunami</span> Terkini <br> BMKG: 54 Negara Berkomitmen untuk Kurangi Risiko dan Dampak Tsunami</h1>
									<div class="button">
										<a href="https://www.bmkg.go.id/press-release/?p=bmkg-54-negara-berkomitmen-untuk-kurangi-risiko-dan-dampak-tsunami&tag=&lang=ID" class="btn">Selengkapnya</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

		<!-- Start Feautes -->
		<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Data Tsunami Indonesia Terkini</h2>
							<p>Data Tsunami Indonesia tahun 2000-2018<br>Untuk informasi lebih detail klik ikon tsunami pada peta</p>
						</div>
					</div>
				</div>
                <div id='map'></div>
                    <script>
                    var locations = [
                   <?php foreach ($locations as $bencana) { ?>
                        ["<?=$bencana['Sumber']?>", <?=$bencana['latitude']?>, <?=$bencana['longitude']?>, "<?=$bencana['Tanggal']?>", "<?=$bencana['magnitudo']?>"],
                    <?php } ?>
                    ];

                    initializeMap('map', locations, [-0.7722370167997215, 113.8200279595692], 5);
                    </script>
			</div>
		</section>
		<!--/ End Feautes -->

		<!-- CONTACT US 1 -->
		<section id="kontak" class="contact-us section">
			<div class="container">
				<div class="col-lg-12">
						<div class="section-title">
							<h2>Kontak darurat</h2>
							<p>Kontak darurat yang dapat dihubungi ketika terjadi bencana tsunami</p>
						</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>BNPB</h3>
									<p>(021) 5101 1234 / 117 <br> bnpb.go.id</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>BMKG</h3>
									<p>(021) 6546315 / 6546316<br> bmkg.go.id</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>BASARNAS</h3>
									<p>115<br>basarnas.go.id</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
				<div class="contact-info">
					<div class="row">
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>POLRI</h3>
									<p>110</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>TNI</h3>
									<p>(021) 84595576</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
						<!-- single-info -->
						<div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>Kementrian Sosial</h3>
									<p>1500 171 <br> kemensos.go.id</p>
								</div>
							</div>
						</div>
						<!--/End single-info -->
					</div>
				</div>
			</div>

			
		</section>
		<!--/End CONTACT US 1 -->
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="single-footer">
								<h2>Informasi</h2>
								<p>Data yang dilampirkan bersumber dari BMKG</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024  |  All Rights Reserved by Tsunami Coordination System</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>