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

            if (isset($_GET['move'])) {
                insert_value($_COOKIE['value']);
            }
            if (isset($_GET['view'])) {
                value_history();
            }


        }



    ?>



    <div class="voice_to_text"> 
        <h1>Voice command for servo motor</h1>
        <h2 id="convert_text">Click on <i>Speak</i> to choose a COM port and to start speaking</h2>
        <h2>to save the value into the database, press <i>Move</i> after you see your word appear on the screen</h2>
        <h3 id="action">Current word</h3>
        <button name="COM-connection" id="connection" onclick="COM_PORT()">Speak</button>
        <a href="https://github.com/iAnasAbdullah/Get-communication" target="_blank"><button>go to rapository</button></a>


            <form method="GET" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <button name="move" value="<?php $_COOKIE['value']?>">Move</button>              
                <button name="view" id="value_history">history</button>            
            </form>

        
    </div>
    
</body>
</html>
