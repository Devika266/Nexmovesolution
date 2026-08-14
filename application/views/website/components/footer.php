 <!-- Footer Section Start -->
 <?php
    $settings= $this->Admin_model->general();
?>
 <?php
    $services= $this->Admin_model->service();
?>
 <div class="footer-area">
 	<div class="container">
 		<div class="footer-widget-wrapper">
 			<div class="row justify-content-between">
 				<div class="col-xl-5 col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".2s">
 					<div class="footer-widget-items">
 						<div class="widget-head">
 							<a href="<?= base_url(); ?>" class="footer-logo">
 								<img src="<?php echo base_url()?>assets/website/img/logo/main-logo.png" alt="img"
 									style="width:200px">
 							</a>
 						</div>
 						<div class="footer-content">
 							<div class="social-icon d-flex align-items-center">
 								<a href="https://www.facebook.com/NexmoveSolutions/" target="_blank" rel="noopener noreferrer"><i
 										class="fab fa-facebook-f"></i></a>
 								<a href="https://www.instagram.com/nexmove_solutions/" target="_blank" rel="noopener noreferrer"><i
 										class="fab fa-instagram"></i></a>
 								<a href="https://in.linkedin.com/company/nexmove-solutions" target="_blank" rel="noopener noreferrer"><i
 										class="fab fa-linkedin"></i></a>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay=".4s">
 					<div class="footer-widget-items">
 						<div class="widget-head">
 							<span class="widget-title">Useful Links</span>
 						</div>

 						<ul class="gt-list-area">

 							<li>
 								<a href="<?= base_url(); ?>">Home</a>
 							</li>

 							<li>
 								<a href="<?= base_url('website/about'); ?>">About Us</a>
 							</li>
 							<li>
							<a href="<?= base_url();?>portfoliomain">Portfolio</a>
						</li>

						<li>
							<a href="<?= base_url();?>website/blog">Blog</a>
						</li>

						<li>
							<a href="<?= base_url();?>website/contact">Contact</a>
						</li>

 						</ul>

 					</div>
 				</div>
 				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay=".5s">
 					<div class="footer-widget-items">

 						<div class="widget-head">
 							<span class="widget-title">Products</span>
 						</div>

 						<ul class="gt-list-area">

 							<li><a href="javascript:void(0);" onclick="openPopup();">Nexmoves CRM</a></li>
 							<li><a href="javascript:void(0);" onclick="openPopup();">Nexsmarthr</a></li>
 							<li><a href="javascript:void(0);" onclick="openPopup();">Nexdigicard</a></li>
 							<li><a href="javascript:void(0);" onclick="openPopup();">NextWapp</a></li>

 						</ul>

 					</div>
 				</div>
 				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay=".5s">
 					<div class="footer-widget-items">

 						<div class="widget-head">
 							<span class="widget-title">Service</span>
 						</div>

 						<ul class="sub-menu list-unstyled">
    <?php foreach($services as $ser): ?>
        <li>
            <a href="<?= base_url('services/'.$ser->slug); ?>">
                <?= htmlspecialchars($ser->service_name); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

 					</div>
 				</div>
 				<div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">

 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="footer-bottom">
 		<div class="container">
 			<div class="footer-bottom-wrapper">
 				<p>
 					© 2026 <b>Nexmoves Solution</b> All rights reserved.
 				</p>
 				<ul class="footer-list">
 					<li>
 						<a href="<?= base_url('website/privacy'); ?>" target="_blank" rel="noopener noreferrer">
 							Privacy Policy
 						</a>
 					</li>
 					<li>।</li>

 					<li>
 						<a href="<?= base_url('website/refund'); ?>" target="_blank" rel="noopener noreferrer">
 							Refund &amp; Cancellation Policy
 						</a>
 					</li>
 					<li>।</li>

 					<li>
 						<a href="<?= base_url('website/cookies'); ?>" target="_blank" rel="noopener noreferrer">
 							Cookies Policy
 						</a>
 					</li>
 					<li>।</li>

 					<li>
 						<a href="<?= base_url('website/term'); ?>" target="_blank" rel="noopener noreferrer">
 							Terms &amp; Conditions
 						</a>
 					</li>
 				</ul>
 			</div>
 		</div>
 	</div>
 </div>
 </footer>
