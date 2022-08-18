<?php
    $file_name ="testing";
    header("Content-Disposition: attachment; charset=utf-16;filename=$file_name.xls");
?>
<table border="1">
    <tr height="60" align="center" valign="middle">
        <td width="60"> 가 </td>
        <td width="60"> B </td>
        <td width="60"> C </td>
    </tr>
    <tr height="60" align="center" valign="middle">
        <td width="60"> 1 </td>
        <td width="60"> 2 </td>
        <td width="60"> 3 </td>
    </tr>
</table>