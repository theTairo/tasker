<?php

      include('database/connect.php');      
      
      $stmt = $db->query('ALTER TABLE tasks AUTO_INCREMENT = 1');
      $stmt = $db ->prepare('SELECT * FROM tasks WHERE user_id = :userId');
      $stmt -> bindValue(':userId', $_SESSION['userId']);
      $stmt -> Execute();
      $data = $stmt->fetchall(PDO::FETCH_ASSOC);
      $tasks = [];
      
      foreach ($data as $key => $value) {
          $tasks[$key] = $value;
      }
      
      $_SESSION['tasks'] = $tasks;
          
 
  ?>