<?php
    $success = $fail = 0;
    $nameIP =  $fnameIP = $emailIP = $professIP = $organIP = $socIP = $aboutOS = $aboutOMC = $aboutEvent  = "" ;
    if(!empty($_POST)){
        if(isset($_POST["signupIP"])){
            $P = $_POST;
            $fnameIP = htmlspecialchars($P["fnameIP"]);
            $nameIP = htmlspecialchars($P["nameIP"]);
            $emailIP = htmlspecialchars($P["emailIP"]);
            $professIP = htmlspecialchars($P["professIP"]);
            $organIP = htmlspecialchars($P["organIP"]);
            $socIP = htmlspecialchars($P["socIP"]);
            $aboutOS = htmlspecialchars($P["aboutOS"]);
            $aboutOMC = htmlspecialchars($P["aboutOMC"]);
            $aboutEvent = htmlspecialchars($P["aboutEvent"]);
            
            if(!empty($nameIP) && !empty($emailIP) ){

            include("../db/configTwo.php");

            $email_exists = $db->select("ipreg", "emailip", [ "emailip"=> $emailIP ]);

                if($email_exists){
                    $fail = "email";
                }
                else{
                    $new_guest = $db->insert("ipreg", [
                        "nameip"=> $nameIP,
                        "fnameip"=> $fnameIP,
                        "emailip"=> $emailIP,
                        "professIP"=> $professIP,
                        "organip"=> $organIP,
                        "socip"=> $socIP,
                        "aboutOS"=> $aboutOS,
                        "aboutOMC"=> $aboutOMC,
                        "aboutEvent"=> $aboutEvent,
                        "signedup_at"=> gmdate("Y-m-d H:i:s", strtotime("+1 hour"))
                    ]);
                    if($new_guest){
                        $success = 1;
                        require("mailerIPreg.php");
                    }
                    $success = $new_guest ? 1 : 0;

                }

            }else{
                $fail = "empty";
            }
        }else{
            $fail = "empty";
        }

    }
?>