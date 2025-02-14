<?php
include("db.php");
include("functions.php");
login();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>

<body>
	<form name="" id="" method="post" class="container-fluid pt-5 p-5 pb-5 border bg-light form-control fade show" > 
	<table width="23%" height="288" border="1" align="center">
  <tbody>
    <tr>
      <td height="65" colspan="2" align="center"><h1>LOGIN</h1></td>
    </tr>
    <tr>
      <td width="37%" height="52" class="p-2">Username:</td>
      <td width="63%" class="p-2 "><input name="username" id="username" type="text" placeholder="Create a username" class="form-control"></td>
    </tr>
    <tr>
      <td height="56" class="p-2">Password:</td>
      <td class="p-2"><input name="password" id="password" type="password" placeholder="Create a password" class="form-control"></td>
    </tr>
    <tr>
      <td height="103" colspan="2" align="center"><p>
        <input name="submit" id="submit" type="submit" value="Login" class="btn btn-dark btn-outline-secondary btn-primary" >        
        </p>
        <p>Don't have an account? <a href="register.php" class="btn btn-link"> Sign up!</a></p></td>
	  </tr>
  </tbody>
</table>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>