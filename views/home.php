<!-- Content awal  -->
 
<!-- <Home> -->

<div class="home">
    <div class="content">
        <h5>Welcome To Sumatera Utara</h5>
        <h1>Daerah <span class="changecontent"></span></h1>
        <p>Temukan keindahan alam dan warisan budaya yang kaya di Sumatera Utara.  <br>  Dari pemandangan alam yang menakjubkan hingga tradisi lokal yang hidup, ada sesuatu untuk setiap pelancong.</p>
        <a href="https://wa.me/6289521301996">Hubungi Sekarang</a>
    </div>
</div>

 <!-- Packages Start -->
 <section class="packages" id="packages">
      <div class="container">
         <div class="main-txt">
            <h1><span>P</span>aket <span>W</span>isata</h1>
         </div>
         
         <div class="row" style="margin-top: 30px;">
         <?php 
        $n=1;
        $query = mysqli_query($con, "SELECT * FROM wisata ORDER BY idwisata DESC LIMIT 6") or die(mysqli_error($con));
        while ($row = mysqli_fetch_array($query)):
        ?>
            <div class="col-md-4 py-3 py-md-0 mb-4">
               <div class="card">
               <img src="<?=base_url();?>uploads/wisata/cover/<?=$row['cover'];?>" alt="" style="height: 257px;">
                  <div class="card-body">
                     <h3><?= $row['nama']; ?></h3>
                     <p><?= $row['alamat']; ?></p>
                     <!-- <div class="start mb-3">
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star checked"></i>
                        <i class="fa-solid fa-star "></i>
                     </div> -->
                     <div class="mb-4">
                     <h6>Harga : <?= money($row['harga']); ?><strong></strong></h6>
                     </div>
                     <button class="btn btn-warning text-white" data-bs-toggle="modal"
                     data-bs-target="#galeriModal<?= $row['idwisata']; ?>">Lebih Detail</button>
                     <button class="btn btn-green text-white" onclick="window.location.href='https://wa.me/<?= $row['no_wa']; ?>';">
                        <i class="fa-brands fa-whatsapp"></i> Whatsapp
                     </button>

                      <!-- Galeri Modal -->
                    <!-- Galeri Modal -->
<div class="modal fade" id="galeriModal<?= $row['idwisata']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Galeri Wisata <?= $row['nama']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="d-flex justify-content-center mb-4">
               <iframe src="<?= $row['linkyt']; ?>" width="960" height="515"  frameborder="0"></iframe>
               </div>
               <div class="main-txt">
                  <h1><?= $row['nama']; ?></h1>
               </div>
               <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card cards">
                    <div class="card-header bg-warning text-white fs-5 fw-bold">
                        Informasi
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Alamat</h5>
                        <p class="card-text">
                        <?= $row['alamat']; ?>
                        </p>
                        <h5 class="card-title">Harga</h5>
                        <p class="card-text">
                        <?= money($row['harga']); ?>
                        </p>
                        <h5 class="card-title">Nomor Whatsapp</h5>
                        <p class="card-text">
                        + <?= $row['no_wa']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-txt mb-4">
                  <h1>Galeri</h1>
               </div>
                <?php 
                $id = $row['idwisata'];
                $query2 = mysqli_query($con, "SELECT * FROM wisata_galery WHERE wisata_id=$id ORDER BY idwisata_galery DESC LIMIT 6") or die(mysqli_error($con));
                if (mysqli_num_rows($query2) > 0): ?>
                    <div class="row">
                        <?php while ($galeri = mysqli_fetch_array($query2)): ?>
                            <div class="col-md-4">
                                <div class="card cards mb-3">
                                    <?php 
                                    $path = base_url()."uploads/wisata/gallery/".$galeri['file'];
                                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                                    if ($ext == "jpg" || $ext == "png" || $ext == "jpeg"): ?>
                                        <img src="<?= base_url(); ?>uploads/wisata/gallery/<?= $galeri['file']; ?>" alt="File" class=" rounded" style="height: 300px;">
                                    <?php endif; ?>
                                    <!-- <div class="card-body">
                                        <h5 class="card-title"><?= $galeri['keterangan']; ?></h5>
                                    </div> -->
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="not-available" style="top: 210%">
                    <h1 class="text-center">Tidak Ada Galeri website</h1>
                    <div class="d-flex justify-content-center">
                    <img src="assets/img/noimage.png">
                    </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal"><i data-feather="x"></i> Tutup</button>
            </div>
        </div>
    </div>
