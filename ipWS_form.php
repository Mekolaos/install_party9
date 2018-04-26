<?php
	
	$success = $fail = 0;
	$nameIPws = $emailIPws = $fnameIPws = $whyIPws = $idWS = "";
	if(!empty($_POST)){
		if(isset($_POST["signupIPws"])){
			$P = $_POST;
			$idWS = htmlspecialchars($P["idWS"]);
			$nameWS = htmlspecialchars($P["nameWS"]);
			$nameIPws = htmlspecialchars($_POST['nameIPws']);
			$fnameIPws = htmlspecialchars($_POST['fnameIPws']);
			$emailIPws = htmlspecialchars($_POST['emailIPws']);
			$whyIPws = htmlspecialchars($P["aboutWS"]);

			if(!empty($nameIPws) && !empty($emailIPws) ){

			include("../db/configTwo.php");

			$email_exists = $db->select("ipworkshop", "email", ["AND"=>["email[=]"=> $emailIPws,"id_ws[=]"=>$idWS]]);

			$email_existsTwice = $db->count("ipworkshop", ["email[=]"=> $emailIPws]);

				if($email_exists){
					$fail = "email";
				}else if($email_existsTwice == 2){
					$fail = "emailTwice";
				}
					else{
					$new_guest = $db->insert("ipworkshop", [
						"name"=> $nameIPws,
						"fname"=> $fnameIPws,
						"id_ws" => $idWS,
						"email"=> $emailIPws,
						"waiting"=> $whyIPws,
						"signedup_at"=> gmdate("Y-m-d H:i:s", strtotime("+1 hour"))
					]);
					if($new_guest){
						$success = 1;
						require("mailerIP.php");
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