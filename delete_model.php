<?php
class DeleteModel {
    // Function to delete a record based on ID, table name, and database connection
    public function deleteRecord($db, $dp, $id) {
        $count = 0; // Initialize a variable to keep track of the number of affected rows
        
        // Check if the record belongs to the 'Donor' table
        if ($dp == "Donor") {
            // Prepare the DELETE queries for 'donor' and 'location' tables
            $q = $db->prepare("DELETE FROM `donor` WHERE id='$id'");
            $t = $db->prepare("DELETE FROM `location` WHERE id='$id'");
            
            // Count the number of rows in 'donor' table with the given ID
            $count = $db->query("SELECT * FROM donor WHERE id='$id'")->fetchColumn();
        } else {
            // Prepare the DELETE query for 'patient' table
            $q = $db->prepare("DELETE FROM `patient` WHERE id='$id'");
            
            // Count the number of rows in 'patient' table with the given ID
            $count = $db->query("SELECT * FROM patient WHERE id='$id'")->fetchColumn();
        }
        
        // Execute the DELETE query and check if successful deletion and non-zero count
        if ($q->execute() && $count != 0) {
            return true; // Return true if deletion is successful and at least one row was deleted
        } else {
            return false; // Return false if deletion fails or no rows were affected
        }
    }
}
?>
