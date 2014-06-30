<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>FC SportsWear</title>
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="ieonly.css" />
<![endif]-->
<!--[if !IE]><!-->
	<link type="text/css" rel="stylesheet" href="master.css">
 <!--<![endif]-->
 
 <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 <script src="jquery.validate.min.js"></script>
 <script src="additional-methods.min.js"></script>
 <script src="contactus.js"></script>
 <!--
 <script type="text/javascript">
    function validateForm(){
            if(contact.email.value=="")
            {
                //flagstaff = 0;
                alert("Please enter an email!");
                contact.email.focus();
                return false;
            }
            if(contact.fname.value=="")
            {
                //flagstaff = 0;
                alert("Please enter a valid first name!");
                contact.fname.focus();
                return false;
            }
            if(contact.sname.value=="")
            {
                //flagstaff = 0;
                alert("Please enter a valid surname!");
                contact.fname.focus();
                return false;
            }
            
            if(contact.cnum.value=="")
            {
                //flagstaff = 0;
                alert("Please enter a contact number!");
                contact.cnum.focus();
                return false;
            }
            
            if(contact.textdetail.value=="")
            {
                //flagstaff = 0;
                alert("Please enter a text!");
                contact.textdetail.focus();
                return false;
            }
            }
            </script> -->
 
</head>
<body>
  <div id="outermostdiv">
  <?php include 'header.html'; ?>
  <?php include 'navigator.html'; ?>
  <div id="contactus">
     
      
          <form action="controller.php" id="something" method="post">
              <fieldset>
               <legend><strong>Contact Us</strong></legend>
              <table>
                  <input type="hidden" name="page" value="sendemail">
              <tr><th align="left">Your Email: </th><td><input type="text" id="email" name="email" placeholder="Please enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter your email'"></td></tr>
              <tr><th align="left">First Name: </th><td><input type="text" id="fname" name="fname" placeholder="Please enter first name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter first name'"></td></tr>            
              <tr><th align="left">Surname: </th><td><input type="text" id="sname" name="sname" placeholder="Please enter surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter surname'"></tr>
              <tr><th align="left">Contact Number: </th><td><input type="text" id="cnum" name="cnum" placeholder="Please enter contact number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter contact number'"></tr>
              <tr><th align="left">Subject: </th><td><input type="text" id="subject" name="subject" placeholder="Please enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter subject'"></tr>
              <tr><th align="left">Message: </th><td><textarea rows="4" cols="16" wrap="hard" id="textdetail" name="textdetail" placeholder="Please enter your text here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter your text here'"></textarea></td></tr>
              <tr><th></th><td><input type="submit" id="submit" value="Submit"><input type="reset" id="reset" value="Reset"></td></tr>
          </table>
      </fieldset>
          </form>
      
      <span style="color:red">Note: Filling all fields and clicking submit will actually send an email to the web developer.</span>
  </div>
      <br>
      <br>
      <br>
      <br>
      
      
  <?php include 'footer.php'; ?>
  </div>
  
</body>
</html>