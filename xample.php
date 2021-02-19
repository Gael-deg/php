
<?php
$f_name = "Gab";
$l_name = "Deg";
$age = 22;
$height = 1.84;
$can_vote = true;
$address = array('street' => 'dotong st', 'city'=>'CSJDM');
$state = null;
define('PI', 3.1415);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Php Tutorial</title>
	<script type="text/javascript"></script>
</head>
<style>
	.myDiv {
		border: 5px black;
		border-radius: 5px;
		height: 300px;
		width: 400px;
  		background-color: white ;    
 		text-align: center;

	}
	table  {
		
  		text-align: center;
 	 	border-collapse: collapse;
  		width: 100%;
  		border-radius: 10px;

	}

	th, td {
 		 padding: 15px;
 		 align-content: center;

	}
	header {

  padding: 5px;
  text-align: center;
  font-size: 50px;
 line-height: 100px;
  color: #3498DB;

}

input[type=text], select {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
 .Button1{
	width: 50%;
	background-color: #EAF2F8;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 4px;
}


</style>
<body style="background-color:#EAF2F8 ">
	<center>
	<p>Name: <?php echo $f_name . ' ' . $l_name; ?></p>
	<form action="xample.php" method="get">
		<div class="myDiv">	<table>

		<tr>	
		<td><label>Your State:</label></td>
		<td><input type="text" name="state"><br></td>
	</tr>
	<tr>
		<td><label>Number 1:</label></td>
		<td><input type="text" name="num1"><br></td>
	</tr>
	<tr>
		<td><label>Number 2:</label></td>
		<td><input type="text" name="num2"><br></td>
	</tr>
	
	</table>
	<center><input type="submit" name="submit" value="Submit">	</center>
	</form>
	 <br>
	 <br>
	<?php
	if (isset($_GET) && array_key_exists('state', $_GET)) {
		$state = $_GET['state'];
		if (isset($state) && !empty($state)) {
			echo "You live in" . $state . '<br>' ;
			echo "$f_name lives in $state <br>";
			# code...
		}
		if (count($_GET) >= 3) {
			$num_1 = $_GET['num1'];
			$num_2 = $_GET['num2'];
			echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . 
			"<br>";
			echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . 
			"<br>";
			echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . 
			"<br>";
			echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . 
			"<br>";
			echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . 
			"<br>";
			echo "$num_1 / $num_2 = " . (intdiv($num_1 , 
				$num_2)) . 
			"<br>";

	# code...
		}
		# code...
	}
	 ?>
</center>
</body>
</html>