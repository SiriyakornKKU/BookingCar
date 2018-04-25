<?php
 session_start();

  echo "Logout Successfully ";
  unset ($_SESSION['username']);
  session_destroy();   // function that Destroys Session 
  header("Location: index.php");
?>