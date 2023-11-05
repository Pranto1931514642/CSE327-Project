<?php
require_once 'models/DeleteModel.php'; // Include the DeleteModel class for database operations

class DeleteController {
    public function delete() {
        // Check if the form is submitted
        if (isset($_POST['sub'])) {
            $dp = @$_POST['dp']; // Get the selected donor or patient value from the form
            $id = $_POST['id']; // Get the ID entered in the form
            $db = new Connection(); // Create a new database connection object
            $model = new DeleteModel(); // Create a new instance of DeleteModel class for database operations
            $result = $model->deleteRecord($db, $dp, $id); // Call deleteRecord method to delete the record

            // Check the result of the deletion operation
            if ($result) {
                echo "<script>alert('Deleted Selected Data')</script>"; // Display success message if deletion is successful
            } else {
                echo "<script>alert('Deletion Failed!')</script>"; // Display error message if deletion fails
            }
        }

        include 'views/delete.php'; // Include the delete view after processing the deletion
    }
}
?>
