<?php
session_start();
//connect to the database
$db = mysqli_connect("localhost","root","","userprofile") or die($db);
//if the register button is clicked
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['register_btn'])){
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $password2= $_POST['password2'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>User</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username" value="">
    </div>
    <br />
 
    <div>
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="First Name" value="">
    </div>
    <br />
 
    <div>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Last Name" value="">
    </div>
    <br />
 
    <div>
        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" placeholder="Contact" value="">
    </div>
    <br />
    <div>
    <label for="email">email</label>
    <input type="email" name="email" id="email" placeholder="AbX@gmail.com" value="">
</div>
<br />
<div>
<label for="linkedin">LinkedIn Id</label>
<input type="text" name="linkedin" id="linkedin" placeholder="" value="">
</div>
<br />
<div>
<label for="github">GitHub</label>
<input type="text" name="github" id="github" placeholder="" value="">
</div>
<br />
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Address" value="">
    </div>
    <br />
    <div>
        <button type="submit">Submit</button>       
    </div>
</form> 
</body>
</html>