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
        <div class="container">
            <form action="inscription.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputNom">Nom</label>
                    <input type="text" class="form-control" id="inputNom" name="nom" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPrenom">Prenom</label>
                    <input type="text" class="form-control" id="inputPrenom" name="prenom" placeholder="Prenom">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputNais">Date de Naissance</label>
                    <input type="datetime" class="form-control" id="inputNais" name="dateNais" placeholder="Date de Naissance">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputLieu">Lieu de Naissance</label>
                    <input type="text" class="form-control" id="inputLieu" name="lieuNais" placeholder="Lieu de naissance">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Sexe</label>
                    <label for="inputH" class="checkbox-inline"><input type="radio" name="sexe" class="form-control col-md-3" id="inputH" value="Homme" selected>Homme</label>
                    <label for="inputF" class="checkbox-inline"><input type="radio" name="sexe" class="form-control col-md-3" id="inputF" value="Femme">Femme</label>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputMatricule">Matricule</label>
                    <input type="text" class="form-control" id="inputMatricule" name="matricule" placeholder="Matricule étudiant">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputAddress">Adresse</label>
                    <input type="text" class="form-control" id="inputAddress" name="adresse" placeholder="Abidjan, Riviéra 2">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputTel">Téléphone</label>
                    <input type="tel" class="form-control" name="telephone" id="inputTel" placeholder="Téléphone">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputFiliere">Filière</label>
                    <input type="text" class="form-control" name="filiere" id="inputFiliere">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputNiveau">Niveau</label>
                    <select id="inputNiveau" name="niveau" class="form-control">
                        <option selected>Choisir...</option>
                        <option value="BTS 1">BTS 1</option>
                        <option value="BTS 2">BTS 2</option>
                        <option value="Licence 1">Licence 1</option>
                        <option value="Licence 2">Licence 2</option>
                        <option value="Licence 3">Licence 3</option>
                        <option value="Master 1">Master 1</option>
                        <option value="Master 2">Master 2</option>
                    </select>
                    </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputVille">Ville</label>
                    <input type="text" class="form-control" id="inputVille" name="ville">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPays">Pays</label>
                    <select id="inputPays" class="form-control" name="pays">
                        <option selected>Choisir...</option>
                        <option value="Côte d'ivoire">Côte d'ivoire</option>
                        <option value="Mali">Mali</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Ghana">Ghana</option>
                    </select>
                    </div>z
                    <div class="form-group col-md-6">
                    <label for="inputBp">Boite Postale</label>
                    <input type="text" class="form-control" id="inputBP" name="boitePostale">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputFile">Photo</label>
                    <input type="file" class="form-control" id="inputFile" name="photo" placeholder="Ajouter une photo">
                    </div>
                </div>

                </br>
                <button type="submit" name="inscription" class="btn btn-primary">S'inscrire</button>
            </form>
        </div>
    </body>
</html>