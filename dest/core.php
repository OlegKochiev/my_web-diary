<?php
$dbType = 'mysql';
$host = 'localhost';
$dbName = 'myWebDiary';
$charset = 'utf8';
$login = 'root';
$password = '';
$opt = [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$connection = new PDO($dbType.':host='.$host.';dbname='.$dbName.';charset='.$charset, $login, $password, $opt);


function getDatas(){
    global $connection;
    $statement = $connection->query('select * from tasks');
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $mas[] = $row;
    }
    return $mas;
}
function setDatas($theme, $description, $keyfunctions, $keywords){
    global $connection;
    $stm = $connection->prepare('INSERT INTO tasks (theme, description, date, keyfunctions, keywords) 
                                     VALUES (:th, :de, :dt, :kf, :kw) ');
    $stm->execute(['th'=>$theme, 'de'=>$description, 'dt'=>date("d M Y H:i:s"), 'kf'=>$keyfunctions, 'kw'=>$keywords]);
}




?>