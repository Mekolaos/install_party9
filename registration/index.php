<?php
include('../config.php');
	session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Install Party 9 | Inscriptions</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script
src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="icon"
	 href="../images/ip9.svg"/>


<script>
var rb;
window.onload=function(){
	rb=document.getElementById("knownyes");
	rb.addEventListener("change",function(e){
		if(rb.checked){
			document.getElementById("kakashi").style.display="initial";}
	});
	rc=document.getElementById("knownno");
	rc.addEventListener("change",function(e){
		if(rc.checked){
			document.getElementById("kakashi").style.display="none";
		}
	});
}
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

	<p style="text-align: center"><img src="../images/ip9-logo.svg" style="height: 160px; width: 210px;"></p>

  <!-- <h1 class="register-title">Install Party 9</h1> -->
  <form class="register" method="post" action="../index.php">
	<?php
		if(isset($_SESSION['error'])){
			echo '<div style="color: #A72020; font-weight: bold; text-align: center; margin-bottom: 10px;">'.$_SESSION['error'].'</div>';
			unset($_SESSION['error']);
		}
	?>
	<input required type="text" class="register-input" placeholder="Nom" name="nom" oninvalid="this.setCustomValidity('Veuillez entrer une saisie valide')">
	<input required type="text" class="register-input" placeholder="Prénom" name="prenom" oninvalid="this.setCustomValidity('Veuillez entrer une saisie valide')">
	<br/>
	<p> Êtes vous un étudiant ? </p>
	<br/><div class="register-switch">
	<input type="radio" name="known" value="none" id="knownyes"
class="register-switch-input" >
		<label for="knownyes" class="register-switch-label">Oui</label>
	<input type="radio" name="known" value=0 id="knownno"
class="register-switch-input" checked>
		<label for="knownno" class="register-switch-label">Non</label></div>


   <br/>
	<div id="kakashi">
	<p> Établissement d'étude : </p><br/>

	<input required type="text" class="register-input" placeholder="Établissement" name="etablissement" oninvalid="this.setCustomValidity('Veuillez entrer une saisie valide')">

	</div>
<br/>


	<input required type="email" class="register-input" placeholder="Email" name="email" oninvalid="this.setCustomValidity('Veuillez entrer une saisie valide')">
	<input required type="text" class="register-input" placeholder="N° de téléphone" name="telephone" oninvalid="this.setCustomValidity('Veuillez entrer une saisie valide')">


	<br/>

	<br/><br/>
	<div id="put">
	<p> Quel activité vous intéresse ?</p><br/>

	 <input type="checkbox" name="ctf" value="ctf"> Capture The Flag. <br>
	 <input type="checkbox" name="git" value="git"> Git<br>
	 <input type="checkbox" name="gimp" value="gimp"> GIMP/Inkscape<br>
</div>
<br/><br/><br/> 

	<p> Motivation</p>
		<input required name="interested" type="text" id="interested" class="register-input" placeholder="Je suis interessé(e) parce que .."><br/><br/>
  <br/><br/>
	<div class="g-recaptcha" data-sitekey="<?php echo $api_secret?>"></div>
	<input type="submit" name="submit" value="Inscription" class="register-button" >
  </form>



</body>
</html>
