<?php

echo "Running git pull";
$out = shell_exec("/usr/bin/git pull 2>&1; echo$?");
echo "<p>Done: " . $out;

?>

