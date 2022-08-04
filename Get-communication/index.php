<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>

    <?php

        require_once('./DB_Connection.php');
        require('./insert_value.php');
        require('./view.php');
        require('./servo.php');

        if ($_SERVER["REQUEST_METHOD"] == "GET"){

            if (isset($_GET['COM-connection'])) {
                connection();
            } 
            if (isset($_GET['record'])) {
                record();
            }
            if (isset($_GET['view'])) {
                value_history();
            }


        }



    ?>



    <div class="voice_to_text"> 
        <h1>Voice command for servo motor</h1>
        <h2 id="convert_text">choose a COM port then click on <i>speak</i> to start speaking</h2>





            <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <button name="COM-connection" id="connection">Choose a COM port</button>
                <button name="record"  id="click_to_record">speak</button>
                <button name="view" id="value_history">history</button>
                <a href="https://github.com/iAnasAbdullah/voice-command-arduino" target="_blank"><button>go to rapository</button></a>
            </form>

        
    </div>

</body>
</html>