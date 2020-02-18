<?php
$dbhost = "107.180.1.16";
$dbuser = "group8";
$dbpass = "!!Cis440";
$db = "group8";

$connection = new mysqli($dbhost,$dbuser,$dbpass,$db);

if(isset($_POST) & !empty($_POST))
{
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $sql = ("SELECT username FROM users where username = '$username'");
    $result = mysqli_query($connection,$sql);
    $counter = mysqli_num_rows($result);

    if($counter>0)
    {
        echo '<div style="color:red;"><b>'.$username.'</b> Not Available</div>';
    }
    else
    {
        echo '<div style="color:green;"><b>'.$username.'</b> Available </div>';
    }
}

?>