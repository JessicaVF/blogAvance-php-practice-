<?php
include "navbar.php";
include "logique.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form>
        <div class="form-group">
            <label class="col-form-label mt-4" for="inputDefault">Titre</label>
            <input type="text" class="form-control" id="inputDefault" name="titre">
        </div>
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Content</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" name="content"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>