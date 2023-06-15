<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <h1>Welcome to travel form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder = "Enter your name">
            <input type="text" name="age" id="age" placeholder = "Enter your age">
            <input type="text" name="gender" id="gender" placeholder = "Enter your gender">
            <input type="email" name="email" id="email" placeholder = "Enter your email">
            <input type="phone" name="phone" id="phone" placeholder = "Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder = "Enter any other information here"></textarea>
            <button class="btn">Submit</button>           
        </form>
    </div>
    <?php
    $server = "localhost";
    $username ="root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());















    }   
    ?>
    <script src="index.js"></script>
</body>
</html>