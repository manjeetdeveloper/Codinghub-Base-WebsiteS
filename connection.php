<?php

$con = mysqli_connect('localhost','manjeet', 'Prity@123');



mysqli_select_db($con, 'id21272518_codinghub');

$name = $_signup['Username'];
$fullname = $_signup['Fullname'];
$email = $_signup['email'];
$password = $_signup['password'];
$mobile = $_signup['mobile'];
$subject = $_signup['subject'];
$message = $_signup['message'];


$query = " insert into userinfodata (username, fullname,  email, password, mobile, subject, message) values
('$username', '$fullname', '$email', '$password', '$mobile', '$subject', '$message') ";

if(mysqli_query($con, $query)){

?>
    <script type="text/javascript">
        alert('data Inserted');
    </script>

    <?php
    header("location:index.html");
   
   
}else{
    echo "<script> alert('data not inserted') </script>";
    header("Location:index.html");
   


}



?>

