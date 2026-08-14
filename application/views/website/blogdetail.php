<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('website/components/head'); ?>
<!-- Primary Meta Tags -->
<title>Technology Blog | Web Development, AI & Digital Marketing</title>
<meta name="title" content="Technology Blog | Web Development, AI & Digital Marketing" />
<meta name="description" content="Read the latest articles on web development, software, AI, cybersecurity, cloud computing, SEO, and digital marketing." />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://nexmovesolutions.in/" />
<meta property="og:title" content="Technology Blog | Web Development, AI & Digital Marketing" />
<meta property="og:description" content="Read the latest articles on web development, software, AI, cybersecurity, cloud computing, SEO, and digital marketing." />


<!-- X (Twitter) -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://nexmovesolutions.in/" />
<meta property="twitter:title" content="Technology Blog | Web Development, AI & Digital Marketing" />
<meta property="twitter:description" content="Read the latest articles on web development, software, AI, cybersecurity, cloud computing, SEO, and digital marketing." />


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
									Blog Details
								</li>
							</ul>
							<h1 class="wow fadeInUp" data-wow-delay=".5s"><?php echo isset($blog->hero_tittle)?$blog->hero_tittle:''; ?></h1>
							<p class="wow fadeInUp" data-wow-delay=".7s">
								<?php echo isset($blog->hero_description)?$blog->hero_description:''; ?>
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- News Section Start -->
			<section class="gt-what-can-section fix section-padding fix">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-9 col-md-10">
							<div class="news-details-post">
							<div class="details-image">
									<img src="<?= base_url('uploads/'.$blog->featured_img); ?>" alt="<?= htmlspecialchars($blog->blog_title); ?>">
								</div>
								<div class="news-details-content">
									<h2>
										<?php echo isset($blog->blog_title)?$blog->blog_title:''; ?>
									</h2>
									<div>
										<?php echo isset($blog->blog_description)?$blog->blog_description:''; ?>
									</div>
									<div>
										<?= $blog->blog_content; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<!-- Footer Section Start -->
			<footer class="footer-section fix hero-ptb image-distortion p-relative z-index-1"
				data-background="<?= base_url('assets/website/img/home-2/footer-bg.jpg'); ?>">

				<section class="contact-us-section section-padding fix">
					<div class="container">

						<div class="contact-us-wrapper">

							<div class="row g-4">

								<!-- LEFT: CONTACT -->
								<div class="col-lg-6">
									<div class="contact-us-content">

										<div class="footer-widget-items contact-widget">

											<div class="widget-head">
												<span class="widget-title  text-white">Contact</span>
											</div>

											<ul class="contact-list">

												<li>
													<img src="<?php echo base_url()?>assets/website/img/home-1/call.png"
														alt="Phone">

													<a class="text-white"
														href="tel:<?= !empty($general->phone_no) ? htmlspecialchars($general->phone_no) : ''; ?>">
														<?= !empty($general->phone_no) ? htmlspecialchars($general->phone_no) : ''; ?>
													</a>
												</li>

												<li>
													<img src="<?php echo base_url()?>assets/website/img/home-1/call.png"
														alt="WhatsApp">

													<a class="text-white"
														href="tel:<?= !empty($general->whatsApp_number) ? htmlspecialchars($general->whatsApp_number) : ''; ?>">
														<?= !empty($general->whatsApp_number) ? htmlspecialchars($general->whatsApp_number) : ''; ?>
													</a>
												</li>

												<li>
													<img src="<?php echo base_url()?>assets/website/img/home-1/email.png"
														alt="Email">

													<a class="text-white"
														href="mailto:<?= !empty($general->email_address) ? htmlspecialchars($general->email_address) : ''; ?>">
														<?= !empty($general->email_address) ? htmlspecialchars($general->email_address) : ''; ?>
													</a>
												</li>

											</ul>

										</div>

									</div>
								</div>


								<!-- RIGHT: FORM -->
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
				<!-- Footer Section Start -->
				<?php $this->load->view('website/components/footer'); ?>

		</div>
	</div>

	<?php $this->load->view('website/components/script'); ?>
</body>

</html>
