<?php
class Database {
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;

    public function __construct() {
        $this->getConfig();
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    private function getConfig() {
        include(__DIR__ . "/../config/config.php");

        $this->host     = $config['host'];
        $this->user     = $config['username'];
        $this->password = $config['password'];
        $this->db_name  = $config['db_name'];
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function getAll($table) {
        return $this->conn->query("SELECT * FROM $table");
    }

    public function getById($table, $where) {
        $query = $this->conn->query("SELECT * FROM $table WHERE $where");
        return $query->fetch_assoc();
    }

    public function insert($table, $data) {
        $columns = implode(",", array_keys($data));
        $values  = "'" . implode("','", array_values($data)) . "'";

        return $this->conn->query("INSERT INTO $table ($columns) VALUES ($values)");
    }

    public function update($table, $data, $where) {
        $update = [];
        foreach ($data as $key => $val) {
            $update[] = "$key='$val'";
        }

        $updateValue = implode(",", $update);
        return $this->conn->query("UPDATE $table SET $updateValue WHERE $where");
    }

    public function delete($table, $where) {
        return $this->conn->query("DELETE FROM $table WHERE $where");
    }
}
?>
