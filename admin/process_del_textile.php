<?php
include_once'includes/config.php';

$sql = "DELETE FROM textile WHERE t_id='" . $_GET["t_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
