<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
	<title>Application</title>
	<style>
			input {
			-moz-border-radius:5px; /* Firefox */
			-webkit-border-radius: 5px; /* Safari, Chrome */
			-khtml-border-radius: 5px; /* KHTML */
			border-radius: 5px; /* CSS3 */
			behavior:url("border-radius.htc");
			width:200px;
			}
		</style>
</head>
<body bgcolor="#B9D300">


<h2>Contact Us</h2>
<?php
require "connect_to_mysql.php";
//session_start();
//figure out how to return the value you clicked on
$result = mysql_query("SELECT * FROM guild_sale WHERE ID = '$_GET[px]'") or die(mysql_error());  
$row = mysql_fetch_array( $result );

echo "Please use this form if you are interested in purchasing the <b>" . ucwords($row['item']) . "</b>. We will get back to you as soon as possible.  Thank you!<br><br>";

echo '<div style="padding:30px; font-weight:bold; outline:#000000 solid 1px;">';
echo	"<form action='equipconfirm.php?px=" . urlencode($row['ID']) ."' method='post' name='equform' enctype='multipart/form-data'>";  
?>
	First Name<br>  
    <input name="fname" type="text" id="fname" required><br>  
    <br>
	Last Name<br>  
    <input name="lname" type="text" id="lname" required><br>  
    <br>      
    E-mail Address<br>  
    <input name="email" type="email" id="email" required><br>  
    <br>
	Phone #<br>  
    <input name="phone" type="tel" id="phone" pattern="\d{3}\-\d{3}\-\d{4}" placeholder="XXX-XXX-XXXX" required><br>  
    <br>  
    Please enter any comments or questions here<br>  
    <textarea name="comment" rows="8" cols="50" maxlength="20000"></textarea><br>  
    <br><br>
	<input type="submit" name="Submit" value="Send"><br>  
    </form>
	</div>	
 </body>  
</html>  