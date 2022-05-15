<!DOCTYPE html>
<html lang="en">
<head>

<?php
include('links.php');
?>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="left">
                

                <h1>Welcome</h1>
    
                <p>please fill the details carefully. this form can change your life</p>
            <button class="btn primary_btn">check form</button>
            </div>
            <div class="right">
    <div class="main_heading">
        <h2>Apply For web development Post</h2>
    </div>
    <form  method="post">
        <div class="input">
            <input type="text" placeholder="enter your name" name="user">
            <input type="text" placeholder="enter your quilification" name="degree">
            <input type="text" placeholder="enter your mobile number" name="number">
            <input type="text" placeholder="Email id" name="email">
            <input type="text" placeholder="any refrences" name="ref">
            <input type="text" placeholder="web developer" name="job_post">
            
        </div>
        <div class="inner_btn">
            <input type="submit" class="btn secondary_btn" name="submit">
        </div>
    </form>
    
            </div>
        </div>

    </div>
</body>
</html>
<?php


include ('connection.php');
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $degree=$_POST['degree'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $ref=$_POST['ref'];
    $job_post=$_POST['job_post'];
    // dumb, you use ( ` ) tilled instead of ( ' ) in query... these variables are suposed to be passed in strings...!
    $insertquery="insert into  job_regestration values(null,'$name','$degree','$number','$email','$ref','$job_post')";
    $result=mysqli_query($con,$insertquery);
}  
?>