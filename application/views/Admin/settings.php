<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nexmove General Settings - Desktop — Exported from UXMagic Copilot">
	<title>Nexmove General Settings - Desktop</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Poppins:wght@100..900&amp;family=Fira+Code:wght@300..700&amp;family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap"
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

<body>
	<div data-page="nexmove-general-settings-desktop">

		<div class="min-h-screen w-full bg-background text-foreground font-sans flex flex-col relative">
			<div class="flex flex-1 w-full relative">
				<?php $this->load->view('layout/sidebar')?>

				<main class="flex-1 min-w-0 flex flex-col relative">

					<div class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 pb-32 space-y-6">
						<div class="grid grid-cols-1 2xl:grid-cols-3 gap-6 items-start">
							<div class="section-body">
								<form id="settingsForm" action="<?php echo base_url('admin/general_settings');?>"
									method="POST" enctype="multipart/form-data">

									<section
										class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden">

										<!-- Header -->
										<div
											class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60 flex flex-col sm:flex-row sm:items-center justify-between gap-4">

											<div class="flex items-center gap-3">
												<div
													class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
													<iconify-icon icon="lucide:globe" class="text-xl"></iconify-icon>
												</div>

												<div>
													<div class="flex items-center gap-2 flex-wrap">
														<h2 class="text-lg font-heading font-semibold">Website
															Information</h2>
														<span
															class="text-xs px-2 py-1 rounded-full bg-secondary text-secondary-foreground">
															Required
														</span>
													</div>
													<p class="text-sm text-muted-foreground">
														Core identity, business copy, and public-facing descriptions.
													</p>
												</div>
											</div>

										</div>

										<!-- Form Body -->

										<div class="p-5 sm:p-6 space-y-6">

											<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
												<input type="hidden" name="id"
													value="<?php echo isset($settings->id)?$settings->id:''; ?>">
												<!-- Website Name -->
												<div class="space-y-2">
													<label class="text-sm font-semibold">
														Website Name <span class="text-red-500">*</span>
													</label>

													<input type="text" name="websitename"
														class="w-full rounded-xl border border-input bg-background px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
														value="<?php echo isset($settings->website_name)?$settings->website_name:''; ?>"
														required>
												</div>

												<!-- Tagline -->
												<div class="space-y-2 md:col-span-2">
													<label class="text-sm font-semibold">
														Tagline
													</label>

													<input type="text" name="tagline"
														class="w-full rounded-xl border border-input bg-background px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
														value="<?php echo isset($settings->tagline)?$settings->tagline:''; ?>">
												</div>

												<!-- About Company -->
												<div class="space-y-2 md:col-span-2">

													<label class="text-sm font-semibold">
														About Company
													</label>

													<textarea id="about_company" name="about_company" rows="8"
														class="w-full rounded-2xl border border-input bg-background px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"><?php echo isset($settings->about_company)?$settings->about_company:''; ?></textarea>

												</div>

											</div>

										</div>
										<section
											class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden pt-5">

											<!-- Header -->
											<div
												class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60">

												<div class="flex items-center gap-3">

													<div
														class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:image" class="text-xl">
														</iconify-icon>
													</div>

													<div>
														<h2 class="text-lg font-heading font-semibold">
															Branding
														</h2>

														<p class="text-sm text-muted-foreground">
															Upload your company branding assets.
														</p>
													</div>

												</div>

											</div>

											<div class="p-6 grid md:grid-cols-2 gap-6">

												<!-- Website Logo -->
												<div class="rounded-xl border border-border p-5">
													<label class="font-semibold block mb-3">
														Website Logo
													</label>
													<div class="flex justify-center mb-4">
														<div class="relative inline-block">
															<img id="logoPreview"
																src="<?php echo (!empty($settings->Website_Logo)) ? base_url('uploads/'.$settings->Website_Logo) : 'https://placehold.co/300x80?text=No+Image'; ?>"
																style="height:80px;"
																class="object-contain rounded-xl border"
																alt="Logo Preview">
															<button type="button" id="removeLogo"
																class="absolute -top-2 -right-2 h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition <?php echo (!empty($settings->Website_Logo)) ? '' : 'hidden'; ?>">
																✕
															</button>
														</div>
													</div>
													<?php if (!empty($settings->Website_Logo)): ?>
													<div class="text-center mb-2">
														<span
															class="text-xs text-muted-foreground bg-muted px-3 py-1 rounded-full font-mono">
															📁 <?php echo $settings->Website_Logo; ?>
														</span>
													</div>
													<?php endif; ?>
													<input type="file" name="logo" id="logo"
														class="w-full border rounded-lg p-3"
														accept=".png,.jpg,.jpeg,.svg,.webp">
												</div>

												<!-- White Logo -->
												<div class="rounded-xl border border-border p-5">
													<label class="font-semibold block mb-3">
														White Logo
													</label>
													<div class="flex justify-center mb-4">
														<div class="relative inline-block">
															<img id="whitePreview"
																src="<?php echo (!empty($settings->White_Logo)) ? base_url('uploads/'.$settings->White_Logo) : 'https://placehold.co/300x80?text=No+Image'; ?>"
																style="height:80px;background:#222;padding:10px;"
																class="object-contain rounded-xl border"
																alt="White Logo Preview">
															<button type="button" id="removeWhiteLogo"
																class="absolute -top-2 -right-2 h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition <?php echo (!empty($settings->White_Logo)) ? '' : 'hidden'; ?>">
																✕
															</button>
														</div>
													</div>
													<?php if (!empty($settings->White_Logo)): ?>
													<div class="text-center mb-2">
														<span
															class="text-xs text-muted-foreground bg-muted px-3 py-1 rounded-full font-mono">
															📁 <?php echo $settings->White_Logo; ?>
														</span>
													</div>
													<?php endif; ?>
													<input type="file" name="white_logo" id="white_logo"
														class="w-full border rounded-lg p-3"
														accept=".png,.jpg,.jpeg,.svg,.webp">
												</div>

												<!-- Favicon -->
												<div class="rounded-xl border border-border p-5 md:col-span-2">
													<label class="font-semibold block mb-3">
														Favicon
													</label>
													<div class="flex justify-center mb-4">
														<div class="relative inline-block">
															<img id="faviconPreview"
																src="<?php echo (!empty($settings->Favicon)) ? base_url('uploads/'.$settings->Favicon) : 'https://placehold.co/40x40?text=No'; ?>"
																style="height:40px;"
																class="object-contain rounded-xl border"
																alt="Favicon Preview">
															<button type="button" id="removeFavicon"
																class="absolute -top-2 -right-2 h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition <?php echo (!empty($settings->Favicon)) ? '' : 'hidden'; ?>">
																✕
															</button>
														</div>
													</div>
													<?php if (!empty($settings->Favicon)): ?>
													<div class="text-center mb-2">
														<span
															class="text-xs text-muted-foreground bg-muted px-3 py-1 rounded-full font-mono">
															📁 <?php echo $settings->Favicon; ?>
														</span>
													</div>
													<?php endif; ?>
													<input type="file" name="favicon" id="favicon"
														class="w-full border rounded-lg p-3"
														accept=".png,.ico,.jpg,.jpeg">
												</div>

											</div>
											<script>
												document.addEventListener("DOMContentLoaded", function () {
													// ========== Logo Delete ==========
													const removeLogoBtn = document.getElementById("removeLogo");
													const logoPreview = document.getElementById("logoPreview");
													const logoInput = document.getElementById("logo");

													function resetLogoToPlaceholder() {
														logoPreview.src = "https://placehold.co/300x80?text=No+Image";
														removeLogoBtn.classList.add("hidden");
														if (logoInput) logoInput.value = "";
													}

													if (removeLogoBtn) {
														removeLogoBtn.addEventListener("click", function () {
															if (!confirm("Are you sure you want to delete the logo?")) return;
															fetch("<?php echo base_url('admin/delete_settings_logo'); ?>")
																.then(r => r.json())
																.then(d => {
																	if (d.status === "success") resetLogoToPlaceholder();
																	else alert("Failed to delete.");
																})
																.catch(() => alert("An error occurred."));
														});
													}
													if (logoInput) {
														logoInput.addEventListener("change", function (e) {
															const file = e.target.files[0];
															if (file) {
																const reader = new FileReader();
																reader.onload = function (ev) {
																	logoPreview.src = ev.target.result;
																	removeLogoBtn.classList.remove("hidden");
																};
																reader.readAsDataURL(file);
															}
														});
													}

													// ========== White Logo Delete ==========
													const removeWhiteBtn = document.getElementById("removeWhiteLogo");
													const whitePreview = document.getElementById("whitePreview");
													const whiteInput = document.getElementById("white_logo");

													function resetWhiteToPlaceholder() {
														whitePreview.src = "https://placehold.co/300x80?text=No+Image";
														removeWhiteBtn.classList.add("hidden");
														if (whiteInput) whiteInput.value = "";
													}

													if (removeWhiteBtn) {
														removeWhiteBtn.addEventListener("click", function () {
															if (!confirm("Are you sure you want to delete the white logo?")) return;
															fetch("<?php echo base_url('admin/delete_settings_white_logo'); ?>")
																.then(r => r.json())
																.then(d => {
																	if (d.status === "success") resetWhiteToPlaceholder();
																	else alert("Failed to delete.");
																})
																.catch(() => alert("An error occurred."));
														});
													}
													if (whiteInput) {
														whiteInput.addEventListener("change", function (e) {
															const file = e.target.files[0];
															if (file) {
																const reader = new FileReader();
																reader.onload = function (ev) {
																	whitePreview.src = ev.target.result;
																	removeWhiteBtn.classList.remove("hidden");
																};
																reader.readAsDataURL(file);
															}
														});
													}

													// ========== Favicon Delete ==========
													const removeFaviconBtn = document.getElementById("removeFavicon");
													const faviconPreview = document.getElementById("faviconPreview");
													const faviconInput = document.getElementById("favicon");

													function resetFaviconToPlaceholder() {
														faviconPreview.src = "https://placehold.co/40x40?text=No";
														removeFaviconBtn.classList.add("hidden");
														if (faviconInput) faviconInput.value = "";
													}

													if (removeFaviconBtn) {
														removeFaviconBtn.addEventListener("click", function () {
															if (!confirm("Are you sure you want to delete the favicon?")) return;
															fetch("<?php echo base_url('admin/delete_settings_favicon'); ?>")
																.then(r => r.json())
																.then(d => {
																	if (d.status === "success") resetFaviconToPlaceholder();
																	else alert("Failed to delete.");
																})
																.catch(() => alert("An error occurred."));
														});
													}
													if (faviconInput) {
														faviconInput.addEventListener("change", function (e) {
															const file = e.target.files[0];
															if (file) {
																const reader = new FileReader();
																reader.onload = function (ev) {
																	faviconPreview.src = ev.target.result;
																	removeFaviconBtn.classList.remove("hidden");
																};
																reader.readAsDataURL(file);
															}
														});
													}
												});

											</script>

										</section>
										<section
											class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden pb-5">

											<!-- Header -->
											<div
												class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60 flex flex-col sm:flex-row sm:items-center justify-between gap-4">

												<div class="flex items-center gap-3">

													<div
														class="h-11 w-11 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:phone" class="text-xl">
														</iconify-icon>
													</div>

													<div>
														<h2 class="text-lg font-heading font-semibold">
															Contact Information
														</h2>

														<p class="text-sm text-muted-foreground">
															Update your business contact details.
														</p>
													</div>

												</div>

											</div>

											<!-- Form Body -->
											<div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

												<!-- Email -->
												<div class="space-y-2">

													<label class="text-sm font-semibold flex items-center gap-2">
														<iconify-icon icon="lucide:mail" class="text-primary">
														</iconify-icon>
														Email Address
													</label>

													<input type="email" name="email"
														placeholder="hello@nexmovesolutions.com"
														value="<?php echo isset($settings->email_address)?$settings->email_address:''; ?>"
														class="w-full rounded-xl border border-input bg-background px-4 py-3 focus:ring-2 focus:ring-primary focus:outline-none transition">

												</div>

												<!-- Phone -->
												<div class="space-y-2">

													<label class="text-sm font-semibold flex items-center gap-2">
														<iconify-icon icon="lucide:phone" class="text-primary">
														</iconify-icon>
														Phone Number
													</label>

													<input type="text" name="phone" placeholder="+91 9876543210"
														value="<?php echo isset($settings->phone_no)?$settings->phone_no:''; ?>"
														class="w-full rounded-xl border border-input bg-background px-4 py-3 focus:ring-2 focus:ring-primary focus:outline-none transition">

												</div>

												<!-- WhatsApp -->
												<div class="space-y-2">

													<label class="text-sm font-semibold flex items-center gap-2">
														<iconify-icon icon="lucide:message-circle" class="text-primary">
														</iconify-icon>
														WhatsApp Number
													</label>

													<input type="text" name="whatsapp" placeholder="+91 9876543210"
														value="<?php echo isset($settings->whatsApp_number)?$settings->whatsApp_number:''; ?>"
														class="w-full rounded-xl border border-input bg-background px-4 py-3 focus:ring-2 focus:ring-primary focus:outline-none transition">

												</div>
											</div>

										</section>

										<section
											class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden pt-5">

											<!-- Header -->
											<div
												class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60 flex items-center gap-4">

												<div
													class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
													<iconify-icon icon="lucide:map-pin" class="text-xl"></iconify-icon>
												</div>

												<div>
													<h2 class="text-lg font-heading font-semibold">
														Address Information
													</h2>

													<p class="text-sm text-muted-foreground">
														Manage your company's address and location details.
													</p>
												</div>

											</div>

											<!-- Form Body -->

											<div class="p-6">

												<div class="grid grid-cols-1 md:grid-cols-2 gap-5">

													<!-- Address -->

													<div class="md:col-span-2">

														<label class="block text-sm font-semibold mb-2">
															Office Address
														</label>

														<textarea id="address" name="address" rows="5"
															class="w-full rounded-xl border border-input bg-background px-4 py-3 resize-none">
