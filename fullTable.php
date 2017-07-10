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
                                <a href="table.php">General Employee Data</a>
                            </li>
                            <li>
                                <a class="active-menu" href="fullTable.php">Full Employee Data</a>
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
 
                <!--<form action="table.php" method="post">        
                                        <input type="submit" value="Search" name="search">
                                        <input type="submit" value="Add" name="add">
                            </form> -->
                <div>
                    <?php
                        $connection = mysqli_connect("localhost", "root", "", "humanresourcesdb"); 
                        $currentEmpId = $_GET['employeeid'];
                        if(isset($_POST)){  
                            $query = mysqli_query($connection, "SELECT 
                                                                    employees.employeeid,
                                                                    employees.firstName,
                                                                    employees.middleName,
                                                                    employees.lastName,
                                                                    employees.gender,
                                                                    employees.age,
                                                                    employees.contactNo,
                                                                    employees.address,
                                                                    employees.bloodType,
                                                                    employees.civilStatus,
                                                                    employees.position,
                                                                    employees.empStatus,
                                                                    employees.statusEndDate,
                                                                    employees.statusEvaluationDate,
                                                                    employees.educationalAttainment,
                                                                    employees.school,
                                                                    employees.license,
                                                                    employees.licenseId,
                                                                    employees.licenseExpiration,
                                                                    employees.phicId,
                                                                    employees.hdmfId,
                                                                    employees.sssId,
                                                                    employees.tinId,
                                                                    employmentcontracts.firstContract_start,
                                                                    employmentcontracts.firstContract_end,
                                                                    employmentcontracts.secondContract_start,
                                                                    employmentcontracts.secondContract_end,
                                                                    employmentcontracts.thirdContract_start,
                                                                    employmentcontracts.thirdContract_end,
                                                                    employmentcontracts.fourthContract_start,
                                                                    employmentcontracts.fourthContract_end,
                                                                    employmentcontracts.fifthContract_start,
                                                                    employmentcontracts.fifthContract_end
                                                                FROM
                                                                    employees
                                                                        JOIN
                                                                    employmentcontracts ON employees.employeeid = employmentcontracts.employeeid
                                                                WHERE
                                                                    employees.employeeid = '$currentEmpId';");
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
                                    $address = $row[7];
                                    $bloodtype = $row[8];
                                    $civilStatus = $row[9];
                                    $position = $row[10];
                                    $empStatus = $row[11];
                                    $statusEndDate = $row[12];
                                    $statusEvaluation = $row[13];
                                    $educationalAttainment = $row[14];
                                    $school = $row[15];
                                    $license = $row[16];
                                    $licenseId = $row[17];
                                    $licenseExpiration = $row[18];
                                    $phicId = $row[19];
                                    $hdmfId = $row[20];
                                    $sssId = $row[21];
                                    $tinId = $row[22];
                                    $firstContractStart = $row[23];
                                    $firstContractEnd = $row[24];
                                    $secondContractStart = $row[25];
                                    $secondContractEnd = $row[26];
                                    $thirdContractStart = $row[27];
                                    $thirdContractEnd = $row[28];
                                    $fourthContractStart = $row[29];
                                    $fourthContractEnd = $row[30];
                                    $fifthContractStart = $row[31];
                                    $fifthContractEnd = $row[32];
                                    
                                    echo "<div class='row'>
                                            <div class='col-md-12'>
                                                <div class='panel panel-default'>
                                                    <div class='panel-heading'>Employee Resume</div>
                                                        <div class='panel-body'>
                                                            <div class='row'>
                                                                <div class='col-md-6'>";
                                    echo "                          <h2>$lastName, $firstName, $middleName</h2>";
                                    echo "                          <h5>Employee Id</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$employeeid</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>Gender</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$gender</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>Age</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$age</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>Contact Number</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$contactNo</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>Address</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$address</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>Bloodtype</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$bloodtype";
                                    echo "                          <hr>";
                                    echo "                          <h5>Civil Status</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$civilStatus</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>Educational Attainment</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$educationalAttainment</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>School</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$school</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>Phic Id</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$phicId</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>HDMF Id</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$hdmfId</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>SSS Id</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$sssId</h6>";
                                    echo "                          <hr>";
                                    echo "                          <h5>TIN Id</h5>";
                                    echo "                          <hr>";
                                    echo "                          <h6>$tinId</h6>";                          
                                    echo "                  </div>";
                                    
                                    echo "                  <div class='col-md-6'>";
                                    echo "<h5>License</h5>";
                                    echo "<hr>";
                                    echo "<h6>$license</h6>";
                                    echo "<hr>";
                                    echo "<h5>License Id</h5>";
                                    echo "<hr>";
                                    echo "<h6>$licenseId</h6>";
                                    echo "<hr>";
                                    echo "<h5>License Expiration</h5>";
                                    echo "<hr>";
                                    echo "<h6>$licenseExpiration</h6>";
                                    echo "<h5>Position</h5>";
                                    echo "<hr>";
                                    echo "<h6>$position</h6>";
                                    echo "<hr>";
                                    echo "<h5>Employment Status</h5>";
                                    echo "<hr>";
                                    echo "<h6>$empStatus</h6>";
                                    echo "<hr>";
                                    echo "<h5>Employment End Date</h5>";
                                    echo "<hr>";
                                    echo "<h6>$statusEndDate</h6>";
                                    echo "<hr>";
                                    echo "<h5>Employment Status Evaluation</h5>";
                                        echo "<hr>";
                                        echo "<h6>$statusEvaluation</h6>";
                                        echo "<hr>";
                                        echo "<hr>";
                                        echo "<h5>First Contract Start Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$firstContractStart</h6>";
                                        echo "<hr>";
                                        echo "<h5>First Contract End Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$firstContractEnd</h6>";
                                        echo "<hr>";
                                        echo "<h5>Second Contract Start Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$secondContractStart</h6>";
                                        echo "<hr>";
                                        echo "<h5>Second Contract End Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$secondContractEnd</h6>";
                                        echo "<hr>";
                                        echo "<h5>Third Contract Start Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$thirdContractStart</h6>";
                                        echo "<hr>";
                                        echo "<h5>Third Contract End Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$thirdContractEnd</h6>";
                                        echo "<hr>";
                                        echo "<h5>Fourth Contract Start Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$fourthContractStart</h6>";
                                        echo "<hr>";
                                        echo "<h5>Fourth Contract End Date</h5>";
                                        echo "<hr>";
                                        echo "<h6>$fourthContractEnd</h6>";
                                        echo "<hr>";
                                        echo "<h5>Fifth Contract Start</h5>";
                                        echo "<hr>";
                                        echo "<h6>$fifthContractStart</h6>";
                                        echo "<hr>";
                                        echo "<h5>Fifth Contract End</h5>";
                                        echo "<hr>";
                                        echo "<h6>$fifthContractEnd</h6>";
                                    echo "</div>";
                                    echo "</div></div></div></div></div>";

                                }
                            }
                        }
                        ?>
                </div>
            </div>
        </div>    
    </div>
             <!-- /. PAGE INNER  -->
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
