<aside class="w-72 bg-card border-r border-border flex flex-col shrink-0 sticky top-0 h-screen">

      <!-- Brand Header -->
      <div class="p-6 border-b border-border flex items-center justify-between">

        <div class="flex items-center gap-3">
          <img src="<?php echo base_url()?>assets/img/black.png" alt="logo" style="width:200px">
        </div>
        <span class="flex h-2 w-2 relative">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
        </span>
      </div>

      <!-- Navigation Links -->
      <div class="flex-1 overflow-y-auto p-4 space-y-6" data-side-root>

        <!-- Main Section -->
        <div>
          <p class="px-3 text-xs font-semibold text-muted-foreground uppercase tracking-wider mb-2">Core</p>
          <nav class="space-y-1">
            <a href="<?php echo base_url()?>admin" class="bb-sidebar-link flex items-center gap-3 px-3 py-2.5 rounded-xl text-muted-foreground hover:bg-muted hover:text-foreground text-sm font-medium transition-all duration-200" data-side-route="/">

              <iconify-icon icon="lucide:layout-dashboard" class="text-lg"></iconify-icon>
              <span>Dashboard</span>
            </a>
          </nav>
        </div>

        <!-- Website Management -->
        <div>
          <nav class="space-y-1">
            <a href="<?php echo base_url()?>settings" class="bb-sidebar-link flex items-center gap-3 px-3 py-2 rounded-xl text-muted-foreground hover:bg-muted hover:text-foreground text-sm font-medium transition-all duration-200" data-side-route="/settings">

              <iconify-icon icon="lucide:settings" class="text-base"></iconify-icon>
              <span>General Settings</span>
            </a>
            <a href="<?php echo base_url()?>service" class="bb-sidebar-link flex items-center gap-3 px-3 py-2 rounded-xl text-muted-foreground hover:bg-muted hover:text-foreground text-sm font-medium transition-all duration-200" data-side-route="/service">

              <iconify-icon icon="lucide:layers" class="text-base"></iconify-icon>
              <span>Services</span>
            </a>
            <a href="<?php echo base_url()?>portfolio" class="bb-sidebar-link flex items-center gap-3 px-3 py-2 rounded-xl text-muted-foreground hover:bg-muted hover:text-foreground text-sm font-medium transition-all duration-200" data-side-route="/portfolio">

              <iconify-icon icon="lucide:grid-3x3" class="text-base"></iconify-icon>
              <span>Portfolio</span>
            </a>
            <a href="<?php echo base_url()?>blog" class="bb-sidebar-link flex items-center gap-3 px-3 py-2 rounded-xl text-muted-foreground hover:bg-muted hover:text-foreground text-sm font-medium transition-all duration-200" data-side-route="/blog">

              <iconify-icon icon="lucide:pencil" class="text-base"></iconify-icon>
              <span>Blog Management</span>
            </a>
          </nav>
        </div>

        <!-- System & Logs -->
        <a href="<?php echo base_url('admin/logout'); ?>" class="w-full flex items-center justify-between px-4 py-3 rounded-xl hover:bg-red-500/10 hover:text-destructive text-muted-foreground text-sm font-semibold transition-all duration-200">

          <span class="flex items-center gap-3">
            <iconify-icon icon="lucide:log-out" class="text-lg"></iconify-icon>
            <span>Log Out</span>
          </span>
          <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>
        </a>
      </div>
    </aside>