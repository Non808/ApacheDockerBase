<h1>Hello World!</h1>

<?php
  $servername = "db";
  $password = "example";
  $username = "developer";
  $dbname = "Test";

  function connect() {
    GLOBAL $servername, $username, $password, $dbname;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
  }

  $con = connect();
  $sql = "SELECT * FROM Users";
  $result = $con->query($sql);

  if ($result->num_rows == 0) {
        error("Records are empty");
  }

  $info = [
  		'id' => [],
          'name' => [],
	  'cringeFactor' => [],
  ];

  while ($row = $result->fetch_assoc()) {
          $keys = array_keys($row);

          foreach ($keys as $key) {
                  array_push($info[$key], $row[$key]);
          }
		  
  }



  $keys = array_keys($info);
	
  echo "<table border='1'><tr><th>Name</th><th>Cringe Factor</th></tr>";
  for ($i=0, $len=count($info['name']); $i<$len; $i++) {
  	echo "<tr><td>".$info['name'][$i]."</td><td>".$info['cringeFactor'][$i]."</td></tr>";
  }

  echo "</table>";


  $con->close();
?>
