<?php
    // il faut avoir un id dans la variable globale GET
    if(isset($_GET['id'])) {
    // mettre le id dans  une variable loclae
        $id = intval($_GET['id']);
     
        // vérfier que le id est valide
        if($id <= 0) {
            die('ID invalide');
        }
        else {
            // Connection à la base.d.d
            $dbLink = new mysqli('127.0.0.1', 'root', '', 'ihm_db');
            if(mysqli_connect_errno()) {
                die("connexion mysql échouée:". mysqli_connect_error());
            }
     
            // requete pour recveoir les infos du fichier
            $query = "
                SELECT `mime`, `nom`, `taille`, `data`
                FROM `cours`
                WHERE `id` = {$id}";
            //exec la reuqute
            $result = $dbLink->query($query);
     
            if($result) {
                // verifivation si le resultat est valid ( une seule ligne)
                if($result->num_rows == 1) {
                // mettre la ligne dans une varialbe
                    $row = mysqli_fetch_assoc($result);
     
                    // printer les headers
                    header("Content-Type: ".$row['mime']);
                    header("Content-Length: ".$row['taille']);
                    header("Content-Disposition: attachment; filename=".$row['nom']);
     
                    // Printer le blob de data
                    echo $row['data'];
                }
                else {
                    echo 'Erreur aucun fichier associé à cet ID';
                }
     
                // libere r les ressources mysqli  
                @mysqli_free_result($result);
            }
            else {
                echo "Erreur requete echouée: <pre>{$dbLink->error}</pre>";
            }
            @mysqli_close($dbLink);
        }
    }
    else {
        echo 'pas d\'id transmis.';
    }
    ?>