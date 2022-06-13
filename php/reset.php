<?php
if(isset($_POST['submit'])){


    $email =  $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
      
  if (($open = fopen("../storage/users.csv", "r")) !== FALSE) 
  {
  
    if (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {    
        
        $username = $data[0];
        $email_saved = $data[1];
       


       
    }
  
    fclose($open);
  }


  if($email==$email_saved ){

    $info = array ($username, $email_saved, $newpassword);
   
    $fp = fopen('../storage/users.csv', 'w');
    
        if(fputcsv($fp, $info)){

            echo  "Password Updated";
        }

  }

  else{
      echo "User does not exist";
  }


}



