<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>
    <?php
        include "./examen.php";
        $examen = new SimpleXMLElement($xmlstr);
        // Affichage d'un examen
        echo "{$examen->titre} du ";
        echo "{$examen->date["mois"]} {$examen->date["annee"]}<br><br>";
        foreach($examen -> questions ->question as $question){
            for ($i=0; $i <= 3; $i++) { 
                echo "{$question -> partie[$i]}<br>";

                foreach($question -> partie[$i] as $partie){
                    echo "{$partie}<br>";
                }
            }
        }

    ?>

</body>
</html>