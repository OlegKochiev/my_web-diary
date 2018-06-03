<?php
class DB
{
    protected $connection;

    public function __construct(
        $dbType = 'mysql',
        $host = 'localhost',
        $dbName = 'myWebDiary',
        $charset = 'utf8',
        $login = 'root',
        $password = '',
        $opt = [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]) {
            $this->connection = new PDO($dbType.':host='.$host.';dbname='.$dbName.';charset='.$charset, $login, $password, $opt);
    }
    public function getDatas(){
        $this->connection;
        $statement = $this->connection->query('select * from tasks');
        while ($row = $statement->fetch()) {
            $mas[] = $row;
        }
        return $mas;
    }
    public function setDatas($theme, $description, $keyfunctions, $keywords, $work, $source){
        $this->connection;
        $stm = $this->connection->prepare('INSERT INTO tasks (theme, description, date, keyfunctions, keywords, work, source) 
                                        VALUES (:th, :de, :dt, :kf, :kw, :wk, :sc) ');
        $stm->execute(['th'=>$theme, 'de'=>$description, 'dt'=>date("d M Y H:i:s"), 'kf'=>$keyfunctions, 'kw'=>$keywords, 'wk'=>$work, 'sc'=>$source]);
    }
    public function getKeywords(){
        $this->connection;
        $statement = $this->connection->query('select * from keywords');
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $mas[] = $row;
        }
        return $mas;
    }
    public function setKeyword($keyword, $keywordDesc){
        $stm = $this->connection->prepare('INSERT INTO keywords (keyword, description) VALUES (:kw, :de)');
        $stm->execute(['kw'=>$keyword, 'de'=>$keywordDesc]); 
        return $this->connection->lastInsertId();
    }
    public function updateKeyword($id, $keyword, $keywordDesc){
    }
    public function deleteKeyword($id){
    }
}