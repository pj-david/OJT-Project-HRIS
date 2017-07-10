<?php
    session_start();
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HRIS Login</title>
        <link href="style.css" type="text/css" rel="stylesheet" >
    </head>

    
<body >
    <?php

        $humanresourcesdb = new mysqli("localhost", "root", "", "humanresourcesdb");
        // Check connection
        if ($humanresourcesdb->connect_error) {
            die("Connection failed: " . $humanresourcesdb->connect_error);
        }
    ?>
    <a href="../landing/index.php"><button type="button" class="cancelbtn"><strong>BACK</strong></button></a>
    <div class="container">
        <div class = "loginForm"> 
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
            <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                 <div class="container">
                     <div>
                         <label><strong>USERNAME</strong></label>
                         <input type="text" placeholder="Enter Username" name="uname" required>
                         <br>
                         <br>
                         <label><strong>PASSWORD</strong></label>
                         <input type="password" placeholder="Enter Password" name="psw" required>
                         <br>
                         <br>

                         <button type="submit" class="submitbtn" name="login"><strong>LOGIN</strong></button>
                         <hr>

                         <a href="../registration/index.php"><button type="button" class="btn"><strong>Create an account!</strong></button></a>
                     </div>                 
                </div>

            </form>
        </div>
	</div>
    
    <script src="script.js"></script>
    
    </body>
</html>