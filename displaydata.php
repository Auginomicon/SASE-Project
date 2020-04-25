<html>
<body>
<?php 
$servername = "127.0.0.1";
$username = "root"; 
$password = "mysql"; 
$database = "project"; 
$mysqli = new mysqli($servername, $username, $password, $database); 
$query = "SELECT * FROM constructiondata";
 
 
echo '<table border="0" cellspacing="4" cellpadding="4"> 
      <tr> 
          <td> <font face="Arial">Project</font> </td> 
          <td> <font face="Arial">Project_Manager</font> </td> 
          <td> <font face="Arial">Foreman</font> </td> 
          <td> <font face="Arial">Temperature</font> </td> 
          <td> <font face="Arial">Weather</font> </td>
          <td> <font face="Arial">Floor</font> </td>
          <td> <font face="Arial">Rooms</font> </td>
          <td> <font face="Arial">Work_Perform</font> </td>
          <td> <font face="Arial">Who_Caused_Impact</font> </td>
          <td> <font face="Arial">Pick_Impact</font> </td>
          <td> <font face="Arial">Equipment_Impacted</font> </td>
          <td> <font face="Arial">What_Did_You_Do</font> </td>
          <td> <font face="Arial">Men</font> </td>
          <td> <font face="Arial">Hours</font> </td>
          <td> <font face="Arial">Signature</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Project"];
        $field2name = $row["Project_Manager"];
        $field3name = $row["Foreman"];
        $field4name = $row["Temperature"];
        $field5name = $row["Weather"];
        $field6name = $row["Floor"];
        $field7name = $row["Rooms"];
        $field8name = $row["Work_Perform"]; 
        $field9name = $row["Who_Caused_Impact"];
        $field10name = $row["Pick_Impact"];
        $field11name = $row["Equipment_Impacted"];
        $field12name = $row["What_Did_You_Do"];
        $field13name = $row["Men"];
        $field14name = $row["Hours"];
        $field15name = $row["Signature"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td> 
                  <td>'.$field11name.'</td>
                  <td>'.$field12name.'</td> 
                  <td>'.$field13name.'</td> 
                  <td>'.$field14name.'</td> 
                  <td>'.$field15name.'</td>  
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>