<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link href="./nossl/style/nossl.css" type="text/css" rel="stylesheet" />
    <script src="./nossl/javascript/jquery.js"></script>


    <script>

	
    $('document').ready(function(){
        
        
        var i=0;
        for (i=0; i<5; i++){
            alert('loop'+i);
            var key = "@NoSSL_AESKey_begin@PZEvbjIM+vqhVym9Qdb/1gjYpMS4h+cYrmNAhlfBiuY=@NoSSL_AESKey_end@";
            var regexp=/@NoSSL_AESKey_begin@(([^]*))@NoSSL_AESKey_end@/g;
            //console.log('Again, the key: '+key);
            var temp = regexp.exec(key);
            $('#text').append('<br />nr.: '+temp+'<br /> temp1: '+temp[1]);    
        }
        
    
    
    });
	
	</script>
	<title>NoSSL demo</title>
</head>
<body>
	            <div id="text">
                 ttest<br />
                </div>
				



</body>
</html>
