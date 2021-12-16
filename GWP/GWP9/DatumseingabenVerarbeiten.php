<DOCTYPE hmtl>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>Datumseingaben verarbeiten</title>
    </head>
    <body>
      <h1>Datumseingaben verarbeiten</h1>
      <p><b>Sie haben sich mit folgenden Daten registriert:</b></p>
      <?php
      
      function validateHistoryDate($dateVon, $dateBis, $minYears = 0, $maxYears = 150) {
        // wollte testen, wie ich Sachen ohne Formular übergeben kann und hab es deshalb etwas anders gelöst :)
      }
      function toDate($datum){
        #var_dump($datum);
        if($datum != "" && $datum != null){
          $tag = substr($datum, 8, 10);
          $monat = $datum[5].$datum[6];         #substr($datum, 5, 7);
          $jahr = substr($datum, 0, 4);
          $datum = strtotime($tag.".".$monat.".".$jahr);
        } else {
          $datum = time();
        }
        #echo print_r([$tag, $monat, $jahr]);
        return $datum;
      }

      $geburtsdatum = toDate($_GET["geburtsdatum"]);
      $einschulungsdatum = toDate($_GET["einschulungsdatum"]);
      $fuehrerscheinSeit = toDate($_GET["fuehrerscheinSeit"]);
      $aktDatum = time();
      $wochentage =array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag");
      $monate = array("","Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember");
      

      $gebKorrekt = $_GET["gebKorrekt"];
      $einKorrekt = $_GET["einKorrekt"];
      $fueKorrekt = $_GET["fueKorrekt"];

      echo "<p>Dies ist dein Geburtstag: " .$wochentage[date("w", $geburtsdatum)].", ".date("d", $geburtsdatum).". ".$monate[date("n", $geburtsdatum)]." ".date("Y", $geburtsdatum)."<br>";
      echo "Sie sind jetzt ".floor(($aktDatum-$geburtsdatum)/(60*60*24))." Tage alt</p>";

      echo "<p>Einschulung: " .$wochentage[date("w", $einschulungsdatum)].", ".date("d", $einschulungsdatum).". ".$monate[date("n", $einschulungsdatum)]." ".date("Y", $einschulungsdatum)."</p>";
      ?>
      <p>Zurück zu den <a href="Datumseingaben.html">Datumseingaben</a> </p>
    </body>
  </html>
