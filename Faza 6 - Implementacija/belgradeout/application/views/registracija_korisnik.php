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
              <p>Popunite sledeće podatke:  <?php echo "$greska"; ?>
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

                   <?php echo form_open_multipart('RegistracijaKorisnikController/register'); ?>
				  
                  <input class="form-control" type="text" placeholder="Korisničko ime" required name = "username">
				  <input class="form-control" type="text" placeholder="Ime i prezime" required name="NameSurname">
                  <input class="form-control" type="email" placeholder="Email adresa" required name="email">
                  <input class="form-control" type="password" placeholder="Lozinka" required name = "pass">
				  <input class="form-control" type="password" placeholder="Potvrda lozinke" name = "confpass">
				  &nbsp;&nbsp;Slika:
				  <input class="form-control" type="file" placeholder="Slika"  name = "picture">
				  &nbsp;&nbsp;Prijava na mailing listu:
				  <input class="form-control" type="checkbox" value="Mailing lista" name = "check1">
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
