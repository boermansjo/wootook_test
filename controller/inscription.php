<?php

require_once dirname(__DIR__) . "/tools/includes.php";
require_once dirname(__DIR__) . "/controller/message.php";


$infos_complete = true;

//Validation de l'username
if (isset($_POST["identifiant"]) && wordLength_respected($_POST["identifiant"], SIGNE_SUP_EGAL, 3)) {
    //TODO: Vérifier que le pseudo n'est pas déjà utilisé...
    $identifiant = EncodeString($_POST["identifiant"]);
} else {
    $infos_complete = false;
}

//Validation du mot de passe.
if (isset($_POST["motdepasse"]) && wordLength_respected($_POST["motdepasse"], SIGNE_SUP_EGAL, 3)) {
    $motDePasse = EncodeString($_POST["motdepasse"]);
} else {
    $infos_complete = false;
}

//Validation de l'email
if (isset($_POST["email"]) && wordLength_respected($_POST["email"], SIGNE_SUP_EGAL, 3)) {
    //TODO: Vérifier que l'email n'est pas déjà utilisé...
    $email = EncodeString($_POST["email"]);
} else {
    $infos_complete = false;
}

//Validation du nom de planète
if (isset($_POST["PM"]) && wordLength_respected($_POST["PM"], SIGNE_SUP_EGAL, 3)) {
    $planeteMere = EncodeString($_POST["PM"]);
} else {
    $infos_complete = false;
}

//Toutes les informations sont complètes...
if ($infos_complete) {
    $verif = UtilisateurDAL::compterMemeNomUtilisateur($identifiant, $email);
    if ($verif > 0) {
		message($lang['error_isset_user'],$lang['title_sign'],"". WOOTOOK_WEB_URL ."",MESSAGE_WARNING);
	}else{
		//Création planète
		//...
		//Création utilisateur
		$u = new Utilisateur();
		$u->setIdentifiant($identifiant);
		$u->setMotDePasse($motDePasse);
		$u->setEmail($email);
		UtilisateurDAL::insertUtilisateur($u);
		
		message(sprintf($lang['sign_finish'],$identifiant,$lang['return_mail']),$lang['title_sign'],null, MESSAGE_SUCCESS);
		# voir pour creer la session direct avec redirection!
	}
} else {
    //TODO: afficher erreur...
	message($lang['error_champs_empty'],$lang['title_sign'],"". WOOTOOK_WEB_URL ."",MESSAGE_ERROR);
    var_dump($_POST);
}
?>
