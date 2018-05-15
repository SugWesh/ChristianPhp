<?php
//ici je me connecte une premiere fois à la database pour afficher les données en aléatoire blabla est le nom de ma database dans phpmyadmin
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=ChristianTest;charset=utf8', 'root', 'root'); 
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

//ici je me connecte une seconde fois à la database pour envoyer les données root est aussi bien mon identifiant que mon mot de passe et j'indique ma base de données
$link = mysqli_connect("localhost", "root", "root", "ChristianTest");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//ici je déclare mes variables à modifier on retrouve les fameux name, surname qui sont en fait vos propres critères de formulaire
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$surname = mysqli_real_escape_string($link, $_REQUEST['surname']);

$_SESSION['name'] = $_POST["name"];
$_SESSION['surname'] = $_POST["surname"];
echo $_SESSION['name'];
echo " is connected";

//ici j'insère mes données de formulaire 
$sql = "INSERT INTO commetuveux (name, surname) VALUES ('$name', '$surname')";

//ici je vérifie que si je réussi ca m'affiche un premier message sinon Error
if (mysqli_query($link, $sql))  {
    
} else{
    echo "ERROR: Impossible d'enregistrer $sql. " . mysqli_error($link);
}

//recupérer les questions
$tableau = array("extansion.php","extansion2.php");
$rand = rand(0,1);
$resultat = include($tableau[$rand]);
echo $resultat;


//ce bout de code m'indique qu'il faut que j'affiche une variable aléatoire par exemple ici je veux que le critère Ida soit affiché aléatoirement parmi ses valeurs

//$reponse =  $bdd->query('SELECT * FROM commetuveux ORDER BY RAND() LIMIT 1');
// while ($donnees = $reponse->fetch()) {
//      echo $donnees['questions'] ;
// }
    
   
//NB: essayez de rentrer plusieurs valeurs dans le formulaire au début afin d'en avoir un maximum pour l'aléatoire
   




//ici on ferme la connexion
mysqli_close($link);
?>
