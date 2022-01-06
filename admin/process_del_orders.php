<?php
include_once'includes/config.php';

$sql = "DELETE FROM orders WHERE ord_id='" . $_GET["ord_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
