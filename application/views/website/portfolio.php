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
									Portfolio Details
								</li>
							</ul>
							<h1 class="wow fadeInUp" data-wow-delay=".5s">
								<?php echo isset($portfolio->project_name)?$portfolio->project_name:''; ?></h1>
							<p class="wow fadeInUp" data-wow-delay=".7s">
								Simplify the way you work with our powerful task management platform From organizing
								daily to-dos to managing complex projects.
							</p>
						</div>
					</div>
				</div>
			</div>


			<!-- Project Section Start -->
			<section class="project-details-section fix section-padding">
				<div class="container">
					<div class="project-details-wrapper">
						<div class="project-details-top-item">
							<div class="project-details-info-item">
								<div class="content">
									<span>Services:</span>
									<p><?php echo isset($portfolio->service)?$portfolio->service:''; ?></p>
								</div>
								<div class="content">
									<span>Platform:</span>
									<p><?php echo isset($portfolio->platform)?$portfolio->platform:''; ?></p>
								</div>
								<div class="content style-2">
									<span>Date:</span>
									<p><?php echo isset($portfolio->project_date)?$portfolio->project_date:''; ?></p>
								</div>
							</div>
							<div class="project-details-image">
								<img data-speed=".8" src="<?= base_url('uploads/'.$portfolio->project_img); ?>" alt="<?= htmlspecialchars($portfolio->project_name); ?>">
							</div>
							<div class="row g-4">
								<div class="col-lg-7">
									<div class="left-text">
										<h2>
											<?php echo isset($portfolio->section_heading)?$portfolio->section_heading:''; ?>
										</h2>
									</div>
								</div>
								<div class="col-lg-5">
									<div class="details-content">
										<p>
											<?php echo isset($portfolio->overview_description)?$portfolio->overview_description:''; ?>
										</p>
										<ul class="details-list">
											<?php
												$bullet_points = json_decode($portfolio->bullet_point, true);

												if (!empty($bullet_points)):
													foreach ($bullet_points as $point):
												?>
											<li class="border-bottom-0 pb-0">
												<i class="fa-solid fa-check"></i>
												<?= htmlspecialchars($point); ?>
											</li>
											<?php
													endforeach;
												endif;
												?>
										</ul>
									</div>
								</div>
							</div>
							<div class="details-image-item">
								<div class="row g-4">
									<div class="col-lg-6">
										<div class="thumb">
											<img data-speed=".8" src="assets/img/inner-page/project-details-2.jpg"
												alt="img">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="thumb">
											<img data-speed=".8" src="assets/img/inner-page/project-details-3.jpg"
												alt="img">
										</div>
									</div>
								</div>
							</div>
							<div class="left-text">
								<h2>
									Turning concept into <br> visual stories
								</h2>
							</div>
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="details-box">
										<span class="number">01</span>
										<h3>Research insights</h3>
										<p>
											We begin by understanding user needs, behaviors, and pain points through.
										</p>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="details-box">
										<span class="number">02</span>
										<h3>SassS Mapping</h3>
										<p>
											We begin by understanding user needs, behaviors, and pain points through.
										</p>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="details-box">
										<span class="number">03</span>
										<h3>Interface Design</h3>
										<p>
											We begin by understanding user needs, behaviors, and pain points through.
										</p>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="details-box">
										<span class="number">04</span>
										<h3>Design testing</h3>
										<p>
											We begin by understanding user needs, behaviors, and pain points through.
										</p>
									</div>
								</div>
							</div>
							<div class="details-bottom-content">
								<div class="left-text">
									<h2>Final Result</h2>
								</div>
								<div class="right-content">
									<p>
										<?php echo isset($portfolio->result_heading)?$portfolio->result_heading:''; ?>
									</p>
									<p class="mb-0">
										<?php echo isset($portfolio->result_description)?$portfolio->result_description:''; ?>
									</p>
								</div>
							</div>
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

	<?php $this->load->view('website/components/script'); ?>
</body>

</html>
