<?php
$sname = "localhost";
$uname = "root";
$psw = "";
$db = "dbtry";

$conn = new mysqli($sname, $uname, $psw, $db);
if ($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);
}

if (!isset($_POST['submit'])){
    $qry = "insert into tblemp (name,mail,psw) values ('$_POST[name]','$_POST[mail]',$_POST[psw])";
    if ($conn->query($qry) === TRUE)
    {
        echo"sucess";
    }
    else
    {
        echo "Error: " . $qry . "<br>" . $conn->error;
    }
    header("Location:index.php");
    die("hello Die");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <div class="alert alert-warning" role="alert">
        This is a warning alert—check it out!
    </div> -->

    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> -->
    </div>
</body>

</html>