<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>  
<head>  
	<link rel="stylesheet" type="text/css" href="layout.css" />
<script type="text/javascript" src="jquery-1.6.2.min.js"></script> 
<script type="text/javascript" src = "tabmenu.js"></script>
    <title>My Event Page</title>  
</head>  
<body>
	<section>
    	<form name = "loginForm" class = "forms" method = "POST" action = "processUser.php">
            <fieldset>
        		<legend><h4>Enter Your Username and Password</h4></legend>
                <label for = "username">Username:</label>
                <input type = "text" name = "user" id = "inputForms"/><br />
                <label for = "password">Enter Password:</label>
                <input type = "password" name = "pass" id = "inputForms"/><br />
                <input type = "submit" name = "submit" value = "Sign in" />
            </fieldset>
		</form>
    </section>	
</body>
</html>