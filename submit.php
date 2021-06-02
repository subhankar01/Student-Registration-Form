// connectivity with the MySQL Database
<?php
$conn = mysqli_connect("localhost", "root", "", "student_form");
if (isset($_POST["submit"])) {
    $full_name = $_POST["full_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $dob=$_POST["dd"]."-".$_POST["mm"]."-".$_POST["yy"] //for concating day,month and year
    $address = $_POST["addr"];
    $mobileno = $_POST["mobileno"];
    $gender= $_POST["gender"];
    $degree = $_POST["dg"];
    $course = $_POST["cr"];
    $passportphoto=$_POST["pp_img"];
    $panphoto = $_POST["pan_img"];
}
$sql = "INSERT INTO studentdetails (id,full_name,email,password,dob,address ,mobileno ,gender,degree ,course,passportphoto,panphoto) VALUES('','$full_name','$email','$password','$dob','$address','$mobileno','$gender','$course','$passportphoto','$panphoto')";
if (mysqli_query($conn, $sql)) {
    echo "REGISTRATION SUCCESSFULL";
} else {
    echo "error";
}
?>