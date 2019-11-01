<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="main.js"></script>
</head>



<body bgcolor="#E6E6FA">
    <div class="add_student">

        <h1> Student Infomation </h1>

    </div>

    <div id="workFrame">
        <div class="nav">

            <ul>
                <li><a href="./addParmanentDetails.php" target="frame">View Student
                        Profile</a>
                </li> <br>
                <li> <a href="./addAcademicDetails.php" target="frame"> Add Accademic
                        Profile</a></li> <br>
                <li> <a href="./addParmanentDetails.php" target="frame">Add Personal Profile</a> </li> <br>
                <li> <a href="#">View Result</a> </li> <br>
                <li> <a href="./entryResult.php" target="frame">Entry Result</a> </li> <br>
            </ul>

        </div>

        <div class="iframe">
            <iframe src="./studentportal.php" frameborder="2px"
                name="frame"></iframe>
        </div>
    </div>

    </div>


</body>



</html>