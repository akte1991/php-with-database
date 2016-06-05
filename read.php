<?php
include 'connectToDatabase.php';
print("<h3>People saved into database</h3>");
connectToDatabase("localhost","root","pysio06","index.html");
mysql_select_db("my_database");
$do = "SELECT * FROM osoby";
$does = mysql_query($do);
print("<table border>");
print("<tr><th>No</th> <th>surname</th> <th>name</th></tr>");

$index = 0;
while($data = mysql_fetch_object($does))
{
    $index++;
    
    printf("<tr><td width=20>%d</td><td width=100>%s</td>", $index, $data-> surname);
    printf("<th width=100>%s</td></tr>",$data->name);
}

print("</table>");

mysql_free_result($does);
mysql_close($db);
formReturn("index.html");

?>