<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Staff</title>
    <style>
    html {
      font-family: sans-serif;
    }

    table {
      border-collapse: collapse;
      border: 2px solid rgb(200,200,200);
      letter-spacing: 1px;
      font-size: 0.8rem;
    }

    td, th {
      border: 1px solid rgb(190,190,190);
      padding: 10px 20px;
    }

    td {
      text-align: center;
    }

    caption {
      padding: 10px;
    }
    </style>
  </head>
<body style="background-color:yellow;">


<div style="color:#0000FF">
  <h3>Staff</h3>
</div>
<table>
      
      <tr style="background-color:#FF0000">
        
        <th>Id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Age</th>
        
      </tr>
      
    
<div style="color:#0000FF">
  <h3></h3>
</div>

      <colgroup>
        <col style="width:200px;">
        <col style="width:200px;">
        <col style="width:200px;">
      </colgroup>
      <tr>
  
<?php

#$servername = "svc-db-staff-internal.database";
#$username = "root";
#$password = "MySecret123";
#$dbname = "db1";
$servername= getEnv('HOST_DATABASE');
$username= getEnv('USERNAME_DATABASE');
$password= getEnv('PASSWD_DATABASE');
$dbname=getEnv('DATABASE');

// Create connection
$dbconnect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = mysqli_query($dbconnect, "SELECT * FROM `employees`")
or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {

echo  "<tr background-color:blue>
        <td>{$row['id']}</td>
        <th>{$row['firstname']}</th>
        <th>{$row['lastname']}</th>
        <th>{$row['email']}</th>
</tr>";

}
?>
</table>
</body>
</html>
