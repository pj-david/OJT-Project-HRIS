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
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
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
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome User!</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Employee Statistics
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTables-example">
                                        <thead>
                                            <th>Number of Employees</th>
                                            <th>Regular</th>
                                            <th>Contractual</th>
                                            <th>Probationary</th>
                                            <th>Trainee</th>
                                        </thead>
               <?php
                $connection = mysqli_connect("localhost", "root", "", "humanresourcesdb");
                if(isset($_POST)){  
                $numberEmployees = mysqli_query($connection, "select *from employees;");
                $numberRegular = mysqli_query($connection, "select *from employees where empstatus='Regular';");
                $numberContractual = mysqli_query($connection, "select *from employees where empstatus='Contractual';");
                $numberProbationary = mysqli_query($connection, "select *from employees where empstatus='Probationary';");
                $numberTrainee = mysqli_query($connection, "select *from employees where empstatus='Trainee';");

                $count = mysqli_num_rows($numberEmployees);
                $count2 = mysqli_num_rows($numberRegular);
                $count3 = mysqli_num_rows($numberContractual);
                $count4 = mysqli_num_rows($numberProbationary);
                $count5 = mysqli_num_rows($numberTrainee);
                if($count == 0){
                echo "No results found.";
                echo mysqli_error($connection);
                }else{
                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>$count2</td>";
                    echo "<td>$count3</td>";
                    echo "<td>$count4</td>";
                    echo "<td>$count5</td>";
                    echo "</tr>";
                }
                    }
                ?>
                
           
                                </div>
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
