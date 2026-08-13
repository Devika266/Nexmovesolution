<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nexmove Blog Management - Desktop — Exported from UXMagic Copilot">
	<title>Nexmove Blog Management - Desktop</title>
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
      :root { --background: #f8fafc;
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
        --shadow-color: rgba(15, 23, 42, 0.12); }
    </style>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div data-page="nexmove-blog-management-desktop">

		<div class="min-h-screen w-full bg-background text-foreground font-sans flex flex-col relative">
			<div class="absolute inset-x-0 top-0 h-56 bg-gradient-to-r from-primary/10 via-background to-tertiary/10">
			</div>
			<div class="flex flex-1 w-full relative">
				<?php $this->load->view('layout/sidebar')?>

				<main class="flex-1 min-w-0 flex flex-col relative">
					<form action="<?= base_url('admin/blog_settings'); ?>" method="post" id="settingsForm"
						enctype="multipart/form-data">

						<input type="hidden" name="id" value="<?= isset($blog->id) ? $blog->id : ''; ?>">
						<div class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 pb-32 space-y-6">
							<div class="grid grid-cols-1 2xl:grid-cols-12 gap-6 items-start">
								<div class="2xl:col-span-8 space-y-6">
									<section
										class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden">
										<div class="p-5 sm:p-6 space-y-5">

											<section
												class="rounded-2xl border border-border bg-card shadow-md overflow-hidden">

												<!-- Header -->
												<div
													class="px-6 py-5 border-b border-border flex flex-col lg:flex-row lg:items-center justify-between gap-4">

													<div>
														<h2 class="text-xl font-semibold">
															Add / Edit Blog
														</h2>

														<p class="text-sm text-muted-foreground mt-1">
															Manage the hero section, blog information and featured image.
														</p>
													</div>

												</div>


												<div class="p-6 space-y-6">
													<!-- ========================================= -->
													<!-- HERO BANNER -->
													<!-- ========================================= -->

													<section class="rounded-2xl border border-border bg-background p-5">

														<div class="mb-5">

															<h3 class="text-sm font-semibold">
																1. Hero Banner
															</h3>

															<p class="text-xs text-muted-foreground mt-1">
																Manage the top section of the blog page.
															</p>

														</div>


														<div class="grid xl:grid-cols-2 gap-5">

															<!-- Left -->

															<div class="space-y-5">

																<div class="xl:col-span-2">

    <label class="text-sm font-medium mb-2 block">
        Blog Title
    </label>

    <input type="text"
        name="blog_title"
        id="blog_title"
        placeholder="Enter blog title"
        class="w-full h-11 rounded-xl border border-input bg-background px-4"
        value="<?php echo isset($blog->blog_title) ? $blog->blog_title : ''; ?>">

</div>

<div class="xl:col-span-2">

    <label class="text-sm font-medium mb-2 block">
        Blog Slug
    </label>

    <input type="text"
        name="slug"
        id="blog_slug"
        placeholder="Enter blog slug"
        class="w-full h-11 rounded-xl border border-input bg-background px-4"
        value="<?php echo isset($blog->slug) ? $blog->slug : ''; ?>">

    <p class="text-xs text-muted-foreground mt-1">
        Example: the-future-of-cybersecurity
    </p>

