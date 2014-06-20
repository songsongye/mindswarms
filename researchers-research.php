<?php $bodyclass = 'blue'; include 'php-templates/header.php'; ?>

<!-- MAIN PAGE BODY, CONTENT -->
<div class="main">
	<div class="gray">
		<div class="container">
			<div class="row">
				<section class="col-sm-12">
					<article>
						<h1>Start Your Research</h1>
					</article>
				</section>
			</div>
			<div class="row">
				<section class="col-sm-12">
					<article>
						<h2>Tell us how we can support your next qualitative research project.</h2>
					</article>
				</section>
			</div>
			<div class="row">
				<section class="col-sm-12">
					<article class="userform">
						<form>
							<fieldset>

								<ul>
									<li>
										<label for="name">Your Name:</label>
										<span class="inputwrapper"><input type="text" name="name" /></span>
									</li>
									<li>
										<label for="company">Your Company:</label>
										<span class="inputwrapper"><input type="text" name="company" /></span>
									</li>
									<li>
										<label for="email">Email:</label>
										<span class="inputwrapper"><input type="email" name="email" /></span>
									</li>
									<li>
										<label for="number">Phone Number:</label>
										<span class="inputwrapper"><input type="number" name="number" /></span>
									</li>
									<li>
										<span class="considermore">Consider giving more info below to jumpstart your research! Or...</span><input type="submit" value="Submit now!" class="submitbutton" />
									</li>
								</ul>

							</fieldset>
							<fieldset>

								<ul>
									<li>
										<label for="objective">Research Study Objective:</label>
									</li>
									<li>
										<textarea name="objective" placeholder="This research will be used to..."></textarea>
									</li>
									<li>
										<label for="industry">Your Industry:</label>
										<select name="industry">
											<option value="Choose One">Choose One</option>
										</select>
									</li>
									<li>
										<label for="occasion">Occasion:</label>
										<select name="occasion">
											<option value="Choose One">Choose One</option>
										</select>
									</li>
									<li>
										<label for="launch">Launch:</label>
										<input type="date" name="launch" />
									</li>
									<li>
										<label for="finish">Finish:</label>
										<input type="date" name="finish" />
									</li>
									<li>
										<label for="additional">Additional Survey Details</label>
									</li>
									<li>
										<textarea name="additional" placeholder="Your additioanl comments, number of participants, recruitment specs, stimulus materials, ect."></textarea>
									</li>
									<li>
										<input type="submit" value="Submit now!" class="submitbutton" />
									</li>
								</ul>

							</fieldset>
						</form>
					</article>
				</section>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<section class="col-md-4 nogutter">
					<article class="graybox graybox-large">
						
						<h3>Testimonial</h3>
						<p>"Testimonial"</p>
						<a href="#">Learn More</a>
					</article>
				</section>
				<section class="col-md-4 nogutter">
					<article class="graybox graybox-large">
						
						<h3>Testimonial</h3>
						<p>"Testimonial"</p>
						<a href="#">Learn More</a>
					</article>
				</section>
				<section class="col-md-4 nogutter">
					<article class="graybox graybox-large">
						
						<h3>Testimonial</h3>
						<p>"Testimonial"</p>
						<a href="#">Learn More</a>
					</article>
				</section>
			</div>
			<div class="row">
				<section class="col-sm-4 col-sm-offset-8 nogutter">
					<a href="login.php" alt="" class="button">
						Contact Us
					</a>
				</section>
			</div>
		</div>
	</div>
</div>

<?php include 'php-templates/footer.php'; ?>