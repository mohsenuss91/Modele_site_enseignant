    <?php
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: ZaydAmr Webpage'; 
    $to = 'Example@example.com'; 
    $subject = 'Pr.Zayd amr';
    			
    $body = "From: $nom\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) 
    {				 
      if ($nom != '' && $email != '') 
      {
        if (mail ($to, $subject, $body, $from)) 
        { 
	       echo '<p>Message Envoyé</p>';
	    } 
        else 
        { 
	       echo '<p>Erreur : Verifiez que le serveur mail est configuré</p>'; 
        } 
      }
    }
        ?>
