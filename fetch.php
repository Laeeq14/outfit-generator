<?php
include 'config.php';

$sql = "SELECT * FROM clothing";
$result = $conn->query($sql);

$clothing_items = array();
while ($row = $result->fetch_assoc()) {
    $clothing_items[] = $row;
}

header('Content-Type: application/json');
echo json_encode($clothing_items);

$conn->close();
?>
