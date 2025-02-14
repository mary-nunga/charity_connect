<?php
include("db.php");
include("functions.php");
donate();

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<form name="" id="" method="post" class="form-control container-fluid pt-5 pb-5 border bg-light fade show">
<table width="26%" height="437" border="1" align="center">
  <tbody>
    <tr>
      <td height="85" colspan="2" align="center"><h1>DONATION FORM</h1></td>
    </tr>
    <tr>
      <td width="46%" height="79" class="p-2">Organization Name</td>
      <td width="54%"><input name="company" id="company" type="text" placeholder="Enter organization name" class="p-2"></td>
    </tr>
    <tr>
      <td height="91" class="p-2">Amount to Donate</td>
		<td><input name="amount" id="amount" type="number" placeholder="Enter amount" class="p-2" ></td>
    </tr>
    <tr>
      <td class="p-2">Date of Donation</td>
      <td><input name="date" id="date" type="date" class="p-2"></td>
    </tr>
    <tr>
      <td height="61" class="p-2">Payment method</td>
      <td><select name="payment" id="payment" class="p-2 form-check">
		  <option value="">Select</option>
			<option value="mpesa">M-PESA</option>
			<option value="card"> Card</option>
		  <option value="paypal"> Paypal</option>
		  </select>
		
			</td>
    </tr>
    <tr>
      <td height="83" colspan="2" align="center"><input name="submit" id="submit" type="submit" value="Donate"
		class="btn btn-dark btn-outline-secondary btn-primary "					 ></td>
    </tr>
  </tbody>
</table>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		</form>
</body>
</html>