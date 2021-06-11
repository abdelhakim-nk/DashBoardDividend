<?php
$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/assets/configuration/DataBase.php";
include_once($pathDb);
session_start();

if (!isset($_SESSION['user'])) {
    header('Location:Connection.php');
    die();
}
// Récupération et affichage de l'avatar du user connecter
$pdo = ConnexionDb::getConnexionDb();
$check = $pdo->prepare('SELECT avatar FROM utilisateurs WHERE pseudo = ?');
$check->execute(array($_SESSION['user']));
$data = $check->fetch();
?>


<!doctype html>
<html lang="fr">
<head>
    <title>Espace membre</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../../assets/css/styles.css">


    <link rel="stylesheet" href="../../../assets/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>

<h1>Settings</h1>

<?php
include_once('../home/HomeNavMenu.php');
?>
<div class="container">
    <div class="col-md-12">
        <?php
        if (isset($_GET['err'])) {
            $err = htmlspecialchars($_GET['err']);
            switch ($err) {
                case 'current_password':
                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                    break;

                case 'success_password':
                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                    break;

                case 'avatar_file_size':
                    echo "<div class='alert alert-danger'>Votre avatar doit être au format jpeg, jpg, png, gif.</div>";
                    break;

                case 'avatar_file_extension':
                    echo "<div class='alert alert-danger'>Erreur fichier trop volumineux, votre fichier ne doit pas dépasser 2MO.</div>";
                    break;

                case 'avatar_file_import':
                    echo "<div class='alert alert-danger'>Erreur lors de l'importation.</div>";
                    break;

                case 'success_avatar_file':
                    echo "<div class='alert alert-success'>La photo de profil a bien été modifié ! </div>";
                    break;
            }
        }
        ?>


        <div class="text-center">
            <h1 class="p-5">Bonjour ! <?php echo $_SESSION['user']; ?></h1>

            <img src="Avatars/<?php echo $data['avatar']; ?>" style="width: 40rem" />

            <hr/>
            <a href="Disconnection.php" class="btn btn-danger btn-lg">Déconnexion</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                Changer mon mot de passe
            </button>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#avatar">
                Ajouter ou Changer mon avatar
            </button>
        </div>
    </div>
</div>


<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Changer mon mot de passe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="change_password.php" method="POST">
                    <label for="current_pseudo">Pseudo actuel</label>
                    <input type="text" id="current_pseudo" name="current_pseudo" class="form-control" required>
                    <br>
                    <label for='current_password'>Mot de passe actuel</label>
                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                    <br/>
                    <label for='new_password'>Nouveau mot de passe</label>
                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                    <br/>
                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control"
                           required/>
                    <br/>
                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter ou Changer mon avatar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="change_avatar.php" method="POST" enctype="multipart/form-data">
                    <label for="avatar_file">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                    <input type="file" name="avatar_file">
                    <br/><br/>
                    <button type="submit" id="avatar" class="btn btn-success">Modifier</button>
                </form>
            </div>
            <br/>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>


<script src="../home/javascript/main.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>