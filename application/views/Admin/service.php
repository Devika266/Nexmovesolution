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

					<div class="flex-1 px-4 sm:px-6 lg:px-8 py-6">

						<!-- Service List Card -->
						<section class="bg-white rounded-2xl border border-slate-200 shadow-sm">

							<!-- Header -->
							<div class="flex items-center justify-between p-6 border-b border-slate-200">

								<div>
									<h2 class="text-2xl font-bold text-slate-800">
										Service Management
									</h2>

									<p class="text-sm text-slate-500 mt-1">
										Manage all services offered by Nexmove Solutions.
									</p>
								</div>

								<a href="<?php echo base_url()?>add-service" type="button"
									class="h-11 px-4 rounded-xl bg-primary text-white flex items-center gap-2">

									<iconify-icon icon="lucide:plus"></iconify-icon>
									<span>Add New Service</span>

								</a>
							</div>

							<!-- Search -->
							<div class="p-6 border-b border-slate-200">

								<div class="relative max-w-sm">

									<iconify-icon icon="lucide:search"
										class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
									</iconify-icon>

									<input type="text" placeholder="Search Service..."
										class="w-full h-11 rounded-xl border border-slate-300 pl-10 pr-4 outline-none focus:border-indigo-500">

								</div>

							</div>

							<!-- Table -->
							<div class="overflow-x-auto rounded-xl border border-slate-200 bg-white shadow-sm">

								<table class="w-full">

									<thead class="bg-slate-100 border-b">

										<tr>

											<th class="px-6 py-4 text-left text-sm font-semibold text-slate-700">
												ID
											</th>

											<th class="px-6 py-4 text-left text-sm font-semibold text-slate-700">
												Service Name
											</th>

											<th class="px-6 py-4 text-center text-sm font-semibold text-slate-700">
												Action
											</th>

										</tr>

									</thead>

									<tbody>

										<?php if(!empty($service)){ ?>

										<?php foreach($service as $row){ ?>

										<tr class="border-b hover:bg-slate-50 transition">

											<td class="px-6 py-4 text-sm text-slate-600">
												#<?= $row->id; ?>
											</td>

											<td class="px-6 py-4">

												<div class="font-semibold text-slate-800">
													<?= $row->service_name; ?>
												</div>

												<div class="text-xs text-slate-500">
													<?= $row->slug; ?>
												</div>

											</td>

											<td class="px-6 py-4">

												<div class="flex items-center justify-center gap-2">

													<!-- Edit -->

													<a href="<?= base_url('admin/editing/'.$row->id); ?>"
														class="px-4 py-2 rounded-lg bg-blue-600 text-white text-sm hover:bg-blue-700 transition">

														✏ Edit

													</a>

													<!-- Delete -->

													<a href="<?= base_url('admin/delete_service/'.$row->id); ?>"
														onclick="return confirm('Are you sure you want to delete this service?');"
														class="px-4 py-2 rounded-lg bg-red-600 text-white text-sm hover:bg-red-700 transition">

														🗑 Delete

													</a>

												</div>

											</td>

										</tr>

										<?php } ?>

										<?php } else { ?>

										<tr>

											<td colspan="3" class="text-center py-10 text-slate-500">

												No services found.

											</td>

										</tr>

										<?php } ?>

									</tbody>

								</table>

							</div>
							<!-- ================= Add Service Modal ================= -->

							<div id="serviceModal"
								class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">

								<div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl mx-4 overflow-hidden">
									<!-- Body -->

									<div class="p-6 space-y-5">

										<!-- Service Name -->

										<div>

											<label class="block mb-2 font-medium">
												Service Name
											</label>

											<input type="text"
												class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none"
												placeholder="Website Development">

										</div>


										<!-- Slug -->

										<div>

											<label class="block mb-2 font-medium">
												URL Slug
											</label>

											<input type="text" class="w-full border rounded-xl px-4 py-3"
												placeholder="website-development">

										</div>


										<!-- Display Order + Status -->

										<div class="grid grid-cols-2 gap-5">

											<div>

												<label class="block mb-2 font-medium">
													Display Order
												</label>

												<input type="number" class="w-full border rounded-xl px-4 py-3"
													value="1">

											</div>

											<div>

												<label class="block mb-2 font-medium">
													Status
												</label>

												<select class="w-full border rounded-xl px-4 py-3">

													<option>Published</option>

													<option>Draft</option>

												</select>

											</div>

										</div>


										<!-- Upload -->

										<div>

											<label class="block mb-2 font-medium">
												Service Image
											</label>

											<div class="border-2 border-dashed rounded-xl p-8 text-center">

												<iconify-icon icon="lucide:image" class="text-5xl text-gray-400">
												</iconify-icon>

												<p class="mt-3 text-gray-500">

													Upload Service Image

												</p>

												<input type="file" class="mt-4">

											</div>

										</div>

									</div>


									<!-- Footer -->

									<div class="px-6 py-4 border-t flex justify-end gap-3">

										<button onclick="closeServiceModal()" class="px-5 py-2 rounded-xl border">

											Cancel

										</button>

										<button class="px-6 py-2 rounded-xl bg-indigo-600 text-white">

											Save & Continue →

										</button>

									</div>

								</div>

							</div>
							<script src="script.js"></script>
							<script>
								function openServiceModal() {

									document.getElementById('serviceModal').classList.remove('hidden');
									document.getElementById('serviceModal').classList.add('flex');

								}

								function closeServiceModal() {

									document.getElementById('serviceModal').classList.remove('flex');
									document.getElementById('serviceModal').classList.add('hidden');

								}

							</script>

</body>

</html>
