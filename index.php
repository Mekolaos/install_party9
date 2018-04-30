<?php
include('config.php');
include('mail/mail.php'); // Here we include the config file

session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
                <!--=====================================================-->
                <!--============ With <3 By Humans Of OMC ===============-->
                 <!--===================== 2018 ========================-->
                   <!-- == U2HDr2QgWmlhbmkgZXQgWWFuaXMgS2hlbG91ZmkK ==-->
                 
    <title>Install Party 9 | OpenMindsClub</title>
    <link rel="icon" type="png" href="images/ip9-logo.png" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <meta name="keywords" content="install party, openmindsclub, opensource, libre, free, usthb, GNU/Linux, openscience, contribution, ce qui ne se partage pas se perd, agence universitaire de la francophonie- algérie, centre des ressources informatiques- usthb"> 
    <meta name="description" content="Du terme anglais traduit littéralement par «fête d'installation», l'Install Party est l’événement phare du club OpenMinds et est organisé chaque année depuis sa création. Ce dernier permet de faire rencontrer des utilisateurs expérimentés des systèmes basés sur des logiciels libres (tels que GNU/Linux) et les novices. A cet effet, sont organisés durant toute une journée des cycles de talks grand public, des workshops, une tombola, des concours et moult autres activités autour de la philosophie Libre/Open Source."/>
    <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="lightbox/lity.css" rel="stylesheet">
    <?php
        require_once('ip_needed_css.php');
    ?>
  </head>
  
  <body>
    <!--=====================================================-->
    <!--==================== Preloader ======================-->
    <!--=====================================================-->
    <div id="preloader">
        <div id="status"><div class="mdl-spinner mdl-js-spinner is-active" ></div></div>
    </div>
    
    <!--=====================================================-->
    <!--==================== Mobile nav =====================-->
    <!--=====================================================-->
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right " id="cbp-spmenu-s2" style="z-index:2200">
        <nav id="mobile_menu_content">
            <ul>
                <li><a href="#iphome" >Accueil</a></li>
                <li><a href="#history">Présentation</a></li> 
                <li><a href="#agenda">Programme</a></li>
                <li><a href="#sponsors">Sponsors</a></li>
                <li><a href="#organizers">Organisation</a></li>
            </ul> 
        </nav>     
    </div>
    
    <!--=====================================================-->
    <!--==================== NAVIGATION =====================-->
    <!--=====================================================-->
    <section style="background-position:fixed;background:url(images/degradé_v4.png)bottom no-repeat #1f324c;background-size:cover;height:900px;width:100%;text-align:center;box-shadow: inset 0 0 0 1000px rgba(0,0,0,.4);" class="hero_fullscreen mdl-color--primary mdl-color-text--color-1 menu_bar-waypoint " data-animate-down="menu_bar-hide" data-animate-up="menu_bar-hide" id="iphome">
        <!--************ Logo and navigation MAIN ***************-->
        <div id="topBarMain" class="top_bar home_anim1">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-left">
                    <nav class="navigation_desktop visible-lg visible-md visible-sm navigation_js" ">
                        <ul>
                            <li><a href="#iphome" >Accueil</a></li>
                            <li><a href="#history">Présentation</a></li> 
                            <li><a href="#agenda">Programme</a></li>
                            <li><a href="#sponsors">Sponsors</a></li>
                            <li><a href="#organizers">Organisation</a></li>
                             
                        </ul>
                    </nav>
                    <nav class="navigation_desktop hidden-lg hidden-md hidden-sm mobile_open_button" opacity="0.5">
                        <ul><li><button class="mdl-button mdl-js-button mdl-button--icon" id="showRight_1"><i class="material-icons">&#xE5D2;</i></button></li></ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--******************** Main content ***********************-->
        <div class="container" id="main_content" style="margin-top: 60px;">
            <div class="content_container row ip_home_content"  >
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ip_main align-center home_anim2">
                <img src="images/ip9-logo.png" class="home_anim5 logo"/>  
             </div>
            </div>  
        </div>
    </section>

    <!--=====================================================-->
    <!--==================== Menu bar =======================-->
    <!--=====================================================-->
    <header id="menu_bar" class="menu_bar" data-animate-down="menu_bar-show" 
    style="background: url(images/header1.png)bottom no-repeat fixed;height: 55px; background-size: cover;" >
        <div class='row'>
            <div>
            <nav class="navigation_desktop visible-lg visible-md visible-sm navigation_js">
                <!-- Scroll Menu -->
                <ul>
                    <li><a href="#iphome" >Accueil</a></li>
                    <li><a href="#history">Présentation</a></li> 
                    <li><a href="#agenda">Programme</a></li>
                    <li><a href="#sponsors">Sponsors</a></li>
                    <li><a href="#organizers">Organisation</a></li>       
                    
                    
                </ul>   
                <div id="countDown" >
                      <div>
                            <span id="day" class="countTime" ></span>
                            <span id="dayWord" class="countWord"></span>
                            <span id="hour" class="countTime"></span>
                            <span id="hourWord" class="countWord"></span> 
                            <span id="min" class="countTime"></span>
                            
                            
                      </div>
                    </div>  
            </nav>
            </div>
            
                </div>
            <nav class="navigation_desktop hidden-lg hidden-md hidden-sm mobile_open_button">
                <ul><li><button class="mdl-button mdl-js-button mdl-button--icon" id="showRight_2"><i class="material-icons">&#xE5D2;</i></button></li></ul>
            </nav>
        
    </header>
        
    <!--=====================================================-->
    <!--======================= History =====================-->
    <!--=====================================================-->
    <section style="background-position:fixed;background-color: #fff; 
        background-size:cover;text-align:center;" id="history" data-animate-down="menu_bar-show" data-animate-up="menu_bar-hide" class="mdl-color-text--color-2 menu_bar-waypoint subsection_activite">
                <div class="container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 align-center features_anim5">
                     <img id="osLogo" src="images/thebasics-logo.png" style="height: 190px;" class="home_anim5 logo"/>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 align-center features_anim6">
                     
                     <p class="text_desc">
                        Pour cette neuvième edition de l'Install Party, l'idée de la thématique sera de revenir aux sources du Libre et de l'OpenSource, à travers une journée exclusivement &laquo; The Basics &raquo;.
                        Nos conférences, seront animées par des experts de la philosophie, et pour la première fois, serviront de guide pour les plus ambitieux, sur comment réussir son projet OpenSource et comment protéger ses droits sur son propre projet ?
                        Qu'est-ce qu'un projet OpenSource ? Existe-il des exemples qui ont pu réussir en faisant de leur projets, des projets communautaires ? Pourquoi un projet communautaire ? Comment contribuer à un projet OpenSource ? Sont des questions pour lesquelles Open Minds Club tient à apporter des réponses à travers une série de conférences, des ateliers applicatifs, et évidemment des installations du système d'exploitation Libre et OpenSource GNU/Linux; ainsi que le dernière version Ubuntu 18.04 en exclusivité lors de cette Install Party 9 !

                     </p>
                     <h4 class="section_titles" id="heightEd" style="color: #364e88"> C'est quoi GNU/Linux Install Party ?</h4>
                     <p class="text_desc">
                      Du terme anglais traduit littéralement par &laquo;fête d'installation &raquo;, l'Install Party est l'évènement phare du club Open Minds et est organisé chaque année depuis sa création. Ce dernier permet de faire connaître la philosophie du Libre Open Source et de provoquer la rencontre d'utilisateurs initiés aux outils libres - tels que GNU/Linux - et de néophytes curieux. À cet effet, sont organisés durant toute une journée des cycles de talks grand publique, des workshops, des concours et moult autres activités dont la traditionnelle tombola, toujours autour de la philosophie Libre/Open Source.
                     </p>
                     
                </div>
              </div>
              <form action="registration/index.php" target="_blank">
  <input type="submit" value="inscription" class="register-button" >
