<html>
<head>
    <title>
    </title>
    <link href="login.css" rel="stylesheet">    

</head>

<body class="text-center">
    
<main class="form-signin">
  <form method="get">

    <div class="form-floating">
      <input type="text" name="username" class="form-control" id="name" placeholder="Patient name">
    </div>
    <div class="form-floating">
      <input type="text" name="roomNb" class="form-control" id="roomNb" placeholder="Room number">
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Add</button>
       
        
    </table>
  </form>
</main>
</body>

</html>

<?php
require_once 'connect.php';

// Check if all required parameters are provided
if (isset($_GET['username'], $_GET['roomNb'])) {
    // Assign values to variables
    $username = $_GET['username'];
    $roomNb = $_GET['roomNb'];

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO patients
    VALUES(NULL, '$username','$roomNb', NULL, NULL, NULL)";

    // Execute SQL statement
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} else {
    echo "All parameters are required";
}

// Close connection
$con->close();
