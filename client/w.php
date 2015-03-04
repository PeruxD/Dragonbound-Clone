<?php
$p1 = "[41,21526,181304,";
$servers = array();
$ip = gethostbyname('dbcloneserver.com');
$servers[0] = array(
    "Beginners",
    "$ip",
    9003,          //port
    1497,
    4000,
    7,
    23);
    
$servers[1] = array(
    "Beginners",
	"$ip",
    9003,        //port
    0,           //user_online  
    4000,        //max user
    0,           //min_rank
    6);          //max_rank

$sn = "";
$tx = 0;
$mx = count($servers);
foreach ($servers as $sp) {
    $sn .= "[\"" . $sp[0] . "\", \"" . $sp[1] . "\", " . $sp[2] . "," . $sp[3] . "," .
        $sp[4] . "," . $sp[5] . "," . $sp[6] . "]";
    if ($tx < $mx - 1)
        $sn .= ",";
    $tx++;
}

echo $p1 . $sn . "]";
?>