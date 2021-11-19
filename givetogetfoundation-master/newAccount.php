<?php
    session_start();
    require('includes/connexionDB.php');

    if (
        isset($_REQUEST["nomComplet"]) &&
        isset($_REQUEST["pseudo"]) &&
        isset($_REQUEST["motDePasse"]) &&
        isset($_REQUEST["confirmMotDePasse"]) &&
        isset($_REQUEST["email"]) &&
        isset($_REQUEST["numeroTel"]) &&
        isset($_REQUEST["userType"]) &&

        !empty($_REQUEST["nomComplet"]) &&
        !empty($_REQUEST["pseudo"]) && 
        !empty($_REQUEST["motDePasse"]) && 
        !empty($_REQUEST["confirmMotDePasse"]) && 
        !empty($_REQUEST["email"]) && 
        !empty($_REQUEST["numeroTel"]) &&
        !empty($_REQUEST["userType"])

    ) {//form is valid
        if ($_REQUEST["motDePasse"] == $_REQUEST["confirmMotDePasse"]) {
                
            //-----------insertion d'un QCM-----------
            $requete = 'INSERT INTO utilisateur (nomComplet, pseudo,motDePasse, numeroTel, email, userType)
                        VALUES ("'.$_REQUEST["nomComplet"].'","'.$_REQUEST["pseudo"].'",'.'SHA1("'.$_REQUEST["motDePasse"].'")'.',"'.$_REQUEST["numeroTel"].' "'.',"'.$_REQUEST["email"].'","'.$_REQUEST["userType"].'" );';

            if ( mysqli_query($connexiondb, $requete) ) {
                $_SESSION['error'] = "";

                if ($_REQUEST["userType"] == "client") {
                    header("Location:client.php");
                }
                if ($_REQUEST["userType"] == "investisseur") {
                    header("Location:investor.php");
                }
            } else {
                $_SESSION['error'] = "mysqli_error";
                $_SESSION['mysqli_error'] = "Error: " . $requete . "<br>" . mysqli_error($connexiondb);
                //echo "Error: " . $requete . "<br>" . mysqli_error($connexiondb);
            }
        }else{
            //echo "mot de passe non valide";
            $_SESSION['error'] = "mot de passe different de la confirmation";
        }

    }else {
        //echo "form invalid";
        $_SESSION['error'] = "form invalid";
    }
    echo $_SESSION['error']

?>