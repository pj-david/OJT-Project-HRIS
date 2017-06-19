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
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li  >
                        <a class="active-menu"  href="table.php"><i class="fa fa-table fa-3x"></i> Table</a>
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
                 <hr />
                <!--<form action="table.php" method="post">        
                                        <input type="submit" value="Search" name="search">
                                        <input type="submit" value="Add" name="add">
                            </form> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Employee Data table.
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                                            $connection = mysqli_connect("localhost", "root", "", "humanresourcesdb");
                                            echo "<thead>";
                                                echo "<tr>";
                                                    echo "<th>Employee ID</th>";
                                                    echo "<th>First Name</th>"; 
                                                    echo "<th>Last Name</th>";
                                                    echo "<th>Gender</th>";
                                                    echo "<th>Age</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody>";
                                                    if(isset($_POST)){
                                                        $query = mysqli_query($connection, "select employeeid, firstName, lastName, gender, age from employees;");

                                                        $count = mysqli_num_rows($query);
                                                        if($count == 0){
                                                            echo "No results found.";
                                                            echo mysqli_error($connection);
                                                        }else{
                                                            while($row = mysqli_fetch_array($query)){
                                                            $employeeid = $row['employeeid'];
                                                            $firstName = $row['firstName'];
                                                            $lastName = $row['lastName'];
                                                            $gender = $row['gender'];
                                                            $age = $row['age'];
                                                                echo "<tr class='gradeA'>";
                                                                    echo "<td>$employeeid</td>";
                                                                    echo "<td>$firstName</td>";
                                                                    echo "<td>$lastName</td>";
                                                                    echo "<td>$gender</td>";
                                                                    echo "<td>$age</td>";
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
