<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nexmove Service Management - Desktop — Exported from UXMagic Copilot">
	<title>Nexmove Service Management - Desktop</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Poppins:wght@100..900&amp;family=Fira+Code:wght@300..700&amp;family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;display=swap"
		rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
	<style type="text/tailwindcss">
		@import "tailwindcss";
      @theme inline {
        --color-background: var(--background);
        --color-foreground: var(--foreground);
        --color-primary: var(--primary);
        --color-primary-foreground: var(--primary-foreground);
        --color-secondary: var(--secondary);
        --color-secondary-foreground: var(--secondary-foreground);
        --color-tertiary: var(--tertiary);
        --color-muted: var(--muted);
        --color-muted-foreground: var(--muted-foreground);
        --color-accent: var(--accent);
        --color-destructive: var(--destructive);
        --color-card: var(--card);
        --color-card-foreground: var(--card-foreground);
        --color-border: var(--border);
        --color-input: var(--input);
        --color-ring: var(--ring);
        --radius-sm: calc(var(--radius) - 4px);
        --radius-md: calc(var(--radius) - 2px);
        --radius-lg: var(--radius);
        --font-family-sans: var(--font-sans);
        --font-family-heading: var(--font-heading);
        --font-family-mono: var(--font-mono);
      }
      :root {
        --background: #f8fafc;
        --foreground: #0f172a;
        --primary: #4f46e5;
        --primary-foreground: #ffffff;
        --secondary: #e0e7ff;
        --secondary-foreground: #312e81;
        --tertiary: #38bdf8;
        --muted: #eef2ff;
        --muted-foreground: #64748b;
        --accent: #f1f5f9;
        --accent-foreground: #0f172a;
        --card: #ffffff;
        --card-foreground: #0f172a;
        --destructive: #ef4444;
        --border: #e2e8f0;
        --input: #cbd5e1;
        --ring: #4f46e5;
        --radius: 1rem;
        --font-sans: Inter,sans-serif;
        --font-heading: Inter,sans-serif;
        --font-mono: JetBrains Mono, monospace;
        --shadow-offset-x: 0;
        --shadow-offset-y: 10;
        --shadow-blur: 30;
        --shadow-spread: -8;
        --shadow-color: rgba(15, 23, 42, 0.12);
        }
    </style>
	<link rel="stylesheet" href="styles.css">
</head>
<?php
// Decode JSON fields for edit mode - force associative arrays with true param
$offer_titles = isset($service->offer_title) ? json_decode($service->offer_title, true) : [];
$offer_icons = isset($service->offer_icon) ? json_decode($service->offer_icon, true) : [];
$step_titles = isset($service->step_title) ? json_decode($service->step_title, true) : [];
$step_descriptions = isset($service->step_description) ? json_decode($service->step_description, true) : [];
$benefit_titles = isset($service->benefit_title) ? json_decode($service->benefit_title, true) : [];
$benefit_descriptions = isset($service->benefit_description) ? json_decode($service->benefit_description, true) : [];

// Ensure arrays for safe looping
if (!is_array($offer_titles)) $offer_titles = [];
if (!is_array($offer_icons)) $offer_icons = [];
if (!is_array($step_titles)) $step_titles = [];
if (!is_array($step_descriptions)) $step_descriptions = [];
if (!is_array($benefit_titles)) $benefit_titles = [];
if (!is_array($benefit_descriptions)) $benefit_descriptions = [];

$is_edit = isset($service->id) && !empty($service->id);
?>

