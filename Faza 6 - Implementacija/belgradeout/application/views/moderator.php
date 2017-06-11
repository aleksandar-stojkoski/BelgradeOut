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
               <li class="active"><a href="<?php echo base_url();?>IndexController">Početna</a></li>
			         <li class="active"><a href="#">Zahtevi</a></li> 
			         <li><a href="#blog">Dogadjaji</a></li> 
               <li><a href="#team">Moj nalog</a></li>
               <li><a href="<?php echo base_url();?>LogoutController">Odjavi se</a></li> 
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
              <div class="heading">
                <h2 class="wow fadeInLeftBig">Zahtevi</h2>
                <p>Odaberite zahtev koji želite da otvorite:</p>
				
              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        
                        <?php for($i=0; $i<$brojzahtevadog; $i++) {?>
                        <!-- START SINGLE FEATURED ITEM -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>">
                                 <span class="fa fa-check-square-o"></span>Zahtev <?php echo $i+1 ?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapse<?php echo $i ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                             Tip zahteva: <b>Zahtev za događaj</b><br>
                             Id autora koji je podneo zahtev: <b><?php echo $zahtevidog[$i]->IdAutor; ?></b><br>
                             Id dogadjaja: <b><?php echo $zahtevidog[$i]->IdDogadjaj; ?></b><br>
                             <a href="<?php echo base_url() ?>/ZahtevModeratorController/otvori_zahtev_za_dogadjaj/<?php echo $zahtevidog[$i]->IdDogadjaj ?>" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
                            </div>
                          </div>
                        </div>
                        <?php } ?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>
	
    </section>
	
    <!--=========== END ABOUT SECTION ================-->

	
<!--=========== BEGIN BLOG SECTION ================-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Događaji</h2>
              <p>Odaberite događaj koji želite da otvorite ili obrišete:</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGIN BLOG SLIDER -->
              <div class="blog_slider">
                
                <?php for($i=0; $i<$brojdogadjaja; $i++) { ?>
                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="data:image/jpeg;base64,<?php echo base64_encode($dogadjaji[$i]->Slika); ?>" alt="img">
                    </div>
                    <h3><?php echo $dogadjaji[$i]->Naziv; ?> - <?php 
                    $this->load->model('ModeratorModel'); 
                    $status = $this->ModeratorModel->status_dogadjaja($dogadjaji[$i]->IdDogadjaj);
                    if($status == 0) echo  "nije odobren";
                    else echo "odobren";?></h3>
                    <div class="post_commentbox">
                      <!-- <a href="#"><i class="fa fa-user"></i>Autor</a> -->
                      <span><i class="fa fa-calendar"></i>Trajanje: <?php echo $dogadjaji[$i]->trajanje; ?></span>
                      <a href="#"><i class="fa fa-tags"></i>Tip: <?php echo $dogadjaji[$i]->TipDogadjaja; ?></a>
                    </div>
                    <p><?php echo $dogadjaji[$i]->Opis; ?></p>
                    <a href="<?php echo base_url() ?>/DogadjajAdminModeratorController/index/<?php echo $dogadjaji[$i]->IdDogadjaj ?>" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
                    <a href="<?php echo base_url() ?>/DogadjajAdminModeratorController/obrisi_dogadjaj/<?php echo $dogadjaji[$i]->IdDogadjaj ?>" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>          
                  </div>
                </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->
	
     <!--=========== BEGIN TEAM SECTION ================-->
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGIN ABOUT HEADING -->
            <div class="heading">
				<h2 class="wow fadeInLeftBig">Moj nalog</h2>
					<div class="team_img">
						  <img src="data:image/jpeg;base64,<?php echo base64_encode($slika); ?>"alt="img">
					</div>
					<p>	
            <b>1. Korisničko ime:</b> <?php echo "$username"; ?> <br>
						<b>2. Ime i prezime:</b> <?php echo "$imeprezime"; ?> <br>
						<b>3. Email adresa:</b> <?php echo "$email"; ?> <br>
						<b>4. JMBG:</b> <?php echo "$jmbg"; ?> <br>
						<b>5. Adresa:</b> <?php echo "$adresa"; ?> <br>
						<b>6. Kontakt telefon:</b> <?php echo "$telefon"; ?> <br>
						<b>7. Pol:</b> <?php echo "$pol"; ?> <br>
            <b>8. CV:</b> <?php echo "$cv"; ?> <br>
            <b>9. Motivaciono pismo:</b> <?php echo "$motpismo"; ?> <br>
					</p>
					<div>
					</div>
					<br><br>
					
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END TEAM SECTION ================-->

