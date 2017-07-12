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
                        <h5>Welcome user, This is where you add data into the table</h5>
                       
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
                                <?php
                $connection = mysqli_connect("localhost", "root", "", "humanresourcesdb") or die ("Error");
        
                if(isset($_POST['Add'])){
                    $addEmployeeId = $_POST['employeeId'];
                    $addFirstName = $_POST['firstName'];
                    $addMiddleName = $_POST['middleName'];
                    $addLastName = $_POST['lastName'];
                    $addBirthDate = $_POST['birthDate'];
                    $addAge = $_POST['age'];
                    $addGender = $_POST['gender'];
                    $addAddress = $_POST['address'];
                    $addContactNo = $_POST['contactNo'];
                    $addBloodType = $_POST['bloodType'];
                    $addEducationalAttainment = $_POST['educationalAttainment'];
                    $addSchool = $_POST['school'];
                    $addLicense = $_POST['license'];
                    $addLicenseExpiration = $_POST['licenseExpiration'];
                    $addLicenseId = $_POST['licenseId'];
                    $addPhicId = $_POST['phicId'];
                    $addHdmfId = $_POST['hdmfId'];
                    $addSssId = $_POST['sssId'];
                    $addTinId = $_POST['tinId'];
                    $addCivilStatus = $_POST['civilStatus'];
                    $addPosition = $_POST['position'];
                    $addEmpStatus = $_POST['empStatus'];
                    $addStatusEndDate = $_POST['statusEndDate'];
                    $addStatusEvaluationDate = $_POST['statusEvaluationDate'];
                    $query = "INSERT INTO `humanresourcesdb`.`employees` (`employeeId`, `firstName`, `middleName`, `lastName`, `birthDate`, `age`, `gender`, `address`, `contactNo`, `educationalAttainment`, `school`, `license`, `licenseExpiration`, `licenseId`, `phicId`, `hdmfId`, `sssId`, `tinId`, `civilStatus`, `position`, `empStatus`, `statusEndDate`, `statusEvaluationDate`) VALUES ('$addEmployeeId', '$addFirstName', '$addMiddleName', '$addLastName', '$addBirthDate', ' $addAge', '$addGender', '$addAddress', '$addContactNo', '$addEducationalAttainment', '$addSchool', '$addLicense', '$addLicenseExpiration', '$addLicenseId', '$addPhicId', '$addHdmfId', '$addSssId', '$addTinId',  '$addCivilStatus', '$addPosition', '$addEmpStatus', '$addStatusEndDate', '$addStatusEvaluationDate')";
                    
                    if(mysqli_query($connection, $query)){
                        echo "Database updated!";
                    }else{
                       echo "Error: " . $query . "<br>" . mysqli_error($connection);
                    }
                }
                ?>
                                <form role="form" action="form.php" method="post">
                                <div class="col-md-6">
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
                                          <label>Birth Date</label>
                                            <input class="form-control" placeholder="dd-Mmm-yy" name="birthDate"/>
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
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input class="form-control" placeholder="09#########" name="contactNo"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Blood Type</label>
                                            <input class="form-control" placeholder="O-/0+/A-/A+/B-/B+/AB-/AB+" name="bloodType"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Educational Attainment</label>
                                            <input class="form-control" placeholder="Bacelor of.../Master of.../etc..." name="educationalAttainment"/>
                                        </div>
                                        <div class="form-group">
                                            <label>School</label>
                                            <input class="form-control" placeholder="University of..." name="school"/>
                                        </div>
                                </div>
    
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>License</label>
                                            <input class="form-control" placeholder="RN/Technician..." name="license"/>
                                        </div>
                                        <div class="form-group">
                                          <label>License Expiration</label>
                                            <input class="form-control" placeholder="dd-Mmm-yy" name="licenseExpiration"/>
                                        </div>
                                        <div class="form-group">
                                            <label>License ID</label>
                                            <input class="form-control" placeholder="RN/Technician..." name="licenseId"/>
                                        </div>
                                        <div class="form-group">
                                            <label>PHIC ID</label>
                                            <input class="form-control" placeholder="RN/Technician..." name="phicId"/>
                                        </div>
                                        <div class="form-group">
                                            <label>HDMF ID</label>
                                            <input class="form-control" placeholder="" name="hdmfId"/>
                                        </div>
                                        <div class="form-group">
                                            <label>SSS ID</label>
                                            <input class="form-control" placeholder="" name="sssId"/>
                                        </div>
                                        <div class="form-group">
                                            <label>TIN ID</label>
                                            <input class="form-control" placeholder="" name="tinId"/>
                                        </div>
                                            <div class="form-group">
                                                
                                            <label>Civil Status</label>
                                             <select class="form-control" name="civilStatus">
                                                <option>S</option>
                                                <option >M</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Position</label>
                                            <input class="form-control" placeholder="Biomedical Technician/HR Manager/etc..." name="position"/>
                                        </div>
                                        <div class="form-group">
                                          <label>Employee Status</label>
                                             <select class="form-control" name="empStatus">  <option>Regular</option>
                                                <option >Contractual</option><option>Probationary</option><option>Trainee</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Status End Date</label>
                                            <input class="form-control" placeholder="dd-Mmm-yy" name="statusEndDate"/>
                                        </div>
                                        <div class="form-group">
                                          <label>Status Evaluation Date</label>
                                            <input class="form-control" placeholder="dd-Mmm-yy" name="statusEvaluationDate"/>
                                        </div>
                                </div>
                                
                     <!-- End Form Elements -->
                                    <input type="submit" name="Add" value="Add">
                                    </form>
                                
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