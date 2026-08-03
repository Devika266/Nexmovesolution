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

<body>
	<div data-page="nexmove-portfolio-management-desktop">

		<div class="min-h-screen w-full bg-background text-foreground font-sans flex flex-col relative">
			<div class="absolute inset-x-0 top-0 h-56 bg-gradient-to-r from-primary/10 via-background to-tertiary/10"></div>
			<div class="flex flex-1 w-full relative">
				<?php $this->load->view('layout/sidebar')?>
				<main class="flex-1 min-w-0 flex flex-col relative">

					<div class="flex-1 px-4 sm:px-6 lg:px-8 py-6 lg:py-8 pb-32 space-y-6">
						<section class="rounded-2xl border border-gray-200 bg-white shadow-sm overflow-hidden">

							<!-- Header -->
							<div class="flex items-center justify-between px-6 py-5 border-b">
								<div>
									<h2 class="text-3xl font-bold text-gray-800">
										Portfolio Management
									</h2>
									<p class="text-sm text-gray-500 mt-1">
										Manage all portfolio projects.
									</p>
								</div>

								<div class="flex flex-wrap items-center gap-3">
									<a href="<?php echo base_url()?>add-portfolio" type="button"
										class="h-11 px-4 rounded-xl bg-primary text-white flex items-center gap-2">

										<iconify-icon icon="lucide:plus"></iconify-icon>
										<span>Add New Project</span>

									</a>

								</div>
							</div>

							<!-- Search -->
							<div class="p-5 border-b">

								<div class="relative max-w-sm">

									<i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>

									<input type="text" id="portfolioSearch" placeholder="Search Portfolio..."
										class="w-full h-11 rounded-xl border border-gray-300 pl-11 pr-4 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">

								</div>

							</div>

							<!-- Table -->

							<div class="overflow-x-auto">

								<table class="w-full">

									<thead class="bg-gray-100">

										<tr>

											<th class="px-5 py-4 text-left font-semibold">
												ID
											</th>

											<th class="px-5 py-4 text-left font-semibold">
												Portfolio Name
											</th>

											<th class="px-5 py-4 text-center font-semibold">
												Action
											</th>

										</tr>

									</thead>

									<tbody>

										<?php if(!empty($portfolio)): ?>

										<?php foreach($portfolio as $row): ?>

										<tr class="border-t hover:bg-gray-50">

											<td class="px-5 py-4">
												#<?= $row->id ?>
											</td>

											<td class="px-5 py-4">
												<div>
													<h4 class="font-semibold text-gray-800">
														<?= $row->project_name ?>
													</h4>
												</div>
											</td>

											<td class="px-5 py-4">

												<div class="flex justify-center gap-2">

													<a href="<?= base_url('Admin/edit_portfolio/'.$row->id) ?>"
														class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">

														<i class="fa-solid fa-pen-to-square mr-1"></i>

														✏ Edit

													</a>

													<a href="<?= base_url('Admin/delete_portfolio/'.$row->id) ?>"
														onclick="return confirm('Delete this portfolio?')"
														class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm">

														<i class="fa-solid fa-trash mr-1"></i>

														🗑 Delete

													</a>

												</div>

											</td>

										</tr>

										<?php endforeach; ?>

										<?php else: ?>

										<tr>

											<td colspan="3" class="text-center py-8 text-gray-500">

												No Portfolio Found.

											</td>

										</tr>

										<?php endif; ?>

									</tbody>

								</table>

							</div>

						</section>
					</div>
				</main>
			</div>
		</div>

	</div>
	<script src="script.js"></script>
</body>

</html>
