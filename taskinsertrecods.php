<?php
$connection = mysqli_connect("localhost", "root","","db_studentinfo");
if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $adress = $_POST['txt6'];
    $password = $_POST['txt7'];
    $area = $_POST['txt8'];
    $blodgroup =$_POST['txt9'];
            
    
    $q = mysqli_query($connection, "insert into tbl_student(student_name,student_gender,student_dob,student_email,student_mobile,student_adrress,student_password,student_area,student_blodgroup)"
            . " values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$adress}','{$password}','{$area}','{$blodgroup}')")
            or die(mysquli_error($connection));
    if($q){
        echo "<script>alert('Record Added');</script>"; 
     }
}
?>

<html>
    <body>
        <h1>Studentinfo</h1>
        <form  method="POST">
            <table border="2" bgcolor="pink">
                <tr>
                    <td>NAME</td>
                    <td><input type="tex1" name="txt1" required/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><select name="txt2"/>
                <option>Male</option>
                <option>Female</option>
            </select></td>
                </tr>
                <tr>
                    <td>Dob</td>
                    <td><input type="date" name="txt3" required/></td>    
                </tr>
                 <tr>
                    <td>EMAIL</td>
                    <td><input type="email" name="txt4" required/></td>
                </tr>
                <tr>
                    <td>MOBILE NO</td>
                    <td><input type="number" name="txt5" maxlength="10" required/></td>
                </tr>
                <tr>
                    <td>ADDRESS</td>
                    <td><input typr="tex6" name="txt6" required/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="txt7" name="txt7" required/>
                </tr>
                <tr>
                    <td>area</td>
                    <td><input type="txt8" name="txt8" required/></td>
                </tr>
                <tr>
                    <td>Blodgroup</td>
                    <td><select name="txt9"/>
                <option>O+</option>
                <option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>O-</option>
                <option>A-</option>
                <option>B-</option>
                <option>AB-</option>
            </select></td>
                </tr>
                <tr>
                    <td><input type="submit"/></td>
                </tr>
            </table>
          
        </form>
    </body>
</html>
