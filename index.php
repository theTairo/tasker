<?php
    
   session_start();
   include ('data.php');
    
?>

<!DOCTYPE html>
<html>

<head>
    <title>tasker</title>
    <meta name="viewport" content="width = device-width inital-scale = 1" />
    <meta charset=utf-8 />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    
    <div class="container">

        <div class="container logo-box">
            <h1>tasker</h1>
        </div>
        <div class="container task-box">
            
            <div class="add-box">
            <form action="add.php" method="post"> 
                 
                 <div class="row no-border">
                    <input type="number" name="priority" min="1" max="5" class="col-xs-10 col-sm-1 col-md-1 col-lg-1" />
                    <input type="text" name="name" class="col-xs-12 col-sm-4 col-md-4 col-lg-4" />
                    <input type="text" name="date" class="col-xs-12 col-sm-2 col-md-2 col-lg-2" />
                    <input type="text" name="description" class="col-xs-12 col-sm-4 col-md-4 col-lg-4" />
                    <input id="submitButton" type="submit" value="Add" />
                 </div>
                
            </form>
            </div>
            
            <?php          
            
            foreach ($_SESSION['tasks'] as $key => $value) {
                      
            echo
            
            '<div class="row">
                
                <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">'.$value['priority'].'</div>
                <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4">'.$value['name'].'</div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">'.$value['date'].'</div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">'.$value['description'].'</div>
                <a href="delete.php?id='.$value['id'].'"><div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">X</div></a>
            </div>';
            
            }
           
            ?>

        </div>

    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>