<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_studentinfo";
//Connection Function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection,
        "insert into tbl_student(student_name ,student_gender,student_dob,student_email,student_mobile,student_adrress,student_password ,student_area,student_blodgroup)"
        . " values('Prit','Male','26/10/2000','moga@gamail.com','1234','kumbhalmer','pr26','patelvass','-o')")
        or die("Error". mysqli_error($connection));


if($q)
{
    echo "<script>alert('Record Added')</script>";
}



