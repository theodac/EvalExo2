<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>convert</title>
    <meta name="description" content="">
    <h3>convertisseur de dollar en euros</h3>
</head>
<body>
<form method="post" action="#" name="convertie">
    <input type="number" name="euros" value='Votre valeur en euros'>
</form>
<?php
if (isset($_POST['convertie'])){
    $valeur = $_POST['euros'];

    $resultat = $valeur * 0.9208399902390961;
    echo $resultat;
}
?>
</body>
</html>