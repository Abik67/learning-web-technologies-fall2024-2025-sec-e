<?php 

    if(isset($_GET['submit'])){
        $email = $_GET['email'];

        if($email == null){
            echo "Null email";
        }else{
            print($email);
            //header('location: home.html');
        }
    
    }else{
        echo "invalid request!";
        //header('location: name.html');
    }

?>