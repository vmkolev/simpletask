<html>
 <head>
  <title>Test DB connection...</title>

  <meta charset="utf-8">
</head>
<body>
    <div class="container">
    <?php echo "<h1>Test DB Connection...</h1>"; ?>

    <?php
        $hostname       = "mysql";
        $dbname         = "dbtest";
        $username       = "root";
        $password       = "passwordroot";

    $conn = mysqli_connect( $hostname, $username, $password, $dbname );


    $query = 'SELECT * From Person';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    $result->close();

    mysqli_close($conn);

    ?>
    </div>
</body>
</html>
