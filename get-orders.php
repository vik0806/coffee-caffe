<?php
// Retrieve the live orders from your storage (e.g., database, file, etc.)
// You can customize this part based on your specific server setup and requirements

// Sample orders data
$orders = array(
    array(
        'orderNumber' => '001',
        'item' => 'Ristretto',
        'customerName' => 'John Doe'
    ),
    array(
        'orderNumber' => '002',
        'item' => 'Intenso',
        'customerName' => 'Jane Smith'
    ),
    array(
        'orderNumber' => '003',
        'item' => 'Arabica',
        'customerName' => 'Alex Johnson'
    )
);

// Return the orders as JSON
echo json_encode($orders);
?>
