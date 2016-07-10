<html>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen"> 
<script>
function copyText()
{
var c=document.getElementById("prize").value;

Session("Id") = document.getElementById("prize").value;
}
</script>
</html>

<?php
$page = (int) $_GET['page'];
if ($page < 1) $page = 1;

mysql_connect('localhost','root','');
mysql_select_db('qwerty');
Print "<link rel=stylesheet href=css/style.css type=text/css media=screen>";
$resultsPerPage = 10;
$startResults = ($page - 1) * $resultsPerPage;
$numberOfRows = mysql_num_rows(mysql_query('SELECT * FROM homes'));
$totalPages = ceil($numberOfRows / $resultsPerPage);

$query = mysql_query("SELECT * FROM homes LIMIT $startResults, $resultsPerPage");
Print "<table class=tablejay>";
while ($output = mysql_fetch_array($query))
{	//echo '<table><tr><td>'.$output['beds'].'</td><td>'.$output['Name'].'</td></tr><br />';
	//echo $output['Name'].'<br />';
	//echo "hey";
	
	echo "<tr class=success>";
 echo "<td >".$output['Name'] . "</td> "; 
 echo "<td>".$output['Address'] . " </td>"; 
 echo "<td>".$output['beds'] . "</td> "; 
 echo "<td>".$output['feet'] . " </td>";
 echo "<td >".$output['Prize'] . "</td> ";
 echo "<td >".$output['Que'] . "</td> ";
 echo "<td >".$output['City'] . "</td> ";
 echo "<td >".$output['State'] . "</td> ";
 echo "<td >".$output['email'] . "</td></tr> <br/>";
 
}
Print "</table>";
echo '<a href="?page=1">First</a>&nbsp';

if($page > 1)
	echo '<a href="?page='.($page - 1).'">Back</a>&nbsp';

for($i = 1; $i <= $totalPages; $i++)
{
	if($i == $page)
		echo '<strong>'.$i.'</strong>&nbsp';
	else
		echo '<a href="?page='.$i.'">'.$i.'</a>&nbsp';
}

if ($page < $totalPages)
	echo '<a href="?page='.($page + 1).'">Next</a>&nbsp;';

echo '<a href="?page='.$totalPages.'">Last</a>';
?>