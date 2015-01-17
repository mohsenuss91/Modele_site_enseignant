<!DOCTYPE html>
<html>
<head>
    <script src="//load.sumome.com/" data-sumo-site-id="a00a3ec86d0549b9dd1d7c537c34723e5abe5e069e65046e872eed6de091294f" async></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <title> Professeur Zayd Amr-TD-الأستاذ زيد عمر </title>
</head>
    
    <!-- --------------------------séparation----------------------------------------------------- -->
    <!-- --------------------------séparation----------------------------------------------------- -->
    <!-- --------------------------séparation----------------------------------------------------- -->
    
<body>
<?php include("menu.php");?>
<div id="wrapper">
    <div id="content">
        <h3>TDs</h3>
        

    <?php
    // Connecter à la basedd
    $dbLink = new mysqli('127.0.0.1', 'root', '', 'ihm_db');
    if(mysqli_connect_errno()) {
        die("connex à mysql echouée: ". mysqli_connect_error());
    }
     
    // requete pour la liste de touts les fichiersz
    $sql = 'SELECT `id`, `nom`, `mime`, `taille`, `created` FROM `TD`';
    //execution de la requete
    $result = $dbLink->query($sql);
     
    // verification si suceess
    if($result) {
        // verifier s'il y au moins un fichier
        if($result->num_rows == 0) {
            echo '<p>La BDD est vide</p>';
        }
        else {
            // titere ta3 la table et 1ere ligne
            echo '<table width="100%">
                    <tr>
                        <td><b>Nom</b></td>
                        <td><b>Mime</b></td>
                        <td><b>Taille (en octet)</b></td>
                        <td><b>Crée le :</b></td>
                        <td><b>&nbsp;</b></td>
                    </tr>';
     
            // imprimer touts kles fichiers
            while($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>{$row['nom']}</td>
                        <td>{$row['mime']}</td>
                        <td>{$row['taille']}</td>
                        <td>{$row['created']}</td>
                        <td><a href='get_fileT.php?id={$row['id']}'>Télécharger</a></td>
                    </tr>";
            }
     
            // ferlmer la table
            echo '</table>';
        }
     
        // liberer le reulatat
        $result->free();
    }
    else
    {
        echo 'erreur dans la Requete SQL';
        echo "<pre>{$dbLink->error}</pre>";
    }
     
    // fermer la conex
    $dbLink->close();
    ?>


    </div>
</div>

</body>
</html>