<body>
	<div data-page="nexmove-service-management-desktop">

		<div class="min-h-screen w-full bg-background text-foreground font-sans flex flex-col relative">
			<div class="absolute inset-x-0 top-0 h-56 bg-gradient-to-r from-primary/10 via-background to-tertiary/10">
			</div>
			<div class="flex flex-1 w-full relative">
				<?php $this->load->view('layout/sidebar')?>

				<main class="flex-1 min-w-0 flex flex-col relative">
					<form action="<?= base_url('admin/service_settings'); ?>" method="post" id="settingsForm"
						enctype="multipart/form-data">

						<input type="hidden" name="id" value="<?= isset($service->id) ? $service->id : ''; ?>">

						<!-- Rest of your form -->
						<div class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 pb-32 space-y-6">

							<div class="col-12 gap-6 items-start">
								<div class="2xl:col-span-8 space-y-6">
									<section
										class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden">
										<div
											class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
											<div>
												<div class="flex items-center gap-2 flex-wrap">
													<h2 class="text-lg font-heading font-semibold">Add / Edit Service
													</h2>
													<span
														class="text-xs px-2 py-1 rounded-full bg-primary/10 text-primary">Editing:
														SEO Services</span>
												</div>
												<p class="text-sm text-muted-foreground mt-1">Enterprise CMS editor with
													structured content sections, live preview helpers, and responsive
													component patterns.</p>
											</div>
										</div>
										<div class="p-5 sm:p-6 space-y-5">
											<div class="flex flex-wrap gap-2">
												<button
													class="h-10 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">Basic
													Info</button>
												<button
													class="h-10 px-4 rounded-xl border border-border bg-card text-sm font-medium">Images</button>
												<button
													class="h-10 px-4 rounded-xl border border-border bg-card text-sm font-medium">What
													We Offer</button>
												<button
													class="h-10 px-4 rounded-xl border border-border bg-card text-sm font-medium">Work
													Process</button>
												<button
													class="h-10 px-4 rounded-xl border border-border bg-card text-sm font-medium">Tech
													Stack</button>
												<button
													class="h-10 px-4 rounded-xl border border-border bg-card text-sm font-medium">Why
													Choose Us</button>
											</div>

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-5">

												<div class="flex items-center justify-between">
													<div>
														<h3 class="text-sm font-semibold">1. Basic Information</h3>
														<p class="text-xs text-muted-foreground mt-1">
															Core content, descriptions, and service summary.
														</p>
													</div>
												</div>

												<div class="grid grid-cols-1 xl:grid-cols-2 gap-4">

													<!-- Service Name -->
													<div class="space-y-2">
														<label class="text-sm font-semibold">
															Service Name <span class="text-red-500">*</span>
														</label>

														<input type="text" id="service_name" name="service_name"
															class="w-full rounded-xl border border-input bg-card px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary"
															placeholder="Enter Service Name"
															value="<?php echo isset($service->service_name)?$service->service_name:''; ?>">
													</div>

													<!-- Slug -->
													<div class="space-y-2">
														<div class="flex items-center justify-between">
															<label class="text-sm font-semibold">
																Slug
															</label>

															<span class="text-xs text-muted-foreground">
																Auto Generated
															</span>
														</div>

														<input type="text" id="slug" name="slug" readonly
															class="w-full rounded-xl border border-input bg-muted px-4 py-3 text-sm text-muted-foreground"
															placeholder="/services/service-name"
															value="<?php echo isset($service->slug)?$service->slug:''; ?>">
													</div>

													<!-- Short Description -->
													<div class="space-y-2 xl:col-span-2">

														<div class="flex items-center justify-between">
															<label class="text-sm font-semibold">
																Short Description
															</label>

															<span id="shortCount" class="text-xs text-muted-foreground">
																0 / 160
															</span>
														</div>

														<textarea id="short_description" name="short_description"
															rows="4" maxlength="160"
															class="w-full rounded-2xl border border-input bg-card px-4 py-3 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-primary"
															placeholder="Write a short description..."
															value=""><?php echo isset($service->shot_description)?$service->shot_description:''; ?></textarea>

													</div>

													<!-- Long Description -->
													<div class="space-y-2 xl:col-span-2">

														<div class="flex items-center justify-between">
															<label class="text-sm font-semibold">
																Long Description
															</label>
														</div>

														<div class="rounded-2xl border border-input bg-card p-4">

															<textarea id="long_description"
																name="long_description"><?php echo isset($service->long_description) ? $service->long_description : ''; ?></textarea>

														</div>

													</div>

												</div>

											</section>

											<!-- Service Featured Image -->
											<div class="space-y-2 xl:col-span-2">

												<label class="text-sm font-semibold">
													Service Featured Image
													<span class="text-red-500">*</span>
												</label>

												<div
													class="rounded-2xl border-2 border-dashed border-input bg-card p-6">

													<!-- Preview with Delete Overlay -->
													<div class="flex justify-center mb-4 relative">
														<img id="imagePreview"
															src="<?php echo isset($service->service_image) && !empty($service->service_image) ? base_url('uploads/' . $service->service_image) : 'https://placehold.co/300x180?text=No+Image'; ?>"
															class="w-72 h-44 object-cover rounded-xl border"
															alt="Preview">
														<button type="button" id="deleteServiceImage"
															class="absolute top-2 right-2 h-8 w-8 rounded-full bg-red-500 text-white flex items-center justify-center hover:bg-red-600 transition shadow-lg <?php echo (isset($service->service_image) && !empty($service->service_image)) ? '' : 'hidden'; ?>"
															title="Delete Image">
															<iconify-icon icon="lucide:x" class="text-base">
															</iconify-icon>
														</button>
													</div>

													<!-- Upload -->
													<input type="file" id="service_image" name="service_image"
														accept="image/png,image/jpeg,image/jpg,image/webp" class="block w-full text-sm
                                                            file:mr-4
                                                            file:py-2
                                                            file:px-4
                                                            file:rounded-lg
                                                            file:border-0
                                                            file:bg-primary
                                                            file:text-white
                                                            file:cursor-pointer
                                                            cursor-pointer">

													<?php if (!empty($service->service_image)) { ?>
													<p id="currentServiceFile" class="mt-2 text-sm text-green-600">
														Current File:
														<strong><?php echo $service->service_image; ?></strong>
													</p>
													<?php } else { ?>
													<p id="currentServiceFile" class="mt-2 text-sm text-green-600"></p>
													<?php } ?>

													<p class="text-xs text-muted-foreground mt-2">
														Accepted: JPG, JPEG, PNG, WEBP | Max Size: 2 MB
													</p>

												</div>

											</div>
											<script>
												document.addEventListener("DOMContentLoaded", function () {
													// Delete Service Image
													const deleteImageBtn = document.getElementById("deleteServiceImage");
													const imagePreview = document.getElementById("imagePreview");
													const fileInput = document.getElementById("service_image");
													const serviceId = document.querySelector("input[name='id']") ? .value || '';

													function updateImageUI(hasImage) {
														if (hasImage) {
															deleteImageBtn.classList.remove("hidden");
														} else {
															deleteImageBtn.classList.add("hidden");
															imagePreview.src = "https://placehold.co/300x180?text=No+Image";
															if (fileInput) fileInput.value = "";
														}
													}

													if (deleteImageBtn) {
														deleteImageBtn.addEventListener("click", function () {
															if (!confirm("Are you sure you want to delete this image?")) return;

															if (serviceId) {
																fetch("<?php echo base_url('admin/delete_service_image/'); ?>" + serviceId)
																	.then(response => response.json())
																	.then(data => {
																		if (data.status === "success") {
																			updateImageUI(false);
																		} else {
																			alert("Failed to delete image.");
																		}
																	})
																	.catch(() => {
																		alert("An error occurred while deleting the image.");
																	});
															} else {
																updateImageUI(false);
															}
														});
													}

													if (fileInput) {
														fileInput.addEventListener("change", function (e) {
															const file = e.target.files[0];
															if (file) {
																const reader = new FileReader();
																reader.onload = function (event) {
																	imagePreview.src = event.target.result;
																	deleteImageBtn.classList.remove("hidden");
																};
																reader.readAsDataURL(file);
															}
														});
													}

													// Slug auto-generate from service name
													const serviceName = document.getElementById("service_name");
													const slug = document.getElementById("slug");
													if (serviceName && slug) {
														serviceName.addEventListener("input", function () {
															slug.value = "/services/" + this.value
																.toLowerCase()
																.trim()
																.replace(/[^a-z0-9]+/g, "-")
																.replace(/^-+|-+$/g, "");
														});
													}

													// Short description character count
													const shortDescription = document.getElementById("short_description");
													const shortCount = document.getElementById("shortCount");
													if (shortDescription && shortCount) {
														shortDescription.addEventListener("input", function () {
															shortCount.innerHTML = this.value.length + " / 160";
														});
													}
												});

											</script>

											<!-- Font Awesome -->
											<link rel="stylesheet"
												href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

											<!-- ===========================
                                                    WHAT WE OFFER SECTION
                                                =========================== -->
											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-5">

												<!-- Header -->
												<div class="flex items-center justify-between">
													<div>
														<h3 class="text-sm font-semibold">
															3. What We Offer
														</h3>

														<p class="text-xs text-muted-foreground mt-1">
															Add unlimited offer cards. Users can enter title, Font
															Awesome
															icon class and description.
														</p>
													</div>

													<button type="button" id="addOffer"
														class="h-10 px-5 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">
														+ Add Offer
													</button>
												</div>
												<!-- Dynamic Offer Cards -->
												<div id="offerContainer" class="space-y-5">
													<?php if (!empty($offers)): ?>
													<?php foreach ($offers as $index => $offer): ?>
													<?php
														$title = $offer['title'] ?? '';
														$icon  = $offer['icon'] ?? '';
													?>

													<div
														class="offer-card rounded-2xl border border-border bg-card p-5">
														<div class="flex items-center justify-between mb-5">
															<div class="flex items-center gap-3">
																<div
																	class="iconPreview h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center">
																	<i class="<?php echo htmlspecialchars($icon); ?>"
																		style="font-size:22px;"></i>
																</div>

																<div>
																	<h4 class="font-semibold">Offer
																		<?php echo $index + 1; ?></h4>
																	<p class="text-xs text-muted-foreground">
																		Fill the details below
																	</p>
																</div>
															</div>

															<button type="button"
																class="deleteOffer h-9 px-4 rounded-lg border border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition">
																Delete
															</button>
														</div>

														<div class="grid grid-cols-1 gap-5">
															<div>
																<label class="block text-sm font-medium mb-2">
																	Offer Title
																</label>

																<input type="text" name="offer_title[]"
																	value="<?php echo htmlspecialchars($title); ?>"
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Website Development">
															</div>

															<div>
																<label class="block text-sm font-medium mb-2">
																	Font Awesome Icon Class
																</label>

																<input type="text" name="offer_icon[]"
																	value="<?php echo htmlspecialchars($icon); ?>"
																	class="iconInput w-full rounded-xl border border-input px-4 py-3"
																	placeholder="fa-solid fa-code">

																<small class="block mt-2 text-xs text-gray-500">
																	Go to
																	<a href="https://fontawesome.com/search"
																		target="_blank" class="text-blue-600 underline">
																		FontAwesome
																	</a>
																	Copy the icon class.<br>
																	Example: <strong>fa-solid fa-code</strong>
																</small>
															</div>
														</div>
													</div>

													<?php endforeach; ?>

													<?php else: ?>

													<!-- Default Empty Card -->
													<div
														class="offer-card rounded-2xl border border-border bg-card p-5">
														<div class="flex items-center justify-between mb-5">
															<div class="flex items-center gap-3">
																<div
																	class="iconPreview h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center">
																	<i class="fa-solid fa-code"
																		style="font-size:22px;"></i>
																</div>

																<div>
																	<h4 class="font-semibold">Offer 1</h4>
																	<p class="text-xs text-muted-foreground">
																		Fill the details below
																	</p>
																</div>
															</div>

															<button type="button"
																class="deleteOffer h-9 px-4 rounded-lg border border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition">
																Delete
															</button>
														</div>

														<div class="grid grid-cols-1 gap-5">
															<div>
																<label class="block text-sm font-medium mb-2">
																	Offer Title
																</label>

																<input type="text" name="offer_title[]" value=""
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Website Development">
															</div>

															<div>
																<label class="block text-sm font-medium mb-2">
																	Font Awesome Icon Class
																</label>

																<input type="text" name="offer_icon[]" value=""
																	class="iconInput w-full rounded-xl border border-input px-4 py-3"
																	placeholder="fa-solid fa-code">

																<small class="block mt-2 text-xs text-gray-500">
																	Go to
																	<a href="https://fontawesome.com/search"
																		target="_blank" class="text-blue-600 underline">
																		FontAwesome
																	</a>
																	Copy the icon class.<br>
																	Example: <strong>fa-solid fa-code</strong>
																</small>
															</div>
														</div>
													</div>

													<?php endif; ?>
												</div>

											</section>

											<script>
												document.addEventListener("DOMContentLoaded", function () {

													const offerContainer = document.getElementById("offerContainer");
													const addOfferBtn = document.getElementById("addOffer");

													// Current number of cards already rendered by PHP
													let offerCount = offerContainer.querySelectorAll(".offer-card").length;

													// Add Offer Button
													addOfferBtn.addEventListener("click", function () {
														addOffer();
													});

													// Function to Add Offer Card
													function addOffer(title = "", icon = "") {

														offerCount++;

														const card = document.createElement("div");

														card.className = "offer-card rounded-2xl border border-border bg-card p-5";

														card.innerHTML = `
															<div class="flex items-center justify-between mb-5">

																<div class="flex items-center gap-3">

																	<div class="iconPreview h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center">
																		<i class="${icon}" style="font-size:22px;"></i>
																	</div>

																	<div>
																		<h4 class="font-semibold">Offer ${offerCount}</h4>
																		<p class="text-xs text-muted-foreground">
																			Fill the details below
																		</p>
																	</div>

																</div>

																<button type="button"
																	class="deleteOffer h-9 px-4 rounded-lg border border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition">
																	Delete
																</button>

															</div>

															<div class="grid grid-cols-1 gap-5">

																<div>
																	<label class="block text-sm font-medium mb-2">
																		Offer Title
																	</label>

																	<input
																		type="text"
																		name="offer_title[]"
																		value="${title}"
																		class="w-full rounded-xl border border-input px-4 py-3"
																		placeholder="Website Development">
																</div>

																<div>

																	<label class="block text-sm font-medium mb-2">
																		Font Awesome Icon Class
																	</label>

																	<input
																		type="text"
																		name="offer_icon[]"
																		value="${icon}"
																		class="iconInput w-full rounded-xl border border-input px-4 py-3"
																		placeholder="fa-solid fa-code">

																	<small class="block mt-2 text-xs text-gray-500">
																		Go to
																		<a href="https://fontawesome.com/search" target="_blank" class="text-blue-600 underline">
																			FontAwesome
																		</a>
																		Copy the icon class.<br>
																		Example:
																		<strong>fa-solid fa-code</strong>
																	</small>

																</div>

															</div>
														`;

														offerContainer.appendChild(card);

														renumberOffers();
													}

													// Delete Offer
													document.addEventListener("click", function (e) {

														const btn = e.target.closest(".deleteOffer");

														if (!btn) return;

														btn.closest(".offer-card").remove();

														renumberOffers();

													});

													// Live Icon Preview
													document.addEventListener("input", function (e) {

														if (!e.target.classList.contains("iconInput")) return;

														const preview = e.target
															.closest(".offer-card")
															.querySelector(".iconPreview");

														preview.innerHTML = `<i class="${e.target.value}" style="font-size:22px;"></i>`;

													});

													// Renumber Cards
													function renumberOffers() {

														const cards = offerContainer.querySelectorAll(".offer-card");

														offerCount = cards.length;

														cards.forEach(function (card, index) {

															card.querySelector("h4").textContent = "Offer " + (index + 1);

														});

													}

												});

											</script>

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-5">

												<div class="flex items-center justify-between">
													<div>
														<h3 class="text-sm font-semibold">4. Work Process</h3>
														<p class="text-xs text-muted-foreground mt-1">
															Add unlimited work process steps.
														</p>
													</div>

													<button type="button" id="addProcess"
														class="h-10 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">

														+ Add Step

													</button>
												</div>

												<div id="processContainer">
													<?php if (!empty($steps)): ?>
													<?php foreach ($steps as $index => $step): ?>
													<?php
														$title = $step['title'] ?? '';
														$desc  = $step['description'] ?? '';
													?>
													<div
														class="process-card rounded-2xl border border-border bg-card p-5 mb-4">
														<div class="flex items-center justify-between mb-5">
															<div>
																<h4 class="stepNumber text-sm font-semibold">
																	Step
																	<?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
																</h4>
																<p class="text-xs text-muted-foreground">Work Process
																</p>
															</div>

															<button type="button"
																class="deleteProcess h-9 px-4 rounded-lg border border-red-500 text-red-500">
																Delete
															</button>
														</div>

														<div class="space-y-4">
															<div>
																<label class="block text-sm font-medium mb-2">
																	Step Title
																</label>

																<input type="text" name="process_title[]"
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Requirement Gathering"
																	value="<?php echo htmlspecialchars($title); ?>">
															</div>

															<div>
																<label class="block text-sm font-medium mb-2">
																	Description
																</label>

																<textarea class="ckeditor" name="process_description[]"
																	rows="4"><?= $desc; ?></textarea>
															</div>
														</div>
													</div>
													<?php endforeach; ?>

													<?php else: ?>

													<div
														class="process-card rounded-2xl border border-border bg-card p-5">
														<div class="flex items-center justify-between mb-5">
															<div>
																<h4 class="stepNumber text-sm font-semibold">Step 01
																</h4>
																<p class="text-xs text-muted-foreground">Work Process
																</p>
															</div>

															<button type="button"
																class="deleteProcess h-9 px-4 rounded-lg border border-red-500 text-red-500">
																Delete
															</button>
														</div>

														<div class="space-y-4">
															<div>
																<label class="block text-sm font-medium mb-2">
																	Step Title
																</label>

																<input type="text" name="process_title[]"
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Requirement Gathering" value="">
															</div>

															<div>
																<label class="block text-sm font-medium mb-2">
																	Description
																</label>

																<textarea rows="4" name="process_description[]"
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Describe this work process"></textarea>
															</div>
														</div>
													</div>

													<?php endif; ?>
												</div>

											</section>

											<script>
												const processContainer = document.getElementById("processContainer");
												const addProcess = document.getElementById("addProcess");

												addProcess.addEventListener("click", function () {

													let card = document.querySelector(".process-card").cloneNode(true);

													card.querySelector('[name="process_title[]"]').value = "";
													card.querySelector('[name="process_description[]"]').value = "";

													const textarea = card.querySelector('[name="process_description[]"]');

													textarea.classList.add("ckeditor");

													processContainer.appendChild(card);

													initEditor(textarea);

													updateSteps();

												});

												document.addEventListener("click", function (e) {

													if (e.target.classList.contains("deleteProcess")) {

														if (document.querySelectorAll(".process-card").length > 1) {

															e.target.closest(".process-card").remove();

															updateSteps();

														} else {

															alert("At least one work process is .");

														}

													}

												});

												function updateSteps() {

													document.querySelectorAll(".process-card").forEach(function (card, index) {

														card.querySelector(".stepNumber").innerHTML =
															"Step " + String(index + 1).padStart(2, "0");

													});

												}

												updateSteps();

											</script>

											<?php
													$selected_technologies = isset($selected_technologies) ? $selected_technologies : [];

													$technologies = [
														['name'=>'PHP','icon'=>'lucide:code'],
														['name'=>'Laravel','icon'=>'lucide:layers'],
														['name'=>'React','icon'=>'lucide:monitor'],
														['name'=>'Next.js','icon'=>'lucide:globe'],
														['name'=>'Node.js','icon'=>'lucide:server'],
														['name'=>'MySQL','icon'=>'lucide:database'],
														['name'=>'Git','icon'=>'lucide:git-branch'],

														// Design Tools
														['name'=>'Adobe Photoshop','icon'=>'lucide:image'],
														['name'=>'Adobe Illustrator','icon'=>'lucide:pen-tool'],
														['name'=>'Canva','icon'=>'lucide:palette'],
														['name'=>'CorelDRAW','icon'=>'lucide:pencil-ruler'],
														['name'=>'Cap Cut','icon'=>'lucide:clapperboard']
													];
													?>

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-5">

												<div class="flex items-center justify-between">
													<div>
														<h3 class="text-sm font-semibold">5. Technologies Used</h3>
														<p class="text-xs text-muted-foreground mt-1">
															Click to select the technologies used in this project.
														</p>
													</div>

													<span id="technology-count"
														class="px-2 py-1 rounded-full bg-primary/10 text-primary text-xs">
														0 Selected
													</span>
												</div>

												<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3">

													<?php foreach($technologies as $tech):

           												 $checked = in_array($tech['name'],$selected_technologies);

     													   ?>

													<label class="technology-card cursor-pointer">

														<input type="checkbox" name="technologies[]"
															value="<?= $tech['name']; ?>"
															class="hidden technology-checkbox"
															<?= $checked ? 'checked' : ''; ?>>

														<div class="technology-box rounded-2xl border p-4 flex items-center gap-3 transition-all duration-300
                												<?= $checked ? 'border-primary bg-primary/5' : 'border-border bg-card'; ?>">

															<div
																class="h-10 w-10 rounded-xl <?= $checked ? 'bg-primary/10 text-primary' : 'bg-secondary text-secondary-foreground'; ?> flex items-center justify-center">

																<iconify-icon icon="<?= $tech['icon']; ?>"
																	class="text-lg">
																</iconify-icon>

															</div>

															<span class="text-sm font-semibold">
																<?= $tech['name']; ?>
															</span>

														</div>

													</label>

													<?php endforeach; ?>

												</div>

											</section>

											<script>
												document.addEventListener("DOMContentLoaded", function () {

													const checkboxes = document.querySelectorAll(".technology-checkbox");

													function updateCards() {

														let total = 0;

														checkboxes.forEach(function (box) {

															const card = box.closest(".technology-card").querySelector(".technology-box");
															const icon = card.querySelector("div");

															if (box.checked) {

																total++;

																card.classList.remove("border-border", "bg-card");

																card.classList.add("border-primary", "bg-primary/5");

																icon.classList.remove("bg-secondary", "text-secondary-foreground");

																icon.classList.add("bg-primary/10", "text-primary");

															} else {

																card.classList.remove("border-primary", "bg-primary/5");

																card.classList.add("border-border", "bg-card");

																icon.classList.remove("bg-primary/10", "text-primary");

																icon.classList.add("bg-secondary", "text-secondary-foreground");

															}

														});

														document.getElementById("technology-count").innerHTML = total + " Selected";

													}

													checkboxes.forEach(function (box) {

														box.addEventListener("change", updateCards);

													});

													updateCards();

												});

											</script>

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-5">

												<!-- Header -->
												<div class="flex items-center justify-between">

													<div>
														<h3 class="text-sm font-semibold">
															6. Why Choose This Service
														</h3>

														<p class="text-xs text-muted-foreground mt-1">
															Add unlimited benefit cards.
														</p>
													</div>

													<button type="button" id="addBenefit"
														class="h-10 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">

														+ Add Benefit

													</button>

												</div>

												<!-- Dynamic Benefit Cards -->
												<div id="benefitContainer">

													<?php if (!empty($benefits)): ?>

													<?php foreach ($benefits as $index => $benefit): ?>

													<?php
														$btitle = $benefit['title'] ?? '';
														$bdesc  = $benefit['description'] ?? '';
													?>

													<div
														class="benefit-card rounded-2xl border border-border bg-card p-5 mb-4">

														<div class="flex items-center justify-between mb-5">

															<div>
																<h4 class="text-sm font-semibold">
																	Benefit
																	<?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
																</h4>

																<p class="text-xs text-muted-foreground">
																	Why choose this service?
																</p>
															</div>

															<button type="button"
																class="deleteBenefit h-9 px-4 rounded-lg border border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition">

																Delete

															</button>

														</div>

														<div class="space-y-4">

															<div>
																<label class="block text-sm font-medium mb-2">
																	Benefit Title
																</label>

																<input type="text" name="benefit_title[]"
																	value="<?php echo htmlspecialchars($btitle); ?>"
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Expert Team">
															</div>

															<div>
																<label class="block text-sm font-medium mb-2">
																	Description
																</label>

																<textarea class="ckeditor" name="benefit_description[]"
																	rows="4"><?= $bdesc; ?></textarea>
															</div>

														</div>

													</div>

													<?php endforeach; ?>

													<?php else: ?>

													<!-- Default Empty Card -->

													<div
														class="benefit-card rounded-2xl border border-border bg-card p-5 mb-4">

														<div class="flex items-center justify-between mb-5">

															<div>
																<h4 class="text-sm font-semibold">
																	Benefit 01
																</h4>

																<p class="text-xs text-muted-foreground">
																	Why choose this service?
																</p>
															</div>

															<button type="button"
																class="deleteBenefit h-9 px-4 rounded-lg border border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition">

																Delete

															</button>

														</div>

														<div class="space-y-4">

															<div>
																<label class="block text-sm font-medium mb-2">
																	Benefit Title
																</label>

																<input type="text" name="benefit_title[]" value=""
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Expert Team">
															</div>

															<div>
																<label class="block text-sm font-medium mb-2">
																	Description
																</label>

																<textarea rows="4" name="benefit_description[]"
																	class="w-full rounded-xl border border-input px-4 py-3"
																	placeholder="Describe this benefit"></textarea>
															</div>

														</div>

													</div>

													<?php endif; ?>

												</div>

											</section>

											<script>
												const benefitContainer = document.getElementById("benefitContainer");
												const addBenefit = document.getElementById("addBenefit");

												addBenefit.addEventListener("click", function () {

													let card = document.querySelector(".benefit-card").cloneNode(true);

													card.querySelector('[name="benefit_title[]"]').value = "";
													card.querySelector('[name="benefit_description[]"]').value = "";

													const textarea = card.querySelector('[name="benefit_description[]"]');

													textarea.classList.add("ckeditor");

													benefitContainer.appendChild(card);

													initEditor(textarea);

												});

												document.addEventListener("click", function (e) {

													if (e.target.classList.contains("deleteBenefit")) {

														if (document.querySelectorAll(".benefit-card").length > 1) {

															e.target.closest(".benefit-card").remove();

														} else {

															alert("At least one benefit is .");

														}

													}

												});

											</script>
										</div>
									</section>
								</div>
							</div>
						</div>
						<div
							class="fixed bottom-0 left-0 right-0 border-t border-border bg-card/95 backdrop-blur-md z-50">

							<div
								class="px-4 sm:px-6 lg:px-8 py-4 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
								<div class="flex flex-wrap items-center gap-3">
									<!-- Save -->

									<button type="submit" form="settingsForm" id="saveBtn"
										class="h-11 px-5 rounded-xl bg-primary text-primary-foreground text-sm font-semibold shadow-md">

										<?php echo $is_edit ? 'Save Changes' : 'Create Service'; ?>

									</button>

								</div>

							</div>

						</div>
					</form>

				</main>
			</div>
		</div>

	</div>
	<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
	<script>
		function initEditor(element) {

			ClassicEditor.create(element, {
				toolbar: [
					'heading',
					'|',
					'bold',
					'italic',
					'underline',
					'|',
					'bulletedList',
					'numberedList',
					'|',
					'link',
					'insertTable',
					'blockQuote',
					'|',
					'undo',
					'redo'
				]
			}).catch(error => {
				console.error(error);
			});

		}

		document.addEventListener("DOMContentLoaded", function () {

			document.querySelectorAll(".ckeditor").forEach(function (editor) {

				initEditor(editor);

			});

			if (document.querySelector("#long_description"))
				initEditor(document.querySelector("#long_description"));

			// Uncomment only if you want Short Description rich text
			// if(document.querySelector("#short_description"))
			//     initEditor(document.querySelector("#short_description"));

		});

	</script>
	<script src="script.js"></script>
</body>

</html>