</div>

                  </div>
               </div>
            </div>
            <?php 
        endwhile;
        ?>
         </div>
      </div>
   </section>
   <div class="d-flex justify-content-center">
   <a href="?detail-wisata" class="btn btn-warning text-white"> Cek Selengkapnya </a>
   </div>
   <!-- Packages End -->

 <!-- Section Service Start -->
 <section class="services" id="services">
   <div class="container">
      <div class="main-txt" style="padding-top: 10px;">
         <h1><span>L</span>ayanan</h1>
      </div>
      <div class="row" style="margin-top: 30px;">
         <?php 
            $n = 1;
            $query = mysqli_query($con, "SELECT * FROM services ORDER BY service_id DESC") or die(mysqli_error($con));
            while ($row = mysqli_fetch_array($query)):
         ?>
         <div class="col-md-4 py-3 py-md-0 mb-4">
            <div class="card cards">
            <i class="<?php echo $row['service_icon']; ?>"></i>
               <div class="card-body text-center">
                  <!-- Use data from the $row array to populate the card -->
                  <h3><?php echo $row['service_name']; ?></h3>
                  <p><?php echo $row['service_description']; ?></p>
               </div>
            </div>
         </div>
         <?php endwhile; // End of while loop ?>
      </div>
   </div>
</section>

<!-- Section Service End -->


   <!-- section Gallery start -->
<section class="gallery" id="gallery">
   <div class="container">
      <div class="main-txt" style="padding-top: 10px;">
         <h1><span>G</span>allery</h1>
      </div>
      <div class="row" style="margin-top: 30px;">
         <?php
         // Fetch gallery images from the database
         $query = mysqli_query($con, "SELECT * FROM wisata_galery ORDER BY idwisata_galery DESC LIMIT 6") or die(mysqli_error($con));
         if (mysqli_num_rows($query) > 0):
            while ($galeri = mysqli_fetch_array($query)):
               $path = base_url()."uploads/wisata/gallery/".$galeri['file'];
               $ext = pathinfo($path, PATHINFO_EXTENSION);
               if ($ext == "jpg" || $ext == "png" || $ext == "jpeg"):
         ?>
            <div class="col-md-4 py-3 py-md-0 mb-4">
               <div class="card cards">
                  <img src="<?= $path; ?>" alt="<?= $galeri['keterangan']; ?>" height="230px">
               </div>
            </div>
         <?php
               endif;
            endwhile;
         else:
         ?>
            <div class="col-12">
               <div class="not-available text-center">
                  <h1>Tidak Ada Galeri</h1>
                  <img src="assets/img/noimage.png" alt="No Image">
               </div>
            </div>
         <?php endif; ?>
      </div>
   </div>
</section>
<!-- section Gallery end -->
<div class="d-flex justify-content-center mt-5">
   <a href="?detail-galeri" class="btn btn-warning text-white mb-5"> Cek Selengkapnya </a>
   </div>
   <!-- section Gallary end -->


   <!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Temukan keindahan alam dan warisan budaya yang kaya di Sumatera Utara.
                        Dari pemandangan alam yang menakjubkan hingga tradisi lokal yang hidup, ada sesuatu untuk setiap pelancong.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-github"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="?home"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="?daftar-harga"><i class="fa fa-caret-right" aria-hidden="true"></i>Daftar Harga</a></li>
											<li><a href="?daftar-servis"><i class="fa fa-caret-right" aria-hidden="true"></i>Layanan</a></li>
											<li><a href="?detail-wisata"><i class="fa fa-caret-right" aria-hidden="true"></i>Paket Wisata</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="?detail-team"><i class="fa fa-caret-right" aria-hidden="true"></i>Team</a></li>
											<li><a href="?detail-about"><i class="fa fa-caret-right" aria-hidden="true"></i>About</a></li>
                                 <li><a href="?detail-galeri"><i class="fa fa-caret-right" aria-hidden="true"></i>Galeri</a></li>	
											<li><a href="login.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Wisata Telah berkomitmen untuk menjadi sekelompok yang aktif dan disipilin</p>
								<ul class="time-sidual">
									<li class="day">Monday - Friday <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>Yuk Mari di Subscride dan ikuti terus tentang wisata</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
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
								<p>© Copyright 2024  |  All Rights Reserved by <a href="/" target="_blank">fulalotio@gmail.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
