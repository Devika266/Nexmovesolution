<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nexmove Admin Dashboard - Desktop — Exported from UXMagic Copilot">
    <title>Nexmove Admin Dashboard - Desktop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Poppins:wght@100..900&amp;family=Fira+Code:wght@300..700&amp;family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    
       <script src="https://cdn.tailwindcss.com"></script>
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
        --secondary: #0ea5e9;
        --secondary-foreground: #ffffff;
        --tertiary: #10b981;
        --muted: #f1f5f9;
        --muted-foreground: #64748b;
        --accent: #DDDDF8;
        --accent-foreground: #0f172a;
        --card: #ffffff;
        --card-foreground: #0f172a;
        --destructive: #EF4444;
        --border: #e2e8f0;
        --input: #e2e8f0;
        --ring: #4f46e5;
        --radius: 1rem;
        --font-sans: Inter, sans-serif;
        --font-heading: Inter, sans-serif;
        --font-mono: JetBrains Mono, monospace;
        --shadow-offset-x: 0;
        --shadow-offset-y: 10;
        --shadow-blur: 30;
        --shadow-spread: -8;
        --shadow-color: rgba(15, 23, 42, 0.12);
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
</head>
<body>
    <div data-page="nexmove-admin-dashboard-desktop">

<div class="min-h-screen w-full bg-background text-foreground font-sans flex flex-col relative">
  <!-- Main Admin Wrapper -->
  <div class="flex flex-1 w-full relative">
    
    <!-- Sidebar Navigation -->
    <?php $this->load->view('layout/sidebar')?>

    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col min-w-0">

      <!-- Main Dashboard Grid -->
      <div class="flex-1 p-8 space-y-8">
        
        <!-- Dashboard Hero -->
        <div class="dashboard-hero">
          <div class="absolute right-0 top-0 translate-x-12 -translate-y-12 h-64 w-64 rounded-full bg-background/5 blur-2xl"></div>
          <div class="absolute -left-12 -bottom-12 h-48 w-48 rounded-full bg-primary/5 blur-xl"></div>
          <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
              <h2 class="text-3xl font-heading font-extrabold tracking-tight mb-5 mt-6 pl-5">Welcome back, Admin 👋</h2>
              <p class="text-primary-foreground/80 font-medium pl-5">Here's what's happening with Nexmove Solutions today. Your systems are running seamlessly.</p>
            </div>
          </div>
        </div>

        <!-- Top Statistics Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Total Services -->
          <div class="bg-card border border-border rounded-2xl p-6 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
              <div class="h-11 w-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                <iconify-icon icon="lucide:layers" class="text-xl"></iconify-icon>
              </div>
              <span class="text-xs font-bold text-emerald-500 bg-emerald-500/10 px-2 py-0.5 rounded-full">+2 new</span>
            </div>
            <p class="text-sm font-semibold text-muted-foreground">Total Services</p>
            <h3 class="text-2xl font-bold font-heading mt-1"><?= $total_services ?></h3>
            <p class="text-xs text-muted-foreground mt-2">Active IT offerings &amp; solutions</p>
          </div>

          <!-- Portfolio Projects -->
          <div class="bg-card border border-border rounded-2xl p-6 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
              <div class="h-11 w-11 rounded-xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center">
                <iconify-icon icon="lucide:grid-3x3" class="text-xl"></iconify-icon>
              </div>
              <span class="text-xs font-bold text-emerald-500 bg-emerald-500/10 px-2 py-0.5 rounded-full">+4 this mo.</span>
            </div>
            <p class="text-sm font-semibold text-muted-foreground">Portfolio Projects</p>
            <h3 class="text-2xl font-bold font-heading mt-1"><?= $total_portfolios ?></h3>
            <p class="text-xs text-muted-foreground mt-2">Case studies &amp; active projects</p>
          </div>

          <!-- Published Blogs -->
          <div class="bg-card border border-border rounded-2xl p-6 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
              <div class="h-11 w-11 rounded-xl bg-sky-500/10 text-sky-600 flex items-center justify-center">
                <iconify-icon icon="lucide:pencil" class="text-xl"></iconify-icon>
              </div>
              <span class="text-xs font-bold text-sky-500 bg-sky-500/10 px-2 py-0.5 rounded-full">8 drafts</span>
            </div>
            <p class="text-sm font-semibold text-muted-foreground">Published Blogs</p>
            <h3 class="text-2xl font-bold font-heading mt-1"><?= $total_blogs ?></h3>
            <p class="text-xs text-muted-foreground mt-2">Resource hub articles live</p>
        </div>
      </div>

    </main>

  </div>
</div>

    </div>
    <script src="<?php echo base_url()?>assets/js/script.js"></script>
</body>
</html>