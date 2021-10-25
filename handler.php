<?php

if(isset($_POST['user_mail'])&& !empty($_POST['user_mail'])){
    $email = $_POST['user_mail'];
    $objet = $_POST['message_topic'];
    $name= $_POST['user_name'];
    $message = $_POST['user_message'];
    $number = $_POST['user_number'];
    $recipient = 'p.ombiono@codeur.online';
    $send = 'message envoyé par '. $name . '('. $email. ' / ' .$number. ')' .' : <br>'.$message ;
    $headerFields = array(
      "From: {$email}",
      "MIME-Version: 1.0",
      "Content-Type: text/html;charset=utf-8"
      );
    mail($recipient, $objet, $send, implode("\r\n", $headerFields));
    echo "message envoyé <br>";
    echo "<a href='index.php'>Retour</a>";
}
else{
  echo 'erreur';
}