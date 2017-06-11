
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
            <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>img/logo.png" alt="logo"></a> 
			
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Početna</a></li>
              <li><a href="#about">Pretraga</a></li>
			  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			  <li><a href="<?php echo base_url();?>MojProfilRegistrovaniKorisnikController">&nbsp;&nbsp;&nbsp;Moj profil</a></li>
			  <li><a href="<?php echo base_url();?>LogoutController">Odjavi se</a></li>
            </ul>           
          </div>
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

      <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div id="slides">
          <ul class="slides-container">

            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="<?php echo base_url();?>img/slide1.jpg" alt="img">
              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Ovde stoji nekoliko aktuelnih događaja</h2>
                <p>Kratak opis istih i slika u pozadini, a ispod je dugme za link do tog događaja</p>
                <a href="#" class="slider_btn">Vidi događaj</a>              
              </div>
            </li>

            <!-- THE SECOND SLIDE-->
            <li>
              <!-- SECOND SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- SECOND SLIDE MAIN IMAGE -->
              <img src="<?php echo base_url();?>img/slide2.jpg" alt="img">
              <!-- SECOND SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Ovde stoji nekoliko aktuelnih događaja</h2>
                <p>Kratak opis istih i slika u pozadini, a ispod je dugme za link do tog događaja</p>
                <a href="#" class="slider_btn">Vidi događaj</a>
              </div>
            </li>

            <!-- THE THIRD SLIDE-->
            <li>
              <!-- THIRD SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- THIRD SLIDE MAIN IMAGE -->
              <img src="<?php echo base_url();?>img/slide3.jpg" alt="img">
              <!-- THIRD SLIDE CAPTION-->
              <div class="slider_caption">
                <h2>Ovde stoji nekoliko aktuelnih događaja</h2>
                <p>Kratak opis istih i slika u pozadini, a ispod je dugme za link do tog događaja</p>
                <a href="#" class="slider_btn">Vidi događaj</a>                 
              </div>
            </li>
          </ul>
          <!-- BEGIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Prethodni</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Sledeći</strong></h3>
            </a>
          </nav>       
        </div>
        <!-- END SLIDER-->          
      </div>
      <!-- END SLIDER AREA -->
    </header>
    <!--=========== End HEADER SECTION ================--> 


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">Pretraga događaja</h2>
                <p>Molimo odaberite parametre za pretragu događaja:</p>
                                <?php echo form_open('IndexRegistrovaniKorisnikController/Search'); ?>
                                <form>
				<p>Tip prostora:</p>
				<div> 
					<input list="objekat" name="objekat">
                                        <datalist id="objekat">  
                                                <option value="Svi">Svi</option>
						<option value="Klub">Klub</option>
						<option value="Kafana">Kafana</option>
					</datalist>
				</div>
				<p>Tip događaja:</p>
				<div> 
					<input list="dogadjaj" name="tip">
                                        <datalist id="dogadjaj">  
                                                <option value="Svi">Svi</option>
						<option value="Svirka">Svirka</option>
						<option value="Zurka">Žurka</option>
					</datalist>
				</div>
				<p>Muzički žanr:</p>
				<div> 
					<input list="zanr" name="zanr">
                                        <datalist id="zanr">  
                                                <option value="Svi">Svi</option>
						<option value="Rock">Rock</option>
						<option value="Pop">Pop</option>
					</datalist>
				</div>
				<p>Trenutna adresa: </p>
				<div>
					<input type="text" placeholder=" Adresa" name="Adresa">
				</div>
				<p>Udaljenost: (km) </p>
				<div>
					<input type="number" name="Udaljenost" min="0" max="10">
				</div>
				<p>Prosečna ocena: </p>
				<div>
					<input type="number" name="Ocena" min="1" max="5">
				</div>
				<div>
					<input class="submit_btn" type="submit" value="Pretraži">
					<input class="submit_btn" type="reset" value="Obriši">
				</div>
                                </form>
                                <?php echo form_close(); ?> 
			  </div>

              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
