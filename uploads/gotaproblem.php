<?php
    require 'vendor/autoload.php';
    $message = "";

    if (isset($_REQUEST['submitBtn'])) {
        $name = $_REQUEST['name'];
        $idea = $_REQUEST['idea'];
        $email = $_REQUEST['email'];
        $current_status = $_REQUEST['current-status'];
        $skills = $_REQUEST['skills'];
        $requirements = $_REQUEST['requirements'];
        $bplan = $_REQUEST['bplan'];

        if ($name != "" && $idea != "" && $email != "" && $current_status != "" && $skills != "" && $requirements != "") {
            $connection = new mysqli("127.0.0.1", "iiicdba", "iiicdb@2018", "iiicdb");

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $statement = $connection->prepare("INSERT INTO Help (name, idea, email, current_status, skills, requirements, document) VALUES (?, ?, ?, ?, ?, ?, ?)");

            $file_hash = hash_file("sha256", $_FILES["document"]['tmp_name']);
            $hashed_filename = $file_hash;
            $upload_file = $upload_dir . ($file_hash);
            echo move_uploaded_file($_FILES["document"]['tmp_name'], $upload_file);
            if (1) {
                $statement->bind_param("sssssss", $name, $email, $idea, $current_status, $skills, $requirements, $bplan);

                if ($statement->execute()) {
                    $message = "Submitted Successfully";
                } else {
                    $message = "There was some error";
                }

                $mail = new PHPMailer(true);                             
                try {
                    //Server settings
                    
                    $mail->isSMTP();                                    // Set mailer to use SMTP
                    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'iiic@iiita.ac.in';                 // SMTP username
                    $mail->Password = 'iiic_2018';                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 465;                                    // TCP port to connect to

                    //Recipients
                    $mail->Subject = 'Got problem email';
                    $mail->setFrom("iiic@iiita.ac.in", $name);
                    $mail->addAddress("iiic@iiita.ac.in");  
                    // $mail->AddReplyTo($email, $name);   // Add a recipient    // Add a recipient
                    //$mail->addAddress('ellen@example.com');               // Name is optional
                    //$mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                    //Attachments
                    $files_to_attach = $_FILES["document"]['tmp_name']; 
                    // $mail->AddAttachment($files_to_attach, $file_name); 
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                       // Optional name

                    //Content
                    $mail->isHTML(false);                                  // Set email format to HTML
                    
                    $mes = 'Name: '.$name.'  Email: '.$email.'  Idea: '.$idea.'  Current Status: '.$current_status.'  Skills: '.$skills.'   Requirements: '.$requirements;
                    $mail->Body = $mes;
                    
                    
                    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    //echo 'Message has been sent';
                    $message = "Application Submitted Successfully";
                }
                catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            } else {
                $message = "There was some error. Please try again";
            }
            echo $message;
            $statement->close();
            $connection->close();
        }
    }

?>  
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IIIC &mdash; INFO COMMUNICATION INCUBATION CENTER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- 
    Default Theme Style 
    You can change the style.css (default color purple) to one of these styles
    
    1. pink.css
    2. blue.css
    3. turquoise.css
    4. orange.css
    5. lightblue.css
    6. brown.css
    7. green.css

    -->
    <link rel="stylesheet" href="css/style2.css">



    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
 crossorigin="anonymous"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<style>
/* .nav-brand {
    height: 20px;
    width: 20px;
} */
.main-logo {
    height: 100px;
}
.fh5co-block {
    height: 500px;
}
.intro {
    margin-bottom: -250px;
}
.why-button {
    color : white;
    text-decoration: none;
}
.why-button:hover {
    text-decoration: none;
}
.events {
    z-index: 2;
}
.dropdown {
    display: none;
    position: relative;
}

</style>
    </head>
    <body>
    <header role="banner" id="fh5co-header">
            <div class="container">
                <!-- <div class="row"> -->
                <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
