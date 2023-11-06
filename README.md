# CSE327-Project/S. M. Shamim Sarowar Pranto

I had done the code for doron list and the database for this project. Here is the guidelines-


What is donorlist?

A Donor List is a critical component of a blood bank system website, helping blood banks manage their donor pool efficiently, ensuring a stable and safe blood supply, and facilitating prompt responses to medical emergencies. It plays a significant role in saving lives and promoting public health.


The code is a PHP script that appears to be part of a blood bank system website. It serves several functions related to displaying donor and patient information, as well as handling the process of blood donation. Here's an explanation of the code:

PHP Includes:

The code starts with a series of include statements to include external PHP files, likely for the website's header, navigation, and database connection.
HTML Document Structure:

The code defines the basic structure of an HTML document, including the <!DOCTYPE html>, <html>, <head>, and <body> tags.
CSS Styles:

Inside the <style> tag within the <head>, the code defines CSS styles for the table and text.
Donor List Table:

The page displays a "Donor List" with a table that includes columns for "ID," "Name," "Blood Group," "Gender," "Age," "Weight," "Last Donated," "Phone Number," and "Address."
PHP Code for Donor Data:

PHP code queries the database to retrieve donor records from the "donor" table using $db->query("SELECT * FROM donor").
It then iterates through the results and fetches each record as an object using fetch(PDO::FETCH_OBJ).
Eligibility Check:

Within the loop, the code calculates the time elapsed since the last donation in months and checks if it's greater than or equal to 3 months ($month>=3.0).
If the donor is eligible (has not donated in the last 3 months), their information is displayed in the table.
Patient List Table:

Below the Donor List, the code displays a "Patient List" in a similar format. It retrieves and displays patient information from the "patient" table in the database.
Donation Process Form:

A form labeled "Proceed a Donation" allows users to initiate a donation process.
Users are prompted to enter the ID of the donor and the ID of the patient.
Upon form submission, the code checks the eligibility of the donor based on the last donation date and other conditions.
Donation Handling:

If the donor is eligible, the code performs the following actions:
Retrieves additional information about the donor and patient.
Generates a unique donation ID using uniqid().
Inserts a new donation record into the "donation" table in the database.
Updates the last donation date of the donor in the "donor" table.
User Feedback:

The code displays alert messages using JavaScript (<script>alert('Message')</script>) to provide feedback on the success or failure of the donation process.
Overall, this code is a part of a blood bank system that manages donor and patient information and facilitates the process of blood donation, including eligibility checks and database updates. It aims to ensure a safe and organized blood donation process.
