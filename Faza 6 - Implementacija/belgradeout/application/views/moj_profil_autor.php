
    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!-- TEXT BASED LOGO -->
            <!--a class="navbar-brand" href="#">Belgrade<span>Out</span></a> -->
            
            <!-- IMG BASED LOGO  -->
            <a class="navbar-brand" href='<?php echo base_url();?>IndexController'><img src="img/logo.png" alt="logo"></a> 
			
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href='<?php echo base_url();?>IndexController'>Početna</a></li> 
              <li><a href="<?php echo base_url();?>LogoutController">Odjavi se</a></li>
			  
            </ul>           
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
					<h2 class="wow fadeInLeftBig">Moj profil</h2>
					<div class="team_img">
						  <img src="img/team-1.jpg" alt="img">
					</div>
					<p>	1. Korisničko ime:  <?php echo "$UserName"; ?> <br>
						2. Ime i prezime:  <?php echo "$ImePrezime"; ?> <br>
						3. Email adresa:  <?php echo "$email"; ?><br>
						4. Naziv objekta:  <?php echo "$Naziv"; ?><br>
						5. Adresa objekta: <?php echo "$Adresa"; ?> <br>
						6. Radno vreme objekta:<?php echo "$radnoVreme"; ?> <br>
						7. Kapacitet objekta: <?php echo "$kapacitet"; ?> <br>
						8. Tip objekta: <?php echo "$TipObjekta"; ?> <br>
                                                9. Telefon: <?php echo "$telefon"; ?> <br>
						10. Prosečna ocena:  <?php echo "$email"; ?><br><br>
						Kratak opis objekta: <?php echo "$opis"; ?>
					</p>
					<div>
						<input class="submit_btn" type="button" value="Izmeni podatke" onclick="location.href='<?php echo base_url();?>IzmeniProfilAutorController'">
					</div>
					
				</div>
            </div>
          </div>
        </div>       
      </div>
    </section>
	
 
    <!--=========== BEGIN BLOG SECTION ================-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Moji događaji</h2>
              <p>Ovde se nalazi spisak svih događaja u ovom objektu:</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGIN BLOG SLIDER -->
              <div class="blog_slider">
                  
                     <?php for ($i = 0; $i < $br; $i++) { ?>
                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3><?php echo $naz = $dogadjaji[$i]->Naziv;?> - <?php      $this->load->model('MojProfilAutorModel'); $status = $this->MojProfilAutorModel->statusDogadjaja($dogadjaji[$i]->IdDogadjaj);
                                                             if($status == 0) echo  "pending";
                                                              else echo "odobren";?>  </h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i><?php echo $this->session->userdata('username');   ?></a>
                      <span><i class="fa fa-calendar"></i><?php echo $naz = $dogadjaji[$i]->trajanje;   ?></span>
                      <a href="#"><i class="fa fa-tags"></i><?php echo $naz = $dogadjaji[$i]->TipDogadjaja;   ?></a>
                    </div>
                    <p><?php echo $naz = $dogadjaji[$i]->Opis;   ?></p>
                    <a href="<?php echo base_url() ?>/DogadjajAutorController/Index/<?php echo $dogadjaji[$i]->IdDogadjaj ?>" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
					<a href= "#" class="read_more">Izmeni događaj <i class="fa fa-angle-double-right"></i></a>
					<a href="<?php echo base_url() ?>/DogadjajAutorController/ObrisiDogadjaj/<?php echo $dogadjaji[$i]->IdDogadjaj ?>" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>
					                   
                  </div>
                </div>

               <?php } ?>

    		 </div>
            </div>
			<p>	
				<input class="submit_btn" type="button" value="Dodaj novi događaj" onclick="location.href='<?php echo base_url();?>KreiranjeDogadjajaController'">				
			</p>
          </div>
        </div>
      </div>
         </section>
	<!--=========== BEGIN COMMENTS SECTION ================-->
	<section id="clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Komentari</h2>
              <p>	
				<input class="submit_btn" type="button" value="Obriši komentare">				
				</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="clients_content">
              <div class="row">
                <!-- BEGIN CLIENTS SLIDER -->
                <div class="clients_slider">
                  <!-- BEGIN SINGLE CLIENT SLIDE#1 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#2 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#3 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#4 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                   <!-- BEGIN SINGLE CLIENT SLIDE#5 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#6 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                     <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#7 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#8 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                     <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<!--=========== END COMMENTS SECTION ================-->
	