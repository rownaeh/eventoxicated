<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>  
<head> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
	<title>Create Event</title>  
   		<link rel="stylesheet" type="text/css" href="layout.css" />
	 
	    <script type="text/javascript" src = "js/tabmenu.js"></script>
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.7.1.custom.min.js"></script>
		<script type="text/javascript" src="js/daterangepicker.jQuery.js"></script>
		<link rel="stylesheet" href="css/ui.daterangepicker.css" type="text/css" />
		<link rel="stylesheet" href="css/redmond/jquery-ui-1.7.1.custom.css" type="text/css" title="ui-theme" />
	
		
			<script type="text/javascript">	
				$(function(){
				  $('#picker').daterangepicker({arrows:true}); 
				});
			</script>

			<!-- from here down, demo-related styles and scripts --> 
			<style type="text/css">
				body { font-size: 62.5%; }
				input {width: 196px; height: 1.1em; display:block;}
			</style>
    
</head>  
<body> 
		
			


<?php
	
?>
    <section>
    	<form name = "createEventForm" method = "POST" action = "addEvent.php" class = "forms">
        	<fieldset>
                <legend><h3>Create Your Event</h3></legend>
                
                <label for = "event">Event Title:</label> <br />
                <input type = "text" name = "eventTitle" id="formInput"><br />
                
                <label for = "date">Event Date:</label> <br />
                <br />
            <input type="text" id="picker" />		
				
				<br />
                <label for = "time">Event Time:  </label> <br />
                   <select name = "hour" id="formInput"><br />
                    <option value = "1">01</option>
                    <option value = "2">02</option>
                    <option value = "3">03</option>
                    <option value = "4">04</option>
                    <option value = "5">05</option>
                    <option value = "6">06</option>
                    <option value = "7">07</option>
                    <option value = "8">08</option>
                    <option value = "9">09</option>
                    <option value = "10">10</option>
                    <option value = "11">11</option>
                    <option value = "12">12</option>                
                </select>      
                <select name = "minute" id="formInput">            
                    <option value = "0">00</option>
                    <option value = "5">05</option>
                    <option value = "10">10</option>
                    <option value = "15">15</option>
                    <option value = "20">20</option>
                    <option value = "25">25</option>
                    <option value = "30">30</option>
                    <option value = "35">35</option>
                    <option value = "40">40</option>
                    <option value = "45">45</option>
                    <option value = "50">50</option>
                    <option value = "55">55</option>               
                </select>
                <select name = "timeval" id="formInput">
                    <option value = "AM">AM</option>
                    <option value = "PM">PM</option>
				</select>
                <br />
                
                <label for = "location"> Event Location: </label> <br />
               <input type = "text" name = "eventLoc" id="formInput"><br />
                
                
                <label for = "guests"> Guest List: </label><br />
               (insert email addresses, separated by a comma (,)<br />
                <textarea name = "guestlist" rows = "5" cols = "30" id="formInput"  onkeypress="return imposeMaxLength(this, 1999);" onclick = "this.value='';">(maximum no. of characters: 2000)
                    
                </textarea><br />
                
                
                <label for = "details"> Event Details: </label>  <br />      
                <textarea name = "eventdetails" rows = "5" cols = "30" id="formInput"  onkeypress="return imposeMaxLength(this, 1999);" onclick = "this.value='';">(maximum no. of characters: 2000)
                    
                </textarea><br />
                
                
                <input type = "submit" name = "submit" value = "Create New Event!" id="submit"/><br />
                
                <script language = "javascript" type = "text/javascript" >
					function imposeMaxLength(Object, MaxLen){
						return (Object.value.length <= MaxLen);
					}
				</script>
            </fieldset>
	    </form>
    </section>
</body>  
</html>  
