<?php
    if(isset($_POST["signupIPws"])){
        if($success){
            echo
            '<div class="overlay">
                <div class="msg success">'.
                    '<div class="msg_inner success_inner">'.
                        '<h2 id="ggWS">Votre pré-inscription a été bien effectuée !</h2>'.
                        '<p> Vous venez de recevoir un mail, à très bientôt !</p>'.
                    '</div>'.
            '   </div>
             </div>';
        }

        if($fail){
            if($fail == "emailTwice"){
                $msg_header= "Vous êtes déjà inscrit dans deux workshops !";
                $msg = "Navrés ! Les places étant limitées, vous ne pouvez plus vous inscrire à d'autres ateliers.";
            }else{

            $msg_header = $fail=="email" ? "Email déjà utilisé :(" : "Valeurs manquantes :(";
            $msg = $fail=="email" ? "Soit vous êtes déjà inscrit, soit quelqu'un d'autre a utilisé votre e-mail." : "Veuillez vérifier les valeurs entrées.";
            }
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