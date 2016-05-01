<?php

      include('connect.php');

      $stmt = $db ->query('SELECT * FROM tasks');
      $data = $stmt->fetchall(PDO::FETCH_ASSOC);
      $tasks = [];
      
      foreach ($data as $key => $value) {
          $tasks[$key] = $value;
      }
      
      $_SESSION['tasks'] = $tasks;
    
 
  ?>