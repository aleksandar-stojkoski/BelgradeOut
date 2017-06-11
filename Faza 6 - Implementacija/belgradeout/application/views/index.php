<body> 
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><img src="<?php echo base_url(); ?>img/scroll_icon.png"></a>
    <!-- END SCROLL TOP BUTTON -->

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
            <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>img/logo.png" alt="logo"></a> 
			
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Početna</a></li>
              <li><a href="#about">Pretraga</a></li>
			  <li><a href="#contact">Kontakt</a></li>
			  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			  <li><a href="#subscribe">&nbsp;&nbsp;&nbsp;Prijava</a></li>
			  
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
              <img src="<?php echo base_url(); ?>img/slide1.jpg" alt="img">
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
              <img src="<?php echo base_url(); ?>img/slide2.jpg" alt="img">
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
              <img src="<?php echo base_url(); ?>img/slide3.jpg" alt="img">
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
				<p>Tip prostora:</p>
				<div> 
					<select>  
                                                <option name="Prostor" value="Svi">Svi</option>
						<option name="Prostor" value="Klub">Klub</option>
						<option name="Prostor" value="Kafana">Kafana</option>
					</select>
				</div>
				<p>Tip događaja:</p>
				<div> 
					<select>  
                                                <option name= "Tip" value="Svi">Svi</option>
						<option name= "Tip" value="Svirka">Svirka</option>
						<option name= "Tip" value="Žurka">Žurka</option>
					</select>
				</div>
				<p>Muzički žanr:</p>
				<div> 
					<select>  
                                                <option name="Žanr" value="Svi">Svi</option>
						<option name="Žanr" value="Rock">Rock</option>
						<option name="Žanr" value="Pop">Pop</option>
					</select>
				</div>
				<p>Trenutna adresa: </p>
				<div>
					<input type="text" placeholder=" Adresa">
				</div>
				<p>Udaljenost: (km) </p>
				<div>
					<input type="number" name="Udaljenost" min="0" max="10" placeholder="0">
				</div>
				<p>Prosečna ocena: </p>
				<div>
					<input type="number" name="Ocena" min="1" max="5" placeholder="5">
				</div>
                                <div>
					<input class="submit_btn" type="submit" value="Pretraži">
					<input class="submit_btn" type="reset" value="Obriši">
				</div>
			  </div>

              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                      
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
                    <h2 class="timer count-title" id="count-number" data-to="940" data-speed="1500">400</h2>
                     <p class="count-text ">Korisnika</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-tasks fa-2x"></i>
                    <h2 class="timer count-title" id="count-number2" data-to="1750" data-speed="1500">300</h2>
                     <p class="count-text ">Pregleda</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                   <div class="counter wow fadeInUp">
                    <i class="fa fa-coffee fa-2x"></i>
                    <h2 class="timer count-title" id="count-number3" data-to="300" data-speed="1500">200</h2>
                     <p class="count-text ">Objekata</p>
                  </div>
                </div>
                <!-- START SINGLE COUNTER-->
                <div class="col-lg-3 col-md-3 col-sm-3">                 
                  <div class="counter wow fadeInUp">
                    <i class="fa fa-bullhorn fa-2x"></i>
                    <h2 class="timer count-title" id="count-number4" data-to="875" data-speed="1500">100</h2>
                     <p class="count-text ">Pratilaca</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END MILESTONE WORSK SECTION -->

    </section>
    
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START CONTACT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Kontakt</h2>
              <p>Ovde pišemo šta se inače piše na kontakt stranici. Ispod ima kontakt forma za mail i ispod ovoga ima za broj telefona i te informacije.
			  </p>
            </div>
          </div>
        </div>       
        <div class="row">
          <!-- BEGIN CONTACT CONTENT -->
          <div class="contact_content">
            <!-- BEGIN CONTACT FORM -->
            <div class="col-lg-5 col-md-5 col-sm-5">
              <div class="contact_form">

                <!-- FOR CONTACT FORM MESSAGE -->
                <div id="form-messages"></div>

                <form>
                  <input class="form-control" type="text" placeholder="Ime">
                  <input class="form-control" type="email" placeholder="Email">
                  <input class="form-control" type="text" placeholder="Naslov">
                  <textarea class="form-control" cols="30" rows="10" placeholder="Vaša poruka.."></textarea>
                   <input class="submit_btn" type="submit" value="Pošalji">  
                </form>
              </div>
            </div>
                      
          </div>
        </div>      
      </div>             
    </section>
    <!--=========== END CONTACT SECTION ================-->

    
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

    
    <!--=========== BEGIN LOGIN SECTION ================-->
    <section id="subscribe">
      <div class="container ">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START LOGIN HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">PRIJAVI SE</h2>
              <p>Ovde se možete prijaviti na sistem ako ste već registrovani korisnik, a ako niste možete se registrovati. </p>
            </div>
            
			
			<!-- BEGIN LOGIN FORM -->	

            <?php echo form_open('LoginController','class="subscribe_form"');?>
                <div class="subscrive_group wow fadeInUp">
                    <input class="form-control subscribe_mail" name="username" type="text" placeholder="Unesite korisničko ime" required>
                    <br><br><br>
                    <input class="form-control subscribe_mail" name="pass" type="password" placeholder="Unesite lozinku" required>
                    <br><br><br>
                    <?php echo validation_errors(); ?>
                     
                </div>
                    <input class="subscr_btn" type="submit" value="Prijavi se">
                    <input class="subscr_btn" type="button" value="Registruj se" onclick="location.href='<?php echo base_url();?>RegistracijaController'">
            <?php echo form_close();?>  
          </div>
           
          </div>
        </div>
      </div>
    </section>

    <!--=========== END LOGIN SECTION ================-->
