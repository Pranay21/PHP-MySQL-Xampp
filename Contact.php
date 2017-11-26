<?php
$user ='root';
	$pass= '';
	$db= 'vet';
	
	$conn=mysqli_connect('localhost', $user , $pass ,$db);

echo "<html>\n";
echo "<head>\n";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">\n";
echo "</head>\n";
echo "<body>\n";
echo "<div id=\"wrapper\">\n";
echo "<div class=\"container\">\n";
echo "\n";
echo "<header>\n";
echo "   <h1 style=\"color:#2a2ac0;\">Fish Creek Animal Hospital</h1>\n";
echo "</header>\n";
echo "  \n";
echo "<nav>\n";
echo "  <ul><b>\n";
echo "    <li><a href=\"index.php\">Home</a></li>\n";
echo "    <li><a href=\"services.php\">Services</a></li>\n";
echo "    <li><a href=\"askvet.php\">Ask the Vet</a></li>\n";
echo "    <li><a href=\"subscribe.php\">Subscribe</a></li>\n";
echo "    <li><a href=\"contact.php\">Contact</a></li>\n";
echo "  </b></ul>\n";
echo "</nav>\n";
echo "<article>\n";
echo "<h2> Contact Fish Creek</h2><br>\n";
echo "Required fields are marked with an asterisk (*).\n";
echo "<form  method='POST'>";
echo "<table>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*Name:</th> <th><input type=\"text\" name=\"Name\" required></th><br>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*E-mail:</th> <th><input type=\"text\" name=\"Email\" required></th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th align=\"Right\">*Comments:</th> <th><input type=\"text\" name=\"Comments\" required></th>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<th></th><th align=\"left\"><input type=\"submit\" name=\"submit\" value=\"Send Now\"></th>\n";
echo "</tr>\n";
echo "</table>\n";
echo "\n";
echo "</form>\n";
echo "</article>\n";

$email = (isset($_POST['email']) ? $_POST['email'] : null);
//$email = $_POST["email"];
if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)) {
	//$emailErr = 'the email does not meet the requirements!';
    echo "<p> <font color=black size=2>Note:*The email id should meet the requirements  </font> </p>";
  
    

}

if (isset($_POST['submit']))
{
$query=("INSERT INTO contact VALUES ('".$_POST['Name']."','".$_POST['Email']."','".$_POST['Comments']."')");
$sql=mysqli_query($conn,$query);
mysqli_close($conn);
}



echo "</div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

?>
