<?php
    include 'sqlWeimi.php';
    $pdo=new pdo($dsn,$user,$passwd,$opt);

    $sql = "SELECT * FROM member";
    $stmt = $pdo->prepare($sql);    // statement(陳述) SQL用語
    $stmt->execute([$account]);

    echo"<table>";
    while ($obj = $stmt->fetchObject()){
        echo '<tr>';
        echo "<td>{$obj->id}</td>";
        echo "<td>{$obj->account}</td>";
        echo "<td>{$obj->passwd}</td>";
        echo '</tr>';
    }
    echo"</table>";