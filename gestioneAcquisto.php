<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RISULTATI</title>
    </head>
    <body>
        <style>
            .stileTabella {
                border: solid, 2px, black;
                border-collapse: collapse;
            }

        </style>
        <?php
            $nome = $_POST["nome"];
            $cognome = $_POST["cognome"];
            $cf = $_POST["cf"];
            $settore = $_POST["settore"];
            $codiceSconto = $_POST["codiceSconto"];
            $nBiglietti = $_POST["nBiglietti"];
            $data = date("d-m-Y");
            $ora = date("h:i");
            if ($settore == "curva") {
                $settore = "Curva";
                $prezzoTotale = $nBiglietti * 30;
            } else if ($settore == "tribunaCentrale") {
                $settore = "Tribuna centrale";
                $prezzoTotale = $nBiglietti * 80;
            } else {
                $settore = "Tribuna d'onore";
                $prezzoTotale = $nBiglietti = 120;
            }
            if ($codiceSconto == "FIRENZE5") {
                $prezzoTotale -= ($prezzoTotale/100) * 5;
            } else if ($codiceSconto == "") {
                $codiceSconto = "Nessuno sconto";
            } else {
                $codiceSconto = "Codice sconto inesistente";
            }

            echo "<table class='stileTabella'>";
            echo "<tr class='stileTabella'><th class='stileTabella'>Nome</th> <th class='stileTabella'>Cognome</th> 
            <th class='stileTabella'>Codice fiscale</th> <th class='stileTabella'>Data</th> <th class='stileTabella'>Ora</th> 
            <th class='stileTabella'>Settore</th> <th class='stileTabella'>Codice sconto</th> <th class='stileTabella'>Numero di biglietti</th>
            <th class='stileTabella'>Totale da pagare</th></tr>";
            echo "<tr><td class='stileTabella'>$nome</td> <td class='stileTabella'>$cognome</td> <td class='stileTabella'>$cf</td>
            <td class='stileTabella'>$data</td> <td class='stileTabella'>$ora</td> <td class='stileTabella'>$settore</td>
            <td class='stileTabella'>$codiceSconto</td><td class='stileTabella'>$nBiglietti</td> <td class='stileTabella'>$prezzoTotale</td></tr>";
        ?>
    </body>
</html>