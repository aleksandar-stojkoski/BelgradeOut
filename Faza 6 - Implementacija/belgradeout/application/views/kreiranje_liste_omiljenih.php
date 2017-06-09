
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
              <li class="active"><a href="<?php echo base_url();?>IndexController">Početna</a></li>
              <li><a href="<?php echo base_url();?>LogoutController">Odjavi se</a></li>
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
              <h2 class="wow fadeInLeftBig">Kreiranje liste omiljenih</h2>
			  <p>Izaberite naziv za listu:
			  </p>
			  <div>
					<input type="text" placeholder="  Naziv" required>
			  </div>
			  <br>
              <p>Izaberite parametre koje želite da zapamtite:
			  </p>
			  <p>Tip prostora:</p>
				<div> 
					<select>  
						<option value="">Klub</option>
						<option value="">Kafana</option>
					</select>
				</div>
				<p>Tip događaja:</p>
				<div> 
					<select>  
						<option value="">Svirka</option>
						<option value="">Žurka</option>
					</select>
				</div>
				<p>Muzički žanr:</p>
				<div> 
					<select>  
						<option value="">Rock</option>
						<option value="">Pop</option>
					</select>
				</div>
				<p>Trenutna adresa: </p>
				<div>
					<input type="text" placeholder=" Adresa">
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
					<input class="submit_btn" type="submit" value="Sačuvaj">
					<input class="submit_btn" type="reset" value="Obriši">
					<input class="submit_btn" type="button" value="Odustani">
				</div>
				<br><br><br><br><br><br>
            </div>
          </div>
        </div>       
           
    </section>
    <!--=========== END CONTACT SECTION ================-->
