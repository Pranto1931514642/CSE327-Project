<?php include('header/header.php'); ?> <!-- Include the header file -->
<?php include('header/navadmin.php'); ?> <!-- Include the navigation bar for admin -->

<!DOCTYPE html>
<head>
    <title>Delete Record | Welcome</title> <!-- Set the title of the HTML page -->
</head>
<body>
    <div class="type">
        <label>Delete a Record</label> <!-- Display a label indicating the purpose of the form -->
        <br><br>
        <label>Select Donor OR Patient:</label> <!-- Label for the selection dropdown -->
        <form class="" action="<?php echo BASE_URL; ?>delete/process" method="post"> <!-- Form with POST method and action URL -->
            <select name="dp">
                <option>Select</option> <!-- Default option for the selection dropdown -->
                <option>Donor</option> <!-- Option for selecting a Donor -->
                <option>Patient</option> <!-- Option for selecting a Patient -->
            </select>
            <br>
            <label>Enter ID of Donor OR Patient:</label> <!-- Label for the ID input field -->
            <br>
            <input type="text" name="id" placeholder="Enter ID" style="font-size: 22px; width: 220px; height: 40px; border-radius: 10px;"> <!-- Input field for entering ID with specified styles -->
            <input name="sub" type="submit" value="Delete" style="font-weight:bold;font-size: 12px; width: 90px; height: 35px;border-radius:10px;background-color:#F9054B;font-size:18px;"> <!-- Delete button with specified styles -->
        </form>
    </div>
    <br></br> <!-- Line break for spacing -->
</body>
</html>
