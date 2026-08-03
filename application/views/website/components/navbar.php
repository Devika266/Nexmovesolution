<?php
    $services= $this->Admin_model->service();
?>
<!-- CTA Button -->
<button class="cta-btn" onclick="openPopup()">Get Free Consultation</button>

<!-- Popup -->
<div class="popup-overlay" id="popupOverlay">
	<div class="popup-form">

		<button class="close-btn" onclick="closePopup()" aria-label="Close">
			&times;
		</button>

		<div class="popup-head">
			<h2>Let's Discuss</h2>
			<p>Tell us about your project and we'll get back to you shortly.</p>
		</div>

		<form action="<?= base_url('contact/send_mail'); ?>" method="post">

			<div class="form-row">
				<div class="form-group">
					<input type="text" name="name" placeholder="Name *" required>
				</div>

				<div class="form-group">
					<input type="text" name="company_name" placeholder="Company Name *" required>
				</div>
			</div>

			<div class="form-row">
				<div class="form-group">
					<input type="tel" name="phone" placeholder="Phone Number *" required>
				</div>

				<div class="form-group">
					<input type="email" name="email" placeholder="Email Address *" required>
				</div>
			</div>

			<label class="form-title">Select Requirement</label>

			<div class="checkbox-group">

				<label>
					<input type="checkbox" id="serviceCheck">
					Services
				</label>

				<label>
					<input type="checkbox" id="productCheck">
					Products
				</label>

			</div>

			<!-- Services -->

			<div id="servicesBox" style="display:none;">

				<label class="box-label">Select Services</label>

				<select id="servicesSelect" name="services[]" class="form-select" multiple>

					<?php foreach($services as $service): ?>
													<option value="<?= base_url('service/'.$service->id); ?>">
														<?= $service->service_name; ?>
													</option>
													<?php endforeach; ?>

				</select>

			</div>

			<!-- Products -->

			<div id="productsBox" style="display:none;">

				<label class="box-label">Select Products</label>

				<select id="productsSelect" name="products[]" multiple>

					<option value="Nex Smart HR">Nex Smart HR</option>
					<option value="CRM">CRM</option>
					<option value="Nex DigiCard">Nex DigiCard</option>
					<option value="NextWapp">NextWapp</option>

				</select>

			</div>

			<div class="popup-footer">
				<button type="submit" class="submit-btn">
					Submit Enquiry
				</button>
			</div>

		</form>

	</div>
</div>
<div class="page-wrapper">

	<!-- Preloader Start -->
	<div id="preloader">
		<div class="hexus-loader-inner">
			<div class="hexus-loader">
				<span class="hexus-loader-item"></span>
				<span class="hexus-loader-item"></span>
				<span class="hexus-loader-item"></span>
				<span class="hexus-loader-item"></span>
				<span class="hexus-loader-item"></span>
				<span class="hexus-loader-item"></span>
				<span class="hexus-loader-item"></span>
				<span class="hexus-loader-item"></span>
			</div>
		</div>
	</div>

	<!-- Back-To-Top Start -->
	<button id="back-top" class="back-to-top">
		<i class="fa-regular fa-arrow-up"></i>
	</button>

	<!-- GT MouseCursor Start -->
	<div class="mouseCursor cursor-outer"></div>
	<div class="mouseCursor cursor-inner"></div>

	<!-- Header Section Start -->
	<header class="header-section header-1 header-2" id="sticky-header">
		<div class="header-main">

			<!-- ===================== DESKTOP NAVBAR ===================== -->
