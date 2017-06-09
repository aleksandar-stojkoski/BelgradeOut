
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
               <li><a href='<?php echo base_url();?>IndexController'>Početna</a></li>
			         <li class="active"><a href="#">Zahtevi</a></li> 
			         <li><a href="#blog">Dogadjaji</a></li> 
               <li><a href="#team">Korisnici</a></li>
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
                <p>Ovde se nalazi lista svih zahteva koji su upućeni administratoru:</p>
				
              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEM #1-->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                 <span class="fa fa-check-square-o"></span>Zahtev 1
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                             Tip zahteva: zahtev za moderatora/zahtev za registrovanog korisnika <br>
							 Još neke osnovne informacije..<br>
							 <a href="#" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
							 
                            </div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEM #2 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                 <span class="fa fa-check-square-o"></span>Zahtev 2
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                            Tip zahteva: zahtev za moderatora/zahtev za registrovanog korisnika <br>
							 Još neke osnovne informacije..<br>
							 <a href="#" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
                            </div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEM #3 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <span class="fa fa-check-square-o"></span>Zahtev 3
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                             Tip zahteva: zahtev za moderatora/zahtev za registrovanog korisnika <br>
							 Još neke osnovne informacije..<br>
							 <a href="#" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
                            </div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEM #4 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                <span class="fa fa-check-square-o"></span>Zahtev 4
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                             Tip zahteva: zahtev za moderatora/zahtev za registrovanog korisnika <br>
							 Još neke osnovne informacije..<br>
							 <a href="#" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
                            </div>
                          </div>
                        </div>
						<!-- START SINGLE FEATURED ITEM #5 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                <span class="fa fa-check-square-o"></span>Zahtev 5
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                             Tip zahteva: zahtev za moderatora/zahtev za registrovanog korisnika <br>
							 Još neke osnovne informacije..<br>
							 <a href="#" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
                            </div>
                          </div>
                        </div>
						<!-- START SINGLE FEATURED ITEM #6 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                <span class="fa fa-check-square-o"></span>Zahtev 6
                              </a>
                            </h4>
                          </div>
                          <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                             Tip zahteva: zahtev za moderatora/zahtev za registrovanog korisnika <br>
							 Još neke osnovne informacije..<br>
							 <a href="#" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
                            </div>
                          </div>
                        </div>
						<!-- START SINGLE FEATURED ITEM #7 -->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                                <span class="fa fa-check-square-o"></span>Zahtev 7
                              </a>
                            </h4>
                          </div>
                          <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                             Tip zahteva: zahtev za moderatora/zahtev za registrovanog korisnika <br>
							 Još neke osnovne informacije..<br>
							 <a href="#" class="read_more">Otvori zahtev <i class="fa fa-angle-double-right"></i></a> 
                            </div>
                          </div>
                        </div>
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
              <p>Ovde se nalazi spisak svih događaja:</p>
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
					<a href="#" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>
					                   
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
					<a href="#" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>
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
					<a href="#" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>
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
					<a href="#" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>
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
					<a href="#" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>
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
					<a href="#" class="read_more">Obriši događaj <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>                
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
              <h2 class="wow fadeInLeftBig">Korisnici</h2>            
            </div>
            <div class="team_area">
              <!-- BEGIN TEAM SLIDER -->
              <div class="team_slider">  
                <!-- BEGIN SINGLE TEAM SLIDE#1 -->              
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Ime Prezime</h5>
                    <span>Korisničko ime</span>                        
                    <p>Tip korisnika: registrovani korisnik/autor/moderator</p>
                    <div>
                      <a href="#" class="read_more">Više informacija<i class="fa fa-angle-double-right"></i></a>
					  <input class="submit_btn" type="button" value="Ukloni">
                    </div>
                  </div>
                </div>
                <!-- BEGIN SINGLE TEAM SLIDE#2 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Ime Prezime</h5>
                    <span>Korisničko ime</span>                        
                    <p>Tip korisnika: registrovani korisnik/autor/moderator</p>
                    <div>
                      <a href="#" class="read_more">Više informacija<i class="fa fa-angle-double-right"></i></a>
					  <input class="submit_btn" type="button" value="Ukloni">
                    </div>
                  </div>
                </div>
                <!-- BEGAIN SINGLE TEAM SLIDE#3 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Ime Prezime</h5>
                    <span>Korisničko ime</span>                        
                    <p>Tip korisnika: registrovani korisnik/autor/moderator</p>
                    <div>
                      <a href="#" class="read_more">Više informacija<i class="fa fa-angle-double-right"></i></a>
					  <input class="submit_btn" type="button" value="Ukloni">
                    </div>
                  </div>
                </div>
                <!-- BEGIN SINGLE TEAM SLIDE#4 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Ime Prezime</h5>
                    <span>Korisničko ime</span>                        
                    <p>Tip korisnika: registrovani korisnik/autor/moderator</p>
                    <div>
                      <a href="#" class="read_more">Više informacija<i class="fa fa-angle-double-right"></i></a>
					  <input class="submit_btn" type="button" value="Ukloni">
                    </div>
                  </div>
                </div>
                <!-- BEGIN SINGLE TEAM SLIDE#5 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Ime Prezime</h5>
                    <span>Korisničko ime</span>                        
                    <p>Tip korisnika: registrovani korisnik/autor/moderator</p>
                    <div>
                      <a href="#" class="read_more">Više informacija<i class="fa fa-angle-double-right"></i></a>
					  <input class="submit_btn" type="button" value="Ukloni">
                    </div>
                  </div>
                </div>
                <!-- BEGIN SINGLE TEAM SLIDE#6 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Ime Prezime</h5>
                    <span>Korisničko ime</span>                        
                    <p>Tip korisnika: registrovani korisnik/autor/moderator</p>
                    <div>
                      <a href="#" class="read_more">Više informacija<i class="fa fa-angle-double-right"></i></a>
					  <input class="submit_btn" type="button" value="Ukloni">
                    </div>
                  </div>
                </div>
                <!-- BEGIN SINGLE TEAM SLIDE#7 -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
                    <div class="team_img">
                      <img src="img/team-1.jpg" alt="img">
                    </div>
                    <h5 class="">Ime Prezime</h5>
                    <span>Korisničko ime</span>                        
                    <p>Tip korisnika: registrovani korisnik/autor/moderator</p>
                    <div>
                      <a href="#" class="read_more">Više informacija<i class="fa fa-angle-double-right"></i></a>
					  <input class="submit_btn" type="button" value="Ukloni">
                    </div>
                  </div>
                </div>                              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END TEAM SECTION ================-->
