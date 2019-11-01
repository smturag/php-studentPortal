<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="addAcademicDetails.css">
    <title>Add Accademic Details</title>
</head>

<body>
   
    <form action="addAcademicDetails.php" method="POST">

        <fieldset>
            <legend>Student Academic Addmission</legend>
            
            <label for="Student_Name">Student Name</label>
            <input type="text" name="student_name" id="sname" required>
            <label for="Student_Id">Given Id</label>
            <input type="text" name="student_id" id="sid" required>
            <label for="class">Class</label>
            <input type="text" name="class" id="class" required>
            <label for="group">Group</label>
            <input type="text" name="group" id="group">
            <label for="ad">Addmission Date</label>
            <input type="date" name="ad" id="ad" required>
            <button id="btn" type="submit" name="send">Submit</button>
        </fieldset>

    </form>

    <?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "student_portal";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        if(isset ($_POST["send"])){
            $name = $_POST["student_name"];
            $id = $_POST["student_id"];
            $class=$_POST["class"];
            $group=$_POST["group"];
            $ad=$_POST["ad"];

            $duplicate="SELECT * FROM `add_accademic_details` WHERE Student_Id = '$id'";
            $result = mysqli_query($conn,$duplicate);
            $store = mysqli_num_rows($result);
            
            // var_dump($result);
           $sql = "INSERT INTO `add_accademic_details`(`Student_Name`, `Student_Id`, `Class`, `Group`, `Addmission_Date`) VALUES ('$name',$id,'$class','$group','$ad')";

        //    var_dump($sql);
            if($store>0){
                
                // header("http://localhost/phptest/webproject/addAcademicDetails.php");
                echo"Include";

            }else{

                if($conn->query($sql)){
                    echo "New record created successfully";
                   }
                   else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                   }

            }
           
           $conn->close();

        }
    }
    
 
    ?>


</body>

</html>