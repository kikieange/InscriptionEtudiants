<?php
if (isset($_POST['inscription'])) {
    $nom=htmlspecialchars(trim($_POST['nom']));
    $prenom=htmlspecialchars(trim($_POST['prenom']));
    $datenaissance=htmlspecialchars(trim($_POST['dateNais']));
    $lieunaissance=htmlspecialchars(trim($_POST['lieuNais']));
    $sexe=htmlspecialchars(trim($_POST['sexe']));
    $matricule=htmlspecialchars(trim($_POST['matricule']));
    $adresse=htmlspecialchars(trim($_POST['adresse']));
    $email=htmlspecialchars(trim($_POST['email']));
    $telephone=htmlspecialchars(trim($_POST['telephone']));
    $filiere=htmlspecialchars(trim($_POST['filiere']));
    $niveau=htmlspecialchars(trim($_POST['niveau']));
    $ville=htmlspecialchars(trim($_POST['ville']));
    $pays=htmlspecialchars(trim($_POST['pays']));
    $boitePostale=htmlspecialchars(trim($_POST['boitePostale']));

    if (empty($nom)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez le nom svp </div>";
        echo "</div>";
    }
    elseif(empty($prenom)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez le prenom svp </div>";
        echo "</div>";
    }

    elseif(empty($datenaissance)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez la date de naissance svp </div>";
        echo "</div>";
    }

    elseif(empty($lieunaissance)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez le lieu de naissance svp </div>";
        echo "</div>";
    }

    elseif(empty($sexe)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez le sexe svp </div>";
        echo "</div>";
    }

    elseif(empty($matricule)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez le matricule svp </div>";
        echo "</div>";
    }

    elseif(empty($adresse)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez l\'adresse svp </div>";
        echo "</div>";
    }

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez une bonne adresse Email svp </div>";
        echo "</div>";
    }

    elseif(empty($telephone)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez le numéro de téléphone </div>";
        echo "</div>";
    }
    
    elseif(empty($filiere)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez la filiere svp </div>";
        echo "</div>";
    }

    elseif(empty($niveau)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez le niveau svp </div>";
        echo "</div>";
    }

    elseif(empty($ville)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez votre ville svp </div>";
        echo "</div>";
    }

    elseif(empty($pays)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez votre pays svp </div>";
        echo "</div>";
    }

    elseif(empty($boitePostale)) {
        echo "<div class='container'>";
            echo "<div class='danger'>Entrez votre boite postale svp </div>";
        echo "</div>";
    }

    // Vérifie si le fichier a été uploadé sans erreur.
    elseif(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("upload/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_FILES["photo"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
                //affichage de l'image
                echo "<img width='100px' src='upload/".$filename."'>";
            } 
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>TP sur les formulaire en php</title>
</head>
    <body>
    </body>
</html>