<?php include("header.php");
include("connect.php");
?>
<div role="main">

<div class="contentwrapper">
<!--
<aside id="sideNav">
<nav>

<ul class="navCMSListMenuUL" id="cmsChildNav">
<li class="navCMSListMenuLI"><a href="#" class="navCMSListMenuLink">Business Closed</a></li>
<li class="navCMSListMenuLI"><a href="#" class="navCMSListMenuLink">Branch Locator</a></li>
<li class="navCMSListMenuLI"><a href="#" class="navCMSListMenuLink">Email Us a General Enquiry</a></li>
<li class="navCMSListMenuLI"><a href="#" class="navCMSListMenuLink">Contact Sales to Set Up an Account</a></li>
</ul>

</nav>
</aside>
-->

<main class="slide">
<div class="fw grey-bg">
<section class="get-in-touch"><header>
<h1>Get in touch</h1>
</header>
<div class="col-lg-4 col-sm-4 col-sm-offset-2">
<div class="iconbox"><span class="contact-icon-chat55"></span>
<p>Live chat</p>
<p class="info">Chat to us live now, it's the fastest way to get in touch. We're online 8am-6pm, Monday to Friday. Simply click the orange button in the bottom right of your screen.</p>
</div>
</div>
<!--<div class="mobOnly col-lg-4 col-sm-4"><div class="iconbox"><span class="contact-icon-chat55"></span><p>Live chat</p><p class="info">Chat to us live right here, it’s the fastest way to get in touch. We’re online 8am-6pm, Monday to Thursday, 8am-6pm Friday.</p><a href="#" class="primaryButtonSmall">Click here</a></div></div>-->
<div class="mobHide col-lg-4 col-sm-4" style="display: none;">
<div class="iconbox"><span class="contact-icon-call10"></span>
<p>Phone us</p>
<p class="info">Give us a call on 1223456789 and we'll be happy to help. We're on the phone 8.30am - 5.30pm. Monday to Friday</p>
</div>
</div>
<div class="mobHide col-lg-4 col-sm-4">
<div class="iconbox"><span class="help-icon-email20"></span>
<p>Send a message</p>
<p class="info">If you can't stay online for your answer, simply send us a message. We'll do our best to reply to all message within 2 business hours.</p>
<!--<button type="button" class="btn btn-primary primaryButtonSmall" data-toggle="modal" data-target=".zenDesk">Click here</button> -->
<div class="modal fade zenDesk">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="closeModal" aria-hidden="true">×</span></button>
<h4 class="modal-title" id="myLargeModalLabel">Send a message</h4>
</div>
<div class="container">

<div class="page-header">
<h3>write your questions and concerns and will respond soon. Thank you.</h3>
</div>

<div class="email-form">

<form method="post" class="contact-form">				

<?php

if(isset($_POST['submit'])):
    
if(!empty($_POST['message']) && !empty($_POST['email'])){
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$subject = mysqli_real_escape_string($conn,$_POST['subject']);
$message = mysqli_real_escape_string($conn,$_POST['message']);

$to = '';
$subject = $subject;

$message  = "<p style='text-align:justify;background:white;'>".$message."</p>";

$header = "From:$email\r\n";
//$header .= "Cc:$name\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);
if( $retval == true ) {
echo "<div class='alert alert-success'>Message Successfully Sent,Thank You</div>";
}else{
}
 
} else {
echo "<div class='alert alert-danger'>PLease Fill in the empty fields</div>";	
}
endif;
?>


<div class="formulario">
<div class="column">
<label for="Name">Name </label>
<input type="text" name="name" class="form-input" onblur="revisar(this);"/>

<label for="email">Email </label>
<input type="email" name="email" class="form-input" onblur="revisar(this); revisaremail(this);"/>

<label for="Message Subject">Message Subject </label>
<input type="text" name="subject" class="form-input" onblur="revisar(this);"/>
</div>

<div class="column">
<label for="Comment">Comment </label>
<textarea name="message" class="form-input" ></textarea>
</div>				

