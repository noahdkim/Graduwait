<?php

  $aResult = array();
  function modifySession(){
    session_start();
    $_SESSION['toTake'] = "hello";
  }
?>
