<!-- @author Aleksandar Stojkoski 14/0266 -->
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
						  <img src="data:image/jpeg;base64,<?php echo base64_encode($slika); ?>" alt="img">
					</div>
					<p>	<?php if ($tip==1){ ?>
            1. Naziv događaja:  <?php echo "$naziv"; ?> <br>
						2. Tip događaja:  <?php echo "$tip"; ?> <br>
						3. Muzički žanr:  <?php echo "$zanr"; ?> <br>
						4. Izvođač:  <?php echo "$izvodjac"; ?> <br>
						5. Datum:  <?php echo "$datum"; ?> <br>
						6. Trajanje događaja:  <?php echo "$trajanje"; ?> <br><br>
						Kratak opis događaja:  <?php echo "$opis"; ?>
            <?php } else { ?>
                    1. IdKorisnika koji želi da postane moderator: <?php echo "$idKorisnika"; ?> <br>
                    2. Ime i prezime: <?php echo "$imeprezime"; ?> <br>
                    3. Korisničko ime: <?php echo "$username"; ?> <br>
                    4. Email: <?php echo "$email"; ?> <br>
                    5. JMBG: <?php echo "$JMBG"; ?> <br>
                    6. Adresa: <?php echo "$adresa"; ?> <br>
                    7. Telefon: <?php echo "$telefon"; ?> <br>
                    8. Pol: <?php echo "$pol"; ?> <br>
                    9. Motivaciono pismo: <?php echo "motpismo"; ?> 
            <?php } ?>
					</p>
					<div>
            <?php if ($tip==1){ ?>
  						<input class="submit_btn" type="button" value="Prihvati" onclick="location.href='<?php echo base_url() ?>/ZahtevAdminController/PrihvatiZahtevDogadjaj/<?php echo $idDogadjaj ?>'">
                                <input class="submit_btn" type="button" value="Odbij" onclick="location.href='<?php echo base_url() ?>/ZahtevAdminController/OdbijZahtevDogadjaj/<?php echo $idDogadjaj ?>'">
            <?php } else { ?>
              <input class="submit_btn" type="button" value="Prihvati" onclick="location.href='<?php echo base_url();?>/ZahtevAdminController/prihvati_zahtev_za_moderatora/<?php echo $idKorisnika ?>'">
              <input class="submit_btn" type="button" value="Odbij" onclick="location.href='<?php echo base_url();?>/ZahtevAdminController/odbij_zahtev_za_moderatora/<?php echo $idKorisnika ?>'">
					  <?php } ?> 
          </div>
					<br><br><br><br><br><br>
				</div>
				
				
              
            </div>
          </div>
        </div>       
      </div>
	
    </section>
	
    <!--=========== END ABOUT SECTION ================-->
