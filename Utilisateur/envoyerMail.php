<?php 
     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
     $headers[] = 'From: Anniversaire <anniversaire@example.com>';
     $headers[] = 'Cc: anniversaire_archive@example.com';
     $headers[] = 'Bcc: anniversaire_verif@example.com';


    mail('amineabdo05@gmail.com','Sujet de mon email','<html>
    <head>
     <title>Calendrier des anniversaires pour Août</title>
    </head>
    <body>
     <p>Voici les anniversaires à venir au mois d\'Août !</p>
     <table>
      <tr>
       <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
      </tr>
      <tr>
       <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
      </tr>
      <tr>
       <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
      </tr>
     </table>
    </body>
   </html> ',implode("\r\n", $headers));
?>