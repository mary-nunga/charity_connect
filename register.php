<?php
include("db.php");
include("functions.php");
register();

error_reporting(E_ALL);
ini_set('display_errors', 1);


?>
<!doctype html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
<meta charset="utf-8">
<title>Sign Up page</title>
</head>

<body>
	<form name="" id="" method="post" class="form-control container-fluid p-5 pt-5 pb-5 border bg-light fade show"  >
		
<table width="30%" border="1" align="center">
  <tbody>
    <tr>
      <td height="72" colspan="2" align="center" ><h1>SIGN UP</h1></td>
    </tr>
    <tr>
      <td width="41%" height="52" class="p-2"> Full Name:</td>
      <td width="59%" class="p-2"><input name="name" id="name" type="text" placeholder="Enter your full name" class="form-control"></td>
    </tr>
    <tr>
      <td height="86" class="p-2">Username:</td>
      <td class="p-2"><input name="username" id="username" type="text" placeholder="Create a username" class="form-control"></td>
    </tr>
    <tr>
      <td height="65" class="p-2">Gender:</td>
      <td >
		   <input name="gender" id="male" type="radio" value="Male" > Male
		  <input name="gender" id="female" type="radio" value="Female"> Female
		  <input name="gender" id="other" type="radio" value="other"> Other
	 </td>
    </tr>
    <tr>
      <td height="84" class="p-2">Email Address:</td>
      <td class="p-2"><input name="email" id="email" type="email" placeholder="Enter your email address" class="form-control"></td>
    </tr>
    <tr>
      <td height="54" class="p-2">Password:</td>
      <td class="p-2"><p>
        <input name="password" id="password" type="password" placeholder="Create a password" class="form-control">
     </td>
    </tr>
      <tr>
      <td height="88" colspan="2" align="center">             <p>
            <input name="submit" id="submit" type="submit" value="Register" class="btn btn-dark btn-outline-secondary btn-primary ">
		  
        </p>
        <p>Already have an account? <a href="login.php" class="btn btn-link">Login!</a></p></td>
	  </tr>
    <td height="29"></tr>
  </tbody>
</table>
	</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>