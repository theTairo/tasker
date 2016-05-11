<?php
    
    session_start();
    
    if($_SESSION['logged'] == true) 
    {
        header('Location: main.php');
        exit();
    }
    
    include('database/connect.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $stmt -> bindValue(':username', $username);
    $stmt -> bindValue(':password', $password);
    
    $stmt->execute();
    $data = $stmt->fetchall();
    
    if($data != null) 
    {

        $user = ($data[0]);
        
        $_SESSION['logged'] = true;
        $_SESSION['userId'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        header('Location: main.php');
        
    } 
    else
    {
        echo 'Error';
    }
    
 ?>