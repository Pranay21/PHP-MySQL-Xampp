<?php
$user ='root';
	$pass= '';
	$db= 'vet';
	
	$conn=mysqli_connect('localhost', $user , $pass ,$db);
	$q1="null";
echo "<html>\n";
echo "<head>\n";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"stylesheet.css\">\n";
echo "</head>\n";
echo "<body>\n";
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


echo "<form  method='POST'>\n";
echo "  <input type=\"radio\" name=\"services\" value=\"Medical services\">Medical Services<br>\n";
echo "<br>";
echo "  <input type=\"radio\" name=\"services\" value=\"Surgial Services\">Surgial Services<br>\n";
echo "<br>";
echo "  <input type=\"radio\" name=\"services\" value=\"Dental Care\">Dental Care<br>\n";
echo "<br>";
echo "  <input type=\"radio\" name=\"services\" value=\"House Calls\">House Calls<br>\n";
echo "<br>";
echo "  <input type=\"radio\" name=\"services\" value=\"Emergencies\">Emergencies<br>\n";
echo "<br>";


echo "<input type=\"submit\" name=\"submit\" value=\"Submit\">\n";
echo "<br>";
echo "<br>";
echo "<br>";


if (isset($_POST['submit']))
$q1 = $_POST['services'];

if ($q1=="Medical services")
{
$sql = "SELECT description FROM service WHERE servicename='Medical services'";
$result = mysqli_query($conn, $sql);
echo $result->fetch_object()->description;

}

else if ($q1=="Surgial Services")
{
$sql = "SELECT description FROM service WHERE servicename='Surgial Services'";
$result = mysqli_query($conn, $sql);
echo $result->fetch_object()->description;

}

else if ($q1=="Dental Care")
{
$sql = "SELECT description FROM service WHERE servicename='Dental Care'";
$result = mysqli_query($conn, $sql);
echo $result->fetch_object()->description;

}

else if ($q1=="House Calls")
{
$sql = "SELECT description FROM service WHERE servicename='House Calls'";
$result = mysqli_query($conn, $sql);
echo $result->fetch_object()->description;

}

else if ($q1=="Emergencies")
{
$sql = "SELECT description FROM service WHERE servicename='Emergencies'";
$result = mysqli_query($conn, $sql);
echo $result->fetch_object()->description;

}


echo "   \n";
echo "</form> \n";






echo "<br>";
echo "<br>";
echo "\n";
echo "<footer class=\"small\">\n";
echo "Copyright © 2016 Fish Creek Animal Hospital<br>\n";
echo "<a href=\"mailto:pranaybhat199@.com\">pranay@bhat.com</a>\n";
echo "</footer>\n";
echo "</div>\n";
echo "</article>\n";
echo "</div>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";

?>
