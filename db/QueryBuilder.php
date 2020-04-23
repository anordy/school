<?php


class QueryyBuilder {
    private $conn;
    private $data;


    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function select($table)
    {
    $sql = "SELECT * FROM {$table}";
    $results = mysqli_query($this->conn, $sql);

    if(mysqli_num_rows($results) > 0){
        return $this->data = $results->fetch_all(MYSQLI_ASSOC);
        return "no data available";
    }
    }

    public function insert($data)
    {
    $sql = "INSERT INTO {$data['table']}(" .implode(',', $data['columns']). ") VALUES (?,?,?,?) ";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("sssss", $data["firstname"], $data["lastname"], $data["class"], $data["file_path"]);
    $results = $stmt->execute();
    if($results){
        header: 'Location /';
    }else{
        echo "Error:" . mysqli_error($sql);
    }

    }
}