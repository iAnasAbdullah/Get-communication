<?php

function insert_value($value){
    if ($value == 999){
        printf("value must be يمين , يسار , منتصف");
        return;
    }
    // try {
        $new_value = validation($value);
        $sql_query = "INSERT INTO servo_values (servo_value, date_added) VALUES (:task, :date_value)";
        $date = new DateTime("now", new DateTimeZone('Asia/Riyadh'));
        $date = $date->format('Y-m-d H:i:s');
        $insert_statement = $GLOBALS['conn']->prepare($sql_query);
        if ($insert_statement){
    
            $insert_statement->bindParam('task', $new_value);
            $insert_statement->bindParam('date_value', $date, PDO::PARAM_STR);
            print("Successfully Added!");
            if (!$insert_statement->execute() || $insert_statement->rowCount() !=1) {
                print_r('Error executing SQL insert statement: ' . $insert_statement->err);
                return;
            }
        }else{
            printf("failed to insert into the database");
            return;
        }
    // }catch(Exception){
    //     print("Exception error, value was not added to database");
    // }



}

function validation($data){
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>