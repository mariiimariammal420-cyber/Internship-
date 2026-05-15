<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Basic Salary:
        <input type="number" name="salary"><br><br>
        <input type="submit" name="calc" value="calculate">
    </form>
<?php
if(isset($_POST['calc']))
{
    $salary=$_POST['salary'];
    $hra=$salary*0.20;
    $da=$salary*0.10;
    $total=$salary+$hra+$da;
    echo"Total Salary=$total";
}
?>
</body>
</html>