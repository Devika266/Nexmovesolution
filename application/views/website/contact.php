<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('website/components/head'); ?>
	<!-- Primary Meta Tags -->
	<title>Contact NexMove Solutions | IT Company in Navi Mumbai</title>
	<meta name="title" content="Contact NexMove Solutions | IT Company in Navi Mumbai" />
	<meta name="description"
		content="Contact NexMove Solutions for website development, software, mobile apps, cloud solutions, AI, and digital marketing services." />

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://nexmovesolutions.in/" />
	<meta property="og:title" content="Contact NexMove Solutions | IT Company in Navi Mumbai" />
	<meta property="og:description"
		content="Contact NexMove Solutions for website development, software, mobile apps, cloud solutions, AI, and digital marketing services." />


	<!-- X (Twitter) -->
	<meta property="twitter:card" content="summary_large_image" />
	<meta property="twitter:url" content="https://nexmovesolutions.in/" />
	<meta property="twitter:title" content="Contact NexMove Solutions | IT Company in Navi Mumbai" />
	<meta property="twitter:description"
		content="Contact NexMove Solutions for website development, software, mobile apps, cloud solutions, AI, and digital marketing services." />


	<!-- Meta Tags Generated with https://metatags.io -->
</head>

<body>

	<?php $this->load->view('website/components/navbar'); ?>


	<div id="smooth-wrapper">
		<div id="smooth-content">

			<!-- Breadcrumb Section Start -->
			<div class="breadcrumb-wrapper bg-cover"
				style="background-image: url('<?php echo base_url()?>assets/website/img/inner-page/breadcrumb.png');">
				<div class="container">
					<div class="page-heading">
						<div class="breadcrumb-sub-title">
							<ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
								<li>
									<a href="<?php echo base_url()?>website/home">
										<i class="fa-solid fa-house"></i> Home
									</a>
								</li>
								<li>
									<i class="fa-solid fa-chevron-right"></i>
								</li>
								<li>
									Contact
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>

			<!-- Contact-Us Section Start -->
			<section class="contact-us-section section-padding fix">
				<div class="container">
					<div class="contact-us-wrapper">
						<div class="row g-4">
							<div class="section-title style-2 mb-0">
								<div class="tz-sub-tilte tz-sub-anim tx-subTitle">
									<span class="sub-title">Quick Response Guaranteed</span>
								</div>
								<h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
									Have Questions? <br> Contact Us.
								</h2>
							</div>
							<div class="col-lg-6">
								<div class="contact-us-content">

									<div class="contact-us-item pl-10">
										<div class="contact-content">
											<div class="icon">
												<img src="<?php echo base_url()?>assets/website/img/inner-page/icon/04.svg"
													alt="img">
											</div>
											<div class="cont">
												<span>Need help?</span>
												<h3>
													<img src="<?php echo base_url()?>assets/website/img/home-1/call.png"
														alt="img">
													<a
														href="tel:<?= !empty($settings->phone_no) ? htmlspecialchars($settings->phone_no) : ''; ?>">
														<?= !empty($settings->phone_no) ? htmlspecialchars($settings->phone_no) : ''; ?>
													</a>
												</h3>
												<h3>
													<img src="<?php echo base_url()?>assets/website/img/home-1/call.png"
														alt="img">
													<a
														href="tel:<?= !empty($settings->whatsApp_number) ? htmlspecialchars($settings->whatsApp_number):''; ?>">
														<?= !empty($settings->whatsApp_number) ? htmlspecialchars($settings->whatsApp_number):''; ?>
													</a><br>
												</h3>
												<h3><a
														href="mailto:<?= !empty($settings->email_address) ? htmlspecialchars($settings->email_address) : ''; ?>">
														<?= !empty($settings->email_address) ? htmlspecialchars($settings->email_address) : ''; ?>
													</a></h3>
											</div>
										</div>
										<div class="contact-content ">
											<div class="icon">
												<img src="<?php echo base_url()?>assets/website/img/inner-page/icon/05.svg"
													alt="img">
											</div>
											<div class="cont">
												<span>Our location?</span>
												<h3>
													<?php echo isset($settings->address)?$settings->address:''; ?>
												</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="contact-box">
									<h3>Need Support? Contact Us</h3>
									<form action="<?= base_url('contact/send_mail'); ?>" method="post">

										<div class="row">

											<div class="col-md-6 mb-3">
												<input type="text" name="name" class="form-control"
													placeholder="Full Name *" required>
											</div>

											<div class="col-md-6 mb-3">
												<input type="text" name="company_name" class="form-control"
													placeholder="Company Name">
											</div>

											<div class="col-md-6 mb-3">
												<input type="tel" name="phone" class="form-control"
													placeholder="Phone Number *" required>
											</div>

											<div class="col-md-6 mb-3">
												<input type="email" name="email" class="form-control"
													placeholder="Email Address *" required>
											</div>

											<div class="col-md-6 mb-3">
												<label class="form-label">Select Services</label>

												<select id="serviceshomepage" name="services[]" class="form-select"
													multiple>
													<?php foreach($services as $service): ?>
													<option value="<?= base_url('service/'.$service->id); ?>">
														<?= $service->service_name; ?>
													</option>
													<?php endforeach; ?>

												</select>
											</div>

											<div class="col-md-6 mb-3">
												<label class="form-label">Select Products</label>

												<select id="productshomepage" name="products[]" class="form-select"
													multiple>
													<option value="Nex Smart HR">Nex Smart HR</option>
													<option value="CRM">CRM</option>
													<option value="Nex DigiCard">Nex DigiCard</option>
													<option value="NextWapp">NextWapp</option>
												</select>
											</div>

											<div class="col-12 mb-3">
												<textarea name="message" class="form-control" rows="5"
													placeholder="Tell us about your project"></textarea>
											</div>

											<div class="col-12 text-center">
												<button type="submit" class="btn btn-primary px-5 py-3">
													Submit Enquiry
												</button>
											</div>

										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Google Map Section Start -->
			<section class="map-section pb-0">
				<div class="container">
					<div class="section-title style-2 text-center mb-5">
						<div class="tz-sub-tilte tz-sub-anim tx-subTitle">
							<span class="sub-title">Visit Our Office</span>
						</div>
						<h2 class="tx-title sec_title">
							Find Us on Google Maps
						</h2>
					</div>
				</div>

				<div class="map-wrapper">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120642.38213602208!2d72.92320533098504!3d19.104389924738545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2635e0acea5d367d%3A0x357739c073406e47!2sNexmove%20Solutions!5e0!3m2!1sen!2sin!4v1785738247434!5m2!1sen!2sin"
						width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
			</section>

			<!-- Footer Section Start -->
			<footer class="footer-section fix hero-ptb image-distortion p-relative z-index-1"
				data-background="assets/website/img/home-2/footer-bg.jpg">
				<!-- Footer Section Start -->
				<footer class="footer-section fix hero-ptb image-distortion p-relative z-index-1"
					data-background="assets/website/img/home-2/footer-bg.jpg">
					<!-- Footer Section Start -->
					<?php $this->load->view('website/components/footer'); ?>
		</div>
	</div>
	</div>


	<?php $this->load->view('website/components/script'); ?>
</body>

</html>
