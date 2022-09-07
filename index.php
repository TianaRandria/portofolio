<?php
if (isset($_POST['message'])) {
  if (!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['objet']) and !empty($_POST['message'])) {
    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"nom_d\'expediteur"<votre@mail.com>' . "\n";
    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
    $header .= 'Content-Transfer-Encoding: 8bit';
    $message = '
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>' . $_POST['nom'] . '<br />
               <u>prenom de l\'expéditeur :</u>' . $_POST['prenom'] . '<br />
               <u>Mail de l\'expéditeur :</u>' . $_POST['email'] . '<br />
               <u>Sujet de l\'expéditeur :</u>' . $_POST['objet'] . '<br />
               
               <br />
               ' . nl2br($_POST['message']) . '
          
            </div>
         </body>
      </html>
      ';
    mail("v.randriamalalaniaina@codeur.online", "Sujet du message", $message, $header);
   
    $msg = "Votre message a bien été envoyé !";
    
  } else {
    $msg = "Tous les champs doivent être complétés !";
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/modalbase.css" />
  <link rel="stylesheet" href="assets/css/modaldefault.css" />
  <link rel="stylesheet" href="assets/css/modalcreatives.css" />
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.ico" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/stars.css" />
  <script src="https://kit.fontawesome.com/ad6303b92e.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <style>
      .ordi-description-tab {
        overflow: hidden;
        position: relative;
      }

      .ordi-description-text {
        overflow: hidden;
        position: relative;
      }
    </style>
    <nav id="navigation" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">Portfolio</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuSurMobile" aria-controls="menuSurMobile" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuSurMobile">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <!-- <li class="nav-item">
								<a class="nav-link" href="#accueil"
									><i class="bi bi-house-fill"></i
								></a>
							</li> -->
            <li class="nav-item">
              <a class="nav-link" href="#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="assets/cvtiana.pdf">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#competences">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main data-bs-spy="scroll" data-bs-target="#navigation">

    <section id="accueil" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="position-relative">
              <h1>Tiana</h1>
              <div class="position-absolute">
                <div class="typewriter">
                  <p class="Ttexte">Developpeuse Web & Web Mobile</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <div id='title'>
      <!--<span>
    PURE CSS
  </span>
  <br>
  <span>
    PARALLAX PIXEL STARS
  </span> -->
    </div>

    <section id="profil" class="d-flex align-items-center py-5 kenburns-top-right">
      <div class="container ">
        <div class="row">
          <div class="">
            <div class="quiSuisJe"></div>
            <h2 class="QuiSuiJe text-center my-2">Qui suis-je ?</h2>
            <p class="description">
              Bonjour, </br>
              Je m’appelle Tiana Andriamanantsara , développeuse Web
              et Web mobile. Auparavant, j’ai effectué plusieurs années en
              tant que Responsable de production publicitaire ce qui m’a
              permis d’acquérir de très bonnes compétences telles que
              l’organisation, les gestions de projets, l’écoute, le conseil
              ainsi que le respect du delais de production.Le domaine du Web
              m’intéressait depuis toujours j’ai donc suivi la formation
              Développeur Web et Web Mobile au sein de l’Access Code School
              afin d’acquerir le titre professionnel de developpeur web et web
              mobile .
            </p>

          </div>
          <svg class="origami-swan" version="1.1" id="Layer_1" stroke="#393838" stroke-width=".5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="-248.3 343.8 76.1 65.5" style="enable-background:new -248.3 343.8 76.1 65.5;" xml:space="preserve">
<path d="M-172.1,392.2c-0.1-0.3-0.3-0.5-0.5-0.6l-16.3-3.9l12.7-19.5c0,0,0,0,0,0l0,0c0-0.1,0.1-0.1,0.1-0.2c0,0,0,0,0-0.1
	c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1c0-0.1,0-0.1-0.1-0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0-0.1-0.1-0.1-0.2-0.2c0,0,0,0-0.1,0
	c-0.1,0-0.1-0.1-0.2-0.1c0,0,0,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0c0,0,0,0,0,0c-3.9,0.7-8.6,1.6-13.5,2.5l4.2-13.7
	c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2c0,0,0,0,0-0.1c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0,0,0,0,0,0s0,0,0,0
	c-0.1-0.1-0.1-0.1-0.2-0.1c0,0,0,0-0.1,0c-0.1,0-0.1,0-0.2,0c0,0,0,0-0.1,0c-0.1,0-0.2,0-0.2,0l0,0c0,0,0,0,0,0l-42.7,17.1l-2.9-1.2
	l2-19.8c0-0.1,0-0.1,0-0.2c0-0.1,0-0.3-0.1-0.4l-2.1-6.3c-0.1-0.3-0.4-0.5-0.7-0.5l-7.2,0.8c0,0,0,0,0,0c0,0,0,0,0,0l-6.6,1.2
	c-0.3,0.1-0.6,0.3-0.6,0.6c0,0.3,0.2,0.6,0.5,0.7l6.6,2.2c0,0,0,0,0,0c0,0,0,0,0,0l4,1l-4.5,17.6c0,0.1,0,0.2,0,0.4l5.6,20.8
	c0,0,0,0,0,0c0,0,0,0,0,0c0,0.1,0.1,0.2,0.1,0.2c0,0,0,0,0,0l15.5,19.7c0.1,0.2,0.3,0.3,0.6,0.3h16.5c0.2,0,0.5-0.1,0.6-0.3l1.9-3
	l3.9,3.1c0.1,0.1,0.3,0.2,0.4,0.2c0.1,0,0.3,0,0.4-0.1l23.7-16.2C-172.2,392.7-172.1,392.5-172.1,392.2z M-234.6,388.6l1-9.8
	c4.9-0.8,36.2-6.5,53.4-9.7l-46.3,29.8L-234.6,388.6z M-201.7,371.6l13.2-13.4l-3.6,11.7C-195.2,370.4-198.5,371-201.7,371.6z
	 M-189.8,357.5l-14.3,14.5c-6.5,1.2-12.9,2.3-18.1,3.3l-5.9-2.4L-189.8,357.5z M-224.7,375.8c-4.2,0.8-7.3,1.3-8.8,1.6l0.5-5
	L-224.7,375.8z M-241.7,346.1v1.5l-3-1L-241.7,346.1z M-240.2,345.9l6-0.7l1.6,4.7l-3.4-0.8c0,0,0,0,0,0c0,0,0,0,0,0l-4.2-1V345.9z
	 M-235.7,350.6l3.4,0.8l-3.4,33.5l-4.5-16.9L-235.7,350.6z M-203.8,407.8h-15.8l-6.1-7.8l46.4-29.9L-203.8,407.8z M-196.5,407.6
	l-3.6-2.9l10.3-15.8l15.3,3.7L-196.5,407.6z"/>
</svg>


          <!--<div class="col-md-6">
              <div class="origami">
                <svg id="crane" width="1080" height="1080" viewBox="0 0 1080 1080">
                  <path id="beakBack" d="M1543.248,1081.944,1429.09,1037.67l-87.364,129.31,117.064-94.366Z" transform="translate(-1235.694 -717.764)" fill="#00f5ff" stroke="#fff" stroke-width="2" />
                  <path id="beakFront" d="M1543.248,1100.58l-132.8,66.4,112.991-110.657Z" transform="translate(-1304.416 -717.764)" fill="#01ccd5" stroke="#fff" stroke-width="2" />
                  <path id="leftWing" d="M1390.656,1617.81l-51.264-160.771-246.952-242.3,542.839,111.84Z" transform="translate(-1078.44 -717.764)" fill="#00f5ff" stroke="#fff" stroke-width="2" />
                  <path id="neckBack" d="M1430.257,1617.81h-73.4l-93.193-561.487Z" transform="translate(-1044.646 -717.764)" fill="#01ccd5" stroke="#fff" stroke-width="2" />
                  <path id="Path_5" data-name="Path 5" d="M1071.464,1599.174l-9.319,44.262L941,1641.1l11.652-86.2Z" transform="translate(-363.183 -717.764)" fill="#01ccd5" stroke="#fff" stroke-width="2" />
                  <path id="Path_6" data-name="Path 6" d="M1260.179,1554.9l-11.652,86.2-188.714,37.273,41.946-175.907Z" transform="translate(-670.711 -717.764)" fill="#01ccd5" stroke="#fff" stroke-width="2" />
                  <path id="neckFront" d="M1355.7,1678.376l-170.078-622.052,88.531,25.62,156.1,284.242Z" transform="translate(-966.599 -717.764)" fill="#00f5ff" stroke="#fff" stroke-width="2" />
                  <path id="rightWing" d="M582.384,1502.469,882.928,1394.14l335.3,359.812Z" transform="translate(-151.337 -717.764)" fill="#00f5ff" stroke="#fff" stroke-width="2" />
                  <path id="bodyTop" d="M1218.232,1394.14,1180.948,1259,950.3,1366.185l-32.61,136.283Z" transform="translate(-486.642 -717.764)" fill="#00f5ff" stroke="#fff" stroke-width="2" />
                  <path id="tail" d="M954.973,762.764,666.075,1259l37.284,135.139Z" transform="translate(28.232 -717.764)" fill="#00f5ff" stroke="#fff" stroke-width="2" />
              
                  <rect id="frame" width="1080" height="1080" fill="none" />
                </svg>
              
              </div> -->
        </div>
      </div>
      </div>
    </section>
    <!-- <div class="position-relative"></div> -->

    <section id="portfolio" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2 class="text-pop-up-top text-start-my-4">PORTFOLIO</h2>
            <h3 class="text-start-my-4">Mes réalisations</h3>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-sm-12 col-md-4">
            <div class="position-relative box">
              <div class="zoom">
                <a data-modal-open="modal-default" data-type="html">
                  <div class="position-absolute voir">
                    <span>voir</span>
                  </div>
                </a>
                <img class="img-fluid" src="assets/images/capgemen.png" alt="capgemen" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <!-- <div id="gallery1">
                <a href="assets/images/crea1.png" data-toggle="lightbox" data-gallery="gallery" style="visibility: hidden;"></p>
              </div> -->
            <div class="position-relative box">

              <div class="zoom">

                <a data-modal-open="modal-creatives" data-type="html">
                  <div class="position-absolute voir">
                    <span>voir</span>
                  </div>
                </a>
                <img class="img-fluid" src="assets/images/crea.png" alt="crea" />

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="position-relative box">
              <div class="zoom">
                <a data-modal-open="modal-wireframe" data-type="html">
                  <div class="position-absolute voir">
                    <span>voir</span>
                  </div>
                </a>
                <img class="img-fluid" src="assets/images/poligny77.png" alt="poligny" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="position-relative box">
              <div class="zoom">
                <a href="assets/images/portfolio1.png" data-toggle="lightbox" data-gallery="gallery" data-src="<a href='https://volar.promo-167.codeur.online/popcode/jeu.html' target='_blank'><img src='assets/images/portfolio1.png' class='img-fluid' /></a>" data-type="html">
                  <div class="position-absolute voir">
                    <span>voir</span>
                  </div>
                </a>
                <img class="img-fluid" src="assets/images/popcode.png" alt="popcode" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="position-relative box">
              <div class="zoom">
                <a href="assets/images/bu.png" data-toggle="lightbox" data-gallery="gallery">
                  <div class="position-absolute voir">
                    <span>voir</span>
                  </div>
                </a>
                <img class="img-fluid" src="assets/images/bureau.png" alt="bureau" />
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="position-relative box">
              <div class="zoom">
                <a href="assets/images/rec.png" data-toggle="lightbox" data-gallery="gallery">
                  <div class="position-absolute voir">
                    <span>voir</span>
                  </div>
                </a>
                <img class="img-fluid" src="assets/images/crea.png" alt="recette" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="cv" class="d-flex align-items-center py-5">
      <div class="cv container">
        <div class="row">
          <div class="col-md-12">
            <div class=" telechargez text-center my-5 "><a class=" btn btn-lg btn-outline-light " href="assets/cvtianarework.pdf">Téléchargez mon CV</a></div>
          </div>
        </div>
      </div>
    </section>

    <section id="competences" class="py-5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6">
            <h2 class="text-pop-up-top text-start">compétences</h2>
            <h3 class="text-start">Ce que je sais faire</h3>
          </div>

          <!-- <div class="skillcontainer"> -->

          <div class="col-md-6">
            <!-- <p class="skills">Web Development</p> -->
            <ul class="skills-bar-container">
              <label>HTML5 / CSS3</label>
              <span class="percent"></span>
              <li>
                <span class="progressbar progressblue" id="progress-htmlcss"></span>
              </li>

              <label>JavaScript / jQuery</label>
              <span class="percent"></span>
              <li>
                <span class="progressbar progressblue" id="progress-jsjq"></span>
              </li>

              <label>PHP</label>
              <span class="percent"></span>
              <li>
                <span class="progressbar progressblue" id="progress-php"></span>
              </li>
            </ul>

            <!-- <p class="skills">Programming</p> -->
            <ul class="skills-bar-container">
              <label>Bootstrap</label>
              <span class="percent"></span>
              <li>
                <span class="progressbar progressblue" id="progress-bootstrap"></span>
              </li>

              <label>C#</label>
              <span class="percent" id="angular-pourcent"></span>
              <li>
                <span class="progressbar progressblue" id="progress-csharp"></span>
              </li>

              <label>SQL / MySQL</label>
              <span class="percent" id="angular-pourcent"></span>
              <li>
                <span class="progressbar progressblue" id="progress-sql"></span>
              </li>
            </ul>
          </div>

          <!-- </div> -->
        </div>
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-4">
              <div id="origami_bird_box">
                <div class="origami_bird">
                  <div class="origami_bird_body">
                    <div class="origami_bird_head"></div>
                    <div class="origami_bird_wing_left">
                      <div class="origami_bird_wing_left_top"></div>
                    </div>
                    <div class="origami_bird_wing_right">
                      <div class="origami_bird_wing_right_top"></div>
                    </div>
                    <div class="origami_bird_tail_left"></div>
                    <div class="origami_bird_tail_right"></div>
                  </div>
                </div>
              </div>
            </div>

    </section>

    <section id="contact">

      <div id="contact_form">
        <div class="">

          <h2 class="text-start-my-4">Contact</h2>
          <h3 class="rejoignezMoi text-start my-3">Rejoignez-moi</h3>

          <div class="reseau d-flex align-items-center">

            <ul class="wrapper">
              <li class="icon linkedin">
                <span class="tooltip">linkedin</span>
                <span><a href="https://www.linkedin.com/in/tiana-andriamanantsara/"><i class="fa-brands fa-linkedin"></i></a></span>
              </li>

              <li class="icon Adresse">
                <span class="tooltip">Email</span>
                <span><a href="mailto:niova@live.fr"><i class="fa-solid fa-envelope"></i></a></span>
              </li>
              <li class="icon github">
                <span class="tooltip">Github</span>
                <span><a href="https://github.com/TianaRandria"><i class="fab fa-github"></i></a></span>
              </li>
              <li class="icon discord">
                <span class="tooltip">discord</span>
                <span><a href="TianaA#3858"><i class="fa-brands fa-discord"></i></a></span>
              </li>
            </ul>
          </div>
          <div class="info">
            <ul class="list-unstyled">
              <li>
                <i class="telephone fa-solid fa-mobile-screen"></i> 06 72 79 08 27
              </li>
              <li>
                <i class="maps fa-solid fa-location-dot"></i> 7 rue May Fauchette Aumont 39 800
              </li>
            </ul>
          </div>

        </div>

        <div class="">
          <form id="formulaire_envoyer" method="POST" action="">
            <div class="input-group mb-3">
              <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" required />
              <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" required />
            </div>
            <div class="mb-3">
              <input type="email" name="email" id="email" class="form-control" placeholder="Adresse mail" required />
            </div>
            <div class="mb-3">
              <input type="text" name="objet" id="objet" class="form-control" placeholder="Objet du message" required />
            </div>
            <div class="mb-6">
              <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Message" required></textarea>
            </div>
            <div class="mb-3 text-end">
              <button type="submit" class="btn send">
                Envoyer le message
              </button>
              <?php if (isset($msg)) {
                echo "<p>" . $msg . "</p>";
              } ?>
            </div>
          </form>
        </div>
      </div>

      <div class="" id="maps">
       <iframe src="https://www.arcgis.com/apps/instant/basic/index.html?appid=aea46d2603a64dd9969d96896616f5fb" frameborder="0" style="width:80%; height:85%; border:0;" allowfullscreen></iframe>      
      </div>
    </section>
  </main>

  <footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="copyright text-center p-3" style="background-color: white">
      Tiana Randria © 2022 All rights reserved
    </div>

    <!-- Copyright -->
  </footer>

  <button onclick="backToTop()" id="toTop" title="Back To Top">
    <i class="bi bi-caret-up-fill"></i>
  </button>

  <!--Modal -->
  <div id="ordi-overlay" class="ordi-overlay">
    <!--Modal Default-->
    <div class="ordi-modal modal-default">
      <div class="ordi-img">
        <img class="computer-img" src="assets/images/ordi.jpg" alt="ordi">
      </div>
      <div class="ordi-description">
        <div class="ordi-description-tab tab">
          <img class="scale-in-ver-top" src="assets/images/capgemenbox.png" alt="capbox" />
        </div>
        <div class="ordi-description-text">
          <a target="_blank" href="https://volar.promo-167.codeur.online/capgemen/">
            <div class="ordi-description-text-logo">
              <img class="logobootsrap" src="assets/images/logobobootsrap.png" alt="rotate-vert-center" />
            </div>
          </a>
          <p class="line-1 anim-typewriter">En integrant la maquette, ce projet m'a <br /> permis de découvrir les fonctionements <br /> de Bootstrap</p>
        </div>
      </div>
    </div>
    <!--Modal Creatives-->
    <div class="ordi-modal modal-creatives">
      <div class="ordi-img">
        <img class="computer-img" src="assets/images/ordi.jpg" alt="ordi">
      </div>
      <div class="ordi-description">
        <div class="ordi-description-tab tab">
          <img class="scale-in-ver-top" src="assets/images/phonecreative .png" alt="capbox" />
        </div>
        <div class="ordi-description-text Btexte">
          <p class="line-1 anim-typewriter">Sur ce projet , j'ai appris a organiser </br>un travail d'équipe sur Trello.</br>
            Notre mission était d'integrer un site internet </br> responsive sans l'aide de Boostrap.</br>
            Ainsi , on a utliser HTML , CSS et JS .</br>
            C'était sur ce projet que j'ai fait mes premiers pas </br> sur Github.</p>
        </div>

        <div class="ordi-description-logo-list">
          <a href="https://github.com/DNatan39/Creatives/blob/main/index.html" target="_blank">
            <div class="ordi-description-logo-item">
              <img class="logobootsrap" src="assets/images/logohtml.png" alt="rotate-vert-center" />
            </div>
          </a>
          <a href="https://github.com/DNatan39/Creatives/blob/main/assets/css/style.css" target="_blank">
            <div class="ordi-description-logo-item">
              <img class="logobootsrap" src="assets/images/logocss.png" alt="rotate-vert-center" />
            </div>
          </a>
          <a href="https://github.com/DNatan39/Creatives/blob/main/assets/js/app.js" target="_blank">
            <div class="ordi-description-logo-item">
              <img class="logobootsrap" src="assets/images/logoJs.png" alt="rotate-vert-center" />
            </div>
          </a>
          <a href="https://trello.com/fr" target="_blank">
            <div class="ordi-description-logo-item">
              <img class="logobootsrap" src="assets/images/logotrello.png" alt="rotate-vert-center" />
            </div>
          </a>
          <a href="https://github.com/TianaRandria" target="_blank">
            <div class="ordi-description-logo-item">
              <img class="logobootsrap" src="assets/images/logogithub.png" alt="rotate-vert-center" />
            </div>
          </a>
        </div>
      </div>
    </div>
    <!--Modal Wireframe-->
    <div class="ordi-modal modal-wireframe ">
      <div class="ordi-img">
        <img class="computer-img" src="assets/images/ordi.jpg" alt="ordi">
      </div>
      <div class="ordi-description">
        <div class="ordi-description-tab tab">
          <img class="scale-in-ver-top" src="assets/images/phonewireframe .png" alt="capbox" />
        </div>
        <div class="ordi-description-text">
          <a target="_blank" href="https://volar.promo-167.codeur.online/capgemen/">
            <div class="ordi-description-text-logo">
              <img class="logobootsrap" src="assets/images/logofigma.png" alt="rotate-vert-center" />
            </div>
          </a>
          <h2>Wireframe & Maquette</h2>
          <p class="line-1 anim-typewriter">En integrant la maquette, ce projet m'a <br /> permis de découvrir les fonctionements <br /> de Bootstrap</p>
        </div>
      </div>
    </div>
  </div>
  <!--Modal-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</body>

</html>