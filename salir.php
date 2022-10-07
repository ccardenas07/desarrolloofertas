<?php
session_start();
 /*session_unregister("admin");*/
  session_destroy();
  //devuelvo al usuario al formulario
  header("Location: login.php");
  /*
  echo "<script type='text/javascript'> window.location='index.php'; </script>'";
  */
?>