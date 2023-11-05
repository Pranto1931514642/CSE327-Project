<?php
include('header/header.php');
include('header/navuser.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<script type="text/javascript">
  window.helpcrunchSettings = {
    organization: 'bloodms',
    appId: '0c5ce182-167c-4e68-afa2-5ee10a086c0e',
  };
</script>

<script type="text/javascript">
  (function(w,d){var hS=w.helpcrunchSettings;if(!hS||!hS.organization){return;}var widgetSrc='https://'+hS.organization+'.widget.helpcrunch.com/';w.HelpCrunch=function(){w.HelpCrunch.q.push(arguments)};w.HelpCrunch.q=[];function r(){if (d.querySelector('script[src="' + widgetSrc + '"')) { return; }var s=d.createElement('script');s.async=1;s.type='text/javascript';s.src=widgetSrc;(d.body||d.head).appendChild(s);}if(d.readyState === 'complete'||hS.loadImmediately){r();} else if(w.attachEvent){w.attachEvent('onload',r)}else{w.addEventListener('load',r,false)}})(window, document)
</script>
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
