<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        @session_start();

        if (!(isset($_SESSION["num"]))) {
            $_SESSION["num"] = 0;
        }
        if (isset($_REQUEST["strona"])) {
            $strona = $_REQUEST["strona"];
            if ($strona > 0) { $num = 50; } else { $num = -50; }
            $_SESSION["num"] = abs($_SESSION["num"] + $num);
        }
        $iLimithTo = $_SESSION['num'];

        echo "Pokazuję 50 wierszy od wiersza " . $iLimithTo ."<br/>";


        require_once 'setup.php';
        $oBaza = new DB();
        
        //Proszę zmienić zapytanie na właściwe 
        
        
        $query = "select * from person  limit $iLimithTo ,50 ";
        $aResults = $oBaza->get_results($query);
        $oBaza->generateReport($aResults);

        $adres_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'];
        $adres_tmp = $_SERVER['PHP_SELF'] . "?";
        ?>

        <a href="<?php echo $adres_url . $adres_tmp; ?>strona=-1">Strona -</a>
        <a href="<?php echo $adres_url . $adres_tmp; ?>strona=+1">Strona +</a>
    </body>
</html>
