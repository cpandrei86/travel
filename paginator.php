<?php 
$num_rec_per_page=1;
mysql_connect('localhost','root','');
mysql_select_db('test');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$city = 'Paris';
$sql = "SELECT * FROM all1 WHERE city ='".$city."' LIMIT $start_from, $num_rec_per_page "; 
$rs_result = mysql_query ($sql); 
?> 
<table>
<tr><td>Country</td><td>City</td></tr>
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['city']; ?></td>            
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT * FROM all1"; 
$rs_result = mysql_query($sql); 
$total_records = mysql_num_rows($rs_result);
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='paginator.php?page=1'>".'|<'."</a> "; 

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='paginator.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='paginator.php?page=$total_pages'>".'>|'."</a> "; 
?>