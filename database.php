<?php
    $host="localhost";
    $dbName="simpleapp";
    $username="root";
    $password="";

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;

    $pdo = new PDO($dsn, $username, $password);

    $stmt = $pdo->query('SELECT * FROM users');

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo $row['name'];
    }
