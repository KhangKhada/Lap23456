/* The Db class represents a database connection in PHP and provides methods for executing queries and
fetching results. */
<?php
/**
 * Class Db
 * 
 * Represents a database connection and provides methods for executing queries and fetching results.
 */
class Db
{
    // Database connection variable
    protected static $connection;


    /**
     * Initializes the database connection.
     * 
     * @return mysqli|null The database connection object or null if connection fails.
     */
    public function connect()
    {
        $connection = mysqli_connect(
            "localhost",
            "root",
            "",
            "demo_lap3"
        );
        mysqli_set_charset($connection, 'utf8');

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Database connection failed: " . mysqli_connect_error();
        }
        return $connection;
    }

    /**
     * Executes the provided query statement.
     * 
     * @param string $queryString The SQL query statement to be executed.
     * @return mysqli_result|bool The result of the query execution or false on failure.
     */
    public function query_execute($queryString)
    {
        //Initiate connection
        $connection = $this->connect();
        //Execute query execution, query is a function of mysqli library
        $result = $connection->query($queryString);
        // Close connection
        $connection->close();
        return $result;
    }

    /**
     * Executes the provided query statement and returns an array of result rows.
     * 
     * @param string $queryString The SQL query statement to be executed.
     * @return array|false The array of result rows or false on failure.
     */
    public function select_to_array($queryString)
    {
        $rows = array();
        $result = $this->query_execute($queryString);

        // Check if query execution was successful
        if ($result == false) return false;
        // Fetch result rows and store them in an array
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }
        return $rows;
    }
}
