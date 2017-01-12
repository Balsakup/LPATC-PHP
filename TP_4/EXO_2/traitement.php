<?php
function controlerEmail($valeur) {
	$exp_reg = "^[[:alnum:]_.-]+"."@"."[[:alnum:]_.-]+\."."([[:alnum:]]{2,3})$"; //EMAIL   
	if (ereg($exp_reg, $valeur)) return true;
    	else return false;
}

function controlerDate($valeur) {
    if (preg_match("/^(\d{1,2})[\/|\-|\.](\d{1,2})[\/|\-|\.](\d\d)(\d\d)?$/", $valeur, $regs)) {
        $jour = ($regs[1] < 10) ? "0".$regs[1] : $regs[1]; 
        $mois = ($regs[2] < 10) ? "0".$regs[2] : $regs[2]; 
        if ($regs[4]) $an = $regs[3] . $regs[4];
              if (checkdate($mois, $jour, $an)) return true;
        else return false;
    }
    else return false;
}


function controlerAlphanum($valeur) {
    if (preg_match("/^[\w|\d|\s|'|\"|\\|,|\.|\-|&|#|;]+$/", $valeur)) return true;
    else return false;
}   

function controlerNum($valeur, $strict=false) {
    if ($strict) {
        if (ereg("^[0-9]+$", $valeur)) return true;
        else return false;
    }
    else if (preg_match("/^[\d|\s|\-|\+|E|e|,|\.]+$/", $valeur)) return true;
    else return false;
}   

function controlerTel($valeur) {
/*    if (preg_match("/^[\d|\s|\-|\.|\(|\)]+$/", $valeur)) return true;
    else return false;*/
    $exp_reg = "^([0-9]{10})$";  
    if (ereg($exp_reg, $valeur)) return true;
    else return false;
}   

function controlerCP($valeur) {
    $exp_reg = "^([0-9]{5})$";  
    if (ereg($exp_reg, $valeur)) return true;
    else return false;
}  


function convertirPost($post) {
    $result = array();
    foreach ($post as $cle => $valeur) {
        if (is_array($valeur)) {
            for ($i=0;$i<sizeof($valeur);$i++) 
                $result[$cle][] = htmlspecialchars(stripslashes($valeur[$i]), ENT_QUOTES);
        }
        else $result[$cle] = htmlspecialchars(stripslashes($valeur), ENT_QUOTES);
    }
    return $result;
}
if (!isset($_POST["nom"]))	include("tp3B.html");

else{
$nom=trim($_POST["nom"]);
$prenom=trim($_POST["prenom"]);
$dateN=trim($_POST["dateN"]);
$lieuN=trim($_POST["lieuN"]);
$codeP=trim($_POST["codeP"]);
$telephone=trim($_POST["telephone"]);
$email=trim($_POST["email"]);
$ville=$_POST["ville"];
$civilite=$_POST["civilite"];
$comment=trim($_POST["comment"]);
if ($nom=="") 	$erreur["nom"] ="il manque un nom"; 
//.... A compléter

if (count($erreur) == 0) {
    //Affichage des données saisies
    //.... A compléter
    
}
else {
    //Affichage du tableau erreur
    $corps = "<table bgcolor=#cccccc border>";
      	$corps .="<tr><th>Nom</th><th>Message</th></tr>";
	while (list($cle,$val) =each($erreur)) {  
		$corps .="<tr><td><u>" . $cle ;$corps .="</u></td><td><b>".$val. "</b></td></tr>";
    	}
	$corps .="</table>";
	echo $corps;include("tp3B.html");
	}
}
?>
