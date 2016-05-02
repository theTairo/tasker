<?php 

    include('connect.php');
    

    $name = $_POST['name'];
    $priority = $_POST['priority'];
    $description = $_POST['description'];
    $date = $_POST['date'];
      
    $stmt = $db->prepare('INSERT INTO `tasks` (`id`, `name`, `priority`, `description`, `date`) VALUES (NULL, :name, :priority, :description, :date)');
    
    $stmt -> bindValue(':name', $name, PDO::PARAM_STR);
    $stmt -> bindValue(':priority', $priority, PDO::PARAM_STR);
    $stmt -> bindValue(':description', $description, PDO::PARAM_STR);
    $stmt -> bindValue(':date', $name, PDO::PARAM_STR);
    
    $stmt->execute();
    
    header('Location: index.php');
    
    ?>