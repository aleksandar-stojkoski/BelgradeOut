
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
            <a class="navbar-brand" href="<?php echo base_url();?>IndexController"><img src="img/logo.png" alt="logo"></a> 
			
                   
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
					<h2 class="wow fadeInLeftBig">Moj profil</h2>
					<div class="team_img">
						  <img src="img/team-1.jpg" alt="img">
					</div>
					<p>	1. Korisničko ime: marko44 <br>
						2. Ime i prezime: Marko Marković <br>
						3. Email adresa: marko@gmail.com <br>
					</p>
					<div>
						<input class="submit_btn" type="button" value="Izmeni podatke">
					</div>
					<br><br>
					<p>	Niste/jeste prijavljeni na mailing listu: <br>
						<input class="submit_btn" type="button" value="Prijavi se na listu">
					</p>
					<br><br>
					<p>	Želite da postanete moderator i doprinesete radu BelgradeOut sajta? Pošaljite zahtev: <br>
						<input class="submit_btn" type="button" value="Zahtev za moderatora">
					</p>
					
				</div>
				
				
              
            </div>
          </div>
        </div>       
      </div>
	
    </section>
	
    <!--=========== END ABOUT SECTION ================-->

    <!--=========== BEGIN PRICING SECTION ================-->
    <section id="pricing">
      <div class="container">
        <div class="row col-lg-12 col-md-12">
          <!-- START ABOUT HEADING -->
          <div class="heading">
            <h2 class="wow fadeInLeftBig">Liste omiljenih parametara</h2>
            <p>Maksimalan broj dozvoljenih listi je 3. <br>
			<input class="submit_btn" type="button" value="Dodaj listu"></p>
          </div>
        </div>
        <div class="row col-lg-12 col-md-12">
          <div class="pricing_area">
            <div class="row">
              <!-- BEGIN LISTA 1 -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="single_price wow fadeInUp">
                  <h3>Naziv liste</h3>
                  <div class="price">
                    <span><strong>BelgradeOut</strong></span>
                  </div>
                  <ul class="price_features">
                    <li>Tip prostora <strong><br>Neki tip</strong></li>
					<li>Tip događaja <strong><br>Neki tip</strong></li>
                    <li>Muzički žanr <strong><br>Neki žanr</strong></li>
                    <li>Adresa <strong><br>Neka adresa</strong></li>
                    <li>Udaljenost (km)<strong><br>Neka udaljenost</strong></li>
					<li>Prosečna ocena<strong><br>Neka ocena</strong></li>
                  </ul>
                  <a href="#" class="price_btn">Izmeni listu</a>
				  <a href="#" class="price_btn">Obriši listu</a>
                </div>
              </div>
              <!-- BEGIN LISTA 2 -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="single_price wow fadeInUp">
                  <h3>Naziv liste</h3>
                  <div class="price">
                    <span><strong>BelgradeOut</strong></span>
                  </div>
                  <ul class="price_features">
                    <li>Tip prostora <strong><br>Neki tip</strong></li>
					<li>Tip događaja <strong><br>Neki tip</strong></li>
                    <li>Muzički žanr <strong><br>Neki žanr</strong></li>
                    <li>Adresa <strong><br>Neka adresa</strong></li>
                    <li>Udaljenost (km)<strong><br>Neka udaljenost</strong></li>
					<li>Prosečna ocena<strong><br>Neka ocena</strong></li>
                  </ul>
                  <a href="#" class="price_btn">Izmeni listu</a>
				  <a href="#" class="price_btn">Obriši listu</a>
                </div>
              </div>

              <!-- BEGIN LISTA 3 -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="single_price wow fadeInUp">
                  <h3>Naziv liste</h3>
                  <div class="price">
                    <span><strong>BelgradeOut</strong></span>
                  </div>
                  <ul class="price_features">
                    <li>Tip prostora <strong><br>Neki tip</strong></li>
					<li>Tip događaja <strong><br>Neki tip</strong></li>
                    <li>Muzički žanr <strong><br>Neki žanr</strong></li>
                    <li>Adresa <strong><br>Neka adresa</strong></li>
                    <li>Udaljenost (km)<strong><br>Neka udaljenost</strong></li>
					<li>Prosečna ocena<strong><br>Neka ocena</strong></li>
                  </ul>
                  <a href="#" class="price_btn">Izmeni listu</a>
				  <a href="#" class="price_btn">Obriši listu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	
    <!--=========== END PRICING SECTION ================-->
