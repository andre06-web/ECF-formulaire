<!DOCTYPE HTML>
<html lang="fr">
  <head>
  <title>Formulaire de contact</title>
  <meta charset="utf-8" />
  </head>
  <body>
<?php

$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

  $email = test_input($_POST["email"]);
  $sujet = test_input($_POST["sujet"]);
  $message = test_input($_POST["message"]);
  $myCheck = test_input($_POST["myCheck"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($email == ""){ echo "LE CHAMP \"EMAIL\" EST VIDE !!<br>"; }
if ($sujet == ""){ echo "LE CHAMP \"SUJET\" EST VIDE !!<br>"; }
if ($message == ""){ echo "LE CHAMP \"MESSAGE\" EST VIDE !!<br>"; }
if ($myCheck == ""){ echo "LA \"CHECKBOX\" EST VIDE NON COCHEE !!<br>"; }

/*
echo "email = <b>".$email."</b><br><br>" ;
echo "sujet = <b>".$sujet."</b><br><br>" ;
echo "message = <b>".$message."</b><br><br>" ;
echo "case anti-spambot = <b>".$myCheck."</b><br><br>" ;
*/
//$message = $email."\n".$sujet."\n".$message;

$to = $email;

$txt = "Hello world! Ici le texte du message...";
$headers = "From: contact@kyodesign.fr" . "\n" ;
/* ."CC: somebodyelse@example.com"; */

if (mail($to,$sujet,$message,$headers)){
    
    echo "Merci, votre message a bien été envoyé." ;
}   

else {
    echo "Votre message n'a PAS pu envoyé." ;
}




?>
</body>
</html>