<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="JS Form validation.css">
    <title>Login Page</title>
</head>

<body>
    <div id="formcontainer">
        <h2>Login</h2>
        <form onsubmit="sub()"  method="post" name= "submit"> 

            <input type="Username" placeholder="Username" id="User" name="username">

            <small id="error">Enter Valid Input</small>
            <br>

            <input type="Password" placeholder="Password" id="pass" name="password"> 
            <small id="error1">Enter Valid Input</small>
            <br>
            
            <input type="submit" action="" class="sub" name="submit">
        </form>
    </div>
    <script src="JS Form validation.js"></script>
</body>
<php
    $con = mysqli_connect('localhost', 'root', '', 'new');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO login(`username`, `password`) VALUES ('$username','$password')";
        $run = mysqli_query($con, $query);
        if ($run) {
            alert("dsfsfsdf")
        } else {
            echo "Error";
            alert("dsfsfdsadassdf")

        }
    }

?>
</html>