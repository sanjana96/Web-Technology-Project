<?php
if (!empty($_POST['usnm']) && !empty($_POST['d']) && !empty($_POST['eid']) && !empty($_POST['psd1']) && !empty($_POST['psd2']) && strcmp($_POST['psd1'],$_POST['psd2'])==0) {   
			setcookie('username', $_POST['usnm']);
            setcookie('password', $_POST['psd1']);
			header ("location:index.html");exit;
	} 
else {
	echo "<script type=\"text/javascript\">
    window.alert('Enter a valid username and password!');</script>";
}
header ("location:login2.html");

?>
