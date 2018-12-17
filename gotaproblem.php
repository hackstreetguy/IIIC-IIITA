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
                <form id="project-contact-form" action="got-problem.php" method="post" enctype="multipart/form-data"/>
				
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
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                            Upload your detailed requirements in PDF format: <input type="file" name="document" placeholder="Upload your reqirements" class="form-control" id="reqirements">
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
	<?php require("footer.php"); ?>
