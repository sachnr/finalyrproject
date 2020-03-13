<?php
	
	if(isset($_POST["submit"])){
		if(!empty($_POST['mdlid']) && !empty($_POST['mdlpass'])){
		$user = $_POST['mdlid'];
		$pass = $_POST['mdlpass'];
		$conn=mysqli_connect("localhost","root","","loginerp");  
	if(!$conn)
	 {
		die(mysqli_error());
	 }
	 $query = mysqli_query($conn, "SELECT * FROM accounts WHERE id='".$user."' AND password='".$pass."'");
	 $numrows = mysqli_num_rows($query);
	 if($numrows !=0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbusername=$row['id'];
			 $dbpassword=$row['password'];
		 }
		 if('admin' == $dbusername && 'admin' == $dbpassword) { 
			session_start();
			$_SESSION['sessuser'] = $user;
			// update it to admindashboard.php
			header("location: admindashboard.php?");
			// header("location: admindashboard.php")
            exit;
        }
		 if($user == $dbusername && $pass == $dbpassword)
		 {
			 session_start();
			 $_SESSION['sessuser']=$user;
			 //Redirect Browser
			 header("Location:dashboard.php");
		 }
		 }
		 else
		 {
		 echo "Invalid Username or Password!";
		 }
		 }
		 else
		 {
		 echo "Required All fields!";
		 }
		}
?>
