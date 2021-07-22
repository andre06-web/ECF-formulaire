<?php

$hash = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);

echo $hash ;

$secret = '$2y$10$7ZV.nER8NIzO1oKkZDChLu2VoKLmfrV6bHBSZJ9GMEesSGhYa2DMK';

if (password_verify('rasmuslerdorf', $secret)) {
    echo 'Le mot de passe est valide !';
} 

else {
    echo "Le mot de passe est invalide.";
}

?>