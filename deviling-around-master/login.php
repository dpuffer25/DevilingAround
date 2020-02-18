<?php
$dbhost = "107.180.1.16";
$dbuser = "group8";
$dbpass = "!!Cis440";
$db = "group8";

session_start();
$connection = new mysqli($dbhost,$dbuser,$dbpass,$db);

if(isset($_POST) & !empty($_POST))
{
    $username = $_POST['user'];
    $email = $_POST['user'];
    $pswd = $_POST['password'];
    $sql = "SELECT * FROM users WHERE (username = '$username' OR email = '$email') AND pswd = '$pswd' LIMIT 1";
    $result = mysqli_query($connection,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1)
    {
        $_SESSION['user_session'] = $username;
        echo "ok";
    }
    else
    {
        echo "error";
        $connection->close();
    }
}
else
{
    echo("ERROR");
}
?>
