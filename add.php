<?php 

    include('connect.php');
    
    $name = "test";
    $priority = 1;
    $description = "none";
    $date = "25.02.2015";
      
    $stmt = $db->prepare('INSERT INTO `tasks` (`id`, `name`, `priority`, `description`, `date`) VALUES (NULL, :name, :priority, :description, :date)');
    
    $stmt -> bindValue(':name', $name, PDO::PARAM_STR);
    $stmt -> bindValue(':priority', $priority, PDO::PARAM_STR);
    $stmt -> bindValue(':description', $description, PDO::PARAM_STR);
    $stmt -> bindValue(':date', $name, PDO::PARAM_STR);
    
    $stmt->execute();
    
    ?>