
<?php


if (isset($_POST['name'])==1){
    $name = $_POST['name'];
    $name = htmlspecialchars($name);
    echo $name;
}; 
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2a9f4c">
    <title>Quiz ESD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">

    
</head>
<body>
    
    
<div id="container">
    <div id="center2">
        <h1>Quizz ESD</h1>
    </div>
</div>
<br>
<br>
<div id="container">
    <div id="center"> 
        <form action="index.php" method="post">
            Entrez votre prenom : <input type="text" name="name" value="">
            <br>
            Entrez votre nom : <input type="text" name="surname" value="">
            <br>
            <input type="submit" class="button">
        </form>
    </div>
</div>
    
<!--
<form action="database.php" method="post">
    <br>
    <li><?php echo $questions; ?></li>
    <input type="checkbox" name="choix[]" value="1"> Doug<br>
    <input type="checkbox" name="choix[]" value="2"> Shahin<br>
    <input type="checkbox" name="choix[]" value="3"> Hugo
    <br>
    <input type="submit" class="button">
</form>
-->
    
    
</body>