<?php
error_reporting(-1);
require_once('./nossl/nossl_start.php');

//echo ($nossl->encrypt('<h1>This is a big Test</h1>'));


if (isset($_REQUEST['clean'])){
    session_unset();
    echo "<br /><br />SESSION CLEAR<br /><br />";
}
                                                
if (isset($_REQUEST['mrwtest'])){
    $unserialized = Array();
    echo "<br /><br />Decrypted Server-Array REQUEST: ";
    print_r($_REQUEST);
    echo "<br /><br />Decrypted Server-Array POST: ";
    print_r($_POST);
    echo "<br />Serialized stuff: ".$_POST['mrwtest'];
    echo "<br /><br />Now unserialize: ";
    parse_str($_POST['mrwtest'], $_POST);
    print_r($_POST);

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
	<link href="./nossl/style/nossl.css" type="text/css" rel="stylesheet" />
    <script src="./nossl/javascript/jquery.js"></script>
	<script src="./nossl/javascript/outerHTML-2.1.0.js"></script>

    <script src="./nossl/javascript/storage-wojo.js"></script>
    
    <script src="./nossl/javascript/json2.js"></script>
    <script src="./nossl/javascript/jsbn.js"></script>
	<script src="./nossl/javascript/jsbn2.js"></script>
	<script src="./nossl/javascript/prng4.js"></script>
	<script src="./nossl/javascript/rng.js"></script>
	<script src="./nossl/javascript/rsa.js"></script>
	<script src="./nossl/javascript/rsa2.js"></script>
	<script src="./nossl/javascript/SHA1.js"></script>

    <script src="./nossl/javascript/fortuna.js" type="text/javascript" charset="utf-8"></script>
    <script src="./nossl/javascript/crypto.getRandomValues.js" type="text/javascript" charset="utf-8"></script>
	<script src="./nossl/javascript/aes-js-SIM.js"></script>
	<script src="./nossl/javascript/nossl.class.js"></script>
	<script src="./nossl/javascript/nossl_auto_start.js"></script>
    <script>
	
	

    
    $('document').ready(function(){
        
        //nossl.parseServerSettings($('#nossl_serversettings').text());
        //console.log(nossl.encrypt('This is a test')); 
        
        $('#fiddle').click(function(){
            console.log('The value of cars: '+$('#cars').val());
            $('#cars').val('fiat');
            console.log('Now the value of cars: '+$('#cars').val());    
        });
        
        $('#cleanjs').click(function(){
            nossl.cleanSessionStorage();
            $('#cleanphp').submit();            
        });
        
        




	});
	
	</script>
	<title>NoSSL demo</title>
</head>
<body>
	
				<h1>NoSSL Demo</h1>
				<h2><small>Example by <a href="http://www.smartinmedia.com">Smart In Media</a></small></h2>
<p>Exampe1</p>
<p>Example2</p>		

			<form action="form-test.php" method="post">
			      User name: <input type="text" name="username2" />
			      Password: <input type="password" name="password2" />
			      Textarea: <textarea name="textarea_field2">This is a test</textarea><br />
			       <br />

			     <input type="submit" value="Send data!"/>
            </form>

<h2>First form</h2>	
	
			<form  action="form-test.php" method="post">
			      User name: <input type="text" name="username" id="username" />
			      Password: <input type="password" name="password" id="password"/>
			      Textarea: <textarea name="textarea_field">This is a test</textarea><br />
			       <br />
                   Radio: 
                     <input type="radio" name="sex" value="male">Male<br>
                    <input type="radio" name="sex" value="female">Female<br />
                    <br /><br />
                    Checkbox: 
                    <input type="checkbox" name="vehicle[]" value="Bike">I have a bike<br>
                    <input type="checkbox" name="vehicle[]" value="Car">I have a car 
                    <br /><br />
                    <select id="cars" name="cars[]" size="5" multiple="multiple">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
			        <br /><br />
			    
                   <input type="hidden" name="mrwtest" id="mrwtest"/> 
			      <br />
			     <input type="submit" value="Send data!"/>
            </form>
            
 <h2>Second form</h2>	           

          
            
            <br /><br /> 
            <form id="cleanphp" action="form-test.php" method="post">
			      CLEAN PHP SESSION<br />
			     <input name="clean" type="submit" value="Clean session"/>
            </form>
            <div id="this_will_contain_a_form">
            </div>
		    <br /><br />
		    <button id="cleanjs">CLEAN ALL!</button>
			
		
		<br/>

	<div class="row-fluid">
		<div id="feedback" class="span11 offset1">
			
		</div>	
        
        <div id="feedback2" class="span11 offset1">

		</div>	
		
		
	</div>
	
	
	<button id="fiddle">Change value of select box</button>
</body>
</html>
