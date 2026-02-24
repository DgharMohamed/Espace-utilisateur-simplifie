<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST['nom'];
    $email = $_POST['email'];

    if (empty($nom) || empty($email)) {
        echo "Attention, il faut tout remplir !";
    }
    elseif (filter_var($nom, FILTER_VALIDATE_EMAIL) == false) {
        echo "L'email n'est pas correct.";
    } else {
        echo "Bonjour $nom ! ";
        echo "Votre email est $email";
    }
}
?>
