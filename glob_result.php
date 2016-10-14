<?php

$glob_keyword = $_POST['glob_keyword'];
$glob = $glob_keyword;
$glob = str_replace(" ", "+", $glob);

$output = shell_exec("python ./scripts/num_of_records.py $glob 2>&1");   // Change the Python script path accordingly
echo $output;


?>

