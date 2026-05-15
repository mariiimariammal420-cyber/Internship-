<!DOCTYPE html>
<html>
<head>
    <title> Registeration form </title>
</head>
<body>
    <form method="post">
        Name:
        <input type="text" name="name"><br><br>
        Email:
        <input type="email" name="email"><br><br>
        Password:
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    echo"Registeration Successful<br>";
    echo"Name:$name<br>:";
    echo"Email:$email<br>";
}
?>
</body>
</html>