<?php include '../../config.php';?>
<?php
	//$qry=mysql_query("select username,password,email from raccounts1 where username='".filt($_GET['username'])."' and password='".filt($_GET['password'])."' and email='".filt($_GET['pname'])."' and status='1'");
	$qry=mysql_query("select username,password from raccounts1 where username='".filt($_GET['username'])."' and password='".filt($_GET['password'])."' and status='1'");
	$qry2=mysql_query("select username from raccounts1 where username='".filt($_GET['username'])."' and status='1'");
	$qry3=mysql_query("select username from raccounts1 where username='".filt($_GET['username'])."' and status='0'");
	
		if(mysql_num_rows($qry)>0){
			$_SESSION['student']=$_GET['username'];
			echo 1;
		}elseif(mysql_num_rows($qry2)>0){
			echo 2;
		}elseif(mysql_num_rows($qry3)>0){
			echo 3;
	}
	
	
	
	
?>