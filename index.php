<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$prenom = $_POST['prenom']; // Get Name from form
    $nom = $_POST['nom']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
  $objet = $_POST['objet']; // Get Email from form
    $message = $_POST['message']; // Get Comment from form

	$sql = "INSERT INTO contact (prenom, nom, email, objet, message)
			VALUES ('$prenom', '$nom', '$email','$objet', '$message')";
	$result = mysqli_query($omdataconn, $sql);

    if($result==true){
        echo "<script>alert('Votre message a été envoyé avec succès! Je vous répondrais très prochainement.')</script>";
    }else{
        echo "<script>alert('Something Went wrong!!')</script>";
    }
}
	


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="images/background-removebg-preview.png"/>
    <title>Nait-Akli Sami</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- magnific popup css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

  <header class="header-area">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <!-- brand -->
        <div class="logo">
        <img src="images/background-removebg-preview.png" height="100px" width="100px">
      </div>
        <a href="index.html" class="navbar-brand">Nait-Akli Sami</a>
        <!-- toggler/collapsible button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fas fa-bars"></i>
        </button>
        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#home" class="nav-link active" data-scroll-nav="0">home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" data-scroll-nav="1">about</a>
            </li>
          
            <li class="nav-item">
              <a href="#portfolio" class="nav-link" data-scroll-nav="3">portfolio</a>
            </li>
           <li class="nav-item">
              <a href="#contact" class="nav-link" data-scroll-nav="6">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- home section -->
    <section class="home" id="home" data-scroll-index="0">
      <div class="header-content d-flex align-items-center">
       
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="home-text">
                <h4>Bonjour, je suis</h4>
                <h1>Nait-Akli Sami</h1>
                <p>Développeur Web Full Stack</p>
                <div class="home-btn">
                  <a href="#portfolio" class="btn-1">Voir mon travail</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="profile">
                <img src="images/image-fond.png" alt="" height="700" width="700">
              </div>
            </div>
          </div>
        </div>
        <!-- header social -->
        <div class="header-social">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
              <div class="header-social-icon">
                  <ul>
                    <li><a href="https://www.linkedin.com/in/sami-nait-akli-174ab2220/"><i class="fab fa-linkedin"></i></a></li>  
                    <li><a href="https://github.com/Sami433"> <i class="fab fa-github"></i></a></li>  
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>
  <!-- header section end -->
  <!-- about us section start -->
  <section class="about-area section-padding" data-scroll-index="1" id="about" >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h4>About</h4>
            <h2>Informations <span>Personnelles</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="about-content">
            <h5 class="about-title">Je suis <span>Sami Nait-Akli</span> developpeur web full stack</h5>
            <p class="details">Je suis titulaire d'un titre professionnel de développeur web/web mobile.
              Ce qui me caractérise est une capacité de travail importante et une grande curiosité et envie d'apprendre.
            </p>
               <ul>
               
                 <li>
                  <div class="single-info d-flex align-items-center">
                    <div class="info-icon text-center">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <div class="info-text">
                      <p><span>Email:</span> saminait@laposte.net</p>
                    </div>
                  </div> <!-- single info -->
                </li>
                <li>
                  <div class="single-info d-flex align-items-center">
                    <div class="info-icon text-center">
                      <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-text">
                      <p><span>Tél:</span> +33767113418</p>
                    </div>
                  </div> <!-- single info -->
                </li>
                <li>
                  <div class="single-info d-flex align-items-center">
                    <div class="info-icon text-center">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="info-text">
                      <p><span>Lieu:</span> Marseille</p>
                    </div>
                  </div> <!-- single info -->
                </li>
                <li>
                  <div class="single-info d-flex align-items-center">
                    <div class="info-icon text-center">
                      <i class="fa fa-university"></i>
                    </div>
                    <div class="info-text">
                      <p><span>Diplôme:</span>Titre professionnel Niveau 5</p>
                    </div>
                  </div> <!-- single info -->
                </li>
               
               </ul>
          </div>
        </div>
        <div class="col-lg-6 col-xl-5 offset-xl-1">
          <div id="skill-bar-wrapper">
            <div class="text-left">
              <!-- C++ -->
              <h4> PHP <span style="float: right;">75%</span></h4>
              <div class="skillbar-container" data-percent="76%">
                <div class="skills"></div>
              </div>
              <!-- Java -->
              <h4> Java <span style="float: right;">75%</span></h4>
              <div class="skillbar-container" data-percent="75%">
                <div class="skills"></div>
              </div>
               <!-- HTML -->
               <h4> HTML/CSS <span style="float: right;">90%</span></h4>
               <div class="skillbar-container" data-percent="90%">
                 <div class="skills"></div>
               </div>
               <!-- Java -->
               <h4> Javascript <span style="float: right;">65%</span></h4>
               <div class="skillbar-container" data-percent="65%">
                 <div class="skills"></div>
               </div>
                <!-- Javascript -->
                <h4> React <span style="float: right;">65%</span></h4>
                <div class="skillbar-container" data-percent="65%">
                  <div class="skills"></div>
                </div>
                <h4> Wordpress <span style="float: right;">80%</span></h4>
                <div class="skillbar-container" data-percent="80%">
                  <div class="skills"></div>
                </div>
                <h4> Git <span style="float: right;">90%</span></h4>
                <div class="skillbar-container" data-percent="90%">
                  <div class="skills"></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about us section end -->
 
   <!-- portfolio section start -->
   <section class="img-gallery section-padding" data-scroll-index="3" id="portfolio">
     <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h4>portfolio</h4>
            <h2>Mes derniers <span>projets</span></h2>
          </div>
        </div>
      </div>
      <!-- filter btn -->
      <div class="row">
        <div class="col-lg-8 d-flex justify-content-center sortBtn flex-wrap">
          <a href="#" class="filter-btn active" data-filter="*">all</a>
          <a href="#" class="filter-btn" data-filter=".PHP">PHP</a>
          <a href="#" class="filter-btn" data-filter=".Java">Java</a>
          <a href="#" class="filter-btn" data-filter=".Javascript">Javascript/React</a>
          <a href="#" class="filter-btn" data-filter=".Wordpress">Wordpress</a>
        </div>
      </div>
      <!-- portfolio items -->
      <div class="row grid">
        <div class="col-lg-4 col-md-6 col-sm-6 PHP">
          <div class="single-work text-center mt-30">
            <div class="work-image">
              <img src="images/portfolio/screenom.png" alt="" height="250" width="250">
            </div>
            <div class="work-overlay">
              <div class="work-content">
                <h3 class="work-title">OMInfos</h3>
                <ul>
                  <li><a href="images/portfolio/screenom.png" class="image-popup"><i class="fa fa-plus"></i></a></li>
                  <li><a href="http://ominfos.epizy.com/"><i class="fa fa-link"></i></a></li>
                  <li><a href=" https://github.com/Sami433/OMInfos"><i class="fab fa-github"></i></a></li>
                </ul>
              </div>
            </div>
          </div> <!-- single work -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 Java">
          <div class="single-work text-center mt-30">
            <div class="work-image">
              <img src="images/portfolio/Slide2.jpg" alt="" height="250" width="250">
            </div>
            <div class="work-overlay">
              <div class="work-content">
                <h3 class="work-title">MoneyXMoney</h3>
                <ul>
                  <li><a href="images/portfolio/Slide2.jpg" class="image-popup" ><i class="fa fa-plus"></i></a></li>
                  <li><a href="https://github.com/Sami433/MoneyXMoney"><i class="fab fa-github"></i></a></li>
                </ul>
              </div>
            </div>
          </div> <!-- single work -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 Javascript">
          <div class="single-work text-center mt-30">
            <div class="work-image">
              <img src="images/portfolio/worldtour.png" alt="" height="250" width="250">
            </div>
            <div class="work-overlay">
              <div class="work-content">
                <h3 class="work-title">World Tour</h3>
                <ul>
                  <li><a href="images/portfolio/worldtour.png" class="image-popup"><i class="fa fa-plus"></i></a></li>
                  <li><a href="https://react-app-433.netlify.app/"><i class="fa fa-link"></i></a></li>
                  <li><a href="https://github.com/Sami433/ReactApp/"><i class="fab fa-github"></i></a></li>
                </ul>
              </div>
            </div>
          </div> <!-- single work -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 Javascript">
          <div class="single-work text-center mt-30">
            <div class="work-image">
              <img src="images/portfolio/js.png" alt="" height="250" width="250">
            </div>
            <div class="work-overlay">
              <div class="work-content">
                <h3 class="work-title">Jeu Javascript</h3>
                <ul>
                <li><a href="images/portfolio/js.png" class="image-popup"><i class="fa fa-plus"></i></a></li>
                  <li><a href="https://javascript-game-433.netlify.app/"><i class="fa fa-link"></i></a></li>
                  <li><a href="https://github.com/Sami433/JavascriptGame"><i class="fab fa-github"></i></a></li>
                </ul>
              </div>
            </div>
          </div> <!-- single work -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 Wordpress">
          <div class="single-work text-center mt-30">
            <div class="work-image">
              <img src="images/portfolio/wp.png" alt="" height="250" width="250">
            </div>
            <div class="work-overlay">
              <div class="work-content">
                <h3 class="work-title">Sami Marketing</h3>
                <ul>
                  <li><a href="images/portfolio/wp.png" class="image-popup"><i class="fa fa-plus"></i></a></li>
                  <li><a href="https://saminait.alwaysdata.net/"><i class="fa fa-link"></i></a></li>
                </ul>
              </div>
            </div>
          </div> <!-- single work -->
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 Java">
          <div class="single-work text-center mt-30">
            <div class="work-image">
              <img src="images/portfolio/safety.png" alt="" height="250" width="250">
            </div>
            <div class="work-overlay">
              <div class="work-content">
                <h3 class="work-title">API Safety Alerts</h3>
                <ul>
                  <li><a href="images/portfolio/safety.png" class="image-popup"><i class="fa fa-plus"></i></a></li>
                  <li><a href="https://github.com/Sami433/SafetyProject"><i class="fab fa-github"></i></a></li>
                </ul>
              </div>
            </div>
          </div> <!-- single work -->
        </div>
      </div>
     </div>
   </section>
    <!-- portfolio section end -->
    <!-- call to action start -->
    <section class="call-to-action section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9">
            <div class="call-action-content text-center">
              <h2 class="action-title">Mon Parcours</h2>
                <ul>
                  <li><a href="CV.pdf" class="btn btn-1">Télécharger mon CV</a></li>
              
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- call to action end --> 
  



     
     <!-- contact us section start-->
     <section class="contact section-padding" data-scroll-index="6" id="contact">
       <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title">
              <h2>Contactez-<span>moi</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-5">
            <div class="contact-info">
                <div class="contact-info-item">
                <i class="fas fa-envelope"></i>
                <h4>Email</h4>
                <p>saminait@laposte.net</p>
              </div>
              <div class="contact-info-item">
                <i class="fas fa-phone"></i>
                <h4>Téléphone</h4>
                <p>0767113418</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="contact-form">
            <form action="" method="POST" class="form">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" id="nom" name="nom" placeholder="Nom" required class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" id="prenom" name="prenom" placeholder="Prenom" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" id="email" name="email" placeholder="Email" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" id="objet" name="objet" placeholder="Objet" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                     <textarea type="text" id="message" name="message" placeholder="Votre Message" required class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <button class="btn-2" name="submit" type="submit">Envoyer</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
       </div>
     </section>
     <!-- contact us section end-->
     <!-- footer section start -->
     <footer class="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-12">
             <p class="copyright-text">&copy; 2021 by Nait-Akli Sami</p>
           </div>
         </div>
       </div>
     </footer>
     <!-- footer section end -->

  <!-- jquery js -->
  <script src="js/jquery.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- scrollit js -->
  <script src="js/scrollit.js"></script>
  <!-- parallax js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <!-- owl carousel js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- magnific popup js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- isotope js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- main js -->
  <script src="js/main.js"></script>
</body>
</html>







