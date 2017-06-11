
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
            <a class="navbar-brand" href="<?php echo base_url();?>IndexController"><img src="../../../img/logo.png" alt="logo"></a> 
			
                   
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
					<h2 class="wow fadeInLeftBig"> <?php echo $Naziv ?></h2>
					<div class="team_img">
						  <img src="../../../img/<?php echo $Slika ?>" alt="img">
					</div>
                                        <p>	<strong> Naziv objekta: </strong> <?php echo $Naziv ?> <br>
						<strong> Adresa objekta: </strong> <?php echo $Adresa ?> <br>
						<strong> Radno vreme objekta: </strong> <?php echo $RadnoVreme ?> <br>
						<strong> Kapacitet objekta: </strong> <?php echo $Kapacitet ?> <br>
						<strong> Tip objekta: </strong> <?php echo $TipObjekta ?> <br>
						<strong> Prosečna ocena: </strong> <?php echo $Ocena ?> (od <?php echo $BrGlasova ?> glasova)<br><br>
						<strong> Kratak opis objekta: </strong> <?php echo $Opis ?>
					</p>
					<p>	
						<br>
						Oceni objekat: &nbsp;&nbsp;&nbsp;
                                                <?php 
                                                $Base= base_url();
                                                $Base .= 'ObjekatRegistrovaniKorisnikController/Index/';
                                                $Base .= $IdObjekta;
                                                $Jedan = $Base ."/1";
                                                $Dva = $Base ."/2";
                                                $Tri = $Base ."/3";
                                                $Cetiri = $Base ."/4";
                                                $Pet = $Base ."/5";
                                                ?>
                                                <input class="submit_btn" type="button" value="1" onclick="location.href='<?php echo $Jedan?>'">
                                                <input class="submit_btn" type="button" value="2" onclick="location.href='<?php echo $Dva?>'">
                                                <input class="submit_btn" type="button" value="3" onclick="location.href='<?php echo $Tri?>'">
                                                <input class="submit_btn" type="button" value="4" onclick="location.href='<?php echo $Cetiri?>'">
                                                <input class="submit_btn" type="button" value="5" onclick="location.href='<?php echo $Pet?>'">
					</p>
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
              <h2 class="wow fadeInLeftBig">Događaji u objektu</h2>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGIN BLOG SLIDER -->
              <div class="blog_slider">
<!--                 BEGIN SINGLE BLOG -->
                <?php
                       $br = count($dogadjaji);
                       for ($i = 0; $i < $br; $i++){ 
                                ?>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single_post wow fadeInUp">
                                    <div class="blog_img">
                                        <img src="../../../img/<?php echo $dogadjaji[$i]->Slika ?>" alt="img">
                                    </div>
                                    <h3> <?php echo $dogadjaji[$i]->Naziv ?> </h3>
                                    <div class="post_commentbox">
                                        <span><i class="fa fa-calendar"></i> <?php echo $dogadjaji[$i]->trajanje ?></span>
                                        <a href=""><i class="fa fa-tags"></i><?php echo $dogadjaji[$i]->TipDogadjaja ?></a>
                                    </div>
                                    <p><?php echo $dogadjaji[$i]->Opis ?></p>
                                    <a href="<?php echo base_url() ?>/DogadjajGostRegistrovaniKorisnikController/Index/<?php echo $dogadjaji[$i]->IdDogadjaj ?>" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>			                   
                                </div>
                            </div>
                <?php } ?>  
              </div>
            </div>
			
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->

	<!--=========== BEGIN COMMENTS SECTION ================-->
	<section id="clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Komentari</h2>
                                <?php $temp = 'ObjekatRegistrovaniKorisnikController/DodajKomentar/'; $temp .= $IdObjekta; ?>
              
                                <?php echo form_open($temp); ?>
                                <form>
                                    <p> <textarea class="form-control" cols="30" rows="5" placeholder="Vaš komentar.." required name="komentar"></textarea> </p>
					
					<input class="submit_btn" type="submit" value="Dodaj komentar">				
                                </form> 
                                <?php echo form_close(); ?> 
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="clients_content">
              <div class="row">
                <!-- BEGIN CLIENTS SLIDER -->
                <div class="clients_slider">
<!--                   BEGIN SINGLE CLIENT SLIDE#1 
-->                

                 <?php
                       $br = count($komentari);
                       for ($i = 0; $i < $br; $i++){ 
                                ?> 
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"<?php echo $komentari[$i]->Tekst ?>" <br>- <?php echo $komentari[$i]->KorisnickoIme ?></p>
                    </div>
                  </div>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<!--=========== END COMMENTS SECTION ================-->
