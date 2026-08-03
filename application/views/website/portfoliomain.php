<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('website/components/head'); ?>
<!-- Primary Meta Tags -->
<title>Our Portfolio | Web, Software & Digital Marketing Projects</title>
<meta name="title" content="Our Portfolio | Web, Software & Digital Marketing Projects" />
<meta name="description" content="Explore successful website development, software, mobile app, branding, and digital marketing projects delivered by NexMove Solutions." />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://nexmovesolutions.in/" />
<meta property="og:title" content="Our Portfolio | Web, Software & Digital Marketing Projects" />
<meta property="og:description" content="Explore successful website development, software, mobile app, branding, and digital marketing projects delivered by NexMove Solutions." />


<!-- X (Twitter) -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://nexmovesolutions.in/" />
<meta property="twitter:title" content="Our Portfolio | Web, Software & Digital Marketing Projects" />
<meta property="twitter:description" content="Explore successful website development, software, mobile app, branding, and digital marketing projects delivered by NexMove Solutions." />


<!-- Meta Tags Generated with https://metatags.io -->
</head>
<body>

	<?php $this->load->view('website/components/navbar'); ?>


	<div id="smooth-wrapper">
		<div id="smooth-content">

			<!-- Breadcrumb Section Start -->
			<div class="breadcrumb-wrapper bg-cover"
				style="background-image: url('assets/website/img/inner-page/breadcrumb.png');">
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
									Portfolio
								</li>
							</ul>
							<h1 class="wow fadeInUp" data-wow-delay=".5s">Insights, Ideas & Technology Trends</h1>
							<p class="wow fadeInUp" data-wow-delay=".7s">
								Stay informed with the latest trends in software development, AI, cloud computing,
								cybersecurity, digital marketing, and business technology. Explore expert insights,
								practical guides, and innovative solutions to help your business thrive in the digital
								age.
						</div>
					</div>
				</div>
			</div>

			<!-- Team Section Start -->
			<section class="news-section fix section-padding">
				<div class="container">

					<div class="row g-4">
						<div class="row">
							<?php if (!empty($portfolios)): ?>
							<?php foreach ($portfolios as $portfolio): ?>
							<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
								<div class="news-box-items">
									<div class="thumb">
										<img src="<?= base_url('uploads/' . $portfolio->project_img); ?>"
											alt="<?= htmlspecialchars($portfolio->project_name); ?>">
										<img src="<?= base_url('uploads/' . $portfolio->project_img); ?>"
											alt="<?= htmlspecialchars($portfolio->project_name); ?>">
									</div>
									<div class="content">
										<h3 class="title">
											<a href="<?= base_url('portfolio/' . $portfolio->id); ?>">
												<?= htmlspecialchars($portfolio->project_name); ?>
											</a>
										</h3>
										<p>
											<a href="<?= base_url('portfolio/' . $portfolio->id); ?>">
												<?= htmlspecialchars($portfolio->section_heading); ?>
											</a>
										</p>
										<a class="theme-btn-main style-2" href="<?= base_url('portfolio/' . $portfolio->id); ?>">
													<span class="theme-btn-arrow-left"> <i
															class="fa-solid fa-arrow-up-right"></i> </span>
													<span class="theme-btn">Read More</span>
													<span class="theme-btn-arrow-right"> <i
															class="fa-solid fa-arrow-up-right"></i> </span>
										</a>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
							<?php else: ?>

							<div class="col-12 text-center">
								<h4>No Portfolio found.</h4>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer Section Start -->
			<footer class="footer-section fix hero-ptb image-distortion p-relative z-index-1"
				data-background="assets/img/home-2/footer-bg.jpg">

				<section class="cta-form-section py-5">
					<div class="container">

						<div class="row justify-content-center">
							<div class="col-lg-8">

								<div class="cta-form-card">

									<h2 class="mb-2">Let's Discuss Your Requirements</h2>
									<p class="mb-4">
										Fill out the form below and our team will get back to you shortly.
									</p>

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
				</section>
				<!-- Footer Section Start -->
				<?php $this->load->view('website/components/footer'); ?>
		</div>
	</div>
	</div>


	<?php $this->load->view('website/components/script'); ?>
</body>

</html>