<input class="form-btn" name="submit" type="submit" value="Send Message"/>
</div>		
</form>
</div>    
</div>
</div>
</div>
</div>
</div>
<div class="mobOnly col-lg-4 col-sm-4">
<div class="iconbox"><span class="help-icon-email20"></span>
<p>Send a message</p>
<!--<p class="info">If you can’t stay online for your answer, simply <a href="mailto:cs@myparceldelivery.com">click here</a> to send us a message. We’ll do our best to reply to all messages within 2 business hours.</p>--> <a href="mailto:cs@myparceldelivery.com" class="primaryButtonSmall">Click here</a></div>
</div>
</div>
</section>
</div>
<div class="fw">
<section class="find-us"><header>
<h1>Where to find us</h1>
</header>
<div class="col-lg-4 col-xs-12 details">
<div class="mpd-address col-lg-12 col-sm-6 col-xs-12">
<h2><span class="contact-icon-place4"></span>Address</h2>
<address>
<p><strong>Quicklogistics24,</strong> <br /> River House, No 56 <br /> 59 High Street, <br /> London BS7 1ES,<br /> UK, </p>
</address></div>
<div class="companyinfo-container col-lg-12 col-sm-6 col-xs-12">
<h2 class="companyinfo"><span class="contact-icon-information38"></span>Company Information</h2>
<p><strong></strong>, <br /> Registered in UK (England and Wales)</p>
<p><strong>Email:</strong> info@quicklogistics24.com</p>
</div>
</div>
<div class="col-lg-8 col-xs-12">
<div id="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d9954.490249495002!2d-0.31467426104314944!3d51.40998950803299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRiver%20House%2059High%20Street%20Kingston%20upon%20Thames%20Surrey!5e0!3m2!1sen!2sng!4v1590934088941!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>

River House 56 59 High Street Kingston upon Thames Surrey

</div>
</section>
</div>

</main>
<!--
<hr>
<form method="post" action="https://orliclogisticintl.com/sendemail.php" onclick(submit)>
<p><strong>Enter Your Full Name:</strong> </p>
<input type="text" id="contactform"  Placeholder="Enter Full Name"  name="name" required/><br>
<p><strong>Enter Your Email Address:</strong> </p>
<input type="email" id="contactform"  Placeholder="Enter Your Email Address"  name="email" required/> <br>
<p><strong>Enter Your Message:</strong> </p>
<textarea  rows="10" cols="35" name="message" required/></textarea><br><br>
<input id="trackbutton" type="reset"   value="Clear"  /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" id="trackbutton"  value="Submit" name="submit" />
<hr>

</form>
-->




<div id="contactside"><img src="img/contact.jpg" width="200px"  height="150px"/></div>
</div>


<div id="deep-footer">
<div class="wrap">
<div id="quick-links">

</div>

<div id="site-links">            	

<ul class="CMSListMenuUL" id="navFooter" style="position: relative; height: 467.934px;">
<li class="CMSListMenuLI header" style="position: absolute; left: 0px; top: 0px;"><a href="#" class="CMSListMenuLink">Booking</a>
<ul class="CMSListMenuUL">
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Book a Pick Up</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Evening Deliveries</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">BringIt – express delivery and pick up from your smartphone.</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Just one item to send? Send It Now!</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">International Services</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Send a Freight Forward</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Pack Your Parcel</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Choosing a Product</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Delivery Sector Maps</a></li>
<li class="newwindowlink header"><a href="#" class="CMSListMenuLink">Prohibited Items</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Compensation Cover</a></li>
</ul>
</li>
<li class="CMSListMenuLI header" style="position: absolute; left: 246px; top: 0px;"><a href="#" class="CMSListMenuLink">Track</a>
<ul class="CMSListMenuUL">
<li class="CMSListMenuLI"><a href="trackshipment/tracking.php" class="CMSListMenuLink">Track &amp; Trace</a></li>
<li class="CMSListMenuLI"><a href="trackshipment/tracking.php" class="CMSListMenuLink">Delivery Update</a></li>
<li class="CMSListMenuLI"><a href="trackshipment/tracking.php" class="CMSListMenuLink">Make a Claim</a></li>
<li class="CMSListMenuLI"><a href="trackshipment/tracking.php" class="CMSListMenuLink">Receiving your parcels</a></li>
</ul>
</li>
<!--
<li class="CMSListMenuLI"><a href="#" class="CMSListMenuLink">Send</a>

