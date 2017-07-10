<!DOCTYPE html>
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
                        <h5>Welcome User!</h5>
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
                                    
                                    echo "<div>";
                                        echo "<h1>$lastName, $firstName, $middleName</h1>";
                                        echo "<h2>Employee Id</h2>";
                                        echo "<hr>";
                                        echo "<h3>$employeeid</h3>";
                                        echo "<h3>$gender</h3>";
                                        echo "<h3>$age</h3>";
                                        echo "<h3>$contactNo</h3>";
                                        echo "<h3>$address</h3>";
                                        echo "$bloodtype</br>";
                                        echo "$civilStatus</br>";
                                        echo "$position</br>";
                                        echo "$empStatus</br>";
                                        echo "$statusEndDate</br>";
                                        echo "$statusEvaluation</br>";
                                        echo "$educationalAttainment</br>";
                                        echo "$school</br>";
                                        echo "$license</br>";
                                        echo "$licenseId</br>";
                                        echo "$licenseExpiration</br>";
                                        echo "$phicId</br>";
                                        echo "$hdmfId</br>";
                                        echo "$sssId</br>";
                                        echo "$tinId</br>";
                                        echo "$firstContractStart</br>";
                                        echo "$firstContractEnd</br>";
                                        echo "$secondContractStart</br>";
                                        echo "$secondContractEnd</br>";
                                        echo "$thirdContractStart</br>";
                                        echo "$thirdContractEnd</br>";
                                        echo "$fourthContractStart</br>";
                                        echo "$fourthContractEnd</br>";
                                        echo "$fifthContractStart</br>";
                                        echo "$fifthContractEnd</br>";
                                    echo "</div>";
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
