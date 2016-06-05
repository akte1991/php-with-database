<?php

    function connectToDatabase($address, $user, $password, $returnPageName)
    {
        global $db;
        @$db = mysql_pconnect($address, $user, $password);
        
        if(!$db)
        {
            print("cannot connect to database<br>");
            formReturn($returnPageName);
            exit;
        }
    }


function formReturn($returnPageName)
{
    printf("<br><form action=\"%s\" method=\"post\">",$returnPageName);
    print("<button type=\"submit\">Return</button></form>");
}


?>