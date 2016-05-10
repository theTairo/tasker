<?php

    include('database/connect.php');
    
    $id = isSet( $_GET['id'] ) ? intval( $_GET['id'] ) : 0;
    echo $id;   
    
    $stmt = $db -> prepare('DELETE FROM tasks WHERE id = :id');
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    
    header('Location: main.php');
    
?>