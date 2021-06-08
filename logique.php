<?php 
session_start();
if(isset($_POST['logOut'])){
   session_unset();
} 
//To change with require_once dirname(__FILE__)
require("auth/db.php");
require("app.php");
// If we are looking for a specific post
if(isset($_GET['postId'])){
    $postId = $_GET['postId'];
    $maRequetePostUnique = "SELECT * FROM posts WHERE id=$postId";
    $resultatRequetePostUnique = mysqli_query($maConnection, $maRequetePostUnique);
}
//if Not, we are looking for all the posts
else{

    $maRequete = "SELECT * FROM posts";
    $resultatRequete = mysqli_query($maConnection, $maRequete);
    $mesPosts = [];
    foreach($resultatRequete as $post){
        $mesPosts[]= $post;
    }
}

// AddPost
if(isset($_GET["titre"]) && isset($_GET["content"])){
   
    $noveauTitre = $_GET["titre"];
    $noveauContent = $_GET["content"];
    
    $maInsert = "INSERT INTO posts (titre, content) VALUES ('$noveauTitre', '$noveauContent')";
    
    $maInsertActive = mysqli_query($maConnection, $maInsert);
    header("Location: index.php?info=postAdded");
}
//EditPost

if(isset($_GET["id"]) && isset($_GET["editTitre"]) && isset($_GET["editContent"])){
    
    if($_GET["editTitre"] !== "" && $_GET["editContent"] !==""){
    $leId = $_GET["id"];
    $editTitre = $_GET["editTitre"];
    $editContent = $_GET["editContent"];
    $maUpdate = "UPDATE posts SET titre='$editTitre', content= '$editContent' WHERE id = $leId";
    $maUpdateActive= mysqli_query($maConnection, $maUpdate);
    header("Location: index.php?info=postUpdated");
    }
}
//Delete Post

if(isset($_GET["confirmSupprime"]) && $_GET["id"] !== ""){
    $leId = $_GET["id"];
    $maDelete ="DELETE FROM posts WHERE id = $leId";
    $maDeleteActive = mysqli_query($maConnection, $maDelete);
    header("Location: index.php?info=postDeleted");
}

?>