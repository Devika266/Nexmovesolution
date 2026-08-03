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

<body>
	<div data-page="nexmove-service-management-desktop">

		<div class="min-h-screen w-full bg-background text-foreground font-sans flex flex-col relative">
			<div class="absolute inset-x-0 top-0 h-56 bg-gradient-to-r from-primary/10 via-background to-tertiary/10">
			</div>
			<div class="flex flex-1 w-full relative">
				<?php $this->load->view('layout/sidebar')?>

				<main class="flex-1 min-w-0 flex flex-col relative">

					<div class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 pb-32 space-y-6">
						<section
							class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md p-5 sm:p-6 space-y-5">
							<div class="flex flex-col xl:flex-row xl:items-center justify-between gap-4">
								<div>
									<h2 class="text-lg font-heading font-semibold">Service List</h2>
									<p class="text-sm text-muted-foreground">Manage ordering, visibility, featured
										status, and content quality across all service pages.</p>
								</div>
								<div class="flex items-center gap-2 text-xs text-muted-foreground">
									<iconify-icon icon="lucide:info" class="text-sm"></iconify-icon><span>Bulk edit
										available • Drag rows to reorder in board view</span>
								</div>
							</div>
							<div class="grid grid-cols-1 xl:grid-cols-12 gap-4">
								<div class="xl:col-span-4 relative">
									<iconify-icon icon="lucide:search"
										class="absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground text-base">
									</iconify-icon>
									<input type="text" placeholder="Search services"
										class="w-full h-11 rounded-xl border border-input bg-background pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-ring/20 focus:border-primary transition-all">
								</div>
								<div class="xl:col-span-5 flex flex-wrap gap-2">
									<button
										class="h-11 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">Published</button>
									<button
										class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted transition-all">Draft</button>
									<button
										class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted transition-all">Featured</button>
									<button
										class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted transition-all">Bulk
										Actions</button>
								</div>
								<div class="xl:col-span-3 flex flex-wrap gap-3 justify-start xl:justify-end">
									<div
										class="h-11 px-4 rounded-xl border border-border bg-background text-sm flex items-center gap-2">
										<span class="text-muted-foreground">Sort</span><span class="font-medium">Display
											Order</span>
										<iconify-icon icon="lucide:arrow-right" class="text-xs text-muted-foreground">
										</iconify-icon>
									</div>
									<div
										class="h-11 px-4 rounded-xl border border-border bg-background text-sm flex items-center gap-2">
										<span class="text-muted-foreground">Page</span><span class="font-medium">1 /
											4</span></div>
								</div>
							</div>
							<div class="overflow-x-auto max-h-[800px] rounded-2xl border border-border">
								<table class="w-full text-sm bg-background">
									<thead class="bg-muted/60 text-muted-foreground">
										<tr>
											<th class="text-left px-5 py-4 font-semibold">Service Image</th>
											<th class="text-left px-5 py-4 font-semibold">Icon</th>
											<th class="text-left px-5 py-4 font-semibold">Service Title</th>
											<th class="text-left px-5 py-4 font-semibold">Slug</th>
											<th class="text-left px-5 py-4 font-semibold">Display Order</th>
											<th class="text-left px-5 py-4 font-semibold">Status</th>
											<th class="text-left px-5 py-4 font-semibold">Featured</th>
											<th class="text-left px-5 py-4 font-semibold">Last Updated</th>
											<th class="text-left px-5 py-4 font-semibold">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr class="border-t border-border hover:bg-muted/40 transition-all">
											<td class="px-5 py-4">
												<div
													class="h-14 w-20 rounded-xl bg-gradient-to-r from-secondary to-primary/10 border border-border">
												</div>
											</td>
											<td class="px-5 py-4">
												<div
													class="h-11 w-11 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
													<iconify-icon icon="lucide:monitor" class="text-lg"></iconify-icon>
												</div>
											</td>
											<td class="px-5 py-4">
												<div>
													<p class="font-semibold">Web Development</p>
													<p class="text-xs text-muted-foreground">Custom scalable web
														platforms</p>
												</div>
											</td>
											<td class="px-5 py-4 text-muted-foreground">/services/web-development</td>
											<td class="px-5 py-4">02</td>
											<td class="px-5 py-4"><span
													class="px-2.5 py-1 rounded-full bg-emerald-500/10 text-emerald-600 font-semibold">Published</span>
											</td>
											<td class="px-5 py-4"><span
													class="px-2.5 py-1 rounded-full bg-muted text-muted-foreground font-semibold">No</span>
											</td>
											<td class="px-5 py-4 text-muted-foreground">Yesterday, 05:20 PM</td>
											<td class="px-5 py-4">
												<div class="flex items-center gap-2"><button
														class="h-9 px-3 rounded-lg bg-primary text-primary-foreground">Edit</button><button
														class="h-9 px-3 rounded-lg border border-border bg-card hover:bg-muted">Preview</button><button
														class="h-9 w-9 rounded-lg border border-border bg-card hover:bg-muted">
														<iconify-icon icon="lucide:copy" class="text-base">
														</iconify-icon>
													</button><button
														class="h-9 w-9 rounded-lg border border-border bg-card hover:bg-muted">
														<iconify-icon icon="lucide:trash-2" class="text-base">
														</iconify-icon>
													</button></div>
											</td>
										</tr>
										<tr class="border-t border-border hover:bg-muted/40 transition-all">
											<td class="px-5 py-4">
												<div
													class="h-14 w-20 rounded-xl bg-gradient-to-r from-tertiary/20 to-secondary border border-border">
												</div>
											</td>
											<td class="px-5 py-4">
												<div
													class="h-11 w-11 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center">
													<iconify-icon icon="lucide:smartphone" class="text-lg">
													</iconify-icon>
												</div>
											</td>
											<td class="px-5 py-4">
												<div>
													<p class="font-semibold">Mobile App Development</p>
													<p class="text-xs text-muted-foreground">iOS and Android builds</p>
												</div>
											</td>
											<td class="px-5 py-4 text-muted-foreground">/services/mobile-app-development
											</td>
											<td class="px-5 py-4">03</td>
											<td class="px-5 py-4"><span
													class="px-2.5 py-1 rounded-full bg-amber-500/10 text-amber-600 font-semibold">Draft</span>
											</td>
											<td class="px-5 py-4"><span
													class="px-2.5 py-1 rounded-full bg-primary/10 text-primary font-semibold">Featured</span>
											</td>
											<td class="px-5 py-4 text-muted-foreground">2 days ago</td>
											<td class="px-5 py-4">
												<div class="flex items-center gap-2"><button
														class="h-9 px-3 rounded-lg bg-primary text-primary-foreground">Edit</button><button
														class="h-9 px-3 rounded-lg border border-border bg-card hover:bg-muted">Preview</button><button
														class="h-9 w-9 rounded-lg border border-border bg-card hover:bg-muted">
														<iconify-icon icon="lucide:copy" class="text-base">
														</iconify-icon>
													</button><button
														class="h-9 w-9 rounded-lg border border-border bg-card hover:bg-muted">
														<iconify-icon icon="lucide:trash-2" class="text-base">
														</iconify-icon>
													</button></div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>

						<div class="grid grid-cols-1 2xl:grid-cols-12 gap-6 items-start">
							<div class="2xl:col-span-8 space-y-6">
								<section
									class="rounded-2xl border border-border bg-card/90 backdrop-blur-md shadow-md overflow-hidden">
									<div
										class="px-5 sm:px-6 py-5 border-b border-border bg-gradient-to-r from-background to-muted/60 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
										<div>
											<div class="flex items-center gap-2 flex-wrap">
												<h2 class="text-lg font-heading font-semibold">Add / Edit Service</h2>
												<span
													class="text-xs px-2 py-1 rounded-full bg-primary/10 text-primary">Editing:
													SEO Services</span>
											</div>
											<p class="text-sm text-muted-foreground mt-1">Enterprise CMS editor with
												structured content sections, live preview helpers, and responsive
												component patterns.</p>
										</div>
										<div class="flex flex-wrap items-center gap-2 text-xs text-muted-foreground">
											<span class="px-2 py-1 rounded-full bg-background border border-border">Ctrl
												+ S Save</span>
											<span class="px-2 py-1 rounded-full bg-background border border-border">Drag
												sections to reorder</span>
										</div>
									</div>
									<div class="p-5 sm:p-6 space-y-5 max-h-[800px] overflow-y-auto">
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
											<button
												class="h-10 px-4 rounded-xl border border-border bg-card text-sm font-medium">SEO</button>
											<button
												class="h-10 px-4 rounded-xl border border-border bg-card text-sm font-medium">Settings</button>
										</div>

										<section class="rounded-2xl border border-border bg-background p-5 space-y-5">
											<div class="flex items-center justify-between">
												<div>
													<h3 class="text-sm font-semibold">1. Basic Information</h3>
													<p class="text-xs text-muted-foreground mt-1">Core content,
														descriptions, and service summary.</p>
												</div><button
													class="h-9 px-3 rounded-lg border border-border bg-card text-sm">Collapse</button>
											</div>
											<div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
												<div class="space-y-2"><label class="text-sm font-semibold">Service
														Name</label>
													<div
														class="rounded-xl border border-input bg-card px-4 py-3 text-sm">
														SEO Services</div>
												</div>
												<div class="space-y-2">
													<div class="flex items-center justify-between"><label
															class="text-sm font-semibold">Slug</label><span
															class="text-xs text-muted-foreground">Auto generated</span>
													</div>
													<div
														class="rounded-xl border border-input bg-card px-4 py-3 text-sm text-muted-foreground">
														/services/seo-services</div>
												</div>
												<div class="space-y-2 xl:col-span-2">
													<div class="flex items-center justify-between"><label
															class="text-sm font-semibold">Short Description</label><span
															class="text-xs text-emerald-600">126 / 160</span></div>
													<div
														class="rounded-2xl border border-input bg-card px-4 py-4 text-sm text-muted-foreground">
														Accelerate growth with technical SEO, content strategy, local
														search optimization, and data-backed performance reporting.
													</div>
												</div>
												<div class="space-y-2 xl:col-span-2">
													<div class="flex items-center justify-between"><label
															class="text-sm font-semibold">Long Description</label><span
															class="text-xs text-muted-foreground">Rich Text
															Editor</span></div>
													<div class="rounded-2xl border border-input bg-card p-4 space-y-4">
														<div class="flex flex-wrap gap-2"><span
																class="px-3 py-1 rounded-full bg-muted text-xs">Heading</span><span
																class="px-3 py-1 rounded-full bg-muted text-xs">Bold</span><span
																class="px-3 py-1 rounded-full bg-muted text-xs">Italic</span><span
																class="px-3 py-1 rounded-full bg-muted text-xs">List</span><span
																class="px-3 py-1 rounded-full bg-muted text-xs">Link</span>
														</div>
														<div
															class="rounded-2xl border border-border bg-background p-4 text-sm text-muted-foreground leading-7">
															Nexmove delivers a full-funnel SEO program designed for
															visibility, traffic quality, and lead generation. Our team
															aligns technical audits, content opportunities, on-page
															improvements, and reporting automation to build sustainable
															rankings.</div>
													</div>
												</div>
											</div>
										</section>

										<section class="rounded-2xl border border-border bg-background p-5 space-y-5">
											<div class="flex items-center justify-between">
												<div>
													<h3 class="text-sm font-semibold">2. Service Images</h3>
													<p class="text-xs text-muted-foreground mt-1">Drag, crop, preview,
														and manage visual assets.</p>
												</div><span
													class="px-2 py-1 rounded-full bg-secondary text-secondary-foreground text-xs">3
													assets uploaded</span>
											</div>
											<div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
												<div
													class="rounded-2xl border-2 border-dashed border-border bg-muted/30 p-5 space-y-4">
													<div
														class="h-32 rounded-2xl bg-gradient-to-r from-primary/20 to-tertiary/20 border border-border">
													</div>
													<div>
														<p class="text-sm font-semibold">Banner Image</p>
														<p class="text-xs text-muted-foreground mt-1">Recommended 1600 ×
															900 px</p>
													</div>
													<div class="flex gap-2"><button
															class="h-10 px-3 rounded-lg bg-primary text-primary-foreground text-sm">Replace</button><button
															class="h-10 px-3 rounded-lg border border-border bg-card text-sm">Remove</button>
													</div>
													<div class="space-y-2">
														<div class="flex items-center justify-between text-xs">
															<span>Upload Progress</span><span>92%</span></div>
														<div class="h-2 rounded-full bg-background overflow-hidden">
															<div
																class="h-full w-11/12 bg-gradient-to-r from-primary to-tertiary rounded-full">
															</div>
														</div>
													</div>
												</div>
												<div
													class="rounded-2xl border-2 border-dashed border-border bg-muted/30 p-5 space-y-4">
													<div
														class="h-32 rounded-2xl bg-gradient-to-br from-secondary to-primary/10 border border-border flex items-center justify-center">
														<div
															class="h-16 w-16 rounded-2xl bg-card border border-border flex items-center justify-center text-primary">
															<iconify-icon icon="lucide:star" class="text-2xl">
															</iconify-icon>
														</div>
													</div>
													<div>
														<p class="text-sm font-semibold">Featured Image</p>
														<p class="text-xs text-muted-foreground mt-1">Recommended 1200 ×
															800 px</p>
													</div>
													<div class="flex gap-2"><button
															class="h-10 px-3 rounded-lg bg-primary text-primary-foreground text-sm">Replace</button><button
															class="h-10 px-3 rounded-lg border border-border bg-card text-sm">Remove</button>
													</div>
													<div
														class="rounded-xl border border-border bg-background px-3 py-2 text-xs text-muted-foreground">
														Crop enabled before upload</div>
												</div>
												<div
													class="rounded-2xl border-2 border-dashed border-border bg-muted/30 p-5 space-y-4">
													<div
														class="h-32 rounded-2xl bg-background border border-border flex items-center justify-center">
														<div
															class="h-20 w-20 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
															<iconify-icon icon="lucide:globe" class="text-3xl">
															</iconify-icon>
														</div>
													</div>
													<div>
														<p class="text-sm font-semibold">Service Icon</p>
														<p class="text-xs text-muted-foreground mt-1">Recommended 256 ×
															256 px SVG/PNG</p>
													</div>
													<div class="flex gap-2"><button
															class="h-10 px-3 rounded-lg bg-primary text-primary-foreground text-sm">Replace</button><button
															class="h-10 px-3 rounded-lg border border-border bg-card text-sm">Remove</button>
													</div>
													<div
														class="rounded-xl border border-border bg-background px-3 py-2 text-xs text-muted-foreground">
														Transparent background preferred</div>
												</div>
											</div>
										</section>

										<section class="rounded-2xl border border-border bg-background p-5 space-y-5">
											<div class="flex items-center justify-between">
												<div>
													<h3 class="text-sm font-semibold">3. What We Offer</h3>
													<p class="text-xs text-muted-foreground mt-1">Dynamic repeatable
														cards with drag &amp; drop ordering.</p>
												</div><button
													class="h-10 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">+
													Add Offer</button>
											</div>
											<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
												<div class="space-y-4">
													<div class="rounded-2xl border border-border bg-card p-4 space-y-3">
														<div class="flex items-center justify-between">
															<div class="flex items-center gap-3">
																<div
																	class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
																	<iconify-icon icon="lucide:search" class="text-lg">
																	</iconify-icon>
																</div>
																<div>
																	<p class="text-sm font-semibold">Keyword Research
																	</p>
																	<p class="text-xs text-muted-foreground">High-intent
																		opportunity mapping</p>
																</div>
															</div><button
																class="h-9 w-9 rounded-lg border border-border bg-background">
																<iconify-icon icon="lucide:move" class="text-base">
																</iconify-icon>
															</button>
														</div>
														<div class="grid grid-cols-1 gap-3">
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Offer Title</div>
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Icon Picker: Search</div>
															<div
																class="rounded-2xl border border-input bg-background px-4 py-4 text-sm text-muted-foreground">
																Target the search terms that matter most to your
																audience and business objectives.</div>
														</div>
														<div class="flex justify-end"><button
																class="h-9 px-3 rounded-lg border border-border bg-background text-sm">Delete
																Offer</button></div>
													</div>
													<div class="rounded-2xl border border-border bg-card p-4 space-y-3">
														<div class="flex items-center justify-between">
															<div class="flex items-center gap-3">
																<div
																	class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
																	<iconify-icon icon="lucide:activity"
																		class="text-lg"></iconify-icon>
																</div>
																<div>
																	<p class="text-sm font-semibold">Technical Audit</p>
																	<p class="text-xs text-muted-foreground">Performance
																		and crawl analysis</p>
																</div>
															</div><button
																class="h-9 w-9 rounded-lg border border-border bg-background">
																<iconify-icon icon="lucide:move" class="text-base">
																</iconify-icon>
															</button>
														</div>
														<div class="grid grid-cols-1 gap-3">
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Offer Title</div>
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Icon Picker: Activity</div>
															<div
																class="rounded-2xl border border-input bg-background px-4 py-4 text-sm text-muted-foreground">
																Resolve structural issues, crawl blockers, and technical
																gaps before they impact rankings.</div>
														</div>
														<div class="flex justify-end"><button
																class="h-9 px-3 rounded-lg border border-border bg-background text-sm">Delete
																Offer</button></div>
													</div>
												</div>
												<div class="rounded-2xl border border-border bg-muted/30 p-5 space-y-4">
													<div class="flex items-center justify-between">
														<h4 class="text-sm font-semibold">Feature Card Preview</h4><span
															class="text-xs text-muted-foreground">Live layout</span>
													</div>
													<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
														<div
															class="rounded-2xl border border-border bg-background p-4 shadow-sm">
															<div
																class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
																<iconify-icon icon="lucide:search" class="text-lg">
																</iconify-icon>
															</div>
															<p class="text-sm font-semibold mt-4">Keyword Research</p>
															<p class="text-xs text-muted-foreground mt-2">Intent-driven
																content planning and SERP opportunity analysis.</p>
														</div>
														<div
															class="rounded-2xl border border-border bg-background p-4 shadow-sm">
															<div
																class="h-11 w-11 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
																<iconify-icon icon="lucide:activity" class="text-lg">
																</iconify-icon>
															</div>
															<p class="text-sm font-semibold mt-4">Technical Audit</p>
															<p class="text-xs text-muted-foreground mt-2">Deep analysis
																of speed, indexability, and crawl performance.</p>
														</div>
													</div>
												</div>
											</div>
										</section>

										<section class="rounded-2xl border border-border bg-background p-5 space-y-5">
											<div class="flex items-center justify-between">
												<div>
													<h3 class="text-sm font-semibold">4. Work Process</h3>
													<p class="text-xs text-muted-foreground mt-1">Dynamic timeline
														builder with reordering and preview.</p>
												</div><button
													class="h-10 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">+
													Add Step</button>
											</div>
											<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
												<div class="space-y-4">
													<div class="rounded-2xl border border-border bg-card p-4 space-y-3">
														<div class="flex items-center justify-between">
															<div>
																<p class="text-sm font-semibold">Step 01</p>
																<p class="text-xs text-muted-foreground">Discovery &amp;
																	Audit</p>
															</div><button
																class="h-9 w-9 rounded-lg border border-border bg-background">
																<iconify-icon icon="lucide:move" class="text-base">
																</iconify-icon>
															</button>
														</div>
														<div class="grid grid-cols-1 gap-3">
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Step Title</div>
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Icon: Clipboard</div>
															<div
																class="rounded-2xl border border-input bg-background px-4 py-4 text-sm text-muted-foreground">
																We review your website architecture, rankings, and
																content footprint to define the roadmap.</div>
														</div>
													</div>
													<div class="rounded-2xl border border-border bg-card p-4 space-y-3">
														<div class="flex items-center justify-between">
															<div>
																<p class="text-sm font-semibold">Step 02</p>
																<p class="text-xs text-muted-foreground">Strategy &amp;
																	Execution</p>
															</div><button
																class="h-9 w-9 rounded-lg border border-border bg-background">
																<iconify-icon icon="lucide:move" class="text-base">
																</iconify-icon>
															</button>
														</div>
														<div class="grid grid-cols-1 gap-3">
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Step Title</div>
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Icon: Zap</div>
															<div
																class="rounded-2xl border border-input bg-background px-4 py-4 text-sm text-muted-foreground">
																Our team rolls out technical fixes, content updates, and
																authority building initiatives.</div>
														</div>
													</div>
												</div>
												<div class="rounded-2xl border border-border bg-muted/30 p-5 space-y-4">
													<div class="flex items-center justify-between">
														<h4 class="text-sm font-semibold">Timeline Preview</h4><span
															class="text-xs text-muted-foreground">Desktop card</span>
													</div>
													<div class="space-y-4">
														<div class="flex gap-4">
															<div class="flex flex-col items-center">
																<div
																	class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
																	<iconify-icon icon="lucide:clipboard"
																		class="text-lg"></iconify-icon>
																</div>
																<div class="w-px h-16 bg-border"></div>
															</div>
															<div>
																<p class="text-sm font-semibold">Discovery &amp; Audit
																</p>
																<p class="text-xs text-muted-foreground mt-1">Content
																	benchmarking, ranking review, and competitor
																	opportunity mapping.</p>
															</div>
														</div>
														<div class="flex gap-4">
															<div class="flex flex-col items-center">
																<div
																	class="h-11 w-11 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
																	<iconify-icon icon="lucide:zap" class="text-lg">
																	</iconify-icon>
																</div>
															</div>
															<div>
																<p class="text-sm font-semibold">Strategy &amp;
																	Execution</p>
																<p class="text-xs text-muted-foreground mt-1">
																	Implementation of tasks, optimization updates, and
																	reporting milestones.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>

										<section class="rounded-2xl border border-border bg-background p-5 space-y-5">
											<div class="flex items-center justify-between">
												<div>
													<h3 class="text-sm font-semibold">5. Technologies Used</h3>
													<p class="text-xs text-muted-foreground mt-1">Selectable technology
														grid with modern checkbox cards.</p>
												</div><span
													class="px-2 py-1 rounded-full bg-primary/10 text-primary text-xs">12
													selected</span>
											</div>
											<div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3">
												<div
													class="rounded-2xl border border-primary bg-primary/5 p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:code" class="text-lg"></iconify-icon>
													</div><span class="text-sm font-semibold">PHP</span>
												</div>
												<div
													class="rounded-2xl border border-primary bg-primary/5 p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:layers" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">Laravel</span>
												</div>
												<div
													class="rounded-2xl border border-border bg-card p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:monitor" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">React</span>
												</div>
												<div
													class="rounded-2xl border border-primary bg-primary/5 p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:globe" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">Next.js</span>
												</div>
												<div
													class="rounded-2xl border border-border bg-card p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:smartphone" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">Flutter</span>
												</div>
												<div
													class="rounded-2xl border border-primary bg-primary/5 p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:server" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">Node.js</span>
												</div>
												<div
													class="rounded-2xl border border-primary bg-primary/5 p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:database" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">MySQL</span>
												</div>
												<div
													class="rounded-2xl border border-border bg-card p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:cloud" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">AWS</span>
												</div>
												<div
													class="rounded-2xl border border-border bg-card p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:box" class="text-lg"></iconify-icon>
													</div><span class="text-sm font-semibold">Docker</span>
												</div>
												<div
													class="rounded-2xl border border-border bg-card p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:git-branch" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">Git</span>
												</div>
												<div
													class="rounded-2xl border border-primary bg-primary/5 p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
														<iconify-icon icon="lucide:database" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">PostgreSQL</span>
												</div>
												<div
													class="rounded-2xl border border-border bg-card p-4 flex items-center gap-3">
													<div
														class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
														<iconify-icon icon="lucide:shield" class="text-lg">
														</iconify-icon>
													</div><span class="text-sm font-semibold">Azure</span>
												</div>
											</div>
										</section>

										<section class="rounded-2xl border border-border bg-background p-5 space-y-5">
											<div class="flex items-center justify-between">
												<div>
													<h3 class="text-sm font-semibold">6. Why Choose This Service</h3>
													<p class="text-xs text-muted-foreground mt-1">Repeatable benefit
														cards with preview layout.</p>
												</div><button
													class="h-10 px-4 rounded-xl bg-primary text-primary-foreground text-sm font-semibold">+
													Add Benefit</button>
											</div>
											<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
												<div class="space-y-4">
													<div class="rounded-2xl border border-border bg-card p-4">
														<div class="flex items-center justify-between">
															<div class="flex items-center gap-3">
																<div
																	class="h-10 w-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
																	<iconify-icon icon="lucide:users" class="text-lg">
																	</iconify-icon>
																</div>
																<p class="text-sm font-semibold">Expert Team</p>
															</div><button
																class="h-9 w-9 rounded-lg border border-border bg-background">
																<iconify-icon icon="lucide:move" class="text-base">
																</iconify-icon>
															</button>
														</div>
														<div class="grid grid-cols-1 gap-3 mt-4">
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Title</div>
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Icon Picker</div>
															<div
																class="rounded-2xl border border-input bg-background px-4 py-4 text-sm text-muted-foreground">
																A senior SEO team focused on technical precision,
																content growth, and measurable performance.</div>
														</div>
													</div>
													<div class="rounded-2xl border border-border bg-card p-4">
														<div class="flex items-center justify-between">
															<div class="flex items-center gap-3">
																<div
																	class="h-10 w-10 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
																	<iconify-icon icon="lucide:clock" class="text-lg">
																	</iconify-icon>
																</div>
																<p class="text-sm font-semibold">Fast Delivery</p>
															</div><button
																class="h-9 w-9 rounded-lg border border-border bg-background">
																<iconify-icon icon="lucide:move" class="text-base">
																</iconify-icon>
															</button>
														</div>
														<div class="grid grid-cols-1 gap-3 mt-4">
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Title</div>
															<div
																class="rounded-xl border border-input bg-background px-4 py-3 text-sm">
																Icon Picker</div>
															<div
																class="rounded-2xl border border-input bg-background px-4 py-4 text-sm text-muted-foreground">
																Clear delivery sprints, prioritization, and reporting
																keep momentum high across every campaign.</div>
														</div>
													</div>
												</div>
												<div class="rounded-2xl border border-border bg-muted/30 p-5 space-y-4">
													<div class="flex items-center justify-between">
														<h4 class="text-sm font-semibold">Benefits Preview</h4><span
															class="text-xs text-muted-foreground">Homepage
															section</span>
													</div>
													<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
														<div class="rounded-2xl border border-border bg-background p-4">
															<div
																class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
																<iconify-icon icon="lucide:users" class="text-lg">
																</iconify-icon>
															</div>
															<p class="text-sm font-semibold mt-4">Expert Team</p>
															<p class="text-xs text-muted-foreground mt-2">Strategic
																guidance from specialists across technical, content, and
																analytics disciplines.</p>
														</div>
														<div class="rounded-2xl border border-border bg-background p-4">
															<div
																class="h-11 w-11 rounded-xl bg-secondary text-secondary-foreground flex items-center justify-center">
																<iconify-icon icon="lucide:clock" class="text-lg">
																</iconify-icon>
															</div>
															<p class="text-sm font-semibold mt-4">Fast Delivery</p>
															<p class="text-xs text-muted-foreground mt-2">Agile delivery
																cycles, transparent updates, and conversion-focused
																execution.</p>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</section>
							</div>
						</div>
					</div>

					<div
						class="absolute bottom-0 left-0 right-0 border-t border-border bg-card/95 backdrop-blur-md z-10">
						<div
							class="px-4 sm:px-6 lg:px-8 py-4 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
							<div class="flex flex-wrap items-center gap-3 text-sm">
								<span
									class="px-3 py-2 rounded-xl bg-emerald-500/10 text-emerald-600 font-semibold flex items-center gap-2">
									<iconify-icon icon="lucide:circle-check" class="text-base"></iconify-icon>Auto Saved
								</span>
								<span class="text-muted-foreground">Last edited by Admin • Updated 3 mins ago</span>
							</div>
							<div class="flex flex-wrap items-center gap-3">
								<button
									class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted transition-all">Cancel</button>
								<button
									class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted transition-all">Duplicate</button>
								<button
									class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted transition-all">Preview</button>
								<button
									class="h-11 px-4 rounded-xl border border-border bg-card text-sm font-medium hover:bg-muted transition-all">Save
									as Draft</button>
								<button
									class="h-11 px-5 rounded-xl bg-primary text-primary-foreground text-sm font-semibold shadow-md hover:shadow-lg transition-all">Save
									Service</button>
							</div>
						</div>
					</div>
				</main>
			</div>
		</div>

	</div>
	<script src="script.js"></script>
</body>

</html>
