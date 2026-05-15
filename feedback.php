<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Name:
        <input type="text" name="name"><br><br>
        Feedback:
        <textarea name="feedback"></textarea><br><br>
        <input type="submit" name="send" value="submit">
    </form>
<?php
if(isset($_POST['send']))
{
    echo"Thank you for your Feedback";
}
?>
</body>
</html>