
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
<h2><center>Result PPT</center></h2>
<table class="container">
	<thead>
		<tr>
			<th><h1>Name</h1></th>
			<th><h1>ID</h1></th>
			<th><h1>Year</h1></th>
			<th><h1>Department</h1></th>
			<th><h1>College</h1></th>
		</tr>
	</thead>
	<tbody>
	<?php
$stud_group_id=array();
$year=array();
$department=array();
$college=array();
$email=array();
$conn=mysql_connect("localhost","root","");
mysql_select_db('tezfuerza',$conn);
$truncate="truncate table result_table_ppt;";
mysql_query($truncate,$conn);
$asc_querry="select * from ppt where completed='*' order by total_mark desc limit 3;";
$result=mysql_query($asc_querry,$conn);

$i=0;
$temp="'";
$length=array();
while($row=mysql_fetch_array($result)){
	$stud_group_id[]=$row['stud_group_id'];
	$length[]=$row['id'];

	}
//var_dump($stud_group_id);
$lengthid=count($length);
$j=0;
while($j<$lengthid && $i<$lengthid){
	$name1=array();
	$insertppt="SELECT name,`stud_group_id`,year,department,college,mail_id FROM centerlised_table where  stud_group_id=$temp$stud_group_id[$i]$temp;";
	
	$nameValue=mysql_query($insertppt,$conn);
	
	
	while($row=mysql_fetch_array($nameValue)){
		
		$name1[]=$row['name'];
		$year[]=$row['year'];
		$department[]=$row['department'];
		$college[]=$row['college'];
		$email[]=$row['mail_id'];
		}
		if(empty($name1[1])){
			
			if($i<$lengthid){
					$update="insert into result_table_ppt values('',$temp$stud_group_id[$i]$temp,'$name1[0]','$year[0]','$department[0]','$college[0]')";
						
						mysql_query($update,$conn);
			}
			else{
				$k=$i--;
				$k--;
				$update="insert into result_table_ppt values('',$temp$stud_group_id[$k]$temp,'$name1[0]','$year[0]','$department[0]','$college[0]')";
						
						mysql_query($update,$conn);
				
		
			}
		}
		else{
			$m=0;
		while ( $m<= 1) {
			if($i<$lengthid){
					$update="insert into result_table_ppt values('',$temp$stud_group_id[$i]$temp,$temp$name1[$m]$temp,$temp$year[$m]$temp,$temp$department[$m]$temp,$temp$college[$m]$temp)";
						
						mysql_query($update,$conn);
						$m++;
			}
			else{
				$k=$i--;
				$k--;
				
				$update="insert into result_table_ppt values('',$temp$stud_group_id[$k]$temp,$temp$name1[$m]$temp,$temp$year[$m]$temp,$temp$department[$m]$temp,$temp$college[$m]$temp)";
						
						mysql_query($update,$conn);
				
				
				$m++;
			}
		}
					
		
		
		}
		unset($name1);
		unset($year);
		unset($department);
		unset($college);
		$j++;
		$i++;
	}
	unset($stud_group_id);
	$stud_group_id=array();
	$tableQuery="select * from result_table_ppt;";
	$d=mysql_query($tableQuery,$conn);
	$i=0;
	unset($name);
	$name=array();
	while ($row=mysql_fetch_array($d)) {
	$name[]=$row['name'];
	$stud_group_id[]=$row['stud_group_id'];
	$department[]=$row['department'];
	$year[]=$row['year'];
	$college[]=$row['college'];
}
$j=count($name);
$i=0;
while ( $i<$j) {
echo "<tr>";
echo "<td>$name[$i]</td>";
echo "<td>$stud_group_id[$i]</td>";
echo "<td>$year[$i]</td>";
echo "<td>$department[$i]</td>";
echo "<td>$college[$i]</td>";
echo "</tr>";
$i++;
}
?>
	</tbody>
</table>
</span>
</h1>
</html>