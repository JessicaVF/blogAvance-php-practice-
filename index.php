<?php
include("navbar.php");
require("logique.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
    
</head>
<body>
<?php 
require("login.php");
if(!$isLogin){ ?>
<div class= "mx-5 mt-2">
    <form method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" name="password">
            </div>        
            <div class="form-group">
                <br>
                <input type="submit" value="Log in" class="btn btn-success">
            </div>
    </form>
    <hr>
    <form method="POST">
        <button name="modeInscription" value="on" class="btn btn-primary"> inscription </button>
    </form> 
</div>
<?php } else{ echo "WE ARE LOG IN";}?>

<div class="container">
    <div class= "row mt-5">
        <?php foreach($mesPosts as $post){  
          $description = ""; 
          for($i = 0; $i < 40; $i++){
            $description .= $post['content'][$i];
          }
            
        ?>
        <div class= 'col-4'>
            <div class='card text-white bg-success mb-3' style='max-width: 20rem;'>
                <div class='card-header'><?php echo $post['titre'] ?></div>
                <div class='card-body'>
                    <h4 class='card-title'></h4>
                    <p class='card-text'> <?php echo $description ?>...</p>
                    <a href="postUnique.php?postId=<?php echo $post['id'] ?>">Read More </a>
                </div>
                
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</body>
</html>