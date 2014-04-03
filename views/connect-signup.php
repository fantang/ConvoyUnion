<?php

session_start();
session_destroy();

define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER','root');
define('DB_PASSWORD','');

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
    $fullname = $_POST['signup-name'];
    $userName = $_POST['signup-user'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-pass'];
    $query = "INSERT INTO websiteusers (fullname,userName,email,pass) VALUES ('$fullname','$userName','$email','$password')";
    $data = mysql_query($query)or die(mysql_error());

    if($data)
    {
        header('Location: signup-success.php');
    }
}

function SignUp()
{
    if(!empty($_POST['signup-user']) && !empty($_POST['signup-name']) && !empty($_POST['signup-email']) && !empty($_POST['signup-pass']))
    {
        $user_name = $_POST['signup-user'];

        $query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$user_name'") or die(mysql_error());

        if(mysql_num_rows($query) == 0 && strlen($_POST['signup-user']) >= 5 && strlen($_POST['signup-pass']) >= 5)
        {
            newuser();
        }
        else
        {
            if(strlen($_POST['signup-user']) < 5)
                echo "*** Username must contain at least 5 characters ***<br />";
            if(strlen($_POST['signup-pass']) < 5)
                echo "*** Password must contain at least 5 characters ***<br />";
            if(mysql_num_rows($query) > 0)
                echo "*** SORRY...The username has been used ***<br />";
            echo "<input class='button' type='button' value='Back' onclick='window.location.href='signup.php''></input>";
        }
    }
    else
    {
        if(empty($_POST['signup-name']))
            echo "*** Name cannot be empty ***<br />";
        if(empty($_POST['signup-email']))
            echo "*** Email cannot be empty ***<br />";
        if(empty($_POST['signup-user']))
            echo "*** Username cannot be empty ***<br />";
        if(empty($_POST['signup-pass']))   
            echo "*** Password cannot be empty ***<br />";
        echo "<input class='button' type='button' value='Back' onclick=\"window.location.href='signup.php'\"></input>";
    }
}

if(isset($_POST['signup-submit']))
{
    SignUp();
}
?>
