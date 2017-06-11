<!-- @author Aleksandar Stojkoski 14/0266 -->
 <!--==Izmene u kodu: Milica Tanaskovic 0360/2014 ==-->
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
            <a class="navbar-brand" href='<?php echo base_url();?>IndexController'><img src="<?php echo base_url(); ?>img/logo.png" alt="logo"></a> 
			
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href='<?php echo base_url();?>IndexController'>Početna</a></li>
              
            </ul>           
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

    </header>
   

    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START CONTACT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Registracija</h2>
              <p>Popunite sledeće podatke:   <?php echo "$greska"; ?>
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

                <?php echo form_open('RegistracijaAutorController/register'); ?>
				  
                   <input class="form-control" type="text" placeholder="Korisničko ime" required name = "username">
				  <input class="form-control" type="text" placeholder="Ime i prezime" required name = "name">
                  <input class="form-control" type="email" placeholder="Email adresa" required name = "email">
                  <input class="form-control" type="password" placeholder="Lozinka" required name = "pass">
				  <input class="form-control" type="password" placeholder="Potvrda lozinke" required name = "confpass">
				  <input class="form-control" type="text" placeholder="Kontakt telefon" required name = "phone">
				  &nbsp;&nbsp;
				  <input class="form-control" type="text" placeholder="Naziv objekta" required name = "nobjekat">
				  <input class="form-control" type="text" placeholder="Adresa objekta" required name = "adr">
				  <input class="form-control" type="text" placeholder="Radno vreme objekta" required name = "time">
				  <input class="form-control" type="text" placeholder="Kapacitet objekta" required name = "kap">
				  <input class="form-control" type="text" placeholder="Tip objekta" required name = "tip">
				  &nbsp;&nbsp;Slika:
				  <input class="form-control" type="file" placeholder="Slika" size = 40 required name = "picture">
                  <textarea class="form-control" cols="30" rows="5" placeholder="Kratak opis objekta" name ='opis' required></textarea>
				
					<input class="submit_btn" type="submit" value="Pošalji">
					<input class="submit_btn" type="reset" value="Obriši">
					<input class="submit_btn" type="button" value="Odustani" onclick="location.href='<?php echo base_url();?>IndexController'">
                 <?php echo form_close(); ?>  
              </div>
            </div>         
          </div>
        </div>      
      </div>             
    </section>
    <!--=========== END CONTACT SECTION ================-->
