<?php
// traitement.php

// On vérifie si le formulaire est envoyé
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // On récupère les variables
    $nom = $_POST['nom'];
    $email = $_POST['email'];

    // On vérifie si c'est vide
    if (empty($nom) || empty($email)) {
        echo "Attention, il faut tout remplir !";
    }
    // On vérifie l'email
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        echo "L'email n'est pas correct.";
    } else {
        // On affiche le résultat
        echo "Bonjour $nom ! ";
        echo "Votre email est $email";
    }
}
?>
