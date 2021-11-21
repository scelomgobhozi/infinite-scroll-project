<?php 
include_once('conn.php');

for($x=0; $x<5; $x++)
{
$file = file_get_contents('http://loripsum.net/api/3/short',true);
echo $file;
$uTime = time();
$query = "INSERT INTO `bpost` ( `content`, `date`) VALUES ('".$file. "',$uTime )";
$result = mysqli_query($link,$query);

if(!$result): echo "Something went wrong"; endif;

}