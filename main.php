<?php
   
   session_start();
   
   if(!(isset($_SESSION['logged']) && $_SESSION['logged'] == true))
   {
    
        header('Location: index.php');  
   }
   
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
    
    <main class="container">

        <div class="container logo-box">
            <h1>tasker</h1>
            <?php
            echo '<h2>Hello '.$_SESSION['username'].'!</h2>';
            echo '<a href="logout.php"><h3>Logout</h3></a>';
            ?>
        </div>
        
        <div class="container task-box">
            
            <div class="add-box">
                <form action="add.php" method="post"> 
                 
                 <div class="row no-border">
                    <input value="1" id="numberInput" type="number" name="priority" min="1" max="5" class="col-xs-3 col-sm-1 col-md-1 col-lg-1"/>
                    <input type="text" placeholder="name" name="name" class="col-xs-9 col-sm-4 col-md-4 col-lg-4" />
                    <input type="text" placeholder="description" name="description" class="col-xs-12 col-sm-4 col-md-4 col-lg-6" />
                    <input id="submitButton" type="submit" value="Add" class="btn btn-primary col-xs-12 col-sm-6 col-md-1" />
                 </div>
                
                </form>
            </div>
            
            <div class="sort-box">
            
                <div class="row no-border">
                
                    <div class="btn btn-warning col-xs-6 col-sm-6 col-md-6 col-lg-6">Priority</div>
                    <div class="btn btn-info col-xs-6 col-sm-6 col-md-6 col-lg-6">Alphabetical</div>
                    
                </div>
            
            </div>
            
            <div class="task-list"> 
           
            <?php
                                  
            foreach ($_SESSION['tasks'] as $key => $value) {
                      
            echo
            
            '<div class="row">
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">'.$value['priority'].'</div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">'.$value['name'].'</div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">'.$value['description'].'</div>
                <a href="#"><div class="col-xs-6 col-sm-1 col-md-1 col-lg-1">E</div></a>
                <a href="delete.php?id='.$value['id'].'"><div class="col-xs-6 col-sm-1 col-md-1 col-lg-1">X</div></a>
                
            </div>';
            
            }?>
            
            </div>

        </div>

    </main>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>