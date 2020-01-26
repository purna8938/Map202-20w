   <?php
$dbhost = 'remotemysql.com';
    $dbname = 'VHwLINMsoT';
    $dbuser = 'VHwLINMsoT';
    $dbpass = 'QvwOG1630d';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $query = "SELECT * FROM movies";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // print_r($result);
?>
