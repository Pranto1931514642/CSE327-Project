<?php
include('header/header.php');  // This line includes the 'header.php' file for the page header.
include('header/navadmin.php'); // This line includes the 'navadmin.php' file for the navigation menu.

<!DOCTYPE html>
<html>
<section id="boxes">
<div class="container">
  <div class="box">
    <img src="./img/donor.jpg" ALT="some text" WIDTH=80 HEIGHT=60>

      <ul style="list-style:none;">
          <li><a href="reg.php">Add Donor</a></li> //Link to 'reg.php' for adding a donor.
        </ul>

  </div>
  <div class="box">
    <img src="./img/Search.png" ALT="some text" WIDTH=80 HEIGHT=60>
    <ul style="list-style:none;">
    <li><a href="blood.php">Search for Blood</a></li> // Link to 'blood.php' for searching for blood.
  </ul>
  </div>
  <div class="box">
    <img src="./img/delete.png" ALT="some text" WIDTH=80 HEIGHT=60>
    <ul style="list-style:none;">
  <li><a href="delete.php">Delete Donor/Patient</a></li>
</ul>
  </div>
<br><br><br>
<div class="box">
  <img src="./img/patient.png" ALT="some text" WIDTH=90 HEIGHT=70>
  <ul style="list-style:none;">
<li><a href="reg2.php">Add Patient</a></li>
</ul>
  </div>
	<div class="box">
    <img src="./img/donorlist.png" ALT="some text" WIDTH=90 HEIGHT=70>
  	<ul style="list-style:none;">
  <li><a href="donorlist.php">Donor List</a></li>
	</ul>
	  </div>
    <div class="box">
  		<img src="./img/patientlist.png" ALT="some text" WIDTH=90 HEIGHT=70>
  		<ul style="list-style:none;">
  	<li><a href="patientlist.php">Patient List</a></li>  // Link to 'delete.php' for deleting a donor or patient.
  	</ul>
  	  </div>
      <br><br>
</div>
</section>
</html>
