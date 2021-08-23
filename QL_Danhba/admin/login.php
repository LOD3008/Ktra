<?php include("../config/constants.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
	<link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

   
            <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Password: <br>
            <input type="password" name="passwd" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
           

            <p class="text-center">Created By NDT</a></p>
       </div>
</body>
</html>

<?php 

    
    if(isset($_POST['submit']))
    {
       
        $username = $_POST['username'];
		$password = $_POST['passwd'];
        

       
        $sql = "SELECT * FROM user 
			WHERE username='$username' AND passwd='$password'";

       
        $result = mysqli_query($conn, $sql);
        
        $count = mysqli_num_rows($result);
        if($count==1)
        {
           
            $_SESSION['login'] = $username; 

            
            header('location:'.SITEURL.'admin/');
        }
        else
        {
          
           header('location:'.SITEURL.'admin/login.php');
        }


    }

?>