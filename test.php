<?php
error_reporting(-1);
require_once('./nossl/nossl_start.php');

//echo ($nossl->encrypt('<h1>This is a big Test</h1>'));


if (isset($_REQUEST['clean'])){
    session_unset();
    echo "<br /><br />SESSION CLEAR<br /><br />";
}

if (isset($_REQUEST['test'])){
    echo "<br /><br />Test submitted";
}
                                                
if (isset($_REQUEST['password'])){
    echo "<p>REQUEST: </p>";
    print_r ($_REQUEST);
    
}

    
     
    


/*        
if (isset($_REQUEST['password'])) {
		
        echo "<br /><br />RESULT: ".$nossl->decrypt($_REQUEST['password']);
}
*/

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>NoSSL demo</title>
</head>
<body>
	
				<h1>NoSSL Demo</h1>
				<h2><small>Example by <a href="http://www.smartinmedia.com">Smart In Media</a></small></h2>
	

			<form action="test.php" class="testclass andanother" method="post">
			      User name: <input type="text" name="username" />
			      Password: <input type="password" name="password" />
			      Textarea: <textarea name="textarea_field2">L&ouml;se das R&auml;tsel</textarea><br />
			       <br />

			     <input type="submit" name="test" value="Send data!"/>
            </form>

</body>
</html>
