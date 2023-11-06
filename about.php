<?php
session_start();
include('header/header.php');
include('header/connection.php');
if(isset($_SESSION['loggedin'])==true){ //cheching if logged in or not and which profile is that
	include('header/admin.php');
}
else {
	include('header/user.php');
}
?>
<!DOCTYPE html>
<html>

<section id="">
<div class="">
  <div class=""align="center">
    <img src="./img/vision.png" ALT="some text" WIDTH=180 HEIGHT=160>
      <ul style="list-style:none;">
          <li><a href=""><u>Our Vision</u></a></li>
        </ul>
<p> Blood transfusion is an essential component of the health care system of every country and patients who require blood transfusion service as part of their clinical condition. They have the right to expect that sufficient and safe blood will be available to meet their needs. 
However, this is not always the case, especially in developing countries like ours. There is a widespread shortfall between blood requirements and blood supplies and as a result, many patients die or suffer unnecessarily because they do not have access to blood and blood products. blood banking in Bangladesh</p>
  </div>
  <br><br>
  <div class=""align="center">
    <img src="./img/target.png" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
    <li><a href=""><u>Our Goal</u></a></li>
    <p>The purpose of a Blood Bank Management System is to streamline and automate the processes involved in managing the storage, inventory, and distribution of blood units in a blood bank or blood donation center. The goal of such a system is to ensure the availability of safe and compatible blood units when needed for transfusions, and to efficiently manage the entire lifecycle of donated blood. The system allows efficient registration, screening, and tracking of blood donors. It maintains a database of donor information, including blood type, previous donations, and any relevant medical history. The system also keeps track of the available blood units in the blood bank, including their blood types, expiration dates, and storage locations. It ensures proper storage conditions and minimizes wastage by optimizing inventory levels. Overall, the primary purpose of a Blood Bank Management System is to ensure the efficient and effective management of the blood supply chain, from donation to transfusion, with the ultimate goal of saving lives and promoting the well-being of patients in need of blood transfusions.
</p>
  </ul>
  </div>
  <br><br>
  <div class=""align="center">
    <img src="./img/mission.png" ALT="some text" WIDTH=180 HEIGHT=160>
    <ul style="list-style:none;">
  <li><a href=""><u>Our Mission</u></a></li>
  <p>The future improvement of a blood bank management system website can involve several advancements to enhance its functionality, usability, and overall effectiveness. Here are some potential areas of improvement:

	*Enhanced User Interface: Improving the user interface (UI) and user experience (UX) can make the website more intuitive and user-friendly. Streamlining the navigation, simplifying form submissions, and incorporating modern design principles can enhance the overall usability and efficiency of the system.
	*Mobile-Friendly Design: Optimizing the website for mobile devices is crucial as more users access the internet through smartphones and tablets. Implementing a responsive design that adapts to different screen sizes and touch interactions will ensure accessibility and convenience for users on mobile devices.
	*Donor and Recipient Management: Enhancing the management of donor and recipient information can improve communication and facilitate the matching process. Implementing features such as automated reminders for blood donation eligibility, appointment scheduling, and tracking of recipient transfusion requirements can streamline the workflow and improve efficiency.
	*Security and Privacy Enhancements: Strengthening the security measures of the website, including encryption, two-factor authentication, will help safeguard sensitive donor and recipient data. 
</p>
</ul>
  </div>

      <br><br>
</div>
</section>
</html>
