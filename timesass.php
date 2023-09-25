<?php
echo "<table border= '1'";
echo "<tr><th>&nbsp;</th>";

for ($col = 1; $col <=12; $col++){
    echo "<th>$col</th>";
}
echo "</tr>";

for ($row = 1; $row <= 12; $row++){
    echo "<tr><th>$row</th>";

    for ($col = 1; $col <=12; $col++){
        $result = $col * $row;
        echo "<td>{$col} x {$row} = {$result}</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>