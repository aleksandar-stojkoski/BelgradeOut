
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


    <!--=========== BEGIN ABOUT SECTION ================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
					<h2 class="wow fadeInLeftBig">Naziv objekta</h2>
					<div class="team_img">
						  <img src="img/team-1.jpg" alt="img">
					</div>
					<p>	1. Naziv objekta: KST <br>
						2. Adresa objekta: Bulevar 4 <br>
						3. Radno vreme objekta: 00:00 - 24:00 <br>
						4. Kapacitet objekta: 250 <br>
						5. Tip objekta: klub <br>
						6. Prosečna ocena: 4 <br><br>
						Kratak opis objekta: ....
					</p>
					<p>	
						<br>
						Ocena (od 1 do 5): &nbsp;&nbsp;&nbsp;
						<input type="number" name="Ocena" min="1" max="5" required>
						<br>
						<input class="submit_btn" type="button" value="Oceni objekat">				
					</p>
				</div>
            </div>
          </div>
        </div>       
      </div>
    </section>
	

    <!--=========== BEGIN BLOG SECTION ================-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Događaji u objektu</h2>
              <p>Ovde se nalazi spisak svih događaja u ovom objektu:</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGIN BLOG SLIDER -->
              <div class="blog_slider">
                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Događaj 1</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Autor</a>
                      <span><i class="fa fa-calendar"></i>00:00 AM vreme</span>
                      <a href="#"><i class="fa fa-tags"></i>Tip događaja</a>
                    </div>
                    <p>Ovde kratak opis i ispod link ka tom događaju</p>
                    <a href="#" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
					
					                   
                  </div>
                </div>

                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Događaj 2</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Autor</a>
                      <span><i class="fa fa-calendar"></i>00:00 AM vreme</span>
                      <a href="#"><i class="fa fa-tags"></i>Tip događaja</a>
                    </div>
                    <p>Ovde kratak opis i ispod link ka tom događaju</p>
                    <a href="#" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
					
                  </div>
                </div>
                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Događaj 3</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Autor</a>
                      <span><i class="fa fa-calendar"></i>00:00 AM vreme</span>
                      <a href="#"><i class="fa fa-tags"></i>Tip događaja</a>
                    </div>
                    <p>Ovde kratak opis i ispod link ka tom događaju</p>
                    <a href="#" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
					
                  </div>
                </div>
                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Događaj 4</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Autor</a>
                      <span><i class="fa fa-calendar"></i>00:00 AM vreme</span>
                      <a href="#"><i class="fa fa-tags"></i>Tip događaja</a>
                    </div>
                    <p>Ovde kratak opis i ispod link ka tom događaju</p>
                    <a href="#" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
					
                  </div>
                </div>
                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Događaj 5</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Autor</a>
                      <span><i class="fa fa-calendar"></i>00:00 AM vreme</span>
                      <a href="#"><i class="fa fa-tags"></i>Tip događaja</a>
                    </div>
                    <p>Ovde kratak opis i ispod link ka tom događaju</p>
                    <a href="#" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
					
                  </div>
                </div>
                <!-- BEGIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                      <img src="img/blog_img1.jpg" alt="img">
                    </div>
                    <h3>Događaj 6</h3>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-user"></i>Autor</a>
                      <span><i class="fa fa-calendar"></i>00:00 AM vreme</span>
                      <a href="#"><i class="fa fa-tags"></i>Tip događaja</a>
                    </div>
                    <p>Ovde kratak opis i ispod link ka tom događaju</p>
                    <a href="#" class="read_more">Otvori događaj <i class="fa fa-angle-double-right"></i></a>
					
                  </div>
                </div>                
              </div>
            </div>
			
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->

    <!--=========== BEGIN CLIENTS SECTION ================-->
    <section id="clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Slike objekta</h2>
              <p>Ovde stoje neke slike objekta.</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="clients_content">
              <div class="row">
                <!-- BEGIN CLIENTS SLIDER -->
                <div class="clients_slider">
                  <!-- BEGIN SINGLE CLIENT SLIDE#1 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#2 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#3 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#4 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                   <!-- BEGIN SINGLE CLIENT SLIDE#5 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#6 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#7 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#8 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <img src="img/clients_img1.png" alt="clients Brand">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END CLIENTS SECTION ================-->

	<!--=========== BEGIN COMMENTS SECTION ================-->
	<section id="clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Komentari</h2>
				<p>	
					<textarea class="form-control" cols="30" rows="5" placeholder="Vaš komentar.." required></textarea>
					
					<input class="submit_btn" type="button" value="Dodaj komentar">				
				</p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="clients_content">
              <div class="row">
                <!-- BEGIN CLIENTS SLIDER -->
                <div class="clients_slider">
                  <!-- BEGIN SINGLE CLIENT SLIDE#1 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#2 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#3 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#4 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                   <!-- BEGIN SINGLE CLIENT SLIDE#5 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#6 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                     <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#7 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                      <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                  <!-- BEGIN SINGLE CLIENT SLIDE#8 -->
                  <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single_client">
                     <p>"Komentar taj i taj" <br>- Korisničko ime korisnika</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<!--=========== END COMMENTS SECTION ================-->
