
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
          <a class="navbar-brand" href="<?php echo base_url();?>IndexController"><img src="../../img/logo.png" alt="logo"></a>
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="<?php echo base_url();?>IndexController">Početna</a></li>			  
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
              <?php
                    $this->load->library('session');
                    $id= $this->session->id;
                    $Base= base_url();
                    if($id == null){
                        $Base .= 'ObjekatGostController/Index/';
                    } else{
                        $Base .= 'ObjekatRegistrovaniKorisnikController/Index/';
                    }
                    $Base .= $Objekat;
                    $Base .= '/';
              ?>
                           <div class="heading">
					<h2 class="wow fadeInLeftBig">Naziv događaja</h2>
					<div class="team_img">
						  <img src="../../img/<?php echo $Slika ?>" alt="img">
					</div>
                                        <p>	<strong> Naziv događaja: </strong> <?php echo $Naziv ?> <br>
						<strong> Tip događaja: </strong> <?php echo $TipDogadjaja ?> <br>
						<strong> Muzički žanr: </strong> <?php echo $Zanr ?> <br>
						<strong> Naziv benda: </strong> <?php echo $Izvodjac ?> <br>
						<strong> Datum: </strong> <?php echo $Datum ?> <br>
						<strong> Trajanje događaja: </strong> <?php echo $Trajanje ?> <br><br>
						<strong> Kratak opis događaja:  </strong> <?php echo $Opis ?>
						<br><br><br><br><br>
                                                <strong> Objekat: </strong> <a href=<?php echo $Base ?>> <?php echo $NazivObjekta ?> </a>
					</p>
					
				</div>
            </div>
          </div>
        </div>       
      </div>
	
    </section>
	
    <!--=========== END ABOUT SECTION ================-->
