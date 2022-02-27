<?php 
    include "database.php";

    mysqli_query($connection, "DELETE FROM messages");

    //redirect
    header("Location: index.php");

?>