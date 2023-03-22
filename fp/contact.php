<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
 <header>
     <h1>Contact us</h1>
     <img src="images/logo.jpg" alt="logo" class="logo"/>
     <nav class="topnav" id="myTopnav">
       <a href="template.html">Home</a>
       <a href="aboutus.html">AboutUS</a>
       <a href="service.html">Service</a>
       <a href="gallery.html">Gallery</a>
       <a href="news.html">NEWS</a>
       <a href="faq.html">FAQ</a>
       <a href="booknow.html">Book Now</a>
       <a href="contact.php" class="active">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> 
     </nav>
     </header>
     
   <div class="wrapper">
     
       
       <h2 class="subheader">Contact US</h2>
       
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "Akari.Yoshino@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Yorika Terayama"; //place your client's name here
        $website = "coco_brows";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

    <footer>
        <p><small>&copy; 2023 by 
            <a href="contact.php">Akari Yoshino</a>, All Rights Reserved ~ 
            <a id="html-checker" href="#">Check HTML</a> ~ 
            <a id="css-checker" href="#">Check CSS</a></small>
       </p>
     
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>