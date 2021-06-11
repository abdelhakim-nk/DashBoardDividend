<?php

// Je démarre la session
session_start();

// Si la session n'éxiste pas je redirige vers la page de connection
if (!isset($_SESSION['user'])) {
    header('Location:Connection.php');
    die();
}

$pathRoot = $_SERVER['DOCUMENT_ROOT'];
$pathDb = $pathRoot . "/ProjectFinance/assets/configuration/DataBase.php";
include_once($pathDb);

if (isset($_FILES['avatar_file']) and !empty($_FILES['avatar_file']['name'])) {

    $sizeMax = 2097152;
    $validExtension = array('jpg', 'jpeg', 'png', 'gif');

    if ($_FILES['avatar_file']['size'] <= $sizeMax) {
        // J'utilise strrchr afin de ne récupérer que l'extension se situant après le point
        // pour sa j'entre en paramètre le nom du fichier et en deuxième paramètre
        // j'entre le caractère a partir duquel je souhaite récupérer se qui se trouvera après lui dans mon cas, il s'agit du '.' Point.
        // j'utilise substr qui va me permettre d'ignorer un caractère a une place précise dans mon cas j'aimerais ignorer le point
        // afin d'avoir seulement l'extension pour ça, je lui donne la position qui est la une (1).
        // strtolower me permet de mettre les caractères en minuscule pour être sur de n'avoir aucune erreur,
        $uploadExtension = strtolower(substr(strrchr($_FILES['avatar_file']['name'], '.'), 1));

        if (in_array($uploadExtension, $validExtension)) {
            $filesRoot = "Avatars/" . $_SESSION['user'] . "." . $uploadExtension;
            $filesImport = move_uploaded_file($_FILES['avatar_file']['tmp_name'], $filesRoot);
            if (!empty($filesImport)) {
                $pdo = ConnexionDb::getConnexionDb();
                $req = $pdo->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE pseudo = :pseudo');
                $req->execute(array(
                    'avatar' => $_SESSION['user'] . "." . $uploadExtension,
                    'pseudo' => $_SESSION['user']
                ));
                header('Location:Landing.php?err=success_avatar_file');

            } else {
                header('Location:Landing.php?err=avatar_file_import');
            }
        } else {
            header('Location:Landing.php?err=avatar_file_size');

        }
    } else {
        header('Location:Landing.php?err=avatar_file_extension');
    }
} else {
    header('Location:Landing.php?err=avatar_file_import');

}