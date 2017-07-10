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
                    
                    <li>
                        <a href="#"><i class="fa fa-table fa-3x"></i> Table<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="table.php">General Employee Data</a>
                            </li>
                            <li>
                                <a href="fullTable.php">Full Employee Data</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
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
                                <div class="col-md-6">
                                    <h3>Employee information</h3>
                                    <form role="form">
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
                                            <select class="form-control">
                                                <option name="gender">M</option>
                                                <option name="gender">F</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Street, City, Province, Postal code" name="Address"/>
                                        </div>
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
