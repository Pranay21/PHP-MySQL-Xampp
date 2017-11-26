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
$q1 =null;
echo "<div id=\"wrapper\">\n";
echo "<div class=\"container\">\n";
echo "\n";
echo "<header>\n";
echo "   <h1 style=\"color:#003f6e;\">Fish Creek Animal Hospital</h1>\n";
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
echo "<p>\n";
echo "<a href=\"contact.php\">Contact</a> us if you have a question that you would like answered here<br>\n";
echo "</p>\n";
echo "<form  method='POST'>\n";
echo "  <input type=\"radio\" name=\"services\" value=\"chocolate\">Our dog, Sparky, likes to eat whatever the kids are snacking on. Is it OK for the dog to eat chocolate?<br>\n";
echo "<br>";
echo "  <input type=\"radio\" name=\"services\" value=\"icecream\">Our dog likes eating ice-cream is that fine?<br>\n";
echo "<br>";


echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">\n";
echo "<br>";
echo "<br>";
if (isset($_POST['submit']))
$q1 = $_POST['services'];

if ($q1=="chocolate")
{
$sql = "SELECT answer FROM questions WHERE question='chocolate'";
$result = mysqli_query($conn, $sql);
echo $result->fetch_object()->answer;

}

else if ($q1=="icecream")
{
$sql = "SELECT answer FROM questions WHERE question='icecream'";
$result = mysqli_query($conn, $sql);
echo $result->fetch_object()->answer;

}



echo "   \n";
echo "</form> \n";

echo "</p>\n";
echo "<footer class=\"small\">\n";
echo "Copyright &#169 2016 Fish Creek Animal Hospital<br>\n";
echo "<a href=\"mailto:pranaybhat199@.com\">pranay@bhat.com</a>\n";
echo "</footer>\n";
echo "</div>\n";
echo "</article>\n";
echo "</div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

?>
