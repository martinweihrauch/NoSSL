<?php
error_reporting(-1);
require_once('./nossl/nossl_start.php');

//echo ($nossl->encrypt('<h1>This is a big Test</h1>'));


if (isset($_REQUEST['KillSession'])){
    session_unset();
    echo "<br /><br />SESSION CLEAR<br /><br />";
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
	<link href="./nossl/style/nossl.css" type="text/css" rel="stylesheet" />
    <script src="./nossl/javascript/jquery.js"></script>

<!-- This part is for browsers that are missing modern browser's functionality BEGIN -->
	<script src="./nossl/javascript/outerHTML-2.1.0.js"></script>
    <script src="./nossl/javascript/json2.js"></script>
    <script src="./nossl/javascript/storage-wojo.js"></script>
    <script src="./nossl/javascript/fortuna.js" type="text/javascript"></script>
    <script src="./nossl/javascript/crypto.getRandomValues.js" type="text/javascript"></script>
	<script src="./nossl/javascript/Uint8Array.js" type="text/javascript"></script>
<!-- This part is for browsers that are missing modern browser's functionality END -->


<!-- Some addon BEGIN -->
	<script src="./nossl/javascript/map-list-attributes.js"></script>
<!-- Some addon END -->

    
<!-- Crypto stuff  BEGIN -->    
    <script src="./nossl/javascript/jsbn.js"></script>
	<script src="./nossl/javascript/jsbn2.js"></script>
	<script src="./nossl/javascript/prng4.js"></script>
	<script src="./nossl/javascript/rng.js"></script>
	<script src="./nossl/javascript/rsa.js"></script>
	<script src="./nossl/javascript/rsa2.js"></script>
	<script src="./nossl/javascript/SHA1.js"></script>
    <script src="./nossl/javascript/aes-js-SIM.js"></script>
<!-- Crypto stuff  END -->

<!-- NoSSL stuff  BEGIN -->
	<script src="./nossl/javascript/nossl.class.js"></script>
	<script src="./nossl/javascript/nossl_auto_start.js"></script>
<!-- NoSSL stuff  end -->

    <script>

	
    function CheckInput(){
        var content = $('#fileform').serialize()
        console.log('Form Submitted: '+content);
        //event.preventDefault();
        return false;    
    }
    
    function killSession(){
            nossl.cleanSessionStorage();
            return true;
    }


    $('document').ready(function(){
        
        //nossl.parseServerSettings($('#nossl_serversettings').text());
        //console.log(nossl.encrypt('This is a test')); 
       sessionStorage.setItem('mrw-test', 'Toller Test');
       console.log('Now get the item of mrw-test: '+sessionStorage.getItem('mrw-test')); 
       
        
        

        




	});
	
	</script>
	<title>NoSSL demo</title>
</head>
<body>
	
				<h1>NoSSL Demo</h1>
				<h2><small>Example by <a href="http://www.smartinmedia.com">Smart In Media</a></small></h2>
	

			<form id="fileform" action="fileupload-test.php" class="testclass andanother" enctype="multipart/form-data" onsubmit="return CheckInput();" method="post">
			      User name: <input type="text" name="username" />
			      Password: <input type="password" name="password" />
			      Textarea: <textarea name="textarea_field2">L&ouml;se das R&auml;tsel</textarea><br />
			      file:  <input type="file" name="file"/>
			       <br />

			     <input type="submit" name="test" value="Send data!"/>
            </form>
            
            
            <form action="submit-test.php" class="testclass andanother" onsubmit="return killSession();" method="post">
			      Kill session
			      <input type="hidden" name="KillSession"/>
			     <input type="submit" name="test2" value="Kill session!"/>
            </form>



</body>
</html>
