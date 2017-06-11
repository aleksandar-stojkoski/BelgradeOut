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
            <a class="navbar-brand" href='<?php echo base_url();?>IndexController'><img src="img/logo.png" alt="logo"></a> 
			
                   
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
			  <br><br><br><br><br>
              <h2 class="wow fadeInLeftBig">Registracija</h2>
              <p>Molimo Vas da izaberete da li želite da se registujete kao Autor ili Korisnik.
			  <br><br><br>
			  </p>
			  <div>
				<input class="subscr_btn" type="button" value="Autor" onclick="location.href='<?php echo base_url();?>RegistracijaAutorController'">
				<input class="subscr_btn" type="button" value="Korisnik" onclick="location.href='<?php echo base_url();?>RegistracijaKorisnikController'">

			  </div>
			  <p>
			  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			  </p>
            </div>
          </div>
        </div>       
          
      </div>             
    </section>
    <!--=========== END CONTACT SECTION ================-->
