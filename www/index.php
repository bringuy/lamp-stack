<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Users</h1>"; ?>
    <?php

    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    $stmt = $conn->prepare('SELECT * FROM Person');
    $stmt->execute();
    $cfg['QueryHistoryDB'] = true;


    $result = $stmt->get_result();

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>name</th><th>age</th><th>password</th></tr></thead>';

    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        $id = 0;
        $key = 'key_string';
        foreach (array_values($value) as $i =>$val){
            if ($i == 0){
                $id = $val;
                continue;
            }
            else {
                echo '<td>' . $val . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';

    # Add User Form
    echo '<br><h1>Add User</h1><br>';
    echo '<form action="makePerson.php" method="get">';
        echo 'name: <input type="text" name="name"><br>';
        echo 'age: <input type="int" name="age"><br>';
        echo 'id (number of users): <input type="int" name="id"><br><br>';
        echo '<input type="submit">';
    echo '</form>';

    $result->close();
    mysqli_close($conn);
    ?>
    </div>
</body>
</html>