<div class="nav-brand"><a class="navbar-brand" href="index.php"><img src="images/iiic2.png" 
         width="40" height="40" alt=""></a></div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" id="home" style="color:black" data-nav-section="home"><span>Home</span></a></li>
                    <li><a href="#" id="why" style="color:black"><span>Why IIIC?<span></a></li>
                    <li><a href="#" id="events"style="color:black"><span>Events</span></a></li>
                    <li><a href="#" id="apply"style="color:black"style="color:black"><span>Apply</span></a></li>
                    <li><a href="#" id="gap"style="color:black" data-nav-section="intro"><span>Got A Problem</span></a></li>                    
                    <li><a href="#" id="pdc"style="color:black" data-nav-section="intro"><span>Product Dev</span></a></li>
                
                    <li class="drop"><a href="#"style="color:black"style="color:black">Team</a>
                        <ul class="dropdown">
                            <li><a href="#" id="fcteam"style="color:black"style="color:black"style="color:black"style="color:black">Official Team</a></li>
                            <li><a href="#" id="stdteam"style="color:black"style="color:black"style="color:black">Student Team</a></li>
                        </ul>
                    </li>
                    <li><a href="#" id="asc" style="color:black"><span>Associations</span></a></li>
                    <li><a href="#" id="contact" data-nav-section="contact"style="color:black"><span>Contact</span></a></li>
                  </ul>
                </div>
                </nav>
              <!-- </div> -->
          </div>
    </header>


	<section class="fh5co-services">
		<div class="container subheading">
			<div class="row">
				<div class="col-md-12 section-heading text-left">
					<!-- <h2 class=" left-border to-animate">Why IIIC?</h2> --><br><br>
				</div>
			</div>
			</div>
    <div class="container">
        <div class="row justify-content-center mt100">
            <div class="col-md-12 col-12">
                <div class="contact_info">
                    <h2 class="col-md-12 col-12" style="text-align: center">
                        Got A Problem
                    </h2>
                    <p class="col-md-12 col-12" style="text-align: center">
                            Have a fantastic idea but do not know the next steps? Have the zeal to change the world but cannot sharpen up the idea? Have wonderful skills but lack teammates?

                           <p class="col-md-12 col-12" style="text-align: center"> While applying for incubation is a combursome process, IIIC helps young minds to frame an idea, improve upon the idea, network with other young minds to create cross-skill teams, and to finally develop the business plan.
                            </p>
                            <p class="col-md-12 col-12" style="text-align: center">If you have the slightest of inclination, we are happy to help. Please give us as much details as possible, and we will get back to you for help.
                                </p>
                    </p>

                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="contact_form">
                <form id="project-contact-form" action="gotaproblem.php" method="post" enctype="multipart/form-data"/>
				
                    <div class="form-group col-md-12" style="padding-top: 1.5em">
                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Idea" name="idea" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input style="height: 10em" class="form-control" type="text" name="current-status" placeholder="Current Status"/>
                    </div>
                    <div class="form-group col-md-12">
                        <input class="form-control" type="text" name="skills" placeholder="Skills"/>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="requirements" placeholder="What are your requirements?">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="bplan" id="drive-link" placeholder="Drive link for the business plan">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-rounded btn-primary" type="submit" name="submitBtn">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </div>
</section>


	
	<br><br><br>
<footer id="footer" role="contentinfo">
    <a href="#" class="gotop js-gotop">
        <i class="icon-arrow-up2"></i>
    </a>
    <div class="container">
        <div class="footer" style=" margin-top : 20px;">
            <div class="col-md-12 text-center">
                <p>&copy; INFO COMMUNICATION INCUBATION CENTER. All Rights Reserved.
                    <br>Created by Web Team IIIC </p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="social social-circle">
                    <!-- <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-youtube"></i></a></li> -->
                    <li>
                        <a href="https://www.facebook.com/pg/iiicallahabad/about/?ref=page_internal" target="_blank">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/iiicallahabad/" target="_blank">
                            <i class="icon-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    
    <!-- End demo purposes only -->

    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Counter -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="js/google_map.js"></script>

    <script>

$(".drop")
  .mouseleave(function() {
  $(".dropdown").hide(300);     
});
$(".drop")
  .mouseover(function() {
  $(".dropdown").show(300);
});
</script>
    <script>
        document.getElementById("events").onclick = function () {
    location.href = "events.php";
};
document.getElementById("why").onclick = function () {
    location.href = "why.php";
};
document.getElementById("apply").onclick = function () {
    location.href = "apply.php";
};
document.getElementById("home").onclick = function () {
    location.href = "index.php";
};
document.getElementById("gap").onclick = function () {
    location.href = "gotaproblem.php";
};
document.getElementById("contact").onclick = function () {
    location.href = "index.php#cntct";
};
document.getElementById("pdc").onclick = function () {
    location.href = "pdc.php";
};
document.getElementById("fcteam").onclick = function () {
location.href = "officialTeam.php";
};
document.getElementById("stdteam").onclick = function () {
location.href = "coreTeam.php";
};
document.getElementById("asc").onclick = function () {
location.href = "associates.php";
};


</script>
    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>


    <!-- Main JS (Do not remove) -->
    <script src="js/main2.js"></script>

    </body>
</html>


