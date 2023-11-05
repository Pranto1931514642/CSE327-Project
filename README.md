# CSE327-Project

Google Maps MVC Documentation
Overview
The Google Maps MVC application allows users to interact with a Google Map interface, select 
a location, and view the latitude and longitude coordinates of the selected point. The application 
is built using the Model-View-Controller (MVC) architectural pattern for clear separation of 
concerns and maintainability.
Files
1. map.html: The main HTML file containing the structure and user interface of the 
application.
2. map_model.js: JavaScript file defining the data model for the application.
3. map_view.js: JavaScript file handling the UI logic and rendering.
4. map_controller.js: JavaScript file managing application logic and user interactions.
Components
1. Model (map_model.js)
• MapModel Class: Defines the data model for the application.
o Properties:
▪ latitude: Holds the latitude value of the selected location.
▪ longitude: Holds the longitude value of the selected location.
2. View (map_view.js)
• MapView Class: Handles the UI logic and rendering.
o Properties:
▪ mapElement: DOM element representing the Google Map.
▪ latClickedElement: DOM element to display the clicked latitude.
▪ longClickedElement: DOM element to display the clicked longitude.
▪ latMovedElement: DOM element to display the moved latitude.
▪ longMovedElement: DOM element to display the moved longitude.
o Methods:
▪ initMap(center): Initializes the Google Map with the provided center 
coordinates.
▪ updateClickedPosition(lat, long): Updates the clicked latitude and longitude 
values in the UI.
▪ updateMovedPosition(lat, long): Updates the moved latitude and longitude 
values in the UI.
3. Controller (map_controller.js)
• MapController Class: Manages application logic and user interactions.
o Properties:
▪ model: Instance of the MapModel class.
▪ view: Instance of the MapView class.
o Methods:
▪ initMap(): Initializes the Google Map and sets up event listeners.
▪ handleMapClick(event): Handles the click event on the Google Map, updating 
UI with clicked coordinates.
▪ handleMapMouseMove(event): Handles the mousemove event on the Google 
Map, updating UI with moved coordinates.
Usage
1. Open the map.html file in a web browser.
2. The Google Map will be displayed in the application interface.
3. Click on the map to view the latitude and longitude of the clicked location.
4. Move the mouse over the map to view the latitude and longitude of the current mouse 
position.
5. Enter latitude and longitude values manually and click "Submit" to submit the selected 
coordinates.
Dependencies
• Google Maps JavaScript API: The application relies on the Google Maps JavaScript 
API to display the map and handle user interactions. Ensure a valid API key is provided 
in the <script> tag for proper functionality.


Delete Record Documentation
Overview
This PHP code snippet represents a simple web page for deleting records from a database. It 
allows the user to select whether they want to delete a donor or a patient record. After selecting 
the type (donor or patient) and entering the corresponding ID, the user can click the "Delete" 
button to remove the selected record from the database.
Code Explanation
Included Files
• header/header.php: This file contains the header section of the webpage.
• header/connection.php: This file establishes a connection to the database.
• header/navadmin.php: This file likely contains navigation elements for admin users.
HTML Form
• The HTML form allows the user to select the type of record (Donor or Patient) and enter the 
ID of the record they want to delete.
• Upon submitting the form, the data is sent to the same page (action=""), and the form fields 
are accessed using PHP.
PHP Logic
• When the form is submitted (isset($_POST['sub'])), the PHP code retrieves the selected 
type and ID.
• If the selected type is Donor, it prepares SQL statements to delete the record from the donor
and location tables.
• If the selected type is Patient, it prepares an SQL statement to delete the record from the 
patient table.
• The code then executes the appropriate SQL query based on the selected type and ID.
• If the deletion is successful and the affected row count is not zero, it displays a success message 
using JavaScript (echo "<script>alert('Deleted Selected Data')</script>";).
• If the deletion fails, it displays an error message using JavaScript (echo 
"<script>alert('Deletion Failed!')</script>";).
Notes
• The code lacks input validation and is susceptible to SQL injection attacks. It's essential to 
validate and sanitize user inputs before using them in SQL queries to prevent security 
vulnerabilities.
• Error handling and feedback to the user can be improved for a better user experience.
• This code assumes that the database connection and table structures are correctly set up.
