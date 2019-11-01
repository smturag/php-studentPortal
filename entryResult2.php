<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="entryResult2.css">
    <title>Entry Result 2</title>
</head>

<body>
    <!-- header -->
    <div id="header">
        
        <form action="entryResult2.php" method="POST">
            <label for="student_id">Student Id</label>
            <input type="text" name="student_id" placeholder="Student ID" required>
            <label for="class">Class</label>
            <input type="text" name="class" placeholder="Class" required>
            <label for="year">Year</label>
            <input type="month" name="year" required> <br> <br>
            <label for="exam">Exam Type</label>
            <select name="exam" required>
                <option value="">Select Exam</option>
                <option value="half">Half Yearly</option>
                <option value="full">Full Yearly</option>
            </select>
            <!-- <label for="Submit"></label>
            <input type="submit" value="Submit" name="s" id="btn"> -->
      
    </div>
    <!-- header -->

    <div>

        <div>
            <div id="show_profile">
                <div id="sf">
                    <h1>Student Profile</h1><br>
                </div>
                <div id="element">
                    <h3>Name: </h3><br> <br>
                    <h3>Class: </h3><br> <br>
                    <h3>Group: </h3><br> <br>

                </div>
            </div>


            <div id="marks_entry">

        
                <label for="subject">Subject</label>
                <select name="subject" required>
                    <option valeu="">Select Subject</option>
                    <option value="bangla">Bangla</option>
                    <option value="english">English</option>
                    <option value="Math">Math</option>
                </select><br> <br> <br>

                <label for="marks">Entry Marks</label>
                <input type="number" name="marks" id="marks" required>

                <div>
                <div>
            <label for="Submit"></label> <br>
            
            <input type="submit" value="Submit" name="submit" id="btn2" >
        </div>

                </div>

                <?php

                        
                ?>

                </form>

            </div>
    <?php
        
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "student_portal";
    $conn = new mysqli($servername, $username, $password,$db);

    // var_dump($conn);

    if ($conn->connect_error){
        echo"turag";
        die("Connection failed: " . $conn->connect_error);
        
    }else{
        if(isset($_POST["submit"])){
             $id = $_POST["student_id"];
             $class= $_POST["class"];
             $year= $_POST["year"];
             $type = $_POST["exam"];
             $subject = $_POST["subject"];
             $mark = $_POST["marks"];            
             
             
             $duplicate = "SELECT `Student_Id`, `Class`, `Exam_type`, `Subject`, `Year` FROM `marks_entry` WHERE Student_Id = $id and Class = '$class' and Exam_type='$type' and Subject='$subject'and Year= '$year'";
             
             $result = mysqli_query($conn,$duplicate);
            
             
            //  var_dump($result);             

             $store = mysqli_num_rows($result);            
             
             
              


             $sql = "INSERT INTO `marks_entry`(`Student_Id`, `Class`, `Exam_type`, `Subject`, `Marks`, `Year`) VALUES ($id,'$class','$type','$subject',$mark,'$year')";
             
             if($store>0){
                 echo "<h1>This marks already exucuted</h1>";
             }else{
                if($conn->query($sql)){
                    echo "New record created successfully ";
                }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

             }
             
            }
        }


    ?>
        




</body>

</html>