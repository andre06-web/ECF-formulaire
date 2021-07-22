<!DOCTYPE HTML>
<html lang="fr">
  <head>
  <title>Formulaire de contact</title>
  <meta charset="utf-8" />
  </head>
  <body>
<?php

$name = $email = $subject = $message = "";
  $nom = test_input($_POST["nom"]);
  $prenom = test_input($_POST["prenom"]);
  $email = test_input($_POST["email"]);
  $confirmemail = test_input($_POST["confirmemail"]);
  $sujet = test_input($_POST["sujet"]);
  $message = test_input($_POST["message"]);
  $myCheck = test_input($_POST["myCheck"]);
  $price = test_input($_POST["price"]);

if (    $_SERVER["REQUEST_METHOD"] == "POST" 
        && isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['prenom']) && !empty($_POST['prenom'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['confirmemail']) && !empty($_POST['confirmemail'])
        && isset($_POST['sujet']) && !empty($_POST['sujet'])
        && isset($_POST['message']) && !empty($_POST['message'])
        && isset($_POST['myCheck']) && !empty($_POST['myCheck'])
        && isset($_POST['price']) && !empty($_POST['price']) && $_POST['price']==100
) {  

  
  $message = $prenom."\n".$nom."\n".$email."\n".$sujet."\n".$message;
  $to = "andrewebnice06@gmail.com";
  $subject = "Message du site Kyo Design.fr exo formulaire";
  $txt = "Hello world! Ici le texte du message...";
  $headers = "From: contact@kyodesign.fr" ;
  /* ."CC: somebodyelse@example.com"; */

  mail($to,$sujet,$message,$headers);
    
  echo "<span>Merci, votre message a bien été envoyé.</span><br><br>" ;
    
}

else {
    
    echo "<p style='color:red'>Erreur: votre message n'a pas pu envoyé.</p>" ;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($prenom == ""){ echo 'LE CHAMP "PRENOM" EST VIDE !!<br>'; }
if ($nom == ""){ echo 'LE CHAMP "NOM" EST VIDE !!<br>'; }
if ($email == ""){ echo 'LE CHAMP "EMAIL" EST VIDE !!<br>'; }
if ($confirmemail == ""){ echo 'LE CHAMP "CONFIRMATION EMAIL" EST VIDE !!<br>'; }
if ($sujet == ""){ echo 'LE CHAMP "SUJET" EST VIDE !!<br>'; }
if ($message == ""){ echo 'LE CHAMP "MESSAGE" EST VIDE !!<br>'; }
if ($myCheck == ""){ echo 'LA CHECKBOX EST VIDE NON COCHEE !!<br>'; }
if ($price == ""){ echo "LE CURSEUR N'EST PAS A DROITE !!<br><br>"; }

echo "prenom = <b>".$prenom."</b><br><br>" ;
echo "nom = <b>".$nom."</b><br><br>" ;
echo "email = <b>".$email."</b><br><br>" ;
echo "email de confirmation = <b>".$confirmemail."</b><br><br>" ;
echo "sujet = <b>".$sujet."</b><br><br>" ;
echo "message = <b>".$message."</b><br><br>" ;
echo "case anti-spambot = <b>".$myCheck."</b><br><br>" ;
echo "curseur = <b>".$price."</b><br><br>" ;

?>
</body>
</html>