<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des clients</title>
</head>
<body>
<?php
if (isset($clients)) {
    echo "<ul>";
    foreach ($clients as $client) {
        echo "<li>".$client['nom']." ".$client['prenom']."</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>