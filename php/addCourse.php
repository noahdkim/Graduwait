<?php
    session_start();

    $toTake = ($_SESSION['toTake']);
    $toTake = json_decode($toTake, true);
    // echo $toTake['seas'][1];
    //$search = array_search($_POST['courseID'], $toTake[$_POST['category']]);
    print_r([$_POST['category']]);
    print_r("hello");
    array_push($toTake[$_POST['category']], $_POST['courseID']);
    // if($search !== false){
    //   unset($toTake[$_POST['category']][$search]);
    // }
    $_SESSION['toTake'] = json_encode($toTake);
    print_r($_SESSION['toTake']);
    // print_r($toTake[$search]);
    // print_r($toTake);
?>