<!--                         START SINGLE FEATURED I-->       
                        
                        <?php
                       $br = count($dogadjaji);
                       if ($br > 9) { $br = 9; }
                       $number = "One";
                       for ($i = 0; $i < $br; $i++){ ?>
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $number ?>">
                                 <span class="fa fa-check-square-o"></span>
                                     <?php echo $dogadjaji[$i]->Naziv ?>  <?php echo $dogadjaji[$i]->Datum ?> 
                              </a>
                            </h4>
                          </div>
                          <div id="collapse<?php echo $number ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                             <?php echo $dogadjaji[$i]->Opis ?> <br> <br>
                             <strong> <a a href="<?php echo base_url() ?>/DogadjajGostRegistrovaniKorisnikController/Index/<?php echo $dogadjaji[$i]->IdDogadjaj ?>"> Otvori dogadjaj </a> </strong>
                            </div>
                          </div>
                        </div>
                        <?php if ($i == 0) { $number= "Two"; }
                        else if ($i == 1) { $number= "Three"; }
                        else if ($i == 2) { $number= "Four"; }
                        else if ($i == 3) { $number= "Five"; }
                        else if ($i == 4) { $number= "Six"; }
                        else if ($i == 5) { $number= "Seven"; }
                        else if ($i == 6) { $number= "Eight"; }
                        else if ($i == 7) { $number= "Nine"; }
                        } ?> 

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact_map">
						<div id="map_canvas"></div>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
    </section>
	
    <!--=========== END ABOUT SECTION ================-->

    <!--=========== BEGIN WORKS SECTION ================-->
    <section id="works">
      <!-- BEGIN MILESTONE WORSK SECTION -->
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="counter_section">
            <!-- SKILLS COUNTER OVERLAY -->
            <div class="slider_overlay"></div>
            <div class="container">               
              <div class="counter_area">
               <div class="heading">
                  <h3 class="wow fadeInLeft">Neke informacije</h3>             
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-users fa-2x"></i>
                    <h2 class="timer count-title" id="count-number" data-to="940" data-speed="1500">134</h2>
                     <p class="count-text ">Korisnika</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-tasks fa-2x"></i>
                    <h2 class="timer count-title" id="count-number2" data-to="1750" data-speed="1500">435</h2>
                     <p class="count-text ">Pregleda</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                   <div class="counter wow fadeInUp">
                    <i class="fa fa-coffee fa-2x"></i>
                    <h2 class="timer count-title" id="count-number3" data-to="300" data-speed="1500">112</h2>
                     <p class="count-text ">Objekata</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-bullhorn fa-2x"></i>
                    <h2 class="timer count-title" id="count-number4" data-to="875" data-speed="1500">547</h2>
                     <p class="count-text ">Događaja</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END MILESTONE WORSK SECTION -->

    </section>

    <!--=========== BEGIN CONTACT FEATURE SECTION ================-->
    <section id="contactFeature">
      
      <div class="slider_overlay"></div>
      <div class="row">
        <div class="col-lg-12 col-md-12">       
          <div class="container">               
              <div class="contact_feature">
            <!-- BEGIN CALL US FEATURE -->
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-phone"></i>
                <h4>Pozovite nas</h4>
                <p>+381641157007</p>                
              </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-envelope-o"></i>
                <h4>Email Adresa</h4>
                <p>egressus@gmail.com</p>
              </div>
            </div>
           
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-map-marker"></i>
                <h4>Lokacija</h4>
                <p>Bulevar kralja Aleksandra 73</p>
              </div>
            </div>
           
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="single_contact_feaured wow fadeInUp">
                <i class="fa fa-clock-o"></i>
                <h4>Radno vreme</h4>
                <p>00:00-24:00h</p>
              </div>
            </div>
          </div>
          </div>         
        </div>
      </div>
    </section>
    <!--=========== END CONTACT FEATURE SECTION ================-->
