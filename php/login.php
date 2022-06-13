<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    
  
  if (($open = fopen("../storage/users.csv", "r")) !== FALSE) 
  {
  
    if (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {    
        
        $username = $data[0];
        $email_saved = $data[1];
        $password_saved = $data[2];


       
    }
  
    fclose($open);
  }

  if($email==$email_saved && $password==$password_saved){

    $_SESSION['username'] = $username;

header("Location: ../dashboard.php");
  }

  else{

    header("Location: ../forms/login.html");

}

}

