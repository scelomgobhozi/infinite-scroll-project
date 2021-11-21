<?php 
include('conn.php');
$myArray = array();
$myRow = array();

if(empty($_POST['iload'])){$vlimit = 1;}

else{$vlimit = $_POST['iload'];}
$myArray['vlimit'] = $vlimit;
$query = "SELECT * FROM bpost ORDER BY id ASC LIMIT ".$vlimit." OFFSET 2";
$result = $link->query($query);
while($row = $result->fetch_array())
{
$myRow[] = array(
    'id'=>$row['id'],
    'content'=>$row['content'],
    'date' => $row['date']
);

}

$myArray['content'] = $myRow;
echo json_encode($myArray);