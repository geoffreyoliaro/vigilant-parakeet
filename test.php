<?php

require_once('data2.php');

$teams = [];
$result = get_members($c_team);
foreach($result as $res) {
    array_push($teams, $res->displayName);
}

echo(sort($teams));

['The A-Team', 'The C-Team'];

?>