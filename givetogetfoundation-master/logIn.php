<?php
    session_start();
    require('includes/connexionDB.php');

    if (
        isset($_REQUEST["pseudo"]) &&
        isset($_REQUEST["motDePasse"]) &&

        !empty($_REQUEST["pseudo"]) &&
        !empty($_REQUEST["motDePasse"]) 

    ) {//form is valid
        $requete = 'SELECT * FROM utilisateur WHERE(pseudo ="'.$_REQUEST["pseudo"].'"'.' AND motDePasse =SHA1("'.$_REQUEST["motDePasse"].'"));';
        $result = mysqli_query($connexiondb, $requete) or die(mysqli_error($connexiondb)) ;
        
        if (mysqli_num_rows($result) > 0) {
            $utilisateur = mysqli_fetch_assoc($result);
            //echo" prenom : ".$utilisateur["pseudo"]."<br> mot de passe : ".$utilisateur["motDePasse"];
            
            $_SESSION["nomComplet"] = $utilisateur["nomComplet"];
            $_SESSION["pseudo"] = $utilisateur["pseudo"];
            $_SESSION["motDePasse"] = $utilisateur["motDePasse"];
            $_SESSION["numeroTel"] = $utilisateur["numeroTel"];
            $_SESSION["email"] = $utilisateur["email"];
            $_SESSION["userType"] = $utilisateur["userType"];
            $_SESSION["userId"] = $utilisateur["id"];
            
            if ($utilisateur["userType"] == 'investisseur') {
                header("Location:investor.php");
            }

            if ($utilisateur["userType"] == 'client') {
                header("Location:client.php");
            }
            
                   
         } else {//user Type don't exist
            $_SESSION['error'] = 'user is not found';
             header("Location:index.php");
         }

    }else {//form invalide
        $_SESSION['error'] = 'user is not found';
        header("Location:index.php");
    }
?>
