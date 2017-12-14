<?php
require_once 'setup.php';
$oBaza->query("TRUNCATE TABLE `metro` ");
for ($i = 1; $i < 5000; $i++) {

    $insert = array(
        'msqer' => rand(20, 300),
        'flor' => rand(1, 25),
        'rooms' => rand(1, 6),
        'price' => rand(100000, 100000000) / 100,
        'street' => ucfirst(strtolower(generateRandomString(15))),
        'street_nr' => rand(1, 500),
        'gps_la' => "0000.0000001,-0000.000000" . RandomNum(8),
        'gps_lg' => "0000.0000001,-0000.000000" . RandomNum(8)
    );
    $oBaza->insert('metro', $insert);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Instalator</title>
    </head>
    <body>
        <p>Baza  została  wypleniona przykładowymi danym.<br/>Zostaniesz przekierowany do strony głównej </p>
        <script>
            setTimeout(function () {
                window.location.href = "index.php";
            }, 3000);
        </script>
    </body>
</html>
