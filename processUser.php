<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$flag = false;
//echo "Hi";	
if($username=="admin" && $password=="1234"){
	$_SESSION['uname'] = $username;		
	?><script> document.location.href='index.php'</script><?php
}else{
	$conn = mysql_connect('localhost', 'root', 'root') or die('Error connecting to mysql');
	
	$db_selected = mysql_select_db("come519", $conn);
	if (!$db_selected){ 
		die ("Can\'t use test_db : " . mysql_error()); }   
	
	   $sql = "SELECT * FROM users WHERE USERNAME = '$username' AND PASSWORD = '$password' ";
	
	   $result = mysql_query($sql)
				 or die('Query failed. ' . mysql_error());
	   /*$row = mysql_fetch_row($result);
	   $userid = $row[0];*/
	   
	   $num_rows = mysql_num_rows($result);
		if (!$num_rows){
			$flag = true;
		}else{
			//echo $num_rows;
			$info = mysql_fetch_array($result);
			$origpass = $info['password'];
			//echo $origpass;
			//echo $password;
			if($password != $origpass){
				$flag = true;
			}
		}	
		if($flag == true){
			?><script>document.location.href = 'loginpage.php'</script><?php
		}else{			
			//$id = session_id();
			$views = $_SESSION['views'];
			if($views == null){
				$views = 1;
			}else{
				$views = $views + 1;
			}
			$_SESSION['uid'] = $info['userid'];
			$_SESSION['uname'] = $username;
			$_SESSION['pass']= $password;
			$_SESSION['firstn'] = $info['fname'];
			?><script> document.location.href='index.php'</script><?php
			}
	mysql_close($conn);	
}
?>