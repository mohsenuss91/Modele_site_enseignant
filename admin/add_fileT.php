<!DOCTYPE html>
<html>

    
    <head>
        <title>Envoi fichier TD Prof Zayd Amr</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../css/style.css"/>
    </head>
<body>
 <?php
    // verification si fichier à été uploadé
    if(isset($_FILES['uploaded_file'])) {
    // verifier si aucue erreur
    if($_FILES['uploaded_file']['error'] == 0) {
        // connexion a la db
        $dbLink = new mysqli('127.0.0.1' ,'root', '', 'ihm_db');
        if(mysqli_connect_errno()) {
            die("erreur connecxion à mysql : ". mysqli_connect_error());
        }
 
        // recolter les information 
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
 
        // preparation de la requete
        $query = "
            INSERT INTO `td` (
                `nom`, `mime`, `taille`, `data`, `created`
            )
            VALUES (
                '{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";
 
        // executioh
        $result = $dbLink->query($query);
 
        // verif
        if($result) {
            echo ' Votre ficher a été envoyé, Pr.Zayd ';
        }
        else {
            echo 'Erreur! fichier non envoyé'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'une erreur c\'est prodiote lors de l\'envoi du ficher. '
           . ' code erreur : '. intval($_FILES['uploaded_file']['error']);
    }
 
    //feremrer la connexion à mysq
    $dbLink->close();
}
else {
    echo 'aucune fichier envoyé !';
}
 
// revnoi à la page admin
echo '<p>Cliquez <a href="admin.php">ici</a> pour revenir</p>';
?>

    
</body>
</html>