<?php

    require 'config.php' ;

    $nom = $_POST["username"] ;
    $prenom = $_POST["named"] ;
    $contact = $_POST["userTel"] ;
    $mail = $_POST["mail"] ;
    $mdp = $_POST["password"] ;



    $req = $pdo->prepare("INSERT INTO users(nom,prenoms,contact,e_mail,mdp) VALUES(:nom,:prenoms,:contact,:e_mail,:mdp)") ;

   $status =  $req->execute(["nom"=>$nom,"prenoms"=>$prenom,"contact"=>$contact,"e_mail"=>$mail,"mdp"=>sha1(md5($mdp))]) ;

   if($status)
   {
        echo "success ...." ;
   }
   else{
       echo "erreur ...." ;
   }


?>