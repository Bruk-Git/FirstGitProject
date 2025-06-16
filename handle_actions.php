<?php
// Include your database connection
$servername= "localhost:3306";
$username= "root";
$password = "";
$dbname = "contact";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	echo "Connection failed!";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['name']); // Get the ID from the form submission
    $action = $_POST['action']; // Get the action (edit or delete)

    if ($action == 'edit') {
        // Handle the edit action
        // Redirect to an edit form or page
        header("Location: edit_form.php?iname=$id");
        exit();
    } elseif ($action == 'delete') {
        // Handle the delete action
        $deleteQuery = "DELETE FROM contacttable WHERE name = ? ";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Record deleted successfully";
            // Redirect back to your main page or show a success message
            header("Location:Deleted.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
