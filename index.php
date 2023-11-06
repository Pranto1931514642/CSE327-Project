<?php
include('header/header.php');
include('header/user.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<script type="text/javascript">
  window.helpcrunchSettings = {
    organization: 'bloodms',
    appId: '0c5ce182-167c-4e68-afa2-5ee10a086c0e',
  };

<title>Blood Bank | Welcome</title>
 <link rel="stylesheet" href="./css/style.css">

<section id="boxes" align="center">
<div class="container" align="center">
  <div class="box">
    <img src="./img/donor.jpg" ALT="some text" WIDTH=80 HEIGHT=60>

      <ul style="list-style:none;">
          <li><a href="reg.php">Register as a Donor</a></li>
        </ul>

  </div>
  <div class="box">
    <img src="./img/Search.png" ALT="some text" WIDTH=80 HEIGHT=60>
    <ul style="list-style:none;">
    <li><a href="blood.php">Search for Blood</a></li>
  </ul>
  <br></br>
  </div>
  <div class="box">
    <img src="./img/patient.png" ALT="some text" WIDTH=80 HEIGHT=60>

      <ul style="list-style:none;">
          <li><a href="reg2.php">Request for Blood</a></li>
        </ul>

  </div>
</div>
 </section>
</body>
</html>
