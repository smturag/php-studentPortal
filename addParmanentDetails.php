<!DOCTYPE html>
<html background="viewDetails.png">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>addParmanentDetails</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="addPermanentDetails.css">
    <script src="main.js"></script>
</head>

<body>
    <div id="maindiv">
        <div id="id">
            <form action="addParmanentDetails.php" method="POST">
                <label for="id">Student Id</label> <br>
                <input type="text" name="student_id" placeholder="Student ID" require>
        </div>

        <div id="main">
            <form action="addParmanentDetails.php">

                <fieldset>
                    <legend>Student Profile</legend>
                    <!-- <label for="name">Student Name:</label> <br>
                <input id="sname" type="text" name="Name" placeholder="Student Name" require> <br> -->
                    <label for="bDate"> Birth Date</label> <br>
                    <input type="date" name="bDate">
                    <label for="Religion"> Religion</label>
                    <input type="text" name="religion" placeholder="Religion">
                    <label for="address">Residential</label>
                    <input id="address" type="text" name="address">
                </fieldset>

                <fieldset>
                    <legend>Parents Details</legend>
                    <fieldset>
                        <legend>Father's Details</legend>
                        <label for="FName">Father's Name:</label> <br>
                        <input id="fname" type="text" name="FName">
                        <label for="FCName">Company Name:</label>
                        <input id="FCname" type="text" name="FCName">
                        <label for="FTel">Mobile Number:</label>
                        <input type="tel" name="FTel">
                    </fieldset>

                    <fieldset>
                        <legend>Mother's Details</legend>
                        <label for="MName">Mother's Name:</label> <br>
                        <input id="mname" type="text" name="MName">
                        <label for="MCName">Company Name:</label>
                        <input id="MCname" type="text" name="MCName">
                        <label for="MTel">Mobile Number:</label>
                        <input type="tel" name="MTel">
                    </fieldset>
                </fieldset>
                <button id="btn" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "student_portal";

        $conn = new mysqli($servername, $username, $password,$db);

        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }else{
            if(isset ($_POST["submit"])){

                $student_id = $_POST["student_id"];
                $fname= $_POST["FName"];
                $mname=$_POST["MName"];
                $fcname=$_POST["FCName"];
                $bdate = $_POST["bDate"];
                $religion = $_POST["religion"];
                $address = $_POST["address"];
                $ftel= $_POST["FTel"];
                $mtel= $_POST["MTel"];
                $mcname=$_POST["MCName"];

                $sql = "INSERT INTO `add_parmanent_details`(`Student_Id`, `BirthDate`, `Religion`, `Residential`, `FatherName`, `FCompanyName`, `FMobileNumber`, `MotherName`, `MCompanyName`, `MMobileNumber`) VALUES ($student_id,'$bdate','$religion', '$address','$fname','$fcname','$ftel','$mname','$mcname','$mtel')";

                $duplicate = "SELECT * FROM `add_parmanent_details` WHERE Student_Id =  '$student_id' ";
                $result= mysqli_query($conn,$duplicate);

                $store= mysqli_num_rows($result);
                var_dump($store);
                if($store>0)
                {
                    echo 'This id include in Database';

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