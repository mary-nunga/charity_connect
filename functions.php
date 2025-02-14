<?php
include("db.php");
 
error_reporting(E_ALL);
ini_set('display_errors', 1);


//registers to db and redirects to login page

function register(){
	 global $mysqli; 
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		
	//tesr@africa.co.ke 
	
	if($name != '' && $username != '' && $gender != '' && $email != '' && $password != ''  ){
		$password=password_hash($password, PASSWORD_DEFAULT);
		
		$mysqli -> query("INSERT INTO users (fullname, username, gender, email , password) VALUES ('$name', '$username' ,'$gender' , '$email', '$password')");

  $mysqli -> insert_id;
		
		echo "<script>
			
			alert('Data Saved');
			
			</script>";
		header("Location: login.php");
        exit();


$mysqli -> close();
	}
	else {
		
		echo "<script>
			
			alert('Fill fields');
			
			</script>";
	}

}
}

//checks credentials from db and redirects to home page
function login(){
	session_start();

    global $mysqli;  // Make sure the database connection is available

    if (isset($_POST['submit'])) {
		
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if both fields are filled
        if ($username != '' && $password != '') {
            // Query to find the user in the database
            $result = $mysqli->query("SELECT * FROM users WHERE username = '$username'");

            if ($result->num_rows > 0) {
                // Fetch the user data
                $user = $result->fetch_assoc();

                // Verify the password
                if (password_verify($password, $user['password'])) {
					$_SESSION['username'] = $user['username'];
					 $_SESSION['user_id'] = $user['id'];
                     // Store user ID
                    // Successful login, redirect to home page
                    header("Location: index.php");
                    exit();
                } else {
                    // Incorrect password
                    echo "<script>alert('Incorrect password');</script>";
                }
            } else {
                // Username doesn't exist
                echo "<script>alert('Username not found');</script>";
            }
        } else {
            // One or both fields are empty
            echo "<script>alert('Please fill in both fields');</script>";
        }
    }
}

function donate(){
	session_start();
	 global $mysqli; 
	if(isset($_POST['submit'])){
		$amount=$_POST['amount'];
		$donation_date=$_POST['date'];
		$company=$_POST['company'];
		$payment=$_POST['payment'];
	 if (!isset($_SESSION['username'])) {
            die("Error: User not logged in.");
        }

	 $username = $_SESSION['username'];	
	
	if($amount != '' && $donation_date != '' && $company != '' && $payment != ''   ){
		
		
		$mysqli -> query("INSERT INTO donations (amount, donation_date, organization, payment_method,username ) VALUES ('$amount', '$donation_date' ,'$company' , '$payment', '$username')");

  $mysqli -> insert_id;
		echo "<script>
                    alert('Thank you for your donation!');
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 1000); // 2 seconds delay before redirect
                  </script>";
        exit();
}
		$mysqli -> close();
	}
	}




?>
