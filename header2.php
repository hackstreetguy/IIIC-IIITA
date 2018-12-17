
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Elate &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	IIIC WEBSITE 

	CREATED BY : ASWANTH K
	EMAIL : IIT2016105@IIITA.AC.IN
	GITHUB HANDLE : aswanthkoleri

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
	<link rel="stylesheet" href="css/styleWhy.css">



	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
		<!-- <style>
		.go-back {
			color: white;
			
		}
		.go-back:hover {
			text-decoration: none;
		}
		.gobutton {
			margin-top :5px;
		}
		.main-logo {
			height: 40px;
		}
		.fh5co-services {
			margin-top :0px;
		}
		.header {
			margin-top : -130px;
		}
		.subheading {
			margin-top : 40px;
		}
		.section-heading {
			margin-bottom : -30px;
		}
		@media screen and (max-width: 768px) {
			.header {
			margin-top : -50px;
		}
		}
		.gobutton {
			margin-top : 13px;
		}
		.go-button{
			color: white;
		}
		.go-button:hover {
			text-decoration: none;
		}
		</style> -->
	</head>



	<!--<?php
    require 'vendor/autoload.php';
    $message = "";

    if (isset($_REQUEST['recruiterBtn'])) {
        $name = $_REQUEST['contact-name'];
        $phone_no = $_REQUEST['contact-number'];
        $email = $_REQUEST['contact-email'];
        $summary = $_REQUEST['summary'];
        $current_position = $_REQUEST['current-position'];
        $current_nature = $_REQUEST['current-nature'];
        $proposal_for = $_REQUEST['proposal-for'];
        $tide_scheme = $_REQUEST['tide-scheme'];
        
        $upload_dir = '/data/iiic/uploads/';
        // $upload_dir = 'uploads/';
        $file_name = $_FILES["business-plan"]['name'];

        if (empty($_FILES) && empty($_POST)) {
            $message = 'The uploaded zip was too large. You must upload a file smaller than ' . ini_get("upload_max_filesize");
        } else if ($name != "" && $phone_no != "" && $email != "" && $summary != "" && $current_position != "" && $current_nature != "" && $file_name != "") {
            $connection = new mysqli("127.0.0.1", "iiicdba", "iiicdb@2018", "iiicdb");
            // $connection = new mysqli("127.0.0.1", "root", "root", "iiic");

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $statement = $connection->prepare("INSERT INTO Recruiter (name, email, phone_no, summary, 
                                    current_position, current_nature, proposal_for, tide_scheme, idea_file, file_hash) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $file_hash = hash_file("sha256", $_FILES["business-plan"]['tmp_name']);
            $hashed_filename = $file_hash;
            $upload_file = $upload_dir . basename($hashed_filename);
            // move_uploaded_file($_FILES["business-plan"]['tmp_name'], $upload_file);
            if (move_uploaded_file($_FILES["business-plan"]['tmp_name'], $upload_file)) {
                $statement->bind_param("ssssssssss", $name, $email, $phone_no, $summary, $current_position, $current_nature, $proposal_for, $tide_scheme,
                                    $file_name, $hashed_filename);

                if ($statement->execute()) {
                    $message = "Submitted your current_nature Successfully";
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
                    $mail->Password = 'ecell@iiic18';                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 465;                                    // TCP port to connect to

                    //Recipients
                    $mail->Subject = 'Contact Us query email';
                    $mail->setFrom("iiic@iiita.ac.in", $name);
			        $mail->addAddress("iiic@iiita.ac.in");  
			        // $mail->AddReplyTo($email, $name);   // Add a recipient    // Add a recipient
                    //$mail->addAddress('ellen@example.com');               // Name is optional
                    //$mail->addReplyTo('info@example.com', 'Information');
                    //$mail->addCC('cc@example.com');
                    //$mail->addBCC('bcc@example.com');

                    //Attachments
                    $files_to_attach = $_FILES["business-plan"]['tmp_name']; 
                    // $mail->AddAttachment($files_to_attach, $file_name); 
                    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                       // Optional name

                    //Content
                    $mail->isHTML(false);                                  // Set email format to HTML
                    $mail->Subject = 'Application for Incubation';
                    $mes = 'Name: '.$name.'  Email: '.$email.'  Phone: '.$phone_no.'  Executive Summary: '.$summary.'  Brief of current position: '.$current_position.'  Brief of current nature of the company: '.$current_nature.'  Proposal for: '.$proposal_for.'  Applying for tide scheme: '.$tide_scheme;
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
                       
            $statement->close();
            $connection->close();
        }
    }
?>-->

<style>
	.parallax-mirror {
    opacity: 1;
    filter: blur(0px);
}
.inner_cover .inner_cover_content h3 {
    text-transform: capitalize;
    color: #000;
    font-size: 84px;
    font-weight: 500;
    text-align: center;
}
</style>


	<body>




			<header role="banner" id="fh5co-header">
					<div class="container">
						<!-- <div class="row"> -->
						<nav class="navbar navbar-default">
						<div class="navbar-header">
							<!-- Mobile Toggle Menu Button -->
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						 <a class="navbar-brand" href="index.html"><div class="nav-brand">IIIC</div></a> 
						</div>
						<div id="navbar" class="navbar-collapse collapse">
						  <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" id="home" data-nav-section="home"><span>Home</span></a></li>
					<li><a href="#" id="why"><span>Why IIIC?<span></a></li>
					<li><a href="#" id="events"><span>Events</span></a></li>
		            <li><a href="#" id="apply"><span>Apply</span></a></li>
					<li><a href="#" id="gap" data-nav-section="intro"><span>Got A Problem</span></a></li>		            
					<li><a href="#" id="pdc" data-nav-section="intro"><span>Product Dev</span></a></li>		            
					<li><a href="#" id="contact" data-nav-section="contact"><span>Contact</span></a></li>
		          </ul>
						</div>
						</nav>
					  <!-- </div> -->
				  </div>
			</header>

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
    location.href = "gotaproblem.html";
};
document.getElementById("contact").onclick = function () {
    location.href = "index.php";
};
document.getElementById("pdc").onclick = function () {
    location.href = "pdc.html";
};
	</script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main2.js"></script>

	</body>
</html>