<?php echo isset($settings->address) ? $settings->address : ''; ?>
</textarea>

													</div>

												</div>

											</div>

										</section>

										<section
											class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden pt-5">
											<div
												class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60 flex items-center justify-between gap-4">
												<div class="flex items-center gap-3">
													<div
														class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:share-2" class="text-xl">
														</iconify-icon>
													</div>
													<div>
														<h2 class="text-lg font-heading font-semibold">Social Media</h2>
														<p class="text-sm text-muted-foreground">Connected brand
															channels with validation badges and
															quick actions.</p>
													</div>
												</div>
												<button
													class="h-9 w-9 rounded-lg border border-border bg-card flex items-center justify-center hover:bg-muted transition-all">
													<iconify-icon icon="lucide:minimize"
														class="text-base text-muted-foreground"></iconify-icon>
												</button>
											</div>
											<div class="p-5 sm:p-6 grid grid-cols-1 md:grid-cols-2 gap-4">
												<!-- Facebook -->
												<div
													class="rounded-2xl border border-border bg-background p-4 flex items-center gap-4">
													<div
														class="h-12 w-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:facebook" class="text-xl">
														</iconify-icon>
													</div>

													<div class="flex-1">
														<label class="text-sm font-semibold block mb-1">Facebook
															URL</label>
														<input type="url" name="facebook_url"
															class="w-full rounded-lg border border-border bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary"
															placeholder="https://facebook.com/nexmovesolutions"
															value="<?php echo isset($settings->Facebook_URL)?$settings->Facebook_URL:''; ?>">
													</div>

													<button type="button"
														class="h-10 w-10 rounded-xl border border-border hover:bg-muted flex items-center justify-center">
														<iconify-icon icon="lucide:external-link" class="text-base">
														</iconify-icon>
													</button>
												</div>

												<!-- Instagram -->
												<div
													class="rounded-2xl border border-border bg-background p-4 flex items-center gap-4 mt-4">
													<div
														class="h-12 w-12 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:instagram" class="text-xl">
														</iconify-icon>
													</div>

													<div class="flex-1">
														<label class="text-sm font-semibold block mb-1">Instagram
															URL</label>
														<input type="url" name="instagram_url"
															class="w-full rounded-lg border border-border bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary"
															placeholder="https://instagram.com/nexmovesolutions"
															value="<?php echo isset($settings->Instagram_URL)?$settings->Instagram_URL:''; ?>">
													</div>

													<button type="button"
														class="h-10 w-10 rounded-xl border border-border hover:bg-muted flex items-center justify-center">
														<iconify-icon icon="lucide:external-link" class="text-base">
														</iconify-icon>
													</button>
												</div>

												<!-- LinkedIn -->
												<div
													class="rounded-2xl border border-border bg-background p-4 flex items-center gap-4 mt-4">
													<div
														class="h-12 w-12 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center">
														<iconify-icon icon="lucide:linkedin" class="text-xl">
														</iconify-icon>
													</div>

													<div class="flex-1">
														<label class="text-sm font-semibold block mb-1">LinkedIn
															URL</label>
														<input type="url" name="linkedin_url"
															class="w-full rounded-lg border border-border bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary"
															placeholder="https://linkedin.com/company/nexmovesolutions"
															value="<?php echo isset($settings->LinkedIn_URL)?$settings->LinkedIn_URL:''; ?>">
													</div>

													<button type="button"
														class="h-10 w-10 rounded-xl border border-border hover:bg-muted flex items-center justify-center">
														<iconify-icon icon="lucide:external-link" class="text-base">
														</iconify-icon>
													</button>
												</div>
										</section>
										<!-- Footer -->
									</section>
								</form>


							</div>
						</div>
					</div>

					<div class="fixed bottom-0 left-0 right-0 border-t border-border bg-card/95 backdrop-blur-md z-50">

						<div
							class="px-4 sm:px-6 lg:px-8 py-4 flex flex-col lg:flex-row lg:items-center justify-between gap-4">

							<div class="flex flex-wrap items-center gap-3 text-sm">

								<span id="saveMessage"
									class="hidden px-3 py-2 rounded-xl bg-emerald-500/10 text-emerald-600 font-semibold flex items-center gap-2">

									<iconify-icon icon="lucide:circle-check"></iconify-icon>

									Changes Saved Successfully

								</span>

								<span class="text-muted-foreground" id="lastSync">

									Not Saved

								</span>

							</div>

							<div class="flex flex-wrap items-center gap-3">

								<!-- Cancel -->

								<button type="button" id="cancelBtn"
									class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted">

									Cancel

								</button>

								<!-- Reset -->

								<button type="reset" id="resetBtn"
									class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted">

									Reset

								</button>

								<!-- Save -->

								<button type="submit" form="settingsForm" id="saveBtn"
									class="h-11 px-5 rounded-xl bg-primary text-primary-foreground text-sm font-semibold shadow-md">

									Save Changes

								</button>

							</div>

						</div>

					</div>
				</main>
			</div>
		</div>

	</div>
	<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

	<script>
		CKEDITOR.replace('about_company');
		CKEDITOR.replace('address');

	</script>
	<script src="script.js"></script>
</body>

</html>
