<?php

  session_start();
  session_uunset();
  session_destroy();

  header("Location: ../index.php");
 ?>
