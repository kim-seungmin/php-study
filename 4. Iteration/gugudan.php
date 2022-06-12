<style>
    table {border-collapse:collapse; width:800px;}
    td {border:solid 1px gray; text-align:center; padding:5px;}
</style>

<table>
<tr>
<?php

    for($i=1; $i<10; $i++)
    {   
        echo "<td>{$i}단</td>";
    }

?>
</tr>    
<?php

    for($i=1; $i<10; $i++)
    {   
        echo "<tr>";
        for($j=1; $j<10; $j++)
        {
            
            echo "<td> {$i} X {$j} =".$i * $j." </td>";
        }
        echo "</tr>";
    }

?>
</table>