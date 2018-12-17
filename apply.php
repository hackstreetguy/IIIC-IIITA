<?php require("header.php"); ?>

	<section class="fh5co-services" style="background-image: -webkit-linear-gradient(top left, #a9bcbc 0%, #a1fdd1 100%);">
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
                            Get Incubated
                    </h2>
                    <p class="col-md-12 col-12" style="text-align: center">
                            IIIC is happy to announce that the current round of recruitments are open.<br>
        The application deadline for applying against the current round of recruitments is 12th March, 2018.<br>
        Screening of applications will take place on 13th March, 2018 and final selections at IIIT Allahabad will be done on 16-18th March, 2018.
        
                    </p>

                </div>
            </div>
            <div class="col-md-12 col-12">
                <div class="contact_form">
                <form id="project-contact-form" action="apply.php" method="post" enctype="multipart/form-data"/>
                    <div class="form-group col-md-12" style="padding-top: 1.5em">
                        <input type="text" class="form-control" placeholder="Name" name="contact-name" required>
                    </div>
                    <div class="form-group col-md-12" style="padding-top: 1.5em">
                        <input type="text" class="form-control" placeholder="Phone Number" name="contact-number" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" class="form-control" placeholder="E-mail" name="contact-email" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Executive Summary" name="summary" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input style="height: 10em" class="form-control" type="text" name="current-position" placeholder="A brief of your current position"/>
                    </div>
                    <div class="form-group col-md-12">
                        <input class="form-control" type="text" name="current-nature" placeholder="A brief of the current nature of the company seeking incubation"/>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control"  name="proposal-for" placeholder="Is the proposal for B-plan Writing competition, seeking incubation at IIIC or both?">
                    </div>
                        <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="tide-scheme" placeholder="Whether you would like to apply for seed funding under the TIDE scheme?">
                            </div>
                    <div class="form-group col-md-6">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                            Upload your business plan in pdf format: <input type="file" name="business-plan" placeholder="Upload your business plan in pdf format" class="form-control" id="reqirements">
                        </div>
                    <div class="form-group text-right">
                        <button class="btn btn-rounded btn-primary" name="recruiterBtn" type="submit">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>


	
	<br><br><br>
	<?php require("footer.php"); ?>