</div>

																<div>

																	<div class="flex items-center justify-between mb-2">
																		<label class="text-sm font-medium block">
																			Hero Description
																		</label>
																		<span id="heroDescCount" class="text-xs text-muted-foreground">0 chars</span>
																	</div>

																	<textarea rows="5" name="hero_description" id="hero_description"
																		placeholder="Enter hero description..."
																		oninput="document.getElementById('heroDescCount').textContent = this.value.length + ' chars'"
																		class="w-full rounded-xl border border-input bg-background px-4 py-3"><?php echo isset($blog->hero_description)?$blog->hero_description:''; ?></textarea>

																</div>

															</div>


															<!-- Right -->

															<div>

																<label class="text-sm font-medium mb-2 block">
																	Hero Background Image
																</label>

																<div
																	class="rounded-2xl border-2 border-dashed border-input bg-card p-6">

																	<!-- Preview -->
																	<div class="flex justify-center mb-4">
																		<div class="relative inline-block">

																			<img id="bgImagePreview"
																				src="<?php echo (!empty($blog->bg_img)) ? base_url('uploads/'.$blog->bg_img) : 'https://placehold.co/300x180?text=No+Image'; ?>"
																				class="w-72 h-44 object-cover rounded-xl border"
																				alt="Hero Background Preview">

																			<button type="button" id="removeBgImage"
																				class="absolute -top-2 -right-2 h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition <?php echo (!empty($blog->bg_img)) ? '' : 'hidden'; ?>">
																				✕
																			</button>

																		</div>
																	</div>

																	<!-- Upload -->
																	 <input type="file" name="bg_img"
																				id="bg_img" accept="image/*"
																				class="block w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-primary file:text-white file:cursor-pointer cursor-pointer">

																			<?php if (!empty($blog->bg_img)) { ?>
																			<p id="currentBgFile"
																				class="mt-2 text-sm text-green-600">
																				Current File:
																				<strong><?php echo $blog->bg_img; ?></strong>
																			</p>
																			<?php } else { ?>
																			<p id="currentBgFile"
																				class="mt-2 text-sm text-green-600"></p>
																			<?php } ?>

																</div>

															</div>

														</div>

													</section>



													<!-- ========================================= -->
													<!-- BLOG INFORMATION -->
													<!-- ========================================= -->

													<section class="rounded-2xl border border-border bg-background p-5">

														<div class="mb-5">

															<h3 class="text-sm font-semibold">
																2. Blog Information
															</h3>

															<p class="text-xs text-muted-foreground mt-1">
																Basic information displayed on the blog page.
															</p>

														</div>


														<div class="grid xl:grid-cols-2 gap-5">

															<div class="xl:col-span-2">

																<label class="text-sm font-medium mb-2 block">
																	Blog Title
																</label>

																<input type="text" name="blog_title"
																	placeholder="The Future of Cybersecurity: Trends and Technologies Every Business Should Know"
																	class="w-full h-11 rounded-xl border border-input bg-background px-4"
																	value="<?php echo isset($blog->blog_title)?$blog->blog_title:''; ?>">

															</div>


															<div class="xl:col-span-2">

																<div class="flex items-center justify-between mb-2">
																	<label class="text-sm font-medium block">
																		Blog Description
																	</label>
																	<span id="blogDescCount" class="text-xs text-muted-foreground">0 chars</span>
																</div>

																<textarea rows="6" name="blog_description" id="blog_description"
																	placeholder="Enter short introduction..."
																	oninput="document.getElementById('blogDescCount').textContent = this.value.length + ' chars'"
																	class="w-full rounded-xl border border-input bg-background px-4 py-3"><?php echo isset($blog->blog_description)?$blog->blog_description:''; ?></textarea>

															</div>


															<div class="xl:col-span-2">

																<label class="text-sm font-medium mb-2 block">
																	Featured Image
																</label>

																<div
																	class="rounded-2xl border-2 border-dashed border-input bg-card p-6">

																	<!-- Preview -->
																	<div class="flex justify-center mb-4">
																		<div class="relative inline-block">

																			<img id="featuredImagePreview"
																				src="<?php echo (!empty($blog->featured_img)) ? base_url('uploads/'.$blog->featured_img) : 'https://placehold.co/300x180?text=No+Image'; ?>"
																				class="w-72 h-44 object-cover rounded-xl border"
																				alt="Featured Image Preview">

																			<button type="button" id="removeFeaturedImage"
																				class="absolute -top-2 -right-2 h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition <?php echo (!empty($blog->featured_img)) ? '' : 'hidden'; ?>">
																				✕
																			</button>

																		</div>
																	</div>

																	<!-- Upload -->
																	<input type="file" id="featured_img" name="featured_img"
																		accept="image/png,image/jpeg,image/jpg,image/webp"
																		class="block w-full text-sm
																		file:mr-4
																		file:py-2
																		file:px-4
																		file:rounded-lg
																		file:border-0
																		file:bg-primary
																		file:text-white
																		file:cursor-pointer
																		cursor-pointer">

																			<?php if (!empty($blog->featured_img)) { ?>
																			<p id="currentFeaturedFile"
																				class="mt-2 text-sm text-green-600">
																				Current File:
																				<strong><?php echo $blog->featured_img; ?></strong>
																			</p>
																			<?php } else { ?>
																			<p id="currentFeaturedFile"
																				class="mt-2 text-sm text-green-600"></p>
																			<?php } ?>

																</div>

															</div>

														</div>

															</section>

												</div>

											</section>




											<section class="rounded-2xl border border-border bg-background p-5">

												<div class="flex items-center justify-between mb-5">

													<div>

														<h3 class="text-sm font-semibold">
															3. Blog Content
														</h3>
													</div>
												</div>



												<!-- Editor -->

												<div class="space-y-3">

													<label class="text-sm font-medium">
														Blog Content
													</label>

													<textarea id="blog_content" name="blog_content" rows="20"
														class="w-full rounded-2xl border border-input bg-background p-4"
														placeholder="Write your complete blog here..."><?php echo isset($blog->blog_content)?$blog->blog_content:''; ?></textarea>

												</div>
											</section>
											<div class="flex gap-2">
												<button
													class="h-10 px-5 rounded-xl bg-emerald-600 text-white text-sm font-medium">
													Create Blog
												</button>

											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</form>

				</main>
			</div>
		</div>

	</div>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const blogId = document.querySelector("input[name='id']")?.value || '';

			// ========== Hero Background Image Delete ==========
			const removeBgBtn = document.getElementById("removeBgImage");
			const bgPreview = document.getElementById("bgImagePreview");
			const bgInput = document.getElementById("bg_img");

			function resetBgToPlaceholder() {
				bgPreview.src = "https://placehold.co/300x180?text=No+Image";
				removeBgBtn.classList.add("hidden");
				if (bgInput) bgInput.value = "";
			}

			if (removeBgBtn) {
				removeBgBtn.addEventListener("click", function() {
					if (!confirm("Are you sure you want to delete this background image?")) return;

					if (blogId) {
						fetch("<?php echo base_url('admin/delete_blog_image/'); ?>" + blogId)
							.then(response => response.json())
							.then(data => {
								if (data.status === "success") {
									resetBgToPlaceholder();
								} else {
									alert("Failed to delete image.");
								}
							})
							.catch(() => alert("An error occurred."));
					} else {
						resetBgToPlaceholder();
					}
				});
			}

			if (bgInput) {
				bgInput.addEventListener("change", function(e) {
					const file = e.target.files[0];
					if (file) {
						const reader = new FileReader();
						reader.onload = function(event) {
							bgPreview.src = event.target.result;
							removeBgBtn.classList.remove("hidden");
						};
						reader.readAsDataURL(file);
					}
				});
			}

			// ========== Featured Image Delete ==========
			const removeFeaturedBtn = document.getElementById("removeFeaturedImage");
			const featuredPreview = document.getElementById("featuredImagePreview");
			const featuredInput = document.getElementById("featured_img");

			function resetFeaturedToPlaceholder() {
				featuredPreview.src = "https://placehold.co/300x180?text=No+Image";
				removeFeaturedBtn.classList.add("hidden");
				if (featuredInput) featuredInput.value = "";
			}

			if (removeFeaturedBtn) {
				removeFeaturedBtn.addEventListener("click", function() {
					if (!confirm("Are you sure you want to delete this featured image?")) return;

					if (blogId) {
						fetch("<?php echo base_url('admin/delete_blog_featured_image/'); ?>" + blogId)
							.then(response => response.json())
							.then(data => {
								if (data.status === "success") {
									resetFeaturedToPlaceholder();
								} else {
									alert("Failed to delete image.");
								}
							})
							.catch(() => alert("An error occurred."));
					} else {
						resetFeaturedToPlaceholder();
					}
				});
			}

			if (featuredInput) {
				featuredInput.addEventListener("change", function(e) {
					const file = e.target.files[0];
					if (file) {
						const reader = new FileReader();
						reader.onload = function(event) {
							featuredPreview.src = event.target.result;
							removeFeaturedBtn.classList.remove("hidden");
						};
						reader.readAsDataURL(file);
					}
				});
			}
		});
	</script>
	<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
	<script>
['hero_description', 'blog_description', 'blog_content'].forEach(function(id) {
    const el = document.getElementById(id);
    if (el) {
        ClassicEditor.create(el).catch(error => console.error(error));
    }
});
</script>

<script>
ClassicEditor
    .create(document.querySelector('#blog_content'), {
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
            '|',
            'undo',
            'redo'
        ]
    })
    .catch(error => {
        console.error(error);
    });
</script>
	<script src="script.js"></script>
</body>

</html>
