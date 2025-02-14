<?php

session_start();
if(!isset($_SESSION['username'])){
	header("Location:login.php");
	exit();
}
include("db.php");
include("functions.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>

<body>
	<form class="form-control p-5 bg-light">
	<ul class="nav justify-content-end">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Home</a>  </li>
	
	<li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a>  </li>
	 </ul>
		
  <h2 class="text-left mt-3"><strong>WELCOME, <?php echo $_SESSION['username']; ?>!</strong></h2>
		
<table width="97%" border="1" align="center" class=" table table-sm table-bordered p-5 table-striped table-hover ">
  <tbody>
    <tr>
      <th width="9%">Donation ID</th>
      <th width="12%">Amount Donated</th>
      <th width="14%">Date of Donation</th>
      <th width="20%">Organization Donated To</th>
      <th width="20%">Payment Method</th>  
</tr>
	  
    <tr>
            
<?php
		$sql = " SELECT * FROM donations where username='".$_SESSION['username']."'";
$result = $mysqli->query($sql);

	  if ($result->num_rows > 0){
		  while($row = $result->fetch_assoc()) { ?>
            <tr>
                    <td><? echo $row["id"];?></td>
                    <td><? echo $row["amount"];?> </td>
                    <td><? echo $row["donation_date"];?></td>
                    <td><? echo $row["organization"];?></td>
                    <td><? echo $row["payment_method"]?></td>					
                  </tr>
	  <?
        }
    } else {
        echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    ?>
    
	  </tr>
		
		
</tbody>
	
</table>
	<a href="donate.php" class="btn btn-dark btn-outline-secondary btn-primary">Donate </a>
	
	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		</form>
</body>
</html>
