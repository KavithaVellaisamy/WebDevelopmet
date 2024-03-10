<!DOCTYPE html>
<html>
<head>
  <title>Home - Fulla Juice</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" >
  <meta name="description" content="Fulla Juice is a family business based in Northern Ireland.Our product is a fruit drink containing concentrated orange fruit with water sourced from the mountains of mourne.">
  <meta name="keywords" content="Fulla Juice,Juice,orange fruit drink,juice C vitamin,juice and spice,juice shops in Northern Ireland,juice and shakes">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet" />
  <link href="css/media.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php

 if(isset($_REQUEST['submit']))
{	
$to="customerservice@fullajuice.com";
$subject ='Reg : Contact Form - Fulla Juice';
$mail_body.='<b>Hi,&nbsp;&nbsp;</b>'.'<br/><br/>';
$mail_body.='<b>You have new contact request.. Please find the below details...&nbsp;&nbsp;</b>'.'<br/><br/>';
$mail_body.='<b>First Name:&nbsp;&nbsp;</b>'.$_REQUEST['title'].'<br/><br/>';
$mail_body.='<b>Surname:&nbsp;&nbsp;</b>'.$_REQUEST['surname'].'<br/><br/>';
$mail_body.='<b>Email:&nbsp;&nbsp;</b>'.$_REQUEST['email'].'<br/><br/>';
$mail_body.='<b>Message:&nbsp;&nbsp;</b>'.$_REQUEST['suggest'].'<br/><br/>';
$from=$_REQUEST['email']; 
$headers = 'From: '.$from.'\r\n'.'X-Mailer: PHP/' . phpversion();
$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
if(mail($to, $subject, $mail_body, $headers))
{ 
?>
<script>window.location.href="index.php?action=send#apply";</script>
<?
}
else
{
?>
<script>window.location="index.php?action=fail#apply";</script>
<?	
}
}
?>
<div class="outer_border">
	<div class="border_logo">
	<div class="wrapper">
	 <div class="logo"><img src="images/logo.png" alt="Logo"/></div>
	 </div>
	 </div>
	<!--About us-->
	
		<div class="aboutus">
		<div class="wrapper">
			<div class="abt_sect">
		   <div class="about_left">
		     <img src="images/tin.png" alt="ABOUT"/>
		   </div>
			<div class="about_right"><h1>About Us</h1>
			<p>
			Fulla Juice is a family business based in Northern Ireland. Our product is a fruit drink containing concentrated orange fruit with water sourced from the mountains of mourne. The idea of creating a juice originated from two friends seeking a new business venture.</p>
			<p>Fulla Juice was established in 2019. This is the year it began selling in shops in Northern Ireland and shortly after that, expansion began in southern Ireland.</p>
			<p>The next step for Fulla Juice is growth. We need to focus on growing our business nationally and hopefully create a worldwide customer base. Then let you all have a taste of this wonderful product.
			</p>
		    </div>
			<div class="clear"></div>	
			</div>
		</div>
		</div>
		<!--footer-->
		<div class="footer_sect">
		  <div class="wrapper">
		  <div class="footer_whole_sect">
			<div class="address_sect">
				<div class="location"><h1>Address</h1>
						<img src="images/location.png" alt="location">
						<p>Unit 4, Poets Glen, BT359EZ</p>
				</div>
				<div class="clear"></div>
				<div class="contactno"><h1>Contact Number</h1>
						<img src="images/phone.png" alt="contactno">
						<p>07788586230</p>
				</div>
				<div class="clear"></div>
				<div class="add_email"><h1>Email</h1>
						<img src="images/mail.png" alt="email">
						<a href="mailto:customerservice@fullajuice.com"><p>customerservice@fullajuice.com</p></a>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="enquiry_sect"><h1>Enquiry</h1>
			
				<? 
				if($_REQUEST['action']=="send")
				{ ?>
				<div style=" font-size: 14px;
				color: #71dc71;
				height: 17px; font-family: 'Sansita', sans-serif;
				text-align: center;">Your details has been sent successfully!</div>
				<? }
				if($_REQUEST['action']=="fail")
				{ ?>
				<div style="font-size: 14px;
				color: #71dc71;
				height: 17px;font-family: 'Sansita', sans-serif;
				text-align: center;">Form has not sent</div>
				<? } ?>	  	  
				<div class="contact_form">
				<form id="apply" name="apply" method="post" action="">
				
				<div class="side"><input type="text" name="title" class="sidename" id="title" placeholder="First Name" style=""><br><span class="name_err"></span></div>
				<div class="sides"><input type="text" name="surname" class="surname" id="surname" placeholder="Surname" style=""><br><span class="sur_err"></span></div>
				<div class="clear"></div>
				<div class="sidemail"> <input type="text" name="email" class="sideemail" id="email" placeholder="Email Address" style=""><br><span class="email_err"></span></div>
				
				<div class="side_suggest"><label>Your Message </label><textarea name="suggest" cols="" rows="" class="sidemessage" style="" id="suggest"></textarea><span class="address_err"></span></div>
				<div class="sidesubmit"><input type="submit" name="submit" id="submit" value="Submit" class="sidesubmitbutton"></div>
				
				</form>
				</div>

			</div>
			<div class="clear"></div>
		 </div>
		</div>
	</div>
</div>		
			<!--copyright-->
			<div class="copyright">
			<div class="wrapper">
			<p>Copyright © 2019 Fulla Juice.com. All rights reserved</p>
			<div class="powerd"><p>Powered by- <a href="http://www.zerosofttech.com/" class="highlight" target="_new"> <i>Zerosoft Technologies</i></a></p></div>
			</div>
			</div>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(document).ready(function() 
{
$('#submit').click(function () 
	{
		var title  = $("#title").val();
		var surname  = $("#surname").val();
		var email  = $("#email").val();
		var suggest = $("#suggest").val();
		if(title =="" && surname=="" && email =="" && suggest =="")
		{
			$(".name_err").text("First Name is required !");
			$(".sur_err").text("Surname is required !");
			$(".email_err").text("Email Address is required !");
			$(".address_err").text("Your Message is required !");
			return false;
		}
		else
		{
		if(title =="") { $(".name_err").text("First Name is required !"); return false; } 
		
		else { $(".name_err").text(""); }
        
		if(surname =="") { $(".sur_err").text("Surname is required !"); return false; } 
		
		else { $(".sur_err").text(""); }
		
		if(email =="")
		{
			$(".email_err").text("Email Address is required !"); return false;
		} 
		else if(email !="")
		{	
			var emailcontent=document.getElementById('email').value;
	        var emailid=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	    if (emailcontent.length > 0)
	   {
	    if (emailid.test(emailcontent))
	   {
	// return true;
	   }
	  else
	  {  $(".email_err").text("Invalid email address !"); return false;
	 
	   }
	   }
	  
		$(".email_err").text("");
		}
		
		
		if(suggest =="")
		{
			$(".address_err").text("Your Message is required !"); return false;
		} 
		else 
		{
			$(".address_err").text("");
		}
		}

	});	
	
	
}); 
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141051002-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141051002-1');
</script>

</body>
</html>