<?php require("app.php"); ?>

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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../blogAvance">Blog Avance</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if($isLogin){ ?>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addPost.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Log Out</a>
        </li>
      </ul>
    </div>
    <?php } 
    else{?>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="../blogAvance">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Create account</a>
        </li>
        <!-- <li class="nav-item">
          <form>
            <input type= "hidden" name ="login" value ="login">
            <button type="submit"> <a class="nav-link" href="">Log In</a> </button>
          </form>
        </li> -->
      </ul>
    </div>
    <?php } ?>
  </div>
</nav>

</body>
</html>