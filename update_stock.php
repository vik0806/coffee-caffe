<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $coffeeId = $_POST["coffeeId"];
  $availability = $_POST["availability"];

  // Prepare the SQL statement
  $sql = "UPDATE coffees SET availability = '$availability' WHERE id = $coffeeId";

  // Open the stock.sql file in append mode
  $file = fopen("stock.sql", "a");

  if ($file) {
    // Write the SQL statement to the file
    fwrite($file, $sql . ";\n");

    // Close the file
    fclose($file);

    echo "Availability updated successfully";
  } else {
    echo "Error opening stock.sql file";
  }
}
?>
