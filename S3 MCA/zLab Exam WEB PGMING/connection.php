    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database_name="labexam_web";

        // Create connection
        $db_connection = new mysqli($servername, $username, $password,$database_name);
        
        $db_connection->set_charset("utf8mb4");
       // Check connection
        if ($db_connection->connect_error) {
          die("Connection failed: " . $db_connection->connect_error);
        }
        // echo "Connected successfully";
    ?>
