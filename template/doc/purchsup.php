
<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}


?>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];

    
 

    $query = 'SELECT product_name , product_price  FROM product WHERE product_code = '.$product_name.'';
    $result = $conn->query($query);

    if ($result ->num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            
            $sql = "INSERT INTO addcard (product_name, quantity) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $row['product_name'], $row['product_price']);

            
            if ($stmt->execute()) {
                echo "Product added to cart successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
            $stmt->close();
        }
    }
}

?>