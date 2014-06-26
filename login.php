
<?php $bodyclass = 'orange'; include 'php-templates/header.php'; ?>

<!-- MAIN PAGE BODY, CONTENT -->
<div class="main">
	<div class="gray">
		<div class="container">
			<div class="row">
				<section class="col-sm-12">
					<article>
						<h1>Login</h1>
					</article>
				</section>
			</div>
			<div class="row">
				<section class="col-sm-12">
					<article class="userform">
						<form>
							<fieldset>
								<div class="row">
									<section class="col-sm-6">
										<ul class="nomobilemargin">
											<li>
												<label for="name">Username:</label>
												<span class="inputwrapper"><input type="text" name="name" /></span>
											</li>
										</ul>
									</section>
									<section class="col-sm-6">
										<ul>
											<li>
												<label for="email">Password:</label>
												<span class="inputwrapper"><input type="email" name="email" /></span>
											</li>
											<li>
												<label for="checkbox">Stay Logged In?</label><input type="checkbox" />
												<input type="submit" value="Login" class="submitbutton" />
											</li>
	
											<li>
												<a href="#" class="forgotpassword">Forgot Password?</a>
											</li>
										</ul>
									</section>
								</div>

							</fieldset>
						</form>
					</article>
				</section>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<section class="col-md-6 nogutter">
					<article class="graybox graybox-small">
						
						<h3>Get Insights...</h3>
						<ul>
							<li>Build Studies</li>
							<li>Screen Recruits</li>
							<li>Watch Results</li>
						</ul>
						<a href="#">Researcher Sign Up</a>
					</article>
				</section>
				<section class="col-md-6 nogutter">
					<article class="graybox graybox-small">
						
						<h3>Answer Questions...</h3>
						<ul>
							<li>Apply to Studies</li>
							<li>Give Opinions</li>
							<li>Earn $$$</li>
						</ul>
						<a href="#">User Sign Up</a>
					</article>
				</section>
			</div>
		</div>
	</div>
</div>

<?php include 'php-templates/footer.php'; ?>