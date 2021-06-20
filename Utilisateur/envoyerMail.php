<?php 
     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
     $headers[] = 'From: Anniversaire <anniversaire@example.com>';
     $headers[] = 'Cc: anniversaire_archive@example.com';
     $headers[] = 'Bcc: anniversaire_verif@example.com';


    mail('mohameddjaloud28@gmail.com','Incident crée','<html>
    <head>
     <title>Incident</title>
    </head>
    <body>
     <p>Un incident à été detecté</p>
     
    </body>
   </html> ',implode("\r\n", $headers));

   
?>