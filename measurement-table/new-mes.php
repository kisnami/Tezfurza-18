
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
<table class="container">
	<thead>
		<tr>
			<th><h1>Name</h1></th>
			<th><h1>PPT</h1></th>                                  
			<th><h1>MultiMedia</h1></th>
			<th><h1>Connection</h1></th>
			<th><h1>Quiz</h1></th>
			<th><h1>WinExpert</h1></th>
			<th><h1>CodeBuzz</h1></th>
		</tr>
	</thead>
	<tbody>
<?php
$stud_group_id=array();

//temp its contain a ' symbol when we comes to mysql the querry doesn't execute that why reason i make a temp var to hold the symbol
$temp="'";
$conn=mysql_connect("localhost","root","");
mysql_select_db('tezfuerza',$conn);

//its used to find whether a PPT events participants to complete their event or not
$query="SELECT ppt.`stud_group_id` from ppt left outer join result_table_ppt on ppt.stud_group_id=result_table_ppt.stud_group_id where result_table_ppt.id is null && ppt.completed='*'";


$value=mysql_query($query,$conn);
while ($row=mysql_fetch_array($value)) {
	$stud_group_id[]=$row['stud_group_id'];
}
$length=count($stud_group_id);
$i=0;
$j=0;
while($i<$length && $j<$length){
$studentName=array();
$stud_individual_id=array();
$valueFromCenterlisedTable="select name,stud_individual_id from centerlised_table where stud_group_id=$temp$stud_group_id[$i]$temp";
$fieldValue=mysql_query($valueFromCenterlisedTable,$conn);

while($row=mysql_fetch_array($fieldValue)){
	$studentName[]=$row['name'];
	$stud_individual_id[]=$row['stud_individual_id'];
}

///when 1 person attended event 
if((empty($studentName[1])&&empty($studentName[2]))&&empty($studentName[3]))
{
	if($i<$length){
		$update="insert into measurement_table values('',$temp$stud_individual_id[0]$temp,'*','','','','','',$temp$studentName[0]$temp);";
		mysql_query($update,$conn);
	}
else{
	$k=$i--;
	$k--;
	$update="insert into measurement_table values('',$temp$stud_individual_id[0]$temp,'*','','','','','',$temp$studentName[0]$temp);";

	mysql_query($update,$conn);

	}
}

//when 2 person attended event
elseif(empty($studentName[2])&&empty($studentName[3])){
	$k=0;
	while ( $k<= 1) {
		$update="insert into measurement_table values('',$temp$stud_individual_id[$i]$temp,'*','','','','','',$temp$studentName[$k]$temp);";

		mysql_query($update,$conn);
		$k++;
		}
}

//when 3 person attened event
elseif(empty($studentName[3])) {
	$k=0;
	while ( $k<= 2) {

		$update="insert into measurement_table values('',$temp$stud_individual_id[$i]$temp,'*','','','','','',$temp$studentName[$k]$temp);";

		mysql_query($update,$conn);
		$k++;
		}
}

//when 4 person attened events Max(4 person to allowed to atten event)
else{
	$k=0;
	$a=0;

	while ( $k<= 3) {

		$update="insert into measurement_table values('',$temp$stud_individual_id[$a]$temp,'*','','','','','',$temp$studentName[$k]$temp);";
		mysql_query($update,$conn);
		$k++;
		$a++;
		}
}
	unset($studentName);
	unset($stud_individual_id);
	$j++;
	$i++;
}

unset($stud_group_id);

//its used to find whether a Multimedia events participants to complete their event or not
$stud_group_id=array();

