
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
	</style>
</head>
<h2><center>Result Connection</center></h2>
<table class="container">
	<thead>
		<tr>
			<th><h1>Name</h1></th>
			<th><h1>ID</h1></th>
			<th><h1>Department</h1></th>
			<th><h1>Year</h1></th>
			<th><h1>College</h1></th>
			<th><h1>Mark</h1></th>
		</tr>
	</thead>
	<tbody>
	<?php
	
$stud_individual_id=array();
$name=array();
$year=array();
$mark=array();
$department=array();
$college=array();
$conn=mysql_connect("localhost","root","");
mysql_select_db('tezfuerza',$conn);
$truncate="truncate table result_table_technical_connection;";
mysql_query($truncate,$conn);
//$queer="select distinct stud_individual_id,earned_mark from technical_quiz order by id limit 3;" ;
$queer="select * from technical_connection where completed='*' order by earned_mark desc limit 5;";
$d=mysql_query($queer,$conn);
$temp="'";
while($r=mysql_fetch_array($d)){
	$stud_individual_id[]=$r['stud_individual_id'];
	$mark[]=$r['earned_mark'];
	echo "<br>";
}
$i=0;
while ($i < 5) {
	$e="select * from centerlised_table where stud_individual_id=$temp$stud_individual_id[$i]$temp;";
	$r=mysql_query($e,$conn);
	while($re=mysql_fetch_array($r))
	{

	
		$name[]=$re['name'];
		$year[]=$re['year'];
		$department[]=$re['department'];
		$college[]=$re['college'];
	}
	$i++;
}
$i=0;
while ($i<5) {	
	$que="insert into result_table_technical_connection values('',$temp$stud_individual_id[$i]$temp,$temp$name[$i]$temp,$temp$year[$i]$temp,$temp$college[$i]$temp,$temp$department[$i]$temp )";
	mysql_query($que,$conn);
	$i++;
}

$tableQuery="select * from result_table_technical_connection;";
$d=mysql_query($tableQuery,$conn);
$i=0;
unset($name);
unset($year);
unset($department);
unset($college);
unset($stud_individual_id);
$name=array();
$department=array();
$year=array();
$college=array();
$stud_individual_id=array();
while ($row=mysql_fetch_array($d)) {
	$name[]=$row['name'];
	$stud_individual_id[]=$row['student_individual_id'];
	$department[]=$row['department'];
	$year[]=$row['year'];
	$college[]=$row['college'];

}
$j=count($name);
while ( $i<$j) {
	echo "<tr>";
	echo "<td>$name[$i]</td>";
	echo "<td>$stud_individual_id[$i]</td>";
	echo "<td>$department[$i]</td>";
	echo "<td>$year[$i]</td>";
	echo "<td>$college[$i]</td>";
	echo "<td>$mark[$i]</td>";
	echo "</tr>";
	$i++;
}
?>
	</tbody>
</table>
</span>
</h1>
</html>