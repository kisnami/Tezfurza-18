<?php 
$stud_group_id=array();
$college=array();
$college_1=array();
$stud_group_id_1=array();
$temp="'";
$conn=mysql_connect("localhost","root","");
mysql_select_db('tezfuerza',$conn);

///Event not completed code ....
$query="SELECT centerlised_table.`stud_group_id`,centerlised_table.college FROM `centerlised_table` left join `multimedia` on (centerlised_table.`multimedia`='*'&& `multimedia`.`completed`='*')&&(centerlised_table.`stud_group_id`= `multimedia`.`stud_group_id`) where `multimedia`.`stud_group_id`is null &&  centerlised_table.`multimedia`='*';";
$result=mysql_query($query,$conn);
while ($row=mysql_fetch_array($result)) {
    $stud_group_id[]=$row['stud_group_id'];
    $college[]=$row['college'];
}
$i=count($stud_group_id);
$j=0;

?>


<!DOCTYPE>
<html>
    <head>
    <title>Multimedia</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Pimp your tables with CSS3" />
        <meta name="keywords" content="table, css3, style, beautiful, fancy, css"/>
        <link rel="stylesheet" href="../style.css" type="text/css" media="screen"/>
    </head>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            font-family: Georgia, serif;
            font-size: 20px;
            font-style: italic;
            font-weight: normal;
            letter-spacing: normal;
            background: #f0f0f0;
        }
        #content{
            background-color:#fff;
            width:750px;
            padding:40px;
            margin:0 auto;
            padding-left: 47%;
            border-right:1px solid #ddd;
            -moz-box-shadow:0px 0px 16px #aaa;
        }
        .head{
            font-family:Helvetica,Arial,Verdana;
            text-transform:uppercase;
            font-weight:bold;
            font-size:12px;
            font-style:normal;
            letter-spacing:3px;
            color:#888;
            border-bottom:3px solid #f0f0f0;
            padding-bottom:10px;
            margin-bottom:10px;
        }
        .head a{
            color:#1D81B6;
            text-decoration:none;
            float:right;
            text-shadow:1px 1px 1px #888;
        }
        .head a:hover{
            color:#f0f0f0;
        }
        #content h1{
            font-family:"Trebuchet MS",sans-serif;
            color:#1D81B6;
            font-weight:normal;
            font-style:normal;
            font-size:56px;
            text-shadow:1px 1px 1px #aaa;
        }
        #content h2{
            font-family:"Trebuchet MS",sans-serif;
            font-size:34px;
            font-style:normal;
            background-color:#f0f0f0;

            margin:40px 0px 30px -40px;
            padding:0px 40px;
            clear:both;
            float:left;
            width:100%;
            color:#aaa;
            text-shadow:1px 1px 1px #fff;
        }

    </style>
    <body>
    <center><h2>Event Completed</h2></center>
        <div id="content">
            <table class="table1">
                <thead>
                    <tr>
                        <th scope="col" abbr="Starter">GroupId</th>
                        <th scope="col" abbr="Starter">College</th>
                    </tr>
                </thead
                <tbody>
                <?php
                                
                    //Event completed code...
                    $query_1="select stud_group_id from multimedia where completed='*';";
                    $result_1=mysql_query($query_1,$conn);
                    while ($row=mysql_fetch_array($result_1)) {
                    $stud_group_id_1[]=$row['stud_group_id'];
                    }
                    $i_1=count($stud_group_id_1);
                    $j_1=0;
                    while ($j_1<$i_1) {
                        $query_1="select college from centerlised_table where stud_group_id='$stud_group_id_1[$j_1]';";
                        $result_1=mysql_query($query_1,$conn);
                        while ($row=mysql_fetch_array($result_1)) {
                            $college_1[]=$row['college'];
                        }   
                        $j_1++;
                    }
                    $j_1=0;
                    while ($j_1<$i_1) {
                    echo "<tr>";
                        echo "<td>$stud_group_id_1[$j_1]</td>";
                        echo "<td>$college_1[$j_1]</td>";
                    echo "</tr>";
                    $j_1++;
                }
            
                ?>
                    
                </tbody>
            </table>
            </div>
                <center><h2>Event Not Completed</h2></center>
        <div id="content">
            <table class="table1">
                <thead>
                    <tr>
                        <th scope="col" abbr="Starter">GroupId</th>
                        <th scope="col" abbr="Starter">College</th>
                    </tr>
                </thead
                <tbody>
                <?php
                   while ($j<$i) {
                    echo "<tr>";
                        echo "<td>$stud_group_id[$j]</td>";
                        echo "<td>$college[$j]</td>";
                    echo "</tr>";
                    $j++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>