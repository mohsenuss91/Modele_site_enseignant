<!DOCTYPE html>
<html>

    
    <head>
        <title>Admin Prof Zayd Amr</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../css/style.css"/>
    </head>
    
    <!-- --------------------------séparation----------------------------------------------------- -->
    <!-- --------------------------séparation----------------------------------------------------- -->
    <!-- --------------------------séparation----------------------------------------------------- -->
    
<body>

<?php include("menu.php");?>
<div id="wrapper">
    <div id="content">
     <h3>Ajouter un cours</h3>
        <form action="add_file.php" method="post" enctype="multipart/form-data">
            <input type="file" name="uploaded_file"><br>
            <input type="submit" value="Envoyer fichier">
        </form>
        <p>
            <a href="../cours.php">Voir tous les cours</a>
        </p>
    </div>
    
    <div id="content">
     <h3>Ajouter un TD</h3>
        <form action="add_fileT.php" method="post" enctype="multipart/form-data">
            <input type="file" name="uploaded_file"><br>
            <input type="submit" value="Envoyer fichier">
        </form>
        <p>
            <a href="../td.php">Voir tous les td</a>
        </p>
    </div>
    
</div>    
</body>


</html>