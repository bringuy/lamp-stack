<html>
<body>

Person <?php echo $_GET["name"]; ?> was created

<?php
    $query = "INSERT INTO Person Values({$_GET["id"]}, '{$_GET["name"]}', {$_GET["age"]}, AES_ENCRYPT('{$_GET["password"]}', 'key_string'))";
    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    echo $query;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    echo $query;
?>

</body>
</html>