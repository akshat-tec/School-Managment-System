
<?php

$user = 'root';
$password = '123456';
$database = 'website';

$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
                $password, $database);
// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM tform  ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>SCHOOL WEBSITE</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body><script>alert("HERE YOU WILL SEE ALL THE DATA TEACHERS")</script>
	<!--nav-bar-->
    <div class="sticky-sm-top">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">
                <img src="./photo/logo1.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                VEDIC SR.SEC.SCHOOL
                <ul class="nav nav-pills">
                  
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">HOME</a>
                    </li>  
                  </ul>
              </a>
            </div>
          </nav>
    </div>
	<section>
	
        <h1>DATA OF TEACHER</h1>
        <!-- TABLE CONSTRUCTION -->
        <table >
            <tr>

                <th>NAME</th>
                <th>MOTHER NAME</th>
                <th>FATHER NAME</th>
                <th>EMAIL</th>
                <th>PHONENUMBER</th>
                <th>QUALIFICATION</th>
                <th>YEAR OF PASSING</th>
                <th>PERCENTAGE</th>
                <th>STATE</th>
                <th>CITY</th>
                <th>ZIPCODE</th>

            </tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
            <tr>
			
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['mname'];?></td>
            <td><?php echo $rows['fname'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['phonenumber'];?></td>
            <td><?php echo $rows['qualification'];?></td>
            <td><?php echo $rows['passingyear'];?></td>
            <td><?php echo $rows['percentage'];?></td>
            <td><?php echo $rows['state'];?></td>
            <td><?php echo $rows['city'];?></td>
            <td><?php echo $rows['zipcode'];?></td>
             </tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
