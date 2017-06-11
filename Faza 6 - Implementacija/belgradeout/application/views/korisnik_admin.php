
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
              <li class="active"><a href="<?php echo base_url();?>IndexController">Početna</a></li>
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
					<h2 class="wow fadeInLeftBig">Korisnik - id(<?php echo "$id_korisnika"; ?>)</h2>
					<div class="team_img">
						  <img src="data:image/jpeg;base64,<?php echo base64_encode($slika); ?>" alt="img">
					</div>
					<p>	1. Korisničko ime: <?php echo "$username"; ?> <br>
						2. Ime i prezime: <?php echo "$imeprezime"; ?> <br>
						3. Email adresa: <?php echo "$email"; ?><br>
						4. Lozinka: <?php echo "$lozinka"; ?><br>
            <?php 
            if($tip==1){
              echo "5. Tip: Administrator<br>";
            }
            else if($tip==2){
              echo "5. Tip: Moderator<br>";
              echo "6. JMBG: $jmbg<br>";
              echo "7. Adresa: $adresa<br>";
              echo "8. Telefon: $telefon<br>";
              echo "9. Pol: $pol<br>";
              echo "10. CV: $cv<br>";
              echo "11. Motivaciono pismo: $motpismo<br>";
            }
            else if ($tip==3){
              echo "5. Tip: Autor<br>";
              echo "6. Telefon: $telefon<br>";
            }
            else if ($tip==4){
              echo "5. Tip: Registrovani korisnik<br>";
              echo "6. Zeli vesti: ";
              if ($zelivesti==true)
                echo "da<br>";
              else
                echo "ne<br>";
            } 
            ?>
					</p>
					<div>
						<input class="submit_btn" type="button" value="Ukloni" onclick="location.href='<?php echo base_url();?>/KorisnikAdminController/obrisi_korisnika/<?php echo $id_korisnika ?>'">
						
					</div>
					<br><br><br><br><br><br>
				</div>
				
				
              
            </div>
          </div>
        </div>       
      </div>
	
    </section>
	
    <!--=========== END ABOUT SECTION ================-->
