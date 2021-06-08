<?php

if(isset($_POST["usernameSignUp"]) && $_POST["usernameSignUp"] !== ""){
    if(isset($_POST["passwordSignUp"]) && $_POST["passwordSignUp"] !== ""){
        if(isset($_POST["passwordRetypeSignUp"]) && $_POST["passwordRetypeSignUp"] !== ""){
            if($_POST["passwordSignUp"]==$_POST["passwordRetypeSignUp"]){
                $leUsername = $_POST["usernameSignUp"];
                $lePassword = $_POST["passwordSignUp"];
                $isFreeUsernameRequete = "SELECT username FROM utilisateurs WHERE username ='$leUsername'";
                require_once "auth/db.php";
                $isFreeUsernameRequeteActive = mysqli_query($maConnection, $isFreeUsernameRequete);
                if(mysqli_num_rows($isFreeUsernameRequeteActive)==0){
                    $maSignUpRequete = "INSERT INTO utilisateurs (username, password) VALUES ('$leUsername', '$lePassword')";
                    $maSignUpRequeteActive = mysqli_query($maConnection, $maSignUpRequete);
                    header("location: index.php?info=registered");
                   
                }
                else{
                    $isAProblem = true;
                    $msg = "That username is taken!";
                }
            }
             
        }
    }
}


    
?>