<meta http-equiv="refresh" content="5">

<?php

$array = file("dumpfile.txt");
rsort($array);

$attacker_array = array();

foreach($array as $line){
  if(strpos($line, "request")){
    preg_match('/IP.* >/',$line,$result);
    $result = implode(" ",$result);
    $result = ltrim($result, "IP ");
    $result = rtrim($result, " >"); 
    array_push($attacker_array, $result);
}
}

$count = array_count_values($attacker_array);
print "<h3>Attack Stats</h3>";
print "<table>";
print "<tr><th>Attacker</th><th>Count</th></tr>";

foreach($count as $key => $value){
    print "<tr><td>".$key."</td><td>".$value."</td></tr>";
}
print "</table>";

print "<h3>Latest Attackers</h3>";
foreach(array_slice($attacker_array,0,10) as $key => $value){
    print $value."<br>";
}

?>