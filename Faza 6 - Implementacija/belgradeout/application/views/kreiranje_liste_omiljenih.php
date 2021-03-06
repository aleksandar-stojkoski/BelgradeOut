<?php /**
 * Description of PrijavaZaModeratoraModel
 *
 * @author Aleksandar Stojkoski 14/0266
 * @author Strahinja Milovanovic 14/0463
 */ ?>
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
              <h2 class="wow fadeInLeftBig">Menjanje liste omiljenih parametara</h2>
              <p>Izaberite parametre koje želite da zapamtite:   </p>

              <?php echo form_open('KreiranjeListeOmiljenihController/Posalji'); ?>
              <form>
                  
                  <p> Naziv liste (jedna rec): <input type="text" name="Naziv" value="<?php echo $naziv ?>"></p>
                                <p>Tip prostora:</p>
				<div> 
                                        <select name="prostor">
                                                <option value="Svi">Svi</option>
						<option value="Klub">Klub</option>
						<option value="Kafana">Kafana</option>
                                                <option value="Pub">Pub</option>
					</select>
				</div>
				<p>Tip događaja:</p>
				<div> 
                                        <select name="dogadjaj">  
                                                <option value="Svi">Svi</option>
						<option value="Svirka">Svirka</option>
						<option value="Zurka">Žurka</option>
					</select>
				</div>
				<p>Muzički žanr:</p>
				<div> 
                                        <select name="zanr">  
                                                <option value="Svi">Svi</option>
						<option value="Rock">Rock</option>
						<option value="Pop">Pop</option>
					</select>
				</div>
				<p>Trenutna adresa: </p>
				<div>
					<input type="text" name= "Adresa" placeholder=" Adresa">
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
					<input class="submit_btn" type="button" value="Odustani" onclick="location.href= '<?php echo base_url();?>MojProfilRegistrovaniKorisnikController'">
				</div>
                                <input type="hidden" name="Staro" value="<?php echo $naziv ?>"
				<br><br><br><br><br><br>
              </form>
              <?php echo form_close(); ?> 
            </div>
          </div>
        </div>       
           
    </section>
    <!--=========== END CONTACT SECTION ================-->
