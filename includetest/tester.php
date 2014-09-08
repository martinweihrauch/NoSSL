<?php
echo "<br />In tester.php, my dir: ".rtrim(dirname(__FILE__),'/\\');
require (dirname(__FILE__).'/subsub/subtester.php');
echo "<br /><br />This is inside test.php";





?>