
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
            <a class="navbar-brand" href="<?php echo base_url();?>IndexController"><img src="<?php echo base_url();?>img/logo.png" alt="logo"></a> 
			
                   
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
					<h2 class="wow fadeInLeftBig">Zahtev</h2>
					<div class="team_img">
						  <img src="<?php echo base_url();?>img/team-1.jpg" alt="img">
					</div>
					<p>	
            1. Naziv događaja:  <?php echo "$naziv"; ?> <br>
            2. Tip događaja:  <?php echo "$tip"; ?> <br>
            3. Muzički žanr:  <?php echo "$zanr"; ?> <br>
            4. Izvođač:  <?php echo "$izvodjac"; ?> <br>
            5. Datum:  <?php echo "$datum"; ?> <br>
            6. Trajanje događaja:  <?php echo "$trajanje"; ?> <br><br>
            Kratak opis događaja:  <?php echo "$opis"; ?>
					</p>
					<div>
						<input class="submit_btn" type="button" value="Prihvati" onclick="location.href='<?php echo base_url() ?>/ZahtevModeratorController/prihvati_zahtev_za_dogadjaj/<?php echo $iddogadjaja ?>'">
            <input class="submit_btn" type="button" value="Odbij" onclick="location.href='<?php echo base_url() ?>/ZahtevModeratorController/odbij_zahtev_za_dogadjaj/<?php echo $iddogadjaja ?>'">
					</div>
					<br><br><br><br><br><br>
				</div>
				
				
              
            </div>
          </div>
        </div>       
      </div>
	
    </section>
	
    <!--=========== END ABOUT SECTION ================-->
