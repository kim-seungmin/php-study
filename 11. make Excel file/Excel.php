<?php
    $file_name ="testing";
    header("Content-Disposition: attachment; filename=$file_name.xls");
?>
<table border="1">
    <tr height="60" align="center" valign="middle">
        <td width="60"> 가 </td>
        <td width="60"> 나 </td>
        <td width="60"> 다 </td>
    </tr>
    <tr height="60" align="center" valign="middle">
        <td width="60"> 1 </td>
        <td width="60"> 2 </td>
        <td width="60"> 3 </td>
    </tr>
</table>