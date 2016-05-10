<?php 

    include('database/connect.php');

    session_start();    

    $name = $_POST['name'];
    $priority = $_POST['priority'];
    $description = $_POST['description'];
    $date = $_POST['date'];
      
    $stmt = $db->prepare('INSERT INTO `tasks` (`id`, `name`, `priority`, `description`, `date`, `user_id`) VALUES (NULL, :name, :priority, :description, :date, :user_id)');
    
    $stmt -> bindValue(':name', $name, PDO::PARAM_STR);
    $stmt -> bindValue(':priority', $priority, PDO::PARAM_STR);
    $stmt -> bindValue(':description', $description, PDO::PARAM_STR);
    $stmt -> bindValue(':date', $date, PDO::PARAM_STR);
    $stmt -> bindValue(':user_id', $_SESSION['userId']);
    
    $stmt->execute();
    
    header('Location: main.php');
    
    ?>