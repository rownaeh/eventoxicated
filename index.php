<?php
	session_start();
	if(isset($_SESSION['uname'])){
		header('Location: loginpage.php');
	}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>  
<head>  
<link rel="icon" type="image/ico" href="images/favicon.ico"></link> 
<link rel="stylesheet" type="text/css" href="layout.css" />
<script type="text/javascript" src="jquery-1.6.2.min.js"></script> 
<script type="text/javascript" src = "tabmenu.js"></script>
<script type="text/javascript" src="daterangepicker.jQuery.js"></script>

    <title>My Event Page</title>  
</head>  
<body>  
    <header>  
    <section id = "headercell">
        <h1>Party time!</h1>  
        <h4>Every day I'm Shufflin'</h4>
        </section>
        <section id = "logoutcell">
        	<a href = "logout.php" >Logout</a>
        </section>
    </header>  
    <nav>  
           <p>Home > My Account > Create New Event</p>
    </nav>  
   
    <aside id = "tabContent">  
        <ul class = "tabs">
			<li> <a href = "#myevents"> My Events</a></li>
			<li> <a href = "#create"> Create New Event </a></li>
            <li> 
		</ul>
    </aside>  
    <section id = "mainContent" class = "mainSection">  
        <div id="myevents" class="tab_content">
		   <h4>THIS IS A LIST OF MY EVENTS.</h4>
		   <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</div>
		<div id="create" class="tab_content">
			<?php
				include("createEvent.php");
			?>
		</div>
    </section>  
	<footer>  
        This is the footer, :P
    </footer>  
  
</body>  
</html>  
<?php
	}
?>