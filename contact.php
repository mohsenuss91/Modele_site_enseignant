<!DOCTYPE html>
<html>
<head>
    <script src="//load.sumome.com/" data-sumo-site-id="a00a3ec86d0549b9dd1d7c537c34723e5abe5e069e65046e872eed6de091294f" async></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/styleContact.css"/>
    <title> Professeur Zayd Amr-الأستاذ زيد عمر </title>
</head>
    
    <!-- --------------------------séparation----------------------------------------------------- -->
    <!-- --------------------------séparation----------------------------------------------------- -->
    <!-- --------------------------séparation----------------------------------------------------- -->
    
<body>
<?php include("menu.php");?>
<div id="wrapper">
    <div id="content">
     
        <h3>Envoyer un message</h3>
  
    <form method="post" action="envoi.php">
        
    <label>Nom</label>
    <input name="nom" placeholder="Muhammad Ahmad">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="M.Ahmad@example.com">
            
    <label>Message</label>
    <textarea name="message" placeholder="Entrez votre message ici"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Envoyer">
        
</form>

  
    </div>
</div>

</body>
</html>