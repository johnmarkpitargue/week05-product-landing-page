<header class="sticky top-0 z-50 border-b border-gray-100 bg-white/80 backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

        <!-- Logo with separate text -->
        <a href="#home" class="flex items-center gap-2">
            <img src="C:\Users\SERIES\Desktop\WEEK05-PRODUCT-LANDING-PAGE\public\TITA BELENS LOGO.svg" alt="Belen's Special Palabok Icon" class="h-10 w-10 rounded-full object-cover">
            <span class="text-lg font-bold text-gray-900">Belen's <span class="text-palabok-600">Palabok</span></span>
        </a>

        <!-- Desktop Links -->
        <div class="hidden items-center gap-8 lg:flex">
            <a href="#home" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Home</a>
            <a href="#features" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Features</a>
            <a href="#pricing" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Pricing</a>
            <a href="#testimonials" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Testimonials</a>
            <a href="#contact" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Contact</a>
        </div>

        <!-- Desktop CTA Buttons -->
        <div class="hidden items-center gap-3 lg:flex">
            <button type="button" data-open-modal="menu-modal" class="btn-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                Menu
            </button>
            <x-button variant="primary" href="#pricing">Order Now</x-button>
        </div>

        <!-- Mobile Toggle -->
        <button id="nav-toggle" class="inline-flex items-center justify-center rounded-md p-2 text-gray-600 lg:hidden" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden border-t border-gray-100 bg-white px-6 py-4 lg:hidden">
        <div class="flex flex-col gap-4">
            <a href="#home" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Home</a>
            <a href="#features" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Features</a>
            <a href="#pricing" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Pricing</a>
            <a href="#testimonials" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Testimonials</a>
            <a href="#contact" class="text-sm font-medium text-gray-600 hover:text-palabok-600">Contact</a>
            <div class="mt-2 flex flex-col gap-3">
                <button type="button" data-open-modal="menu-modal" class="btn-secondary w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    Menu
                </button>
                <x-button variant="primary" href="#pricing">Order Now</x-button>
            </div>
        </div>
    </div>
</header>