$quer="SELECT multimedia.`stud_group_id` from multimedia left outer join result_table_multimedia on multimedia.stud_group_id=result_table_multimedia.stud_group_id where result_table_multimedia.id is null && multimedia.completed='*';";
$value=mysql_query($quer,$conn);
while ($row=mysql_fetch_array($value)) {
	$stud_group_id[]=$row['stud_group_id'];
}
$length=count($stud_group_id);
$i=0;
$j=0;
while($i<$length && $j<$length){
	$studentName=array();
	$stud_individual_id=array();
	$valueFromCenterlisedTable="select name,stud_individual_id from centerlised_table where stud_group_id=$temp$stud_group_id[$i]$temp";
	
	$fieldValue=mysql_query($valueFromCenterlisedTable,$conn);
	
	
	while($row=mysql_fetch_array($fieldValue)){
		$studentName[]=$row['name'];
		$stud_individual_id[]=$row['stud_individual_id'];
		}
        //when 1 person attened event
		if((empty($studentName[1])&&empty($studentName[2]))&&empty($studentName[3]))
		{
				if($i<$length){
					$update="insert into measurement_table values('',$temp$stud_individual_id[0]$temp,'*','','','','','',$temp$studentName[0]$temp);";
					$update1="update measurement_table set multimedia='*' where student_individual_id=$temp$stud_individual_id[0]$temp";
					//echo "$update1<br>$update<br>";
						mysql_query($update1,$conn);
					
						mysql_query($update,$conn);
				}
				else{
				$k=$i--;
				$k--;
				$update="insert into measurement_table values('',$temp$stud_individual_id[0]$temp,'*','','','','','',$temp$studentName[0]$temp);";
					$update1="update measurement_table set multimedia='*' where student_individual_id=$temp$stud_individual_id[0]$temp";
					//echo "$update1<br>$update<br>";
				mysql_query($update1,$conn);
				mysql_query($update,$conn);
				
			}
			}
			//when 2 person attened event
			elseif(empty($studentName[2])&&empty($studentName[3])){
					$k=0;
					while ( $k<= 1) {
					$update="insert into measurement_table values('',$temp$stud_individual_id[$i]$temp,'*','','','','','',$temp$studentName[$k]$temp);";
					
					//echo "$update<br>";
					$update1="update measurement_table set multimedia='*' where student_individual_id=$temp$stud_individual_id[$i]$temp";
					//echo "$update1<br>$update<br>";
						mysql_query($update1,$conn);

					
					mysql_query($update,$conn);
							$k++;
					}
						

			}
			//when 3 person attened event
			elseif(empty($studentName[3])) {
				$k=0;
				$a=0;
					while ( $k<= 2) {
						
					$update="insert into measurement_table values('',$temp$stud_individual_id[$a]$temp,'*','','','','','',$temp$studentName[$k]$temp);";
					$update1="update measurement_table set multimedia='*' where student_individual_id=$temp$stud_individual_id[$i]$temp";
					//echo "$update1<br>$update<br>";
					mysql_query($update1,$conn);
					mysql_query($update,$conn);
							$k++;
							$a++;
					}
				

			}

			//when 4 person attened event
			else{
				$k=0;
				$a=0;

					while ( $k<= 3) {
						//echo "$studentName[$k]";
					$update="insert into measurement_table values('',$temp$stud_individual_id[$a]$temp,'*','','','','','',$temp$studentName[$k]$temp);";
					//echo "$update<br>";
					$update1="update measurement_table set multimedia='*' where student_individual_id=$temp$stud_individual_id[$a]$temp";
					mysql_query($update1,$conn);;
					$k++;
					$a++;
					}


			}
		unset($studentName);
		unset($stud_individual_id);
		$j++;
		$i++;
	}



	//its used to find whether a technical_Quiz event participants to complete their event or not
	unset($stud_individual_id);
		$stud_individual_id=array();
	$qry="SELECT technical_quiz.`stud_individual_id` from technical_quiz left outer join result_table_technical_quiz on technical_quiz.`stud_individual_id`=result_table_technical_quiz.`student_individual_id` where result_table_technical_quiz.id is null && technical_quiz.completed='*';";
	$value=mysql_query($qry,$conn);
	while ($row=mysql_fetch_array($value)) {
	$stud_individual_id[]=$row['stud_individual_id'];
	}
	
	$length=count($stud_individual_id);
	$i=0;
	$j=0;
	while($i<$length){
	$studentName=array();
	$valueFromCenterlisedTable="select name,stud_individual_id from centerlised_table where stud_individual_id=$temp$stud_individual_id[$i]$temp";
	
	$fieldValue=mysql_query($valueFromCenterlisedTable,$conn);
	while($row=mysql_fetch_array($fieldValue)){
		$studentName[]=$row['name'];
		$stud_individual_id[]=$row['stud_individual_id'];
		}
		$i++;
	}
	$i=0;
	while ($i<$length) {
		$q="insert into measurement_table values('',$temp$stud_individual_id[$i]$temp,'','','*','','','',$temp$studentName[$i]$temp)";
	
		$q1="update measurement_table set technical_quiz='*' where student_individual_id=$temp$stud_individual_id[$i]$temp;";
		mysql_query($q,$conn);
		mysql_query($q1,$conn);
		$i++;
	}




	//its used to find whether a techinical_connection events participants to complete their event or not
	unset($stud_individual_id);
		$stud_individual_id=array();
	$qry="SELECT technical_connection.`stud_individual_id` from technical_connection left outer join result_table_technical_connection on technical_connection.`stud_individual_id`=result_table_technical_connection.`student_individual_id` where result_table_technical_connection.id is null && technical_connection.completed='*';";
	$value=mysql_query($qry,$conn);
	while ($row=mysql_fetch_array($value)) {
	$stud_individual_id[]=$row['stud_individual_id'];
	}
	
	$length=count($stud_individual_id);
	$i=0;
	$j=0;
	unset($studentName);
	$studentName=array();
	while($i<$length){
	$valueFromCenterlisedTable="select name,stud_individual_id from centerlised_table where stud_individual_id=$temp$stud_individual_id[$i]$temp";
	
	$fieldValue=mysql_query($valueFromCenterlisedTable,$conn);
	while($row=mysql_fetch_array($fieldValue)){
		$studentName[]=$row['name'];
		$stud_individual_id[]=$row['stud_individual_id'];
		}
		$i++;
	}
	$i=0;
	
	
	while ($i<$length) {
		$q="insert into measurement_table values('',$temp$stud_individual_id[$i]$temp,'','','*','','','',$temp$studentName[$i]$temp)";
	
		$q1="update measurement_table set technical_connection='*' where student_individual_id=$temp$stud_individual_id[$i]$temp;";
	
		mysql_query($q,$conn);
		mysql_query($q1,$conn);
		$i++;
	}	




	//its used to find whether a winexpert events participants to complete their event or not
	unset($stud_individual_id);
		$stud_individual_id=array();
	$qry="SELECT `winexpert`.`stud_individual_id` from `winexpert` left outer join  result_table_winexpert on `winexpert`.`stud_individual_id`=result_table_winexpert.`student_individual_id` where result_table_winexpert.id is null && winexpert.completed='*';";
	$value=mysql_query($qry,$conn);
	while ($row=mysql_fetch_array($value)) {
	$stud_individual_id[]=$row['stud_individual_id'];
	}
	
	$length=count($stud_individual_id);
	$i=0;
	$j=0;
	unset($studentName);
	$studentName=array();
	while($i<$length){
	$valueFromCenterlisedTable="select name,stud_individual_id from centerlised_table where stud_individual_id=$temp$stud_individual_id[$i]$temp";
	
	$fieldValue=mysql_query($valueFromCenterlisedTable,$conn);
	while($row=mysql_fetch_array($fieldValue)){
		$studentName[]=$row['name'];
		$stud_individual_id[]=$row['stud_individual_id'];
		}
		$i++;
	}
	$i=0;
	$length=count($studentName);
	while ($i<$length) {
		$q="insert into measurement_table values('',$temp$stud_individual_id[$i]$temp,'','','*','','','',$temp$studentName[$i]$temp)";
	

		$q1="update measurement_table set win_expert='*' where student_individual_id=$temp$stud_individual_id[$i]$temp;";
		mysql_query($q,$conn);
		mysql_query($q1,$conn);
		$i++;
	}	


	//its used to find whether a code_buzz events participants to complete their event or not
	unset($stud_individual_id);
		$stud_individual_id=array();
	$qry="SELECT `code_buzz`.`stud_individual_id` from `code_buzz` left outer join  result_table_code_buzz on `code_buzz`.`stud_individual_id`=result_table_code_buzz.`student_individual_id` where result_table_code_buzz.id is null ;";
	$value=mysql_query($qry,$conn);
	while ($row=mysql_fetch_array($value)) {
	$stud_individual_id[]=$row['stud_individual_id'];
	}
	
	$length=count($stud_individual_id);
	$i=0;
	$j=0;
	unset($studentName);
	$studentName=array();
	while($i<$length){
	$valueFromCenterlisedTable="select name,stud_individual_id from centerlised_table where stud_individual_id=$temp$stud_individual_id[$i]$temp";
	
	$fieldValue=mysql_query($valueFromCenterlisedTable,$conn);
	while($row=mysql_fetch_array($fieldValue)){
		$studentName[]=$row['name'];
		$stud_individual_id[]=$row['stud_individual_id'];
		}
		$i++;
	}
	$i=0;
	
	while ($i<$length) {
		$q="insert into measurement_table values('',$temp$stud_individual_id[$i]$temp,'','','*','','','',$temp$studentName[$i]$temp)";
	
		$q1="update measurement_table set code_buzz='*' where student_individual_id=$temp$stud_individual_id[$i]$temp;";

		mysql_query($q,$conn);
		mysql_query($q1,$conn);
		$i++;
	}	



