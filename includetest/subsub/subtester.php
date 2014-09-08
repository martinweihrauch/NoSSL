<?php
$test = '/this/is/a/path/';
$test2 = '/this/is/a/second\path\\';
echo "<br />The paths with rtrim:  ".rtrim($test, '/\\').'   and: '.rtrim($test2, '/\\');
echo "<br />In subtester.php, my dir: ".rtrim(dirname(__FILE__),'/\\');
echo "<br /><br />This is subtester";



?>