<?php require("header.php"); ?>

	<section class="fh5co-services" style="background-image: -webkit-linear-gradient(top left, #9bc0c0 0%, #74d2a6 100%);">
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
                    <h2 class="col-md-12 col-12" style="text-align: center" size="20px">
                        Product Development Cell
                    </h2>
                    <p class="col-md-12 col-12">
                        Product Development Cell is a body which provides aid in development of a product required by any start-up, company or an individual for that instance. If you are currently running a business or making your mind to setup one, and have any specific requirements, our team of highly talented faculty and students can develop customized modules, software or the complete product for a reasonable price or equity.

The product development is done with great expertise under the supervision of knowledgeable professors of our prestigious institute : IIIT-Allahabad.
                    </p>

                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="contact_form">
                <form id="project-contact-form" action="product-develop.php" method="post" enctype="multipart/form-data"/>
                    <div class="form-group col-md-12" style="padding-top: 1.5em">
                        <input name="name" type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input name="number" type="text" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="require" class="form-control" cols="4" rows="2" placeholder="Summary of Requirements"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="plan" class="form-control" cols="4" rows="2" placeholder="A Brief of the current nature of the company"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <input name="pay_type" type="text" class="form-control" placeholder="Whether you prefer to pay by equity (preferred), by cash, or by mix?">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="dev_team" type="text" class="form-control" placeholder="Will your provide your own development team with our mentorship, or you would like us to do the development?">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="recruit" type="text" class="form-control" placeholder="In case you would like our team to mentor, will you recruit the students/employees yourself, or would you like us to do so?">
                    </div>
                    <div class="form-group col-md-6">
                            <input name="file" type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                            Upload your detailed requirements in PDF format: <input type="file" name="reqirements" placeholder="Upload your reqirements" class="form-control" id="reqirements">
                        </div>
                    <div class="form-group text-right">
                        <button class="btn btn-rounded btn-primary" name="submitBtn" type="submit">Submit</button>
                    </div>
                </form>
                </div>
            </div>        </div>

    </div>
</section>


	
	<br><br><br>
	<footer id="footer" role="contentinfo">
			<a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
			<div class="container">
				<div class="footer" style=" margin-top : 20px;">
					<div class="col-md-12 text-center">
							<p>&copy; INFO COMMUNICATION INCUBATION CENTER. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">IIIC</a> </p>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
<?php require("footer.php"); ?>
