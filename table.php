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
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                                <a class="active-menu" href="table.php">General Employee Data</a>
                            </li>
                            <li>
                                <a href="fullTable.php">Full Employee Data</a>
                            </li>
                        </ul>
                      </li> 
                    
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>HR Table</h2>   
                        <h5>Welcome!</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <!--<form action="table.php" method="post">        
                                        <input type="submit" value="Search" name="search">
                                        <input type="submit" value="Add" name="add">
                            </form> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Employee General Data table.
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTables-example">
                                        <thead>
                                            <th>Name (Last, First, Middle)</th>
                                            <th>ID</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Contact No</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                        </thead>
                                        <?php
                                            $connection = mysqli_connect("localhost", "root", "", "humanresourcesdb"); 
                                            echo "<tbody>";
                                                    if(isset($_POST)){  
                                                        $query = mysqli_query($connection, "SELECT employeeid, firstName, middleName, lastName, gender, age, contactNo, empStatus, position FROM employees ORDER BY lastName;");
                                                        $count = mysqli_num_rows($query);
                                                        if($count == 0){
                                                            echo "No results found.";
                                                            echo mysqli_error($connection);
                                                        }else{
                                                            while($row = mysqli_fetch_array($query)){
                                                            $employeeid = $row[0];
                                                            $firstName = $row[1];
                                                            $middleName = $row[2];
                                                            $lastName = $row[3];
                                                            $gender = $row[4];
                                                            $age = $row[5];
                                                            $contactNo = $row[6];
                                                            $empStatus = $row[7];
                                                            $position = $row[8];
                                                                echo "<tr>";
                                                                    echo "<td><form action='fulltable.php?employeeid=$employeeid' method='POST'><a href='fulltable.php?employeeid=$employeeid'>$lastName, $firstName, $middleName</a></form></td>";
                                                                    echo "<td>$employeeid</td>";
                                                                    echo "<td>$gender</td>";
                                                                    echo "<td>$age</td>";
                                                                    echo "<td>$contactNo</td>";
                                                                    echo "<td>$position</td>";
                                                                    echo "<td>$empStatus</td>";
                                                                echo "</tr>";
                                                            }
                                                        }
                                                    }
                                            echo "</tbody>";
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                            <!-- End of emp table -->
                </div>
            </div>
        </div>    
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
