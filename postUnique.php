<?php 
include "navbar.php";
include "logique.php";
include "app.php";

foreach($resultatRequetePostUnique as $post){
    echo $post["titre"];
    echo "<br>";
    echo $post["content"];
}

?>

<hr>
<a href="../blogAvance"><button type="button" class="btn btn-success">Home</button></a>
<br>

<?php
echo $isLogin;
var_dump($isLogin);
echo "test";

if($isLogin) { ?> 
<a href= "editPost.php?postId=<?php echo $post['id']?>"><button type="button" class="btn btn-info">Edit Le post</button></a>
<form>
<input type="hidden" id="custId" name="id" value="<?php echo $post["id"] ?>">
<button type="submit" class="btn btn-danger" name="confirmSupprime">delete this post</button>
</form>
<?php } ?>