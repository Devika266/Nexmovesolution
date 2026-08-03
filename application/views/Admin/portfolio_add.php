<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Nexmove Portfolio Management - Desktop — Exported from UXMagic Copilot">
	<title>Nexmove Portfolio Management - Desktop</title>
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
<?php
$is_edit = isset($portfolio->id) && !empty($portfolio->id);
?>

<body>
	<div data-page="nexmove-portfolio-management-desktop">

		<div class="min-h-screen w-full bg-background text-foreground font-sans flex flex-col relative">
			<div class="absolute inset-x-0 top-0 h-56 bg-gradient-to-r from-primary/10 via-background to-tertiary/10">
			</div>
			<div class="flex flex-1 w-full relative">
				<?php $this->load->view('layout/sidebar')?>
				<main class="flex-1 min-w-0 flex flex-col relative">
					<form method="post" action="<?= base_url('admin/portfolio_settings'); ?>"
						enctype="multipart/form-data">

						<input type="hidden" name="id" value="<?= isset($portfolio->id) ? $portfolio->id : ''; ?>">

						<div class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 pb-32 space-y-6">

							<div class="col-12 gap-6 items-start">
								<div class="2xl:col-span-8 space-y-6">
									<section
										class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden">
										<div
											class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
											<div>
												<div class="flex items-center gap-2 flex-wrap">
													<h2 class="text-lg font-heading font-semibold">
														Add / Edit Project</h2>
												</div>
												<p class="text-sm text-muted-foreground mt-1">
													Premium editing workspace for
													project storytelling,
													media management, metadata, and case
													study
													publishing.</p>
											</div>
										</div>
										<div class="p-5 sm:p-6 space-y-5 ">


											<!-- ========================================= -->
											<!-- 1. Project Details -->
											<!-- ========================================= -->

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-5">

												<!-- Header -->
												<div class="flex items-center justify-between">

													<div>
														<h3 class="text-sm font-semibold">
															1. Project Details
														</h3>

														<p class="text-xs text-muted-foreground mt-1">
															Enter the basic information
															about
															the portfolio project.
														</p>
													</div>

												</div>

												<!-- Form -->
												<div class="grid grid-cols-1 xl:grid-cols-2 gap-5">

													<!-- Project Name -->
													<div>
														<label class="block text-sm font-medium mb-2">
															Project Name <span class="text-red-500">*</span>
														</label>

														<input type="text" name="project_name"
															class="w-full rounded-xl border border-input px-4 py-3"
															placeholder="MediFlow Health Platform"
															value="<?php echo isset($portfolio->project_name)?$portfolio->project_name:''; ?>"
															required>
													</div>

													<!-- Slug -->
													<div>
														<label class="block text-sm font-medium mb-2">

															Slug

														</label>

														<input type="text" name="slug"
															class="w-full rounded-xl border border-input px-4 py-3"
															placeholder="mediflow-health-platform"
															value="<?php echo isset($portfolio->slug)?$portfolio->slug:''; ?>">

														<small class="text-xs text-muted-foreground">
															Leave blank to auto generate.
														</small>

													</div>

													<!-- Client Name -->
													<div>

														<label class="block text-sm font-medium mb-2">

															Client Name

														</label>

														<input type="text" name="client_name"
															class="w-full rounded-xl border border-input px-4 py-3"
															placeholder="ABC Technologies"
															value="<?php echo isset($portfolio->slug)?$portfolio->slug:''; ?>">

													</div>

													<!-- Service -->
													<div>

														<label class="block text-sm font-medium mb-2">

															Service

														</label>

														<input type="text" name="service"
															class="w-full rounded-xl border border-input px-4 py-3"
															placeholder="Website Development"
															value="<?php echo isset($portfolio->service)?$portfolio->service:''; ?>">

													</div>

													<!-- Platform -->
													<div>

														<label class="block text-sm font-medium mb-2">

															Platform

														</label>

														<input type="text" name="platform"
															class="w-full rounded-xl border border-input px-4 py-3"
															placeholder="Business Website"
															value="<?php echo isset($portfolio->platform)?$portfolio->platform:''; ?>">

													</div>

													<!-- Project Date -->
													<div>

														<label class="block text-sm font-medium mb-2">

															Project Date

														</label>

														<input type="month" name="project_date"
															class="w-full rounded-xl border border-input px-4 py-3"
															value="<?php echo isset($portfolio->project_date)?$portfolio->project_date:''; ?>">

													</div>
												</div>

											</section>

											<!-- ===================================================== -->
											<!-- 2. Hero Banner + Main Project Image -->
											<!-- ===================================================== -->

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-6">

												<!-- Header -->
												<div class="flex items-center justify-between">

													<div>
														<h3 class="text-sm font-semibold">
															2. Hero Banner & Main Image
														</h3>

														<p class="text-xs text-muted-foreground mt-1">
															Manage the portfolio banner and
															featured project image.
														</p>
													</div>
												</div>

												<!-- Main Project Image -->

												<div class="rounded-2xl border border-border bg-card p-5 space-y-5">

													<h4 class="text-sm font-semibold">

														Main Project Image

													</h4>

													<div
														class="rounded-2xl border-2 border-dashed border-border bg-muted/30 p-6 text-center">

														<!-- Preview -->
														<div class="flex justify-center mb-4">
															<div class="relative inline-block">

																<img id="mainPreview"
																	src="<?php echo (!empty($portfolio->project_img)) ? base_url('uploads/'.$portfolio->project_img) : 'https://placehold.co/600x350?text=No+Image'; ?>"
																	class="w-72 h-44 object-cover rounded-xl border"
																	alt="Main Preview">

																<button type="button" id="deleteMainImage"
																	class="absolute -top-2 -right-2 h-8 w-8 rounded-full bg-red-600 text-white flex items-center justify-center hover:bg-red-700 transition <?php echo (!empty($portfolio->project_img)) ? '' : 'hidden'; ?>">
																	✕
																</button>

															</div>
														</div>

														<input type="file" name="main_image" id="mainImage"
																accept="image/*"
																class="block w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-primary file:text-white file:cursor-pointer cursor-pointer">

															<?php if (!empty($portfolio->project_img)) { ?>
															<p id="currentMainFile"
																class="mt-2 text-sm text-green-600">
																Current File:
																<strong><?php echo $portfolio->project_img; ?></strong>
															</p>
															<?php } else { ?>
															<p id="currentMainFile"
																class="mt-2 text-sm text-green-600"></p>
															<?php } ?>

													</div>

												</div>

											</section>

											<script>
												document.addEventListener("DOMContentLoaded", function () {
const portfolioId = document.querySelector("input[name='id']")?.value || '';

													// ========== Main Image ==========
													const deleteMainBtn = document.getElementById("deleteMainImage");
													const mainPreview = document.getElementById("mainPreview");
													const mainInput = document.getElementById("mainImage");

													function resetMainToPlaceholder() {
														mainPreview.src = "https://placehold.co/600x350?text=No+Image";
														deleteMainBtn.classList.add("hidden");
														if (mainInput) mainInput.value = "";
													}

													if (deleteMainBtn) {
														deleteMainBtn.addEventListener("click", function () {
															if (!confirm("Are you sure you want to delete this main image?")) return;

															if (portfolioId) {
																fetch("<?php echo base_url('admin/delete_portfolio_main_image/'); ?>" +
																		portfolioId)
																	.then(response => response.json())
																	.then(data => {
																		if (data.status === "success") {
																			resetMainToPlaceholder();
																		} else {
																			alert("Failed to delete image.");
																		}
																	})
																	.catch(() => alert("An error occurred."));
															} else {
																resetMainToPlaceholder();
															}
														});
													}

													if (mainInput) {
														mainInput.addEventListener("change", function (e) {
															const file = e.target.files[0];
															if (file) {
																const reader = new FileReader();
																reader.onload = function (event) {
																	mainPreview.src = event.target.result;
																	deleteMainBtn.classList.remove("hidden");
																};
																reader.readAsDataURL(file);
															}
														});
													}
												});

											</script>

											<!-- ===================================================== -->
											<!-- 3. Project Overview -->
											<!-- ===================================================== -->

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-5">

												<!-- Header -->
												<div class="flex items-center justify-between">

													<div>
														<h3 class="text-sm font-semibold">
															3. Project Overview
														</h3>

														<p class="text-xs text-muted-foreground mt-1">
															Add the project heading,
															overview
															and key highlights.
														</p>
													</div>

													<button type="button" id="addPoint"
														class="h-10 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">

														+ Add Bullet Point

													</button>

												</div>

												<!-- Overview -->

												<div class="rounded-2xl border border-border bg-card p-5">

													<div class="grid grid-cols-1 gap-5">

														<!-- Heading -->

														<div>

															<label class="block text-sm font-medium mb-2">

																Section Heading

															</label>

															<input type="text" name="overview_title"
																class="w-full rounded-xl border border-input px-4 py-3"
																placeholder="Transparent Hardware Innovation"
																value="<?php echo isset($portfolio->section_heading)?$portfolio->section_heading:''; ?>">

														</div>

														<!-- Description -->

														<div>

															<label class="block text-sm font-medium mb-2">

																Overview Description

															</label>
															<textarea id="overview_description"
    rows="6"
    name="overview_description"
    class="w-full rounded-xl border border-input px-4 py-3"
    placeholder="Write project overview..."><?php echo isset($portfolio->overview_description)?$portfolio->overview_description:''; ?></textarea>
															
														</div>

													</div>

												</div>

												<!-- Bullet Points -->

												<div id="pointContainer">

													<!-- Default Card -->

													<div
														class="point-card rounded-2xl border border-border bg-card p-5 mb-4">

														<div class="flex items-center justify-between mb-5">

															<div>

																<h4 class="text-sm font-semibold">

																	Bullet Point 01

																</h4>

																<p class="text-xs text-muted-foreground">

																	Project Highlight

																</p>

															</div>

															<button type="button"
																class="deletePoint h-9 px-4 rounded-lg border border-red-500 text-red-500 hover:bg-red-500 hover:text-white">

																Delete

															</button>

														</div>

														<div>

															<label class="block text-sm font-medium mb-2">

																Bullet Text

															</label>

															<input type="text" name="overview_points[]"
																class="w-full rounded-xl border border-input px-4 py-3"
																placeholder="Optimize resource allocation"
																value="<?php echo isset($portfolio->bullet_point)?$portfolio->bullet_point:''; ?>">

														</div>

													</div>

												</div>

											</section>

											<script>
												let pointCount = 1;

												document.getElementById('addPoint').addEventListener('click', function () {

													pointCount++;

													let html = `
                                                            <div class="point-card rounded-2xl border border-border bg-card p-5 mb-4">

                                                                <div class="flex items-center justify-between mb-5">

                                                                    <div>

                                                                        <h4 class="text-sm font-semibold">

                                                                            Bullet Point ${String(pointCount).padStart(2,'0')}

                                                                        </h4>

                                                                        <p class="text-xs text-muted-foreground">

                                                                            Project Highlight

                                                                        </p>

                                                                    </div>

                                                                    <button
                                                                        type="button"
                                                                        class="deletePoint h-9 px-4 rounded-lg border border-red-500 text-red-500 hover:bg-red-500 hover:text-white">

                                                                        Delete

                                                                    </button>

                                                                </div>

                                                                <div>

                                                                    <label class="block text-sm font-medium mb-2">

                                                                        Bullet Text

                                                                    </label>

                                                                    <input
                                                                        type="text"
                                                                        name="overview_points[]"
                                                                        class="w-full rounded-xl border border-input px-4 py-3"
                                                                        placeholder="Enter project point">

                                                                </div>

                                                            </div>`;

													document.getElementById('pointContainer').insertAdjacentHTML('beforeend', html);

												});


												document.addEventListener('click', function (e) {

													if (e.target.classList.contains('deletePoint')) {

														if (document.querySelectorAll('.point-card').length > 1) {

															e.target.closest('.point-card').remove();

															updatePoints();

														}

													}

												});


												function updatePoints() {

													document.querySelectorAll('.point-card').forEach(function (card, index) {

														card.querySelector('h4').innerHTML =
															'Bullet Point ' + String(index + 1).padStart(2, '0');

													});

													pointCount = document.querySelectorAll('.point-card').length;

												}

											</script>

											<!-- ===================================================== -->
											<!-- 4. Final Result & SEO Settings -->
											<!-- ===================================================== -->

											<section
												class="rounded-2xl border border-border bg-background p-5 space-y-6">

												<!-- Header -->
												<div class="flex items-center justify-between">

													<div>
														<h3 class="text-sm font-semibold">
															4. Final Result
														</h3>

														<p class="text-xs text-muted-foreground mt-1">
															Showcase the project outcome and
															optimize the portfolio page for
															search engines.
														</p>
													</div>
												</div>

												<!-- ===================================================== -->
												<!-- Final Result -->
												<!-- ===================================================== -->

												<div class="rounded-2xl border border-border bg-card p-5 space-y-5">

													<h4 class="text-sm font-semibold">
														Final Result Section
													</h4>

													<div class="grid grid-cols-1 gap-5">

														<div>

															<label class="block text-sm font-medium mb-2">

																Final Result Heading

															</label>

															<input type="text" name="result_title"
																class="w-full rounded-xl border border-input px-4 py-3"
																placeholder="Exceptional Results"
																value="<?php echo isset($portfolio->result_heading)?$portfolio->result_heading:''; ?>">

														</div>

														<div>

															<label class="block text-sm font-medium mb-2">

																Description

															</label>

															<textarea id="result_description" rows="5" name="result_description"
																class="w-full rounded-xl border border-input px-4 py-3"
																placeholder="Describe the project results..."><?php echo isset($portfolio->result_description)?$portfolio->result_description:''; ?></textarea>
														</div>
													</div>
												</div>

												<!-- ===================================================== -->
												<!-- Buttons -->
												<!-- ===================================================== -->

												<div class="border-t border-border pt-6">

													<div class="flex flex-wrap justify-end gap-3">

														<button type="reset"
															class="h-11 px-6 rounded-xl border border-border bg-card hover:bg-muted">

															Reset

														</button>

														<button type="submit" name="publish" value="publish"
															class="h-11 px-6 rounded-xl bg-primary text-primary-foreground">

															<?php echo $is_edit ? 'Save Changes' : 'Create Portfolio'; ?>

														</button>

													</div>

												</div>

											</section>

											<script>
												function previewImage(inputId, previewId) {

													document.getElementById(inputId).addEventListener("change", function (e) {

														const file = e.target.files[0];

														if (file) {

															const reader = new FileReader();

															reader.onload = function (event) {

																document.getElementById(previewId).src = event.target.result;

																document.getElementById(previewId).classList.remove("hidden");

															}

															reader.readAsDataURL(file);

														}

													});

												}

												previewImage("resultImage", "resultPreview");
												previewImage("seoImage", "seoPreview");

											</script>
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
	<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
[
    'overview_description',
    'result_description'
].forEach(function(id){

    const editor = document.getElementById(id);

    if(editor){
        ClassicEditor.create(editor,{
            toolbar:[
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
        }).catch(error=>console.error(error));
    }

});
</script>
	<script src="script.js"></script>
</body>

</html>
