<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 3</title>
</head>
<body>
    <?php
    $wochentage = ["Mo" => "Montag","Di" => "Dienstag", "Mi"=>"Mittwoch","Do" => "Donnerstag", "Fr" =>"Freitag"];
    $wochentage["Sa"] = "Samstag";
    $wochentage["So"] = "Sonntag";

    echo "<pre>";
    print_r($wochentage);
    echo "</pre>";
    ?>
</body>
</html>
