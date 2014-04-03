<?php
 
function Login()
{
    session_start();

    define('DB_HOST', 'localhost');
    define('DB_NAME', 'practice');
    define('DB_USER','root');
    define('DB_PASSWORD','');
 
    $con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
    $db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());

    if(isset($_POST['index-user']) && isset($_POST['index-pass']))
    { 
        $userName = $_POST['index-user'];
        $password = $_POST['index-pass'];
    }

    $sql = "SELECT * FROM websiteusers WHERE userName = '$userName' and pass = '$password'";
    $result = mysql_query($sql) or die(mysql_error());

    if(mysql_num_rows($result) == 1)
    {
        $_SESSION['username']="$userName";
        $_SESSION['password']="$password";

        header('Location: usercenter.php');
    }
    else
    {
        echo "*** Username or Password is not correct ***<br />";
        echo "<input class='button' type='button' value='Back' onclick=\"window.location.href='index.php'\"></input>";
    }


}

if(isset($_POST['index-submit']))
{
    Login();
}

?>
