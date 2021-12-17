<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 4</title>
</head>
<body>
<h1>Gehaltsabrechnung</h1>
<p>Für 9 Stunden Arbeit gibt es: <?php echo(gehaltsabrechnung(9)); ?>€</p>
<p>Für 18 Stunden Arbeit gibt es: <?php echo(gehaltsabrechnung(18)); ?>€</p>
<p>Für 27 Stunden Arbeit gibt es: <?php echo(gehaltsabrechnung(27)); ?>€</p>
<p>Für 40 Stunden Arbeit gibt es: <?php echo(gehaltsabrechnung(40)); ?>€</p>

<?php
function gehaltsabrechnung($anzahl_stunden){
    if($anzahl_stunden <= 0){
        return 0;
    } else if($anzahl_stunden > 0 && $anzahl_stunden < 10){
        //$gehalt = 20 + (10*$anzahl_stunden);
        #return $gehalt;
        return 20 + (10*$anzahl_stunden);
    } else if($anzahl_stunden >= 10 && $anzahl_stunden <=20){
        $gehalt = 10 + 11*$anzahl_stunden;
        return $gehalt;
    } else if($anzahl_stunden > 20 && $anzahl_stunden <= 30){
        $gehalt = 12 * $anzahl_stunden;
        return $gehalt;
    } else {
        $gehalt = 12 * 30;
        $gehalt += 13 * ($anzahl_stunden - 30);
        return $gehalt;
    }
}
?>

</body>
</html>