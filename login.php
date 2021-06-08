<?php

require("app.php");

if(isset($_POST["username"])&& isset($_POST["password"])){

    if($_POST["username"] !=="" && $_POST["password"] !==""){
        $leUsername = $_POST["username"];
        $lePassword = $_POST["password"];
        $maRequeteAuth = "SELECT * FROM users WHERE username = '$leUsername'";
        require_once "auth/db.php";
        $maRequeteAuthActive = mysqli_query($maConnection, $maRequeteAuth);
        
        if(mysqli_num_rows($maRequeteAuthActive) !== 0){
            
            forEach($maRequeteAuthActive as $element){
                
                if($lePassword == $element["password"]){
                    $isLogin = true;
                }
                else{
                    echo "wrong password";
                }  
            }
        }
        else{
            echo "wrong user name";
        }
    }
    
}
?>