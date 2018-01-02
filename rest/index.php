<?
include("restApi.php");
$rest = new RestService();

$area = $rest->get('http://ec2-52-14-250-16.us-east-2.compute.amazonaws.com:3000/area/','','');
print_r($area->data[0]->name);
?>