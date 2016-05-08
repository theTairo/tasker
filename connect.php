<?php

    
    include_once('config.php');
    
   try
   {
      $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_username, $db_password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );
      
   }
   catch(PDOException $e)
   {
      echo 'Connection failed ' . $e->getMessage();
   }


?>
