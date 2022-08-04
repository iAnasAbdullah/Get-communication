<?php

function value_history(){
    $sql_query = "SELECT servo_value, date_added FROM servo_values";
    $statement = $GLOBALS['conn']->prepare($sql_query);
    if ($statement && $statement->execute() && $statement->columnCount()> 0) {
        echo '<table>
                <tr id="my-list>
                    <td>VALUE</td>
                    <td>TIMESTAMP</td>
                </tr>';
        while($row = $statement->fetch()) {
            echo '<tr id="my-list">';
            echo "<td>".$row['servo_value']."</td>"."<td>".$row['date_added']."</td>";
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<h2>Your Search history is empty!</h2>';
    }
    $statement = null;
}


?>