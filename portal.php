<?php


   $id = $_POST['id'];
   $password = $_POST['pass'];

   $con = mysqli_connect('localhost','root','','student_portal');

   
   if($con){
    // header('Location: http://www.facebook.com');
      
       $sql = "SELECT `Id`, `Password` FROM `student_login` WHERE id = ($id) and Password = ($password)";
       $result = $con->query($sql);
       var_dump($result);
       if ( $result != false && $result->num_rows > 0)
        {
            // header('Location: http://www.facebook.com');
            echo "'$id' '$password'"; 
            // echo "'$sql'";
        }
        else{
            
            echo "bbbb";

        }
    }else{
        echo "aaa";
    }


?>