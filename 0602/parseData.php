<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
    include "sqlWeimi.php";
    $pdo = new pdo($dsn, $user, $passwd, $opt);
    $json = file_get_contents("http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json");
    $result = mb_convert_encoding($json,"utf-8","big5");
    //PHP big5轉utf8 , 參考: http://vector888.blogspot.tw/2014/07/php-big5utf8iconviconvmbconvertencoding.html
    $root = json_decode($result);
    foreach( $root as $Obj){
        foreach ($Obj as $k => $v){
            echo "{$k} : {$v}<br>";
        }
        echo '<hr>';
    }