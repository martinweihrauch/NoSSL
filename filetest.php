<?php

echo "<br />In filetest.php, my dir: ".rtrim(dirname(__FILE__),'/\\');
echo "<br /><br />document root: ".$_SERVER['DOCUMENT_ROOT'];

require('./includetest/tester.php');

?>