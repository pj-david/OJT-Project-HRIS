<!DOCTYPE html>
<?php
    session_start();

    if ($_SESSION['loggedin'] == false ) {
    header('Location: ../login/index.php');
    }
?>

 <?php

        $ntu_survey = new mysqli("localhost", "root", "", "humanresourcesdb");
        // Check connection
        if ($ntu_survey->connect_error) {
            die("Connection failed: " . $ntu_survey->connect_error);
        }
    ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MetPhil HRIS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MetPhil Medical</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
                <a href="login/index.php" class="btn btn-danger square-btn-adjust">Logout</a> 
                <?php
                    if(isset($_POST['Logout'])) {
                        $_SESSION['loggedin'] = false;
                        session_destroy();        
                    } 
                ?>
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-table fa-3x"></i> Table<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="table.php">General Employee Data</a>
                            </li>
                            <li>
                                <a href="fullTable.php">Full Employee Data</a>
                            </li>
                        </ul>
                      </li> 
                    
                    <li  >
                        <a class="active-menu" href="form.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome, This is where you add data into the table</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Employee Data input
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Employee information</h3>
                                    
                                    <?php
                                        $connection = mysqli_connect("localhost", "root", "", "humanresourcesdb") or die ("Error");

                                        if(isset($_POST['Add'])){
                                            $addEmployeeId = $_POST['employeeId'];
                                            $addFirstName = $_POST['firstName'];
                                            $addMiddleName = $_POST['middleName'];
                                            $addLastName = $_POST['lastName'];
                                            $addAge = $_POST['age'];
                                            $addGender = $_POST['gender'];
                                            $addAddress = $_POST['address'];
                                            $query = "INSERT INTO `humanresourcesdb`.`employees` (`employeeId`, `firstName`, `middleName`, `lastName`, `age`, `gender`, `address`) VALUES ('$addEmployeeId', '$addFirstName', '$addMiddleName', '$addLastName', '$addAge', '$addGender', '$addAddress')";

                                            if(mysqli_query($connection, $query)){
                                                echo "Tables updated!";
                                            }else{
                                               echo "Error: " . $query . "<br>" . mysqli_error($connection);
                                            }
                                        }
                                        ?>

                                    <form role="form" action="form.php" method="post">
                                        <div class="form-group">
                                            <label>Employee ID</label>
                                            <input class="form-control" placeholder="" name="employeeId"/>
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="e.g Juan" name="firstName"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" placeholder="e.g Jimenez" name="middleName"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" placeholder="e.g Santos" name="lastName"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input class="form-control" placeholder="" name="age"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
                                                <option>M</option>
                                                <option >F</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Street, City, Province, Postal code" name="address"/>
                                        </div>
                                        <input type="submit" name="Add" value="Add">
                                    </form>
                                </div>
                                
                                <div class="col-md-6">
                                    
                                </div>
                     <!-- End Form Elements -->
                            </div>
                        </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>