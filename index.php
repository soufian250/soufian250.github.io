<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scroll Links -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/tomorrow.min.css">   
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="styleforbutton.scss">


    <!-- End scoll links -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">

    <title>Soufian El Habib </title>

</head>
<body>
    <!-- Test Main NavBar -->
        <nav class="nav">
            <div class="container">
            <a href="#acceuil"> <img id="myLogo" src="logo_Transparent.svg" alt="Soufian El habib"></a>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li class="nav-item">
                            <a href="#acceuil" class="active">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profil">PROFIL</a>
                        </li>
                        <li class="nav-item">
                            <a href="#parcour">PARCOURS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#competance">COMPETANCES</a>
                        </li>
                        <li class="nav-item">
                            <a href="#service">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <span class="navTrigger">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </div>
        </nav>

    <!-- End Test Main NavBar -->

        <!-- Text inside Pic  -->
        <header id="acceuil" class="img-fluid">
            <div class="dark-overlay">
                <div class="container">
                    <div class="row align-items-start" id="under">
                        <div class="col-sm-8 d-none d-lg-block offset-md-3 text-white">
                          <h1 class="dispaly-4" id="app"></h1>
                          <a href="#contact" class="offset-md-3"><button id="slide">CONTACTEZ MOI</button></a>
                        </div>
                      </div>
                </div>
            </div>
        </header>

        <div id="links" class="d-flex justify-content-around shadow-sm rounded">
            <a target="_blank"  href="https://github.com/soufian250"> <div class="p-4 item-hl aniview" data-av-animation="fadeInLeft"><img class="pr-2" src="https://img.icons8.com/ios-glyphs/60/000000/github.png"> Github</div></a>
            <a target="_blank" href="https://www.linkedin.com/in/soufain-el-habib-3289b5155/"><div class="p-4 item-hl aniview" data-av-animation="fadeInDown"><img src="https://img.icons8.com/cute-clipart/64/000000/linkedin.png"> Linkdin</div></a>
            <a target="_blank" href="#accueil"><div class="p-4 item-hl aniview" data-av-animation="fadeInRight"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook-new.png"> Facebook</div></a>
        </div>

