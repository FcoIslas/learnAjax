<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysql_connect('localhost','root','dwarfest','sgaep');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysql_select_db($con,"sgaep");
$sql="SELECT * FROM tableSubjects WHERE vcIdSubject = '".$q."'";
echo $sql;
$result = mysql_query($con,$sql);
echo "<table>
<tr>
<th>vcSubjectCareer</th>
<th>intTurn</th>
<th>intSemester</th>
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['vcSubjectCareer'] . "</td>";
    echo "<td>" . $row['intTurn'] . "</td>";
    echo "<td>" . $row['intSemester'] . "</td>";
    echo "</tr>";
    echo "hola";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
