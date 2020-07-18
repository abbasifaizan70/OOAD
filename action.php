
<?php

class Information{
    public $name ;
    public $about;
    public $father_name ;
    public $cnic;
    public $date_ob ;
    public $age ;
    public $phone_number ;
    public $address;
    public $experience ;
    public $experience2 ;
    public $experience3 ;
    public $qualification ;
    public $email_address ;
    public $city ;
    public $services;
    public $skills;
    
    function Inser_Data(){     
    }
}
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");
// Check connection

if(isset($_POST['submit'])){
// Escape user inputs for security

$Person= new Information();


$Person->name = $_POST['name'];
$Person->about = $_POST['about'];
$Person->father_name = $_POST['father_name'];
$Person->cnic = $_POST['cnic'];
$Person->date_ob = $_POST['dob'];
$Person->age = $_POST['age'];
$Person->phone_number = $_POST['phone_no'];
$Person->address = $_POST['address'];
$Person->experience = $_POST['experience'];
$Person->experience2 = $_POST['experience2'];
$Person->experience3 = $_POST['experience3'];
$Person->qualification = $_POST['qualification'];
$Person->email_address = $_POST['email'];
$Person->city = $_POST['city'];
$Person->services =$_POST['services'];
$Person->skills = $_POST['skills'];

 
// Attempt insert query execution
$sql = "INSERT INTO data (name, about_me ,father_name,cnic ,do_birth, address, experience,experience2, experience3 , Qualification , Age ,phone_no, email_address , city, services , skills ) 
VALUES ('$Person->name', '$Person->about','$Person->father_name', '$Person->cnic','$Person->date_ob', '$Person->address', '$Person->experience','$Person->experience2' , '$Person->experience3' , '$Person->qualification' , '$Person->age' ,'$Person->phone_number', '$Person->email_address' , '$Person->city', '$Person->services', '$Person->skills')";
$result= mysqli_query($link , $sql);

}
// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build CV</title>
    <link rel="stylesheet" href="theme.css" class="css">
</head>

<body>
    <br>
    <br>

   <center>
<h1><i>Your CV build succefully <br>
For preview of your CV click on the button bellow .
</i></h1>
<br>
<br>
<button > <a href="cv_build.php" id ="view_cv" style="test-style:none;"> View your CV</a></button>
   </center>
</body>
</html>