<!-- Profil head -->
  <section id="profil" class="a-propos-section pt-5 pb-4">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
            <h1 class="display-4 aniview" id="font-title" data-av-animation="fadeInUp">À propos de moi</h1>
            <h5 style="color: #E1E1E1;">___________</h5>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row p-4">
            <div class="col-lg-8 ">
                <div class="aniview" data-av-animation="fadeInUp">
                    <h1 class="display-4 font-title aniview" data-av-animation="fadeInUp">OBJECTIF</h1>
                    <p class="paragraph">Ma réussite professionnelle étant mon objectif principal, je souhaite acquérir de l'expérience dans différent domaines tels que le développement d'applications mobiles et web.</p>
                </div>
                <div class="aniview" data-av-animation="fadeInUp">
                    <h1 class="display-4 font-title" >MES ACTIVITÉS</h1>
                    <p class="paragraph">Je travaille sur des projets Symfony en PHP en entreprise. En parallèle je renforce mes connaissances dans divers Frameworks mobiles ou bien en web. De plus, je développe des sites web (d'un simple site vitrine à un site plus complet).</p>
                </div>

                <div id="container" class="aniview" data-av-animation="slideInLeft">

                     <!-- CV Download Button -->
                    <button class="learn-more button-download m-2">
                      <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                      </span>
                      <span class="button-text"> Télecharger Mon CV </span>
                    </button>

                    <!-- Contact Button -->
                    <button class="btn-share m-2">
                        <span class="secondCircle" aria-hidden="true">
                            <span class="icone-section" >
                                <span class="btn-text"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="30" height="30"
                                    viewBox="0 0 172 172"
                                   ><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M68.23031,14.38232c-2.35876,-0.1716 -4.77567,0.06949 -7.14567,0.76986l-8.48242,2.51253c-9.03879,2.67319 -16.10117,9.84481 -18.49056,18.89648c-5.3054,20.13025 0.76377,43.95734 16.55892,70.77783c15.77294,26.78349 33.74566,43.80574 54.04394,49.36182c9.14103,2.50194 18.99919,0.11194 25.92318,-6.31982l6.4528,-5.98389c7.22044,-6.70399 8.29704,-17.87006 2.46354,-25.8042l-9.32226,-12.66064c-4.99709,-6.78739 -13.80583,-9.67709 -21.90592,-7.24365l-14.58529,4.36719c-0.61223,0.17877 -2.07737,-0.65504 -3.35238,-1.75668l-0.007,-0.007c-2.2709,-1.97464 -5.41726,-5.96577 -8.78337,-11.67383v-0.007c-3.60938,-6.13008 -5.14886,-10.13916 -5.76693,-12.50667c-0.61835,-2.3686 -0.46829,-2.65673 -0.37793,-3.45736c0.04698,-0.39949 0.23679,-0.76965 0.5599,-1.0638l0.007,-0.007l10.87598,-9.94515c6.23103,-5.69624 8.1121,-14.79918 4.59814,-22.45882l-6.55778,-14.30534v-0.007c-3.08742,-6.72986 -9.63149,-10.96321 -16.70589,-11.47786zM67.45345,25.10433c3.2902,0.24583 6.31998,2.21937 7.70556,5.24202l6.56478,14.30534c1.5887,3.46302 0.79202,7.42587 -2.07862,10.05013l-10.87598,9.93815c-2.22958,2.03291 -3.6554,4.80459 -3.99626,7.79655v0.007c-0.08879,0.78679 -0.29863,3.71269 0.65788,7.37663c0.95652,3.66393 2.93135,8.51012 6.90072,15.25016h0.007c3.70368,6.28161 7.20407,11.05383 10.99495,14.34733h0.007c1.2311,1.06578 6.39077,6.01087 13.40951,3.96126l0.02099,-0.007l14.64828,-4.38819c3.80374,-1.14272 7.87087,0.22177 10.15511,3.32438l9.32227,12.66064c2.63986,3.59648 2.17864,8.48534 -1.11979,11.54785l-6.4528,5.99089c-4.1268,3.83508 -10.25496,5.33217 -15.77507,3.82129c-16.40938,-4.4916 -32.64726,-19.03038 -47.61214,-44.44173c-14.98568,-25.44601 -19.67273,-46.49227 -15.43213,-62.58236c1.40177,-5.31032 5.69671,-9.71842 11.14893,-11.33089l8.47542,-2.51253c1.10404,-0.32626 2.22765,-0.43888 3.32438,-0.35693z"></path></g></g></svg>
                                </span>
                    
                                <ul class="social-icons">
                                  <li>
                                    <a href="https://github.com/soufian250" target="_blank"
                                      ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                      width="28" height="28"
                                      viewBox="0 0 172 172"
                                      ><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M28.66667,28.66667c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v12.41569l7.16667,4.49316l7.16667,4.49316l57.33333,35.93132l57.33333,-35.69336l7.16667,-4.46517l7.16667,-4.45117v-12.72363c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM28.66667,43h114.66667v5.51497l-57.33333,35.67936l-57.33333,-35.93132zM14.33333,72.32455v56.67545c0,7.91917 6.41417,14.33333 14.33333,14.33333h114.66667c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-56.39551l-14.33333,8.91634v47.47917h-114.66667v-47.68913z"></path></g></g></svg></a>
                                  </li>
                                </ul>
                            </span>
                        </span>
                        <span class="text-button">dddd</span>
                      </button>
                  </div>

            </div>
            <div class="col-lg-4 mt-1">
              <div class="card shadow-lg p-3 mb-5 bg-white aniview" data-av-animation="slideInRight">
                <img class="card-img-top" src="me.jpg" alt="Thats me ^_^">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nom: </strong> El Habib</li>
                        <li class="list-group-item"><strong>Pénom: </strong> Soufian</li>
                        <li class="list-group-item"><strong>Date de naissance: </strong> 16/10/1996</li>
                        <li class="list-group-item"><strong>Nationalité: </strong> Marocaine</li>
                        <li class="list-group-item"><strong>Télephone: </strong> (+212)6 20 61 83 66</li>
                        <li class="list-group-item"><strong>Email: </strong> <a style="text-decoration: none; color:black;" href="mailto:elhabib.soufian@gmail.com">elhabib.soufian@gmail.com</a> </li>
                      </ul>
                </div>
            </div>

        </div>
        </div>
    </div>
  </section>

  <!-- Info Section --> 
      <section id="info-secion" class="module">
        <div class="module-inside">
            <div class="row text-center pt-4 test-brightnes">
                <div class="col-lg py-2 ">
                    <h3>Année d'éxperiece</h3>
                    <img src="https://img.icons8.com/dusk/79/000000/calendar.png"/>
                    <br> <h2>+1</h2> 
                 </div>
                <div class="col-lg py-2"><h3>Projets réalisés</h3><img src="projects.png" alt="projects" srcset=""><br><h2>3</h2> </div>
                <div class="col-lg py-2"><h3>Années d'études</h3><img src="https://img.icons8.com/cotton/101/000000/edit--v2.png"/><br><h2>2</h2> </div>
                <div class="col-lg py-2"><h3>Lignes de code</h3><img src="https://img.icons8.com/dusk/100/000000/code.png"/><br><h2>999+</h2> </div>
            </div>
        </div>
      </section id="info-secion">

  <!-- Parcour Section -->
  <section id="parcour" class="parcour contact-section pt-5 pb-4">
    <div class="container">
        <div class="row">
          <div class="col text-center py-5">
            <h1 class="display-4 font-title aniview" data-av-animation="fadeInUp">Parcours</h1>
            <h5 style="color: #E1E1E1;">___________</h5>
            <h5 class="aniview" data-av-animation="fadeInUp"> EXPÉRIENCES PROFESSIONNELLES</h5>
          </div>
        </div>
      </div>

      <div class="container">
          <div class="row timeline">
              
            <div class="timeline-item">
                <div class="timeline-img"></div>
                <div class="timeline-content aniview" data-av-animation="fadeInLeft">
                    <h2 style="visibility: hidden">----</h2>
                    <div class="p-1 date-timeline">Aout 2019-Aujourd’hui</div>
                    <p>Autoformation au Framework Laravel, GIT et Flutter</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-img"></div>
                <div class="timeline-content aniview" data-av-animation="fadeInLeft">
                    <h5>Stage</h5>
                    <div class="p-1 date-timeline">4 Mars 2019-14-Avril 2019</div>
                    <p>40 jours de stage au sien de l’entreprise JavaInfo à Marrakech
                        Tache : <br> - Réalise le cahier de charge de l’application <br>
                                - Développe l’espace admin</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-img"></div>
                <div class="timeline-content aniview" data-av-animation="fadeInRight">
                    <h5 >Institut Spécialisé de Technologie Appliquée NTIC Sidi Youssef Ben Ali Marrakech.</h5>
                    <div class="p-1 date-timeline ml-4">2017-2019</div>
                    <p>Diplôme technicien spécialise en développement informatique</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-img"></div>
                <div class="timeline-content aniview" data-av-animation="fadeInLeft">
                    <h5>Faculté des Sciences Semlalia Marrakech</h5>
                    <div class="p-1 date-timeline">2015-2017</div>
                    <p>S1, S2, S3 au Filière Sciences de la Matière Physique SMP</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-img"></div>
                <div class="timeline-content aniview" data-av-animation="fadeInRight">
                    <h5>Nouveau Lycée Ait Ourir</h5>
                    <div class="p-1 date-timeline">2014-2015</div>
                    <p>Baccalauréat Science de la vie et de la terre, avec une mention assez bien</p>
                </div>
            </div>
            
           

          </div>
      </div>
  </section>

  <!-- Compétences Section -->
  <section id="competance" class="competances pt-5">
      <div class=" text-white" id="background">
        <div class="col text-center py-5">
            <h1 class="display-4 font-title aniview reveal" data-av-animation="fadeInUp" >Compétances</h1>
            <h5 style="color: #E1E1E1;">___________</h5>
          </div>
          <div class="container">
             <div class="row">
                <div class="col-md-6 col-sm-4">
                    <div style="height: 30px;"><div class="progress-line" id="progress"></div></div>
                    <div style="height: 30px;"><div class="progress-line" id="progress2"></div></div>
                    <div style="height: 30px;"><div class="progress-line" id="progress3"></div></div>
                  </div> 
    
                  <div class="col-md-6 col-sm-4">
                    <div style="height: 30px;"><div class="progress-line" id="progress4"></div></div>
                    <div style="height: 30px;"><div class="progress-line" id="progress5"></div></div>
                    <div style="height: 30px;"><div class="progress-line" id="progress6"></div></div>
                  </div>
             </div>
         </div>

          <div class="col text-center py-5">
            <h3 class="display-4 font-sub-title aniview reveal-2" data-av-animation="fadeInUp"  >Plus de Compétances</h3>
            <h5 style="color: #E1E1E1;">___________</h5>
            <div class="container">
                <div class="row">
                    <div class="col"><div id="progressCercle"></div><br><br><span class="m-3">C#</span></div> 
                    <div class="col"><div id="progressCercle2"></div><br><br><span class="m-3">C#</span></div>
                    <div class="col"> <div id="progressCercle3"></div><br><br><span class="m-3">C#</span></div>
                    <div class="col"> <div id="progressCercle4"></div><br><br><span class="m-3">C#</span></div>
                </div>
            </div>
        </div>
     </div>
  </section>
  <div class="space" style="width: 100%; height: 110px; border : 3px solid white;"></div>


  <!-- Services Section -->
  <section id="service" class="service pt-5 pb-4">
    <div class="col text-center py-5">
        <h1 class="display-4 font-title aniview" data-av-animation="fadeInUp" >Services</h1>
        <h5 style="color: #E1E1E1;">___________</h5>
      </div>
      <div class="container">
       <div class="row">
        <div class="card-columns">
            <div class="card" id="card-no-border">
                <div class="card-body sub-card">
                    <h4 class="card-title"> <i class="fa fa-code"></i> Ecrire du code</h4>
                    <p class="card-text">En tant que développeur, j'en tape du code.. Je passe des heures, des journées, des nuits entières à taper du code pour que cela fonctionne !</p>
                </div>
            </div>
            <div class="card cards-list-test mb-5" id="card-no-border">
                <div class="card-body sub-card" id="no-border">
                    <h4 class="card-title"><i class="fa fa-sitemap"></i> Site Web</h4>
                    <p class="card-text">Je crée des sites web, que ce soit pour des projets personnels ou bien pour des clients tout en restant à l'écoute des nouvelles technologies.</p>
                </div>
            </div>
           
            <div class="card cards-list-test" id="card-no-border">
                <div class="card-body sub-card">
                    <h4 class="card-title"><i class="fa fa-mobile"></i> Mobile</h4>
                    <p class="card-text">J'aime bien développer des applications diverses pour des application mobiles ou des outils que l'on utilise tous les jours.</p>
                </div>
            </div>
           
        </div>
      </div>
  </section>
  <div class="space" style="width: 100%; height: 150px; border : 3px solid white;"></div>

 

  <!-- contact section 1 -->
  <section id="info-secion" class="module">
    <div class="module-inside">
        <div class="row text-center pt-4 test-brightnes">
            <div class="col-lg py-2">
                <h1>Je suis disponible pour toute réalisation d'un projet ou pour la collaboration à celui-ci.</h1>
                <br> 
                <a href="#contact"><button id="slide">CONTACTEZ MOI</button></a>
             </div>
        </div>
    </div>
  </section>


<!-- Contact Section -->
    <section id="contact" class="contact-section pt-5 pb-4">
        <div class="col text-center py-5">
        <h1 class="display-4 font-title aniview" data-av-animation="fadeInUp">Contact</h1>

            <h5 style="color: #E1E1E1;">___________</h5>
          </div>
        <div class="container">
            <div class="row">
                <!-- Form -->
                <div class="col-md-6">
                   <!-- Contact-->
                    <h5>ENVOYEZ-MOI UN MESSAGE</h5>
                        <div class="card-body px-4" id="contactForm" style="border: 1px solid #b1a7a7; border-radius: 21px;">
                          <form action="form.php" method="POST">
                            <div class="form-group">
                              <!-- Show the success message here -->
                            </div>
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                              <label for="email">E-Mail</label>
                              <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
                            </div>
                            <div class="form-group">
                              <label for="subject">Subject</label>
                              <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                                required>
                            </div>
                            <div class="form-group">
                              <label for="message">Message</label>
                              <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
                                required></textarea>
                            </div>
                            <div class="form-group">
                              <input type="submit" name="submit" value="ENVOYER" class="btn btn-success btn-block" id="sendBtn">
                            </div>
                          </form>
                        </div>
                        

                    <!-- <form method="POST" action="form.php" class="pt-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" style="background-color: #F7F7F7;" name="name" id="name" placeholder="Entrer votre nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input  type="email" style="cursor: pointer;" name="email"  id="email" class="bg-light form-control" placeholder="exemple@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="name">Sujet</label>
                            <input type="text" name="Sujet" style="background-color: #F7F7F7;"  id="subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea  name="message" id="message" style="background-color: #F7F7F7;" class="form-control"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">
                    </form> -->
                </div>
                <!-- Map-->
                <div class="col-md-6"> 
                    <div class="row my-3">
                        <div class="col-sm-6">
                            <img style="width: 35px; height: 38px;" class="pb-1" src="phone.png" alt="" srcset="">
                            <strong>Télephone : </strong> <a style="text-decoration: none; color:black;" href="tel:0620618366">06 20 61 83 66</a>
                           
                        </div>
                        <div class="col-sm-6">
                            <img style="width: 32px; height: 36px;" class="pb-1" src="location.png" alt="" srcset="">
                            <strong>Adresse : </strong> Qu Mouazarne Ait Ourir
                        </div>

                    </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27197.138638995326!2d-7.6850924404538725!3d31.561429124425956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda55093ca9ba31d%3A0xb7aedeee06d07724!2sA%C3%AFt%20Ourir!5e0!3m2!1sfr!2sma!4v1578184006972!5m2!1sfr!2sma"
                            height="450" 
                            width="100%"
                            frameborder="0" 
                            style="border:0;" allowfullscreen="">
                        </iframe>
                </div>
            </div>
        </div>
    </section>
    <div class="space" style="width: 100%; height: 110px; border : 3px solid white;"></div>

    <!-- Fotter -->
    <footer class="text-center text-white pt-3 mt-4" style="background-color: #1a1e23;">
       <div class="container">
           <div class="row align-items-center" style="width: 100%; height: 100px;">
               <div class="col">
                   <strong>Soufian El Habib</strong>
                   <p>Copyright &copy; <span id="year"></span></p>
               </div>
           </div>
       </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

    
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>


    <script src="app.js"></script>
    <script src="progressbar.js"></script>

    <!-- Scroll Links  -->
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/highlight.min.js"></script>
    <script type="text/javascript" src="jquery-aniview-master/dist/jquery.aniview.js"></script>
   
    <script  src="js/script.js"></script>

    <script src="smoth/dist/smooth-scroll.min.js"></script>
    <script src="smoth/dist/smooth-scroll.polyfills.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    
    

  </body>
</html>