<nav class="navbar p-0 navbar-expand-lg d-none d-lg-flex">
				<a class="navbar-brand" href="<?php echo base_url()?>">
					<img src="<?php echo base_url()?>assets/website/img/logo/main-logo.png" alt="logo"
						style="width:200px">
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent" >
					<ul class="navbar-nav mx-auto mb-lg-0">
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url()?>">
								Home </i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url()?>website/about">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Services <i class="fas fa-chevron-down"></i>
							</a>
							<ul class="sub-menu list-unstyled">
								<?php foreach($services as $ser):?>
								<li><a
										href="<?php echo base_url();?>service/<?php echo $ser->id;?>"><?php echo $ser->service_name;?></a>
								</li>
								<?php endforeach;?>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								Products<i class="fas fa-chevron-down"></i>
							</a>
							<ul class="sub-menu list-unstyled">
								<li><a href="javascript:void(0);" onclick="openPopup();">CRM</a></li>
								<li><a href="javascript:void(0);" onclick="openPopup();">HRMS</a></li>
								<li><a href="javascript:void(0);" onclick="openPopup();">NexDigiCard</a></li>
						<li><a href="javascript:void(0);" onclick="openPopup();">NextWap</a></li>
					</ul>
					</li>

					<li class=" nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>portfoliomain">Portfolio</a>
					</li>

					<li class=" nav-item">
						<a class="nav-link" href="<?php echo base_url()?>website/blog">
							Blog</i>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>website/contact">Contact</a>
					</li>
					</ul>
					<div class="menu-right-info">
						<a class="theme-btn-main style-2 theme-2" href="javascript:void(0);" onclick="openPopup();">
							<span class="theme-btn-arrow-left">
								<i class="fa-solid fa-arrow-up-right"></i>
							</span>

							<span class="theme-btn">Get Started</span>

							<span class="theme-btn-arrow-right">
								<i class="fa-solid fa-arrow-up-right"></i>
							</span>
						</a>
<div class="sidebar__toggle offcanvas-btn d-lg-none my-auto">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</nav>
		</div>
<div class="mobile-menu-area d-block d-lg-none">
			<div class="container">
				<div class="mobile-topbar">
					<div class="d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="<?php echo base_url()?>website/home">
								<img src="<?php echo base_url()?>assets/website/img/logo/black-logo.png" alt="logo"
									style="width:150px">
							</a>
						</div>
						<div class="menu-search d-flex align-items-center gap-4">
							<div class="bars">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile-menu-overlay"></div>
			<div class="mobile-menu-main">
				<div class="logo">
					<div class="logo">
						<!-- <a href="<?php echo base_url();?>website/home">
							<img src="<?php echo base_url()?>assets/website/img/logo/main-logo.png" alt="logo"
								style="width:100px;">
						</a> -->
					</div>
				</div>
				<div class="close-mobile-menu">
					<i class="fas fa-times"></i>
				</div>
				<div class="menu-body">
					<div class="menu-list">
						<ul class="list-unstyled">

							<li>
								<a href="<?php echo base_url(); ?>">Home</a>
							</li>

							<li>
								<a href="<?php echo base_url(); ?>website/about">About Us</a>
							</li>

							<li class="sub-mobile-menu">
								<a href="javascript:void(0)">
									Services <i class="fas fa-chevron-down float-end"></i>
								</a>
								<ul class="list-unstyled">
									<?php foreach($services as $ser): ?>
									<li>
										<a href="<?php echo base_url(); ?>service/<?php echo $ser->id; ?>">
											<?php echo $ser->service_name; ?>
										</a>
									</li>
									<?php endforeach; ?>
								</ul>
							</li>

							<li class="sub-mobile-menu">
								<a href="javascript:void(0)">
									Products <i class="fas fa-chevron-down float-end"></i>
								</a>
								<ul class="list-unstyled">
									<li><a href="javascript:void(0);" onclick="openPopup();">CRM</a></li>
									<li><a href="javascript:void(0);" onclick="openPopup();">HRMS</a></li>
									<li><a href="javascript:void(0);" onclick="openPopup();">NexDigiCard</a></li>
							<li><a href="javascript:void(0);" onclick="openPopup();">NextWap</a></li>
						</ul>
						</li>

						<li>
							<a href="<?php echo base_url(); ?>portfoliomain">Portfolio</a>
						</li>

						<li>
							<a href="<?php echo base_url(); ?>website/blog">Blog</a>
						</li>

						<li>
							<a href="<?php echo base_url(); ?>website/contact">Contact</a>
						</li>

						</ul>
					</div>
					<div class="menu-right-info mt-4">
						<a class="theme-btn-main style-2 theme-2" href="javascript:void(0);" onclick="openPopup();">
							<span class="theme-btn-arrow-left">
								<i class="fa-solid fa-arrow-up-right"></i>
							</span>

							<span class="theme-btn">Get Started</span>

							<span class="theme-btn-arrow-right">
								<i class="fa-solid fa-arrow-up-right"></i>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Search Start -->
	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<div class="search-popup__content">
			<form role="search" method="get" class="search-popup__form" action="#">
				<input type="text" id="search" name="search" placeholder="Search Here...">
				<button type="submit" aria-label="search submit" class="search-btn">
					<span><i class="fa-regular fa-magnifying-glass"></i></span>
				</button>
			</form>
		</div>
	</div>
