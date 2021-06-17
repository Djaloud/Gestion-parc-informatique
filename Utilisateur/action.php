<?php 
    include("../Login/Model/ConnexionDb.php");
    $output='';
    if(isset($_POST['query'])){
        $search = $_POST['query'];
        $con = connect();
        $stmn =$con->prepare("SELECT * FROM ordinateur WHERE numero_serie LIKE CONCAT('%','".$search."','%') OR nom_ordinateur LIKE CONCAT('%','".$search."','%')");
        //OR nom_ordinateur LIKE CONCAT('%','$search','%')
        //$stmn->bindParam(1, $search, PDO::PARAM_STR);
    }
    else{
        $con = connect();
        $stmn = $con->prepare("SELECT * FROM ordinateur");
    }

    $stmn->execute();
    if($stmn->rowCount()>0)
    {
        $output = "<thead>
                        <tr>
                            <th>#</th>
                            <th>Num serie</th>
                            <th>Nom ordi</th>
                            <th>Date d'inv</th>
                            <th>Salle</th>
                            <th>Operating Sys</th>
                            <th>Emplace</th>
                            <th>Fabricant</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while($row = $stmn->fetch())
                    {
                        $output.="
                        <tr>
                        <td>". $row['id_ordinateur']."</td>
                        <td>". $row['numero_serie']."</td>
                        <td>". $row['nom_ordinateur']."</td>
                        <td>". $row['date_inv']."</td>
                        <td>". $row['id_salle']."</td>
                        <td>". $row['id_os']."</td>
                        <td>". $row['emplacement']."</td>
                        <td>". $row['fabricant']."</td>
                        </tr>
                        ";
                    }
                    $output.="</tbody>";
                    echo $output;
    }
    else{
        echo "<h3> Pas d'enregistrement trouvé</h3>";
    }

   
?>