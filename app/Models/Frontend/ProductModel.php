<?php

namespace App\Models\Frontend;

use PDO; // Import the PDO class
use PDOException; // Import the PDOException class

class ProductModel
{
    // Private property to hold the database connection object
    private $db;

    /**
     * Constructor to establish the database connection.
     *
     * @param string $host The database host.
     * @param string $dbname The database name.
     * @param string $username The database username.
     * @param string $password The database password.
     */
    public function __construct($host, $dbname, $username, $password)
    {
        // Build the DSN (Data Source Name) string
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4"; // Added charset for better compatibility

        try {
            // Create a new PDO instance
            $this->db = new PDO($dsn, $username, $password);

            // Set PDO error mode to exception, which makes errors throw PDOException
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Optional: Set default fetch mode (e.g., associative array)
            // $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            // If connection fails, catch the exception and terminate the script
            // In a real application, you might log the error instead of dying
            die("Database connection failed: " . $e->getMessage());
        }
    }

    /**
     * Method to add a product to the database.
     *
     * @param string $name The product name.
     * @param float $price The product price.
     * @param string $description The product description.
     * @return bool True on success, false on failure.
     */
    public function addProduct($name, $price, $description)
    {
        try {
            // SQL query with named placeholders
            $sql = "INSERT INTO products (name, price, description) VALUES (:name, :price, :description)";

            // Prepare the SQL statement
            $stmt = $this->db->prepare($sql);

            // Bind parameters to the placeholders
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':description', $description);

            // Execute the prepared statement
            return $stmt->execute();

        } catch (PDOException $e) {
            // Catch PDO exceptions during execution and report the error
            echo "Error adding product: " . $e->getMessage(); // Consider logging this in production
            return false;
        }
    }

    /**
     * Method to fetch all products from the database.
     *
     * @return array An array of products (associative arrays), or an empty array on failure.
     */
    public function fetchProducts()
    {
        try {
            // SQL query to select all products
            $sql = "SELECT * FROM products";

            // Execute the query directly (suitable for simple SELECT without user input)
            $stmt = $this->db->query($sql);

            // Fetch all results as associative arrays
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            // Catch PDO exceptions during execution and report the error
            echo "Error fetching products: " . $e->getMessage(); // Consider logging this in production
            return []; // Return an empty array on failure
        }
    }

    // Optional: Add a destructor to close the database connection (though PHP usually handles this)
    /*
    public function __destruct()
    {
        $this->db = null; // Close the connection by setting the PDO object to null
    }
    */
}
