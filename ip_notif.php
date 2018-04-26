<?php
    if(isset($_POST["signupIP"])){
        if($success){ 
            echo'
            <div class="overlay" id="overly">
                <div class="msg success" id="overl">
                    <div class="msg_inner success_inner" id="over">
                        <h2 id="goWSTit">Votre inscription a bien été effectuée !</h2>
                        <a id="goWS" href="#reg_ws">Cliquez ici pour vous inscrire aux Workshop
                        </a>
                    </div>
               </div>
               
             </div>
             
             ';
        }

        if($fail){
            $msg_header = $fail=="email" ? "Email déjà utilisé :(" : "Valeurs manquantes :(";
            $msg = $fail=="email" ? "Soit vous êtes déjà inscrit, soit quelqu'un d'autre a utilisé votre e-mail." : "Veuillez vérifier les valeurs entrées.";

            echo
            '<div class="overlay">
                <div class="msg fail">'.
                    '<div class="msg_inner fail_inner">'.
                        '<h2>'.$msg_header.'</h2>'.
                        '<p>'.$msg.'</p>'.
                    '</div>'.
            '   </div>
             </div>';
        }
    }
?>
<style>
#goWS{
    font-size: 22px;
    color: #0e1f34;
    opacity: 0.7;
    font-family: bitch_one;
    font-weight: bold;
}
#goWS:hover{
    opacity: 1;
}   
</style>