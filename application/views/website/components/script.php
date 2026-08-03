 <!--<< All JS Plugins >>-->
        <script src="<?php echo base_url();?>assets/website/js/jquery-3.7.1.min.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/bootstrap.bundle.min.js"></script>
        <!--<< Gsap Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/gsap.min.js"></script>
        <!--<< ScrollTrigger Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/ScrollTrigger.min.js"></script>
        <!--<< ScrollSmoother Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/ScrollSmoother.min.js"></script>
        <!--<< ScrollToPlugin Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/ScrollToPlugin.min.js"></script>
        <!--<< SplitText Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/SplitText.min.js"></script>
        <!--<< TextPlugin Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/TextPlugin.js"></script>
        <!--<< Chroma Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/chroma.min.js"></script>
        <!--<< Three Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/three.js"></script>
        <!--<< Ripple Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/ripple-2.js"></script>
        <!--<< Webgl Min Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/webgl.js"></script>
        <!--<< nice-selec Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/swiper-bundle.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="<?php echo base_url();?>assets/website/js/wow.min.js"></script>
        <!--<< Main.js >>-->
        <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="<?php echo base_url();?>assets/website/js/main.js"></script>
        <script type="module" src="<?php echo base_url();?>assets/website/js/distortion-img.js"></script>
        <script>
		function openPopup(type = '') {
		    
		    console.log(11111);

			document.getElementById('popupOverlay').style.display = 'flex';

			document.getElementById('serviceCheck').checked = false;
			document.getElementById('productCheck').checked = false;

			document.getElementById('servicesBox').style.display = 'none';
			document.getElementById('productsBox').style.display = 'none';

			if (type === 'service') {
				document.getElementById('serviceCheck').checked = true;
				document.getElementById('servicesBox').style.display = 'block';
			}

			if (type === 'product') {
				document.getElementById('productCheck').checked = true;
				document.getElementById('productsBox').style.display = 'block';
			}
		}

		function closePopup() {
			document.getElementById('popupOverlay').style.display = 'none';
		}

		document.getElementById('serviceCheck').addEventListener('change', function () {
			document.getElementById('servicesBox').style.display =
				this.checked ? 'block' : 'none';
		});

		document.getElementById('productCheck').addEventListener('change', function () {
			document.getElementById('productsBox').style.display =
				this.checked ? 'block' : 'none';
		});

		window.onclick = function (e) {
			if (e.target == document.getElementById('popupOverlay')) {
				closePopup();
			}
		};
		const serviceChoice = new Choices('#servicesSelect', {
			removeItemButton: true,
			searchEnabled: true,
			placeholder: true,
			placeholderValue: 'Select Services'
		});

		const productChoice = new Choices('#productsSelect', {
			removeItemButton: true,
			searchEnabled: true,
			placeholder: true,
			placeholderValue: 'Select Products'
		});

		const serviceChoice1 = new Choices('#serviceshomepage', {
			removeItemButton: true,
			searchEnabled: true,
			placeholder: true,
			placeholderValue: 'Select Services'
		});

		const productChoice1 = new Choices('#productshomepage', {
			removeItemButton: true,
			searchEnabled: true,
			placeholder: true,
			placeholderValue: 'Select Products'
		});

	</script>
        