<?php
    // ****Let ati php ar akti class/function. jodi kono class use korte hoi 
    // tobe tar akti class object create korte hoi.
    // akhane ***"new" keyword ti hosee class object.
    //ai function je return dibe thake dore rakte variable hisebe $connection use korte pari
    
    // mysqli('hostname', 'user_name','password', 'database_name');
    // mysqli('localhost', 'root','', 'school_management_system_2');
    // new mysqli('localhost', 'root','', 'school_management_system_2');
    // variable
    $connection= new mysqli('localhost', 'root','', 'school_management_system_2');

    // database connection test check....
    if($connection == true){
        echo "DB Successfully Connected!!!";
    }
    else{
        echo "DB Connection Failed.";
    }
?>