<?php
require "functions.php";
$mysqli = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleforkpieach.css">
    <script src="https://kit.fontawesome.com/21e5980a06.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<div class="logo">
			<img src="blitzw.png" alt="logo" />
		</div>
		<ul>
			<li><a href="KPI_home.php"></i>Home</a></li>    
			<li><a href="About.php">About</a></li>    
			<li><a href="help.php">Help</a></li>    
			<li><a href=""><i class="fa fa-bell" aria-hidden="true"></i></a></li>    
			<li><a href=""><i class="fa-sharp fa-solid fa-user-tie"></i></a></li>    
		</ul>

	</nav>
	<br></br>

	<div class= "button">
				<a href="#">Calculate</a>
	</div>
    <table id=kpitable>

    <?php
    $id = $_GET['id']; 
    $qry = "select * from kpi where id= $id";
    if(mysqli_query($mysqli,$qry)){
        $row = mysqli_fetch_assoc(mysqli_query($mysqli,$qry));
        $name= $row['name'];
		$variable_1 = $row['variable_1'];
		$variable_2 = $row['variable_2'];
		$formula = $row['formula'];
        echo '
        <h2>'.$name.'</h2>
        <div class= "button1">
        <label>'.$name.' = '.$formula.'</label></div>
        <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>'.$variable_1.'</th>
        <th>'.$variable_2.'</th>
        <th>'.$formula.'</th>
    </tr>';
    }
    else{
        echo mysqli_error($mysqli);
    }
?>
    <tr>
        <td>EM001</td>
        <td>H.K.M.P. Nimesha </td>
        <td><input type="text" name="vlaues"></td>
        <td><input type="text" name="vlaues"></td>
        <td></td>
    </tr>
    
    <tr>
        <td>EM002</td>
        <td>Adithya Bandara </td>
        <td><input type="text" name="vlaues"></td>
        <td><input type="text" name="vlaues"></td>
        <td></td>
    </tr>
    
    <tr>
        <td>EM003</td>
        <td>R.V. Pabasarini </td>
        <td><input type="text" name="vlaues"></td>
        <td><input type="text" name="vlaues"></td>
        <td></td>
    </tr>

    <tr>
        <td>EM003</td>
        <td>Arunodhya </td>
        <td><input type="text" name="vlaues"></td>
        <td><input type="text" name="vlaues"></td>
        <td></td>
    </tr>

</table>