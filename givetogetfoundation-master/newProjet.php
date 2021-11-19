<?php
    session_start();
    require('includes/connexionDB.php');
    $_SESSION['target_file'] = '';


    if (
        isset($_REQUEST["libelle"]) &&
        isset($_REQUEST["revenuDuProjet"]) &&
        isset($_REQUEST["datelimit"]) &&
        isset($_REQUEST["MontantNecessaire"]) &&
        isset($_REQUEST["village"]) &&
        isset($_REQUEST["descriptionProjet"]) &&
        isset($_SESSION["userId"]) &&
        isset($_FILES["photo"]["tmp_name"])&&

        !empty($_REQUEST["libelle"]) &&
        !empty($_REQUEST["datelimit"]) &&
        !empty($_REQUEST["revenuDuProjet"]) &&
        !empty($_REQUEST["village"]) &&
        !empty($_REQUEST["descriptionProjet"]) &&
        !empty($_REQUEST["MontantNecessaire"]) &&
        !empty($_SESSION["userId"]) &&
        !empty($_FILES["photo"]["tmp_name"])

    ) {//form is valid
        
        uploadImage();
        
        //-----------insertion d'un projet-----------
            $requete = 'INSERT INTO projet (libelle, descriptionProjet, montantCollecte, dateLimit, montantNecessaire, revenuDuProjet, photo, etatProjet, idResponsableProjet, Village)
                        VALUES ("'.$_REQUEST["libelle"].'","'.$_REQUEST["descriptionProjet"].'",'.'0'.',"'.$_REQUEST["datelimit"].' "'.',"'.$_REQUEST["MontantNecessaire"].'","'.$_REQUEST["revenuDuProjet"].'","'.$_SESSION['target_file'].'","en attente ...","'.$_SESSION["userId"].'",'.'"'.$_REQUEST["village"].'"'.' );';

            if ( mysqli_query($connexiondb, $requete) ) {
                header("Location:client.php");
            } else {
                echo "Error: " . $requete . "<br>" . mysqli_error($connexiondb);
                header("Location:newProjetForm.php");
            }
           
    }else {//form invalide
        //echo "form invalide";
        $_SESSION['error'] = 'form invalide';
        header("Location:newProjetForm.php");
        
    }

    function uploadImage(){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        $_SESSION['target_file'] = $target_file;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["photo"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
                $_SESSION['target_file'] = '';
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["photo"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            $_SESSION['target_file'] = '';
        }
        /*
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        */
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
                $_SESSION['target_file'] = '';
            }
        }    
    }    
?>
