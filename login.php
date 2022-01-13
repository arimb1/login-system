<?php

if (isset($_POST['uname']) && isset($_POST['pass'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if (empty($uname)) {
        header("Location : index.php?error=Username is required");
        exit();

    }else if(empty($pass)){
        header("Location : index.php?error=Password is required");
        exit();

    }else{
        echo "Valid Input";
    }
    
    }

else{
    header("Lokcation: index.php");
    exit();
}