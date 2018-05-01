<?php
    session_start();
    $toTake = ($_SESSION['toTake']);
    $toTake = json_decode($toTake, true);
    echo $toTake['seas'][1];

?>
