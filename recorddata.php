<html>
<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$proje =  $_POST["project_menu"];
$proman = $_POST["manager_menu"];
$forman = $_POST["foreman_menu"];
$temper = $_POST["tempurature_menu"];
$weath = $_POST["weather_menu"];
$flor = $_POST["floor_menu"];
$roms = $_POST["rooms_menu"];
$wrkper = $_POST["work_performing_menu"];
$whoimpac = $_POST["who_caused_impact_menu"];
$picimpac = $_POST["pick_impacts_that_apply_menu"];
$equip = $_POST["major_equipement_impacted_menu"];
$watudo = $_POST["what_did_you_do_menu"];
$mn = $_POST["men_menu"];
$hors = $_POST["hours_menu"];
$sign = $_POST["inputfield"];
$sql = "INSERT INTO constructiondata (Project, Project_Manager, Foreman, Temperature,
Weather, Floor, Rooms, Work_Perform, Who_Caused_Impact, Pick_Impact, Equipment_Impacted,
What_Did_You_Do, Men, Hours, Signature) VALUES ('$proje', '$proman', '$forman', '$temper', '$weath',
'$flor', '$roms', '$wrkper', '$whoimpac', '$picimpac', '$equip', '$watudo', '$mn', '$hors', '$sign')";
if ($conn->query($sql) === TRUE) {
 echo "Data Stored successfully!";
 echo "<br>";
 echo "Here's the Data you stored!";
 echo "<br>";
 echo "Project: ";
 echo $proje;
 echo "<br>";
 echo "Project Manager: ";
 echo $proman;
 echo "<br>";
 echo "Foreman: ";
 echo $forman;
 echo "<br>";
echo "Temperature: ";
 echo $temper;
 echo "<br>";
echo "Weather: ";
 echo $weath;
 echo "<br>";
echo "Floor: ";
 echo $flor;
 echo "<br>";
echo "Rooms: ";
 echo $roms;
 echo "<br>";
echo "Work_Perform: ";
 echo $wrkper;
 echo "<br>";
echo "Who_Caused_Impact: ";
 echo $whoimpac;
 echo "<br>";
echo "Pick_Impact: ";
 echo $picimpac;
 echo "<br>";
echo "Equipment_Impacted: ";
 echo $equip;
 echo "<br>";
echo "What_Did_You_Do: ";
 echo $watudo;
 echo "<br>";
echo "Men: ";
 echo $mn;
 echo "<br>";
echo "Hours: ";
 echo $hors;
 echo "<br>";
echo "Signature: ";
 echo $sign;
 echo "<br>";

 
}
else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>