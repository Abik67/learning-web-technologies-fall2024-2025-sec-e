<?php 

    if(isset($_GET['submit'])){
        $username = $_GET['username'];

        if($username == null){
            echo "Null username";
        }elseif($username == "abik"){
            echo "valid user";
            //header('location: home.html');
        }
    
    }else{
        echo "invalid request!";
        //header('location: name.html');
    }

?>