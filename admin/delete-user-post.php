<?php
require 'config/database.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userID = $_POST['userID'];
    $authorID = $_POST['authorID'];

    $sqlquery =mysqli_query($connection," DELETE FROM posts WHERE author_id ='$authorID' AND id='$userID'" ); 

    if($sqlquery){
        // echo "Successfully deleted the post";
        header("location:manage-user-post.php");
    }
    else{
        // echo "Delete Unsucessful";
        header("location:manage-user-post.php");
    }
}
?>