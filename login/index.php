<?php
    session_start();
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HRIS Login</title>
       
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
		<link href="css/style.css" type="text/css" rel="stylesheet">
    </head>

    
<body>
	
	<?php

        $humanresourcesdb = new mysqli("localhost", "root", "", "humanresourcesdb");
        // Check connection
        if ($humanresourcesdb->connect_error) {
            die("Connection failed: " . $humanresourcesdb->connect_error);
        }
    ?>
	
	    <?php
                $err = '';

                if(isset($_POST["login"]) && !empty($_POST["uname"]) && !empty($_POST["psw"])) {
                $username = $_POST["uname"];
                $password = $_POST["psw"];

                $resultR = mysqli_query($humanresourcesdb, "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND type ='nonadmin'" );
                $resultA = mysqli_query($humanresourcesdb, "SELECT * FROM user WHERE username = '$username' AND password = '$password' AND type ='admin' ");
                                        
                    if(mysqli_num_rows($resultR) > 0) {
                    
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;

                    header("Location: ../dashboard.php");
                        
                    }else if(mysqli_num_rows($resultA) > 0) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("Location: ../dashboard.php"); 
                        
                    }else {
                        echo "<div class='err' id='error'> Incorrect Credentials! Please try again. </div>";
                        mysqli_free_result($resultR);
                        mysqli_free_result($resultA);
                    }
                }
            ?>
	<div class="container-image"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2">&nbsp;</div>
			<div class="col-lg-8">
				<div class="col-lg-3">&nbsp;</div>
				
				<div class="form-contain col-lg-6">
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form-horizontal col-lg-12" role="form">
						<div class="form-header text-center">
							<h2>Metphil Medical Company Information System Login</h2> 
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
							<input class="form-control" id="username" type="text" placeholder="USERNAME" name="uname" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
							<input class="form-control" id="password" type="password" placeholder="PASSWORD" name="psw" required>
						</div>
						
						<div class="buttons text-center">
							<button type="submit" class="submitbtn btn btn-default" name="login" id="sbmt">
								<strong>LOGIN</strong>
							</button>
							
							<a href="../registration/index.php"><button type="button" class="btn bt-default signup-btn" id="sgnup"><strong>SIGNUP</strong></button></a>
						</div>
						
					</form>
				</div>
				
				<div class="col-lg-3">&nbsp;</div>
			</div>
			<div class="col-lg-2">&nbsp;</div>
		</div>
	</div>
	
	</body>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js">
	</script>
	<script src="script.js" type="text/javascript" defer></script>
</html>