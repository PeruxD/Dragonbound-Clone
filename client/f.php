<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("fbsdk/facebook.php");
include("inc/class.mysql.php");


$config = array();
$config['appId'] = '544939225583113';
$config['secret'] = '**************************';
$config['fileUpload'] = false;
  
$facebook = new Facebook($config);

$user = $facebook->getUser();
$user_profile = array();

if ($user) {
  try {
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    $user = null;
  }
}

if ($user)
{
    $sql = new MySQL('db_clone','root','');
	$id = $user_profile['id'];
	$name = $user_profile['name'];
	$gender = $user_profile['gender'];
	$sel = array("fbid" => $id);
	$ss = $sql->Select("users", $sel);

	
	if($ss['fbid'] == $id)
	{
	   echo '['. $ss['id'] . ',0,0,"283dcada42ce5321522c","PE"]';
	}
	else
	{
	   if($gender == "male")
			$gender = "m";
	   else
	        $gender = "f";
			
	   $ins = array("Name" => $name, 
					"Key" => "283dcada42ce5321522c", 
					"rank" => 1, 
					"version" => 39, 
					"gold" => 9999999,
					"cash" => 9999999,
					"clan" => 0,
					"gender" => $gender,
					"gp" => 0,
					"online" => 0,
					"fbid" => $id,
					"foto" => 1,
					"baneado" => 0,
					"guild" => 0);
	   $sql->Insert($ins, "users");
	   $ss = $sql->Select("users", $sel);
	   echo '['. $ss['id'] . ',0,0,"283dcada42ce5321522c","PE"]';
	}
}
else
{
    echo "[0]";
}
?>