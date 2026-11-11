<?php

  $conn = mysqli_connect("localhost", "root", "", "imsystem");

  function h($str){
    return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
  }

  session_start();
?>