</form>

                    <!--***** !-->
                    <?php
if(isset($_POST)){
  $response = $_POST["g-recaptcha-response"];
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array(
    'secret' => $api_secret,
    'response' => $_POST["g-recaptcha-response"]
  );
  $options = array(
    'http' => array (
      'method' => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context = stream_context_create($options);
  $verify = file_get_contents($url, false, $context);
  $captcha_success=json_decode($verify);
  if ($captcha_success->success==false) {
    $_SESSION['error'] = 'Captcha invalide.';
    header('Location: http://openmindsclub.net/ip9/registration');
  } else if ($captcha_success->success==true) {
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      // Send an email
      $prenom = $_POST['prenom'];
      sendEmail($email,$prenom);
      // Enter in database
      $bdd=new PDO($dbname, $user);
      $req=$bdd->prepare('INSERT INTO insciption (nom,prenom,known,etablissement,email,telephone,ctf,git,gimp,interested) VALUES(?,?,?,?,?,?,?,?,?,?)');
      $arr['nom'] = htmlspecialchars($_POST['nom']);
      $arr['prenom'] = htmlspecialchars($_POST['prenom']);
      $arr['known'] = htmlspecialchars($_POST['known']);
      $arr['etablissement'] = htmlspecialchars($_POST['etablissement']);
      $arr['email'] = htmlspecialchars($_POST['email']);
      $arr['telephone'] = htmlspecialchars($_POST['telephone']);
      $arr['ctf'] = htmlspecialchars($_POST['ctf']);
      $arr['git'] = htmlspecialchars($_POST['git']);
      $arr['gimp'] = htmlspecialchars($_POST['gimp']);
      $arr['interested'] = htmlspecialchars($_POST['interested']);
      $res = $req->execute(array($arr['nom'],$arr['prenom'],$arr['known'],$arr['email'],$arr['telephone'],$arr['ctf'],$arr['git'],$arr['gimp'],$arr['interested']));
      //Success popup
      echo
        '<div id="overlay">
        <div class="msg success">'.
        '<div class="msg_inner success_inner">'.
        '<h2>Votre inscription a été réussie !</h2>'.
        '<p> Veuillez vérifier votre e-mail pour plus d\'informations.</p>'.
        '</div>'.
        '   </div>
        </div>';
    }else{
      $_SESSION['error'] = 'Email invalide.';
      header('Location: http://openmindsclub.net/ip9/registration');
    }
  }
}
 ?>
 <script>window.onload = function (){saske=document.getElementById("overlay");
setTimeout(function(){ saske.style.display="none";}, 5000);};
</script>
            
                    <!-- 1st Line -->
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 align-center features_anim7">
                    <h4 class="section_titles" id="heightEd" style="color: #364e88"> Speakers</h4>
                </div>
                <br/><br/>
              <div id="owl-demo" class="owl-carousel owl-theme" style="width: 300px">

                 
                <div class="item"><a href="images/NLP_descriptions.jpg" data-lity="gal"><img src="images/nlp.png" class="himage" /> <div class="middle"><div class="kakashi"><a href="images/NLP_descriptions.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></a></div>
                <div class="item""><a href="images/sage_descriptions.jpg" data-lity="gal"><img src="images/sagem.png" class="himage" height="200px" width="300px" /><div class="middle"><div class="kakashi"><a href="images/sage_descriptions.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></a></div>
                <div class="item lsb-preview"><a href="images/open_stack_descriptions.jpg" data-lity="gal"><img src="images/openstack.png" class="himage" height="200px" width="300px" /><div class="middle"><div class="kakashi"><a href="images/open_stack_descriptions.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></a></div>
                <div class="item lsb-preview"><a href="images/wiseway_descriptions.jpg" data-lity="gal"><img src="images/openproj.png" class="himage" height="200px" width="300px" /><div class="middle"><div class="kakashi"><a href="images/images/wiseway_descriptions.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></a></div>
                <div class="item lsb-preview"><a href="images/debat_descriptions.jpg" data-lity="gal"><img src="images/elquaada.png" class="himage" height="200px" width="300px" /><div class="middle"><div class="kakashi"><a href="images/debat_descriptions.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></a></div>
                <div class="item lsb-preview"><h1>6</h1></div>
              </div>
              
                 <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 align-center features_anim7" >
                    <h4 class="section_titles" id="heightEd" style="color: #364e88"> Workshops</h4>  
                </div>
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                
              <div id="owl-demo" class="owl-carousel owl-theme" style="width: 300px; margin: auto; ">
                 
                <div class="item"><a href="images/ws_gimpinkscape.jpg" data-lity="lad"><img class="himage" src="images/mntr-graphisme.png" style="height: 200px;" /><div class="middle"><div class="kakashi"><a href="images/ws_gimpinkscape.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></a></div>
                <div class="item"><a href="images/ws_ctf.jpg" data-lity="lad"><img class="himage" src="images/mntr-ctf.png" style="height: 200px;" /><div class="middle"><div class="kakashi"><a href="images/ws_ctf.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></div>
                <div class="item"><a href="images/ws_git.jpg" data-lity="lad"><img class="himage" src="images/mntr-git.png" style="height: 200px;" /><div class="middle"><div class="kakashi"><a href="images/ws_git.jpg" data-lity="gal"><img src="images/plus.png" style="height: 40px; width: 40px;" /></a></div></div></div>
              </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 align-center features_anim7" >
                    <h4 class="section_titles" id="heightEd" style="color: #364e88">Install the free OS: </h4>
                    
                    
                    
                     
                </div>
                <br/><br/>
                <p class="text_desco" style="text-align: center;" > Installez Ubuntu 18.04 :</p>
                    <a href="images/ubuntu.png" data-lity="frank"> <img src="images/ubuntu_presentation.jpg"/></a> 
                    
                    <p class="text_desc" style="text-align: center;"> Installez Manjaro :</p>
                    <a href="images/manjaro.jpg" data-lity="frank"><img src="images/manjaro_presentation.jpg"/></a>
                    
                    <p class="text_desc" style="text-align: center;"> Pour une installation dans de bonnes conditions, sauvegardez vos fichiers importants et défragmentez votre disque dûr à l'avance. Bonne installation !</p>
</section>
<<<<<<< HEAD
    
=======


>>>>>>> c1ab8e7ec6654c6073f7fc90c0f9301506dd7063

    <!--=====================================================-->
    <!--======================== Agenda =====================-->
    <!--=====================================================-->
    <section style="background-position:fixed;background-color: #fff; 
        background-size:cover;text-align:center;" id="agenda" data-animate-down="menu_bar-show" data-animate-up="menu_bar-show" class="mdl-color-text--color-2 menu_bar-waypoint subsection_activite">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-lg-10 col-md-offset-2 col-lg-offset-1 align-center features_anim3">
                    <h4 class="section_titles" style="color: #364e88"> Programme</h4>
                     <h4 id="ip_soon">En cours...</h4>
                    <!--  <img src="images/programme.png" id="prgm" /-->
                </div>
            </div>
        </div>
    </section>

    <!--=====================================================-->
    <!--================== Sponsors ============================-->
    <!--=====================================================-->
    <section style="background-position:fixed;background-color: #fff; 
        background-size:cover;text-align:center;" id="sponsors" class="mdl-color-text--color-2 subsection_sponsors">
        <div class="container">
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-lg-10 col-md-offset-2 col-lg-offset-1 align-center features_anim3">
                    <h4 class="section_titles" style="color: #364e88"> Golden Sponsor</h4>
                  </div>


              <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-lg-10 col-md-offset-2 col-lg-offset-1 align-center features_anim3">
                      <a href="https://www.poste.dz/" target="_blank"><img src="images/poste.png" alt="Ooooy" class="spons"  
                      id="poste"></a>
                  </div>
              <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-lg-10 col-md-offset-2 col-lg-offset-1 align-center features_anim3">
                    <h4 class="section_titles" style="color: #364e88"> Partenaires</h4>
                  </div>
                
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 align-center features_anim7" style="padding: 20px">

                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-left features_anim7">
                      <img src="images/auf.png" alt="Ooooy" class="spons" 
                      id="auf">
                  </div>
                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-left features_anim7">
                      <img src="images/sacs.png" alt="Ooooy" class="spons" 
                      id="sacs">
                  </div>
                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center features_anim7">
                      <img src="images/usthb.png" alt="Ooooy" class="spons"
                      id="usthb">
                  </div>
                  
                  
                </div>

                

                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-lg-10 col-md-offset-2 col-lg-offset-1 align-center">
                    
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 align-center features_anim6">
                    <h4 class="section_titles" id="heightEd" style="color: #364e88"> pourquoi devenir sponsor ?</h4>
                     <p class="text_desc">
                      Depuis la création du club, la GNU/Linux Install Party est organisée chaque année et a toujours été totalement indépendante et financée par les contributions des membres et de la communauté du Libre Open Source. Pour cette neuvième édition, nous avons vu plus grand, et pour ce faire nous avons décidé d’ouvrir la porte aux sponsors et de s’inscrire comme acteur important de notre communauté en contribuant du mieux qu’ils peuvent au bon déroulement de notre événement.
                     </p>
                   </div>
                    <form method="get" action="IP9_Sponso.pdf" target="_blank">
  <input type="submit" value="Télécharger le dossier de sponsoring"  class="register-button" style="width: 50%" >
</form>
                    
                    
                </div>
            </div>
        </div>
        
    </section>


    <!--=====================================================-->
    <!--===================== Organizers ====================-->
    <!--=====================================================-->
    <section style="background-position:fixed;background-color: #fff; 
        background-size:cover;text-align:center;" id="organizers" class="mdl-color-text--color-1 subsection_bureau">
        <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 align-center">
                    <h4 class="section_titles" style="color: #364e88">Organisation</h4>

            </div>
            <div id="organiz" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 align-center screenshots_anim4">
                    <!-- 1st Line -->
                    <div id="mem1" onclick="myOrgFunction(1,2)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/Amira-min.png" width="100%" />
                    </div>
                    <div id="memDesc1"  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Amira</p>
                       <p class="nameMem1"> Ketfi</p>
                       <p class="postMem">Chef de projet</p>
                       <p class="equipeMem">IP9</p>
                    </div>
                    
                     <div id="mem2" onclick="myOrgFunction(2,3)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/lisa.png" width="100%" />
                    </div>
                    <div id="memDesc2" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Lisa</p>
                       <p class="nameMem1"> Aït Mouloud</p>
                       <p class="postMem">Chargé de</p>
                       <p class="equipeMem">communication</p>
                    </div>

                    <div id="mem3" onclick="myOrgFunction(3,7)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/fella.png" width="100%" />
                    </div>
                    
                    
                    <div id="mem4" onclick="myOrgFunction(4,8)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/manel.png" width="100%" />
                    </div>
                    <!--***** -->

                    <!-- 2nd Line -->

                    <div id="mem5" onclick="myOrgFunction(5,6)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/reda.png" width="100%" />
                    </div>
                    <div id="memDesc5" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Redha</p>
                       <p class="nameMem1"> Mebarek</p>
                       <p class="postMem">Chef d'équipe</p>
                       <p class="equipeMem">tech</p>
                    </div>

                    <div id="mem6" onclick="myOrgFunction(6,7)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/boudjemaa.jpg" width="100%" />
                    </div>
                    <div id="memDesc6" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Boudjemaa</p>
                       <p class="nameMem1"> Chikhaoui</p>
                       <p class="postMem2">Web designer</p>
                    </div>

                    <div id="memDesc3" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Fella</p>
                       <p class="nameMem1"> Lazouni</p>
                       <p class="postMem">Chef d’équipe</p>
                       <p class="equipeMem">réception</p>
                    </div>
                    <div id="memDesc8" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Sofiane</p>
                       <p class="nameMem1"> MEdjkoune</p>
                       <p class="postMem">Chef d'équipe</p>
                       <p class="equipeMem">logistique</p>
                    </div>
                    <div id="mem7" onclick="myOrgFunction(7,8)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/salim.png" width="100%" />
                    </div>
                    <div id="memDesc7" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Salim</p>
                       <p class="nameMem1"> Feddal</p>
                       <p class="postMem">Chargée des</p>
                       <p class="equipeMem">activités</p>
                    </div>
                    

                    <div id="memDesc4" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Manel</p>
                       <p class="nameMem1" id="lis"> Mensouri</p>
                       <p class="postMem">Chargée des</p>
                       <p class="equipeMem">workshops</p>
                    </div>
                    <div id="mem8" onclick="myOrgFunction(8,7)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/sofiane.png" width="100%" />
                    </div>
                    <div id="mem9" onclick="myOrgFunction(9,10)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/Yacin-min.png" width="100%" />
                    </div>
                    <div id="memDesc9"  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Yacine</p>
                       <p class="nameMem1"> Arab</p>
                       <p class="postMem">Chef de la</p>
                       <p class="equipeMem"> team design</p>
                    </div>
                    <div id="mem10" onclick="myOrgFunction(10,11)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/mahfoud.png" width="100%" />
                    </div>
                    <div id="memDesc10"  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Mahfoud</p>
                       <p class="nameMem1"> Merzoug</p>
                       <p class="postMem">Chargé des speakers</p>
                    </div>
                    <div id="mem11" onclick="myOrgFunction(11,12)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/Rayon-min.png" width="100%" />
                    </div>
                    <div id="memDesc11"  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Rayane</p>
                       <p class="nameMem1"> Bourkaïb</p>
                       <p class="postMem">Chef de la</p>
                       <p class="equipeMem"> team stand</p>
                    </div>
                    <div id="mem12" onclick="myOrgFunction(12,10)" class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg">
                        <img src="images/nadjib.png" width="100%" />
                    </div>
                    <div id="memDesc12"  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 align-center screenshots_anim3 vignOrg divMem">
                       <p class="nameMem"> Nadjib</p>
                       <p class="nameMem1"> Brahim-Djelloul</p>
                       <p class="postMem">Chef de la</p>
                       <p class="equipeMem"> team audiovisuelle</p>
                    </div>
                    <!--***** -->
                  
              </div>
          </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 align-center">
            <p class="text_desco">Et merci à toute l'équipe d'OMC pour leur travail !</p> 
          </div>
            <div > 
                    <p class="org"><img src="images/la_team.jpg" /> </p>
                    </div>
                    <div class="container">
            <div class="row">
              <div id="social_links" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block clearfix align-center ">
                            <a target="_blank" href="https://www.facebook.com/openmindsclub">
                            <img id="fb"
                                src="images/fb-c.svg"/>
                            </a>
                
                            <a target="_blank" href="https://www.instagram.com/openmindsclub/">
                            <img id="ig" 
                                src="images/instagram.png"/>
                            </a>
                
                            <a target="_blank" href="https://twitter.com/clubopenminds" >
                            <img id="tw"  
                                src="images/twit-c.svg"/>
                            </a>
                
                            <a target="_blank" href="https://www.youtube.com/channel/UCTS5jQGSPHuuibdqLUqFAqw">
                            <img id="yt"  
                                src="images/yout-c.svg"/>
                            </a>
                            
                            
                    </div>
                
          </div>
        </div>
    </section>

    <!--=====================================================-->
    <!--====================== Footer =======================-->
    <!--=====================================================-->
    <section id="footer" style="background:url(images/footer.png);background-size:cover;height:15%;width:100%;">
                <div id="myFoot"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-block clearfix align-center ">
                    <a target="_blank" href="http://www.openmindsclub.net/"><img src="images/logo.png" /></a>
                </div>
    </section>

    <!--======================================================================-->
    <!--======================================================================-->
    
    <!--=====================================================-->
    <!--================== JAVASCRIPT NEEDED ================-->
    <!--=====================================================-->


<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="lightbox/lity.min.js"></script>
<script src="lightbox/jquery.js"></script>
<script src="../js/jquery-2.2.4.min.js?v=1.3"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <?php
        require_once('ip_needed_js.php');
    ?>
  </body>
</html>


