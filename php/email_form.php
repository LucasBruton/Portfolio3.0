<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        mail("lucas.bruton9@gmail.com", $company . " " . $subject, $message, "From: ".$email);
        echo "Votre message a été envoyé !";
    }else {
        echo "Erreur dans l'envoie de votre message !";
    }

?>