<?php
include 'connectToDatabase.php';

$surname = $_POST['surname'];
$name = $_POST['name'];

if(!$surname || !$name)
{
    print("please fill in the form<br>");
    formReturn("index.html");
    exit;
}

connectToDatabase("localhost","root","pysio06","index.html");
mysql_select_db("my_database");
$do = "INSERT INTO osoby VALUES('$surname','$name')";
$does = mysql_query($do);

if($does)
    printf("saved to database <br>", $surname, $name);

mysql_close($db);
formReturn("index.html");

?>