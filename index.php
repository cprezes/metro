<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Pokazuję 50 wierszy od wiersza 
        <?php
        require_once 'setup.php';

        if (!(isset($_SESSION["num"]))) {$_SESSION["num"] = 0;}
        if (isset($_REQUEST["strona"])) { $strona = $_REQUEST["strona"];
            if ($strona > 0) { $num = 50;} else { $num = -50;}
            $_SESSION["num"] = abs($_SESSION["num"] + $num);}

        echo   $_SESSION['num'] . "<br/>";

        $query = "select * from metro  limit {$_SESSION['num']} ,50 ";
        $query=$oBaza->filter($query);
        $aResults = $oBaza->get_results($query);
        $aResults = $oBaza->clean($aResults);
        $aResults = $oBaza->getSingleData($aResults,["id","750"],"flor");
        var_dump($aResults);
        
        die();
        $oBaza->generateReport($aResults);
        
        
        $adres_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'];
        $adres_tmp = $_SERVER['PHP_SELF'] . "?";
        ?>

        <a href="<?php echo $adres_url . $adres_tmp; ?>strona=-1">Strona -</a>
        <a href="<?php echo $adres_url . $adres_tmp; ?>strona=+1">Strona +</a>
    </body>
</html>
