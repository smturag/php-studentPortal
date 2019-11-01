<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    
    <div class="framdiv">
            <div  >
                    <!-- <img id="logo" src="download.png" alt=""> -->
                </div>
                
                <div>
                    <h3 id="">LogIn form</h1>            
                        <form action="studentportal.php" method="POST">
                                <p id="fontColor">Admin Id</p>
                                <input  type="text" name="id" placeholder="Enter your Id"  required >
                                <p id="fontColor">Password</p>
                                <input type="password" name="pass" placeholder="Enter your password" required>
                                <input type="submit" name="submit"  value="Login">
                            </form>            
                </div>
    </div>

    <?php

   $conn = mysqli_connect('localhost','root','','student_portal');

   echo 'first';
   if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
    echo '2';
   }else{

    echo '3';
    if(isset ($_POST["submit"])){
        $id = $_POST['id'];
        $password = $_POST['pass'];
        echo '4';
        

        $sql = "SELECT `Id`, `Password` FROM `student_login` WHERE id = ($id) and Password = ($password)";
       $result = $conn->query($sql);
        echo'aaa';
       var_dump($result);
       if ( $result != false && $result->num_rows > 0)
        {
           echo'5';
         header('Location: ./studentWork.php?success=LoginSuccess');
            
        }
        else{
            
            echo "bbbb";

        }
    }
}
    $conn->close();

?>   
</body>
</html>