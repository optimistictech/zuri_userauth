<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    
    $info = array ($username, $email, $password);
   
    $fp = fopen('../storage/users.csv', 'w');
    
        if(fputcsv($fp, $info)){

            echo  "User Successfully registered";
        }

        else {
            echo  "An error occured";

        }
    
    fclose($fp);
    // echo "OKAY";
}


