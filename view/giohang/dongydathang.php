<?php
include "../model/connect.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
</head>

<body>
    <h1>Order History</h1>

    <?php
    // Check if there are orders
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<p>Order ID: " . $row["order_id"] . "<br>";
            echo "Product: " . $row["product_name"] . "<br>";
            echo "Quantity: " . $row["quantity"] . "<br>";
            echo "Total Amount: " . $row["total_amount"] . "<br>";
            echo "Order Date: " . $row["order_date"] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "No orders found.";
    }
    ?>

    <!-- Add any additional styling or formatting as needed -->
</body>

</html>
