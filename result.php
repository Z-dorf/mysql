<?php
try 
{
    
// On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=exercice_1;charset=utf8', 'root', '');
}
catch (Exception $e) 
{
    
// En cas d'erreur, on affiche un message et on stop tout
        die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
    $sql = 'SELECT * FROM acs AS a, departements AS d WHERE a.id_dep = d.ID ';
    $response = $bdd->prepare($sql);
    $response->execute();

// var_dump($response);
// On affiche chaque entrée une à une
while ($data = $response->fetch())
{
        // echo json_encode($data);
        echo $data['nom'] . $data['prenom'] . $data['departement_name'] . '<br />';  //response.text ?
}


$response->closeCursor(); // Termine le traitement de la requête

?>