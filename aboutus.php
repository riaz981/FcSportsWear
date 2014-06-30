<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>About Us</title>
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="ieonly.css" />
        <link href="stylesie.css" type="text/css" rel="stylesheet">
<![endif]-->
<!--[if !IE]><!-->
	<link type="text/css" rel="stylesheet" href="master.css">
        <link href="styles.css" type="text/css" rel="stylesheet">
 <!--<![endif]-->


 

 <link href="css/smoothness/jquery-ui-1.8.23.custom.css" type="text/css" rel="stylesheet"></link>
	<!-- Normal style sheet used for layout and general formatting. -->
 
    <!-- HTML5 shim/shiv for HTML5 section element backward compatibility. -->
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <!-- jQuery library reference. Latest is always referenced from jQuery's CDN. -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <!-- jQuery UI JavaScript library reference. -->
    <script type="text/javascript" src="js/jquery-ui-1.8.23.custom.min.js"></script>
    <!-- jQuery call to the accordion() method. -->
    
 <script>$(document).ready(function() {
			$("#accordion").accordion(
				{ 
					event: "mouseover",
					collapsible: true,
                                        active: false
				});
	  
 });
</script>
</head>
<body>
<div id="outermostdiv">
      <?php include 'header.html'; ?>
        <?php include 'navigator.html'; ?>

      <div id="formview1">
          <br>
          <div id="main">
          <div id="accordion">
              <h3><a href="#">About Me</a></h3>
			<div class="accord">
				<p>My name is Riaz and I am interested in all things related to
                                    web development. I have completed my Graduate Diploma in IT 
                                    recently from UTS and got distinction in most of my subjects. 
                                    I am well versed with several programming languages eg. Java, 
                                    Php and Javascript to name a few. My passion for web development 
                                    led me to develop this website. I have also created the same site 
                                    in Java.
                                </p>
			</div>
			<h3><a href="#">About this site</a></h3>
			<div class="accord">
                            <p>
                            This was a site created out of interest and passion to learn
                            more. I used both server side and latest front end development
                            technologies to create this site. This site reflects my passion to
                            create websites and learn new languages. I have a clone website as well
                            that uses Java to create the same server side programming rather than PHP.
                            Please feel free to contact me by using the contact us page. 
                            </p>
			</div>
			<h3><a href="#">Languages used in the website</a></h3>
			<div class="accord">
                            <p>
                                For server side programming:
                                <ul>
                                    <li>PHP was used keeping in mind the MVC pattern</li>
                                    <li>MySql was used for database</li>
                                </ul>
                        
                                For Front End Development:
                                <ul>
                                    <li>HTML/HTML5</li>
                                    <li>CSS/CSS3</li>
                                    <li>Javascript/jQuery</li>
                                    <li>jQuery UI widgets and plugins as well as pure jQuery coding</li>
                                    <li>For form validation javascript/jQuery for front end and PHP for back end was used</li>
                                </ul>
                            </p>
                                
			</div>
          </div>
         
          </div>
      </div>
    <br>
      <?php include 'footer.php'; ?>
  </div>

</body>
</html>