//dispaly
unset($stud_individual_id);
unset($name);


//to display entire values to UI
$entair="select * from measurement_table;";
$stud_individual_id=array();
$name=array();
$ppt=array();
$multimedia=array();
$technical_connection=array();
$technical_quiz=array();
$winexpert=array();
$code_buzz=array();
$d=mysql_query($entair,$conn);
while ($row=mysql_fetch_array($d)) {
	$stud_individual_id[]=$row['student_individual_id'];
	$name[]=$row['name'];
	$ppt[]=$row['ppt'];
	$multimedia[]=$row['multimedia'];
	$technical_connection[]=$row['technical_connection'];
	$technical_quiz[]=$row['technical_quiz'];
	$winexpert[]=$row['win_expert'];
	$code_buzz[]=$row['code_buzz'];
}

$j=count($stud_individual_id);

$i=0;	

while ($i<$j) {
	echo "<tr>";
	echo "<td>$name[$i]</td>";
	echo "<td>$ppt[$i]</td>";
	echo "<td>$multimedia[$i]</td>";
	echo "<td>$technical_connection[$i]</td>";
	echo "<td>$technical_quiz[$i]</td>";
	echo "<td>$winexpert[$i]</td>";
	echo "<td>$code_buzz[$i]</td>";
	echo "</tr>";
	$i++;
}

?>
</tbody>
</table>
</span>
</h1>
</html>