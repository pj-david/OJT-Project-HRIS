<?php
$connection = mysqli_connect("localhost", "root", "", "university");

if(isset($_POST['search'])){
    $searchCourse = $_POST['course'];
    $searchSubject = $_POST['subject'];
    
    $query = mysqli_query($connection, "select studentId, firstName, lastName, course, subjectName from student"
            . " inner join subjects using(studentId) where course like '%$searchCourse%' and subjectName "
            . "like '%$searchSubject%' order by 1;");
    
    $count = mysqli_num_rows($query);
    if($count == 0){
        echo "No results found.";
        echo mysqli_error($connection);
    }else{
        while($row = mysqli_fetch_array($query)){
        $studentId = $row['studentId'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $course = $row['course'];
        $subjectName = $row['subjectName'];
        
        $displaySearch = '<div>'.$studentId.' '.$firstName.' '.$lastName.' '.$course.' '.$subjectName.' </div>';
        echo "$displaySearch";
        }
    }
}

if(isset($_POST['add'])){
    $addCourse = $_POST['course'];
    $addSubject = $_POST['subject'];
    $addStudentId = $_POST['studentId'];
    $addClassCode = $_POST['classCode'];
    $addFirstName = $_POST['firstName'];
    $addLastName = $_POST['lastName'];
    
    $query = "insert into `student` (`firstName`, `lastName`, `course`) values ('$addFirstName','$addLastName','$addCourse');";
    $query .= "insert into `subjects` (`studentId`, `classCode`, `subjectName`) values "
            . "('$addStudentId','$addClassCode','$addSubject');";
    
    if(mysqli_multi_query($connection, $query)){
        echo "Tables updated";
    }else{
        echo "Failed to update";
    }
}
?>

<html>
    <body>
        <form action="index.php" method="post">
            <label>Course: </label><input type="text" name="course">
            <label>Subject: </label><input type="text" name="subject">
             <label>Student ID: </label><input type="text" name="studentId">
              <label>Class Code: </label><input type="text" name="classCode">
               <label>First Name: </label><input type="text" name="firstName">
                <label>Last Name: </label><input type="text" name="lastName">
                
            
            <input type="submit" value="Search" name="search">
            <input type="submit" value="Add" name="add">
        </form>
    </body>
</html>