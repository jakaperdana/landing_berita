<?php
//file get_data.php

//-- melakukan koneksi ke database --
$conn=mysql_connect("localhost", "root" ,""); // dbhost, dbuser, dbpsw
mysql_select_db("suitmedia");
//--- membaca data ----
$sql="select * from comments";
$hs=mysql_query($sql);
echo '<div style=" background-color:#eeeeee;"><table width="100%" border="0" cellpadding="0">
<tr>
<td bgcolor="#0099CC">Name</td>
<td bgcolor="#0099CC">Avatar</td>
<td bgcolor="#0099CC">Data</td>
<td bgcolor="#0099CC">Comments</td>
</tr>';
while($rs=mysql_fetch_array($hs)){
echo'<tr>
<td bgcolor="white">'.$rs['name'].'</td>
<td bgcolor="white">'.$rs['avatar'].'</td>
<td bgcolor="white">'.$rs['data'].'</td>
<td bgcolor="white"><button>Edit</button></td>
</tr>';
}
echo'</table></div>';
?>