<ul class="CMSListMenuUL">
<li class="CMSListMenuLI"><a href="#" class="CMSListMenuLink">Just one item to send? Send It Now!</a></li>
<li class="CMSListMenuLI"><a href="#">You Can Pay With Account/Credit Card</a></li>
<li class="CMSListMenuLI"><a href="#" class="CMSListMenuLink">Product Return Policy</a></li>
</ul>
-->
<li class="CMSListMenuLI header" style="position: absolute; left: 492px; top: 130px;"><a href="#" class="CMSListMenuLink">Getting Started</a>
<ul class="CMSListMenuUL">
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Why Choose Quicklogistics24 Express Delivery Company</a></li>
</ul>
</li>
<!--
<li class="CMSListMenuLI"><a href="trackshipment/login.html" class="CMSListMenuLink">Your Account</a>
<ul class="CMSListMenuUL">
<li class="CMSListMenuLI"><a href="trackshipment/login.html" class="CMSListMenuLink">Change of Billing Address</a></li>
<li class="CMSListMenuLI"><a href="trackshipment/login.html" class="CMSListMenuLink">Update Your Contact Details</a></li>
<li class="CMSListMenuLI"><a href="trackshipment/login.html" class="CMSListMenuLink">Add a New Pick Up Location</a></li>
<li class="CMSListMenuLI"><a href="trackshipment/signup.html" class="CMSListMenuLink">Register for fast online courier pick up</a></li>
<li class="CMSListMenuLI"><a href="#" class="CMSListMenuLink">Forgotten your Password</a></li>
<li class="CMSListMenuLI"><a href="trackshipment/login.html" class="CMSListMenuLink">Invoice payments</a></li>
</ul>
</li>
-->
<li class="CMSListMenuLI header" style="position: absolute; left: 492px; top: 196px;"><a href="#" class="CMSListMenuLink">About Us</a>
<ul class="CMSListMenuUL">
<li class="newwindowlink header"><a href="#" class="CMSListMenuLink">Variable Fuel Rate</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">News</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Sustainability</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Courier Contractor Careers</a></li>
<li class="newwindowlink header"><a href="#" class="CMSListMenuLink">Careers</a></li>
</ul>
</li>
<li class="CMSListMenuLI header" style="position: absolute; left: 0px; top: 332px;"><a href="#" class="CMSListMenuLink">FAQ</a>
<ul class="CMSListMenuUL">
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Track &amp; Trace FAQ</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Card To Call FAQ</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Send It Now FAQ</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Freight Forward FAQ</a></li>
</ul>
</li>
<li class="CMSListMenuLI header" style="position: absolute; left: 492px; top: 355px;"><a href="#" class="CMSListMenuLink">Tools</a>
<ul class="CMSListMenuUL">
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Address Services</a></li>
<li class="CMSListMenuLI header"><a href="#" class="CMSListMenuLink">Brochures &amp; Downloads</a></li>
</ul>
</li>
</ul>


<div class="col">
<h4>Contact Us</h4>
<ul>
<li class="contact-sp"><strong>Customer Care Team</strong>
7am-6pm Monday to Friday <br>
8am -12 midday Saturday and Sunday.<br>
&nbsp;</li>
<li class="contact-sp"><strong>Calling from overseas</strong><br>
contact our Customer Care team </li>
<li><a href="#"><strong>Branch Locator</strong></a> <a href="#"><u>here</u></a><br>
<br>
&nbsp;</li>
<li class="contact-sp"><strong>Email Us a General Enquiry</strong><br>
If you have some general feedback or questions, you can do so <a href="#">here</a>.</li>
<li class="contact-sp"><strong>Contact Sales to Set Up an Account</strong><br>
Fill in the form <a href="#">here</a>, if you would like to contact a Business Manager or receive a personalised courier proposal.</li>
</ul>
</div>            
</div>
</div>
</div>
</div>
<footer>
<nav id="footerwrapper">


<footer role="contentinfo">
<div>

<ul class="navCMSListMenuUL" id="cmsNavFooter">
<li class="navCMSListMenuLI"><a href="#" class="navCMSListMenuLink">Site Map</a></li>
<li class="newwindowlink"><a href="#" class="navCMSListMenuLink">Terms</a></li>
</ul>

<ul class="date">
<li class="copyright">© 2020 | Quicklogistics24 Delivery Company | All Rights Reserved</li>
</ul>

<ul class="footer-logos">
<li class="logos contractlogistics"><a href="#" id="lnkContractlogistics" target="_blank">Contract Logistics</a></li>
<li id="ctl00_ctl00_plcMain_ucFooterNav_paceLink" class="logos pace"><a href="#" id="lnkPace" target="_blank">Pace</a></li>
<li id="ctl00_ctl00_plcMain_ucFooterNav_cpLink" class="logos courierpost"><a href="#" id="lnkCourierPosr" class="current">CourierPost</a></li>
</ul>
</div>
</footer>
</nav>
</footer>


</form>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cd4993d2846b90c57adc1b5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
<!-- Mirrored from logisticsxp.com/dpd/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Apr 2019 17:53:47 GMT -->

<!-- Mirrored from orliclogisticintl.com/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 19:19:43 GMT -->

<!-- Mirrored from iccexpress.com/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 04:45:42 GMT -->
</html>