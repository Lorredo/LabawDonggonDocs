<?php
require_once 'connection.php'; // Include the database connection file

class DatabaseOperations {
    // Private property to store database connection instance.
    private $db;

    // Constructor method to initialize the database connection
    public function __construct(DatabaseConnection $db) {
        $this->db = $db;
    }

    // Protected method to fetch data from the database
    protected function fetchData($tableName, $columns = '*', $condition = '') {
        $conn = $this->db->connect();

        // Sanitize input parameters to prevent SQL injection
        $tableName = $conn->real_escape_string($tableName);
        $columns = $conn->real_escape_string($columns);
        $condition = $conn->real_escape_string($condition);

        // Construct SQL query
        $sql = "SELECT $columns FROM $tableName";
        if (!empty($condition)) {
            $sql .= " WHERE $condition";
        }

        $result = $conn->query($sql);

        if ($result === false) {
            echo "Error: " . $conn->error;
            return false;
        }

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $conn->close();
        return $data;
    }
}
?>
