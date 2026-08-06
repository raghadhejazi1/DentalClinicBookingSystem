<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>DentistPro | Patient Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-background": "#191c1d",
                    "on-surface-variant": "#404850",
                    "on-surface": "#191c1d",
                    "secondary-fixed": "#e2e2e2",
                    "outline": "#707881",
                    "primary-fixed": "#cde5ff",
                    "secondary-fixed-dim": "#c6c6c7",
                    "surface-bright": "#f8f9fa",
                    "background": "#f8f9fa",
                    "primary": "#005d90",
                    "primary-fixed-dim": "#94ccff",
                    "on-tertiary-container": "#dfffeb",
                    "on-primary-fixed-variant": "#004b74",
                    "tertiary": "#266449",
                    "on-tertiary-fixed": "#002114",
                    "error-container": "#ffdad6",
                    "inverse-on-surface": "#f0f1f2",
                    "outline-variant": "#bfc7d1",
                    "on-primary-fixed": "#001d32",
                    "on-secondary-fixed-variant": "#454747",
                    "surface-container-high": "#e7e8e9",
                    "surface-tint": "#006399",
                    "surface-container-low": "#f3f4f5",
                    "surface-variant": "#e1e3e4",
                    "error": "#ba1a1a",
                    "on-secondary-fixed": "#1a1c1c",
                    "secondary": "#5d5f5f",
                    "surface-dim": "#d9dadb",
                    "secondary-container": "#dfe0e0",
                    "tertiary-container": "#417d61",
                    "tertiary-fixed": "#b1f0ce",
                    "on-error-container": "#93000a",
                    "on-primary": "#ffffff",
                    "on-tertiary-fixed-variant": "#0e5138",
                    "surface": "#f8f9fa",
                    "on-tertiary": "#ffffff",
                    "surface-container-highest": "#e1e3e4",
                    "inverse-primary": "#94ccff",
                    "primary-container": "#0077b6",
                    "on-secondary": "#ffffff",
                    "on-primary-container": "#f3f7ff",
                    "surface-container": "#edeeef",
                    "inverse-surface": "#2e3132",
                    "surface-container-lowest": "#ffffff",
                    "on-error": "#ffffff",
                    "tertiary-fixed-dim": "#95d4b3",
                    "on-secondary-container": "#616363"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-lg": "32px",
                    "gutter": "16px",
                    "stack-md": "16px",
                    "stack-sm": "8px",
                    "unit": "4px",
                    "container-padding": "24px"
            },
            "fontFamily": {
                    "headline-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "body-md": ["Inter"]
            },
            "fontSize": {
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "display-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-sm": ["11px", {"lineHeight": "14px", "fontWeight": "500"}],
                    "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        .soft-medicine-shadow {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
        }
        .active-glow:focus {
            outline: none;
            border-color: #0077B6;
            box-shadow: 0 0 0 4px rgba(227, 242, 253, 0.5);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="text-on-background">
<!-- SideNavBar Anchor -->
<aside class="fixed left-0 top-0 h-full w-[240px] bg-surface-container-lowest flex flex-col py-stack-lg shadow-[0px_4px_12px_rgba(0,0,0,0.05)] z-50">
<div class="px-container-padding mb-10">
<div class="flex items-center gap-stack-sm">
<span class="material-symbols-outlined text-primary text-headline-md" data-icon="dentistry">dentistry</span>
<span class="font-headline-md text-headline-md font-bold text-primary">DentistPro</span>
</div>
<p class="font-label-sm text-label-sm text-on-surface-variant mt-1">Clinic Management</p>
</div>
<nav class="flex-1 px-4 space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary font-bold border-l-4 border-primary bg-primary-container/10 transition-colors duration-200" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-body-md text-body-md">Clinic Overview</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors duration-200" href="#">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
<span class="font-body-md text-body-md">Schedule</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors duration-200" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="font-body-md text-body-md">Patients</span>
</a>
</nav>
<div class="mt-auto px-4 space-y-2">
<button class="w-full bg-primary-container text-on-primary-container font-label-md text-label-md py-3 rounded-lg flex items-center justify-center gap-2 active:scale-[0.98] transition-transform">
<span class="material-symbols-outlined" data-icon="add">add</span>
                Book Appointment
            </button>
<div class="pt-stack-md border-t border-outline-variant mt-stack-md">
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors duration-200" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-label-sm text-label-sm">Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container transition-colors duration-200" href="#">
<form method="POST" action="{{ route('logout') }}" class="w-full">
    @csrf

    <button type="submit" class="flex items-center gap-3 w-full text-left bg-transparent border-0 p-0 text-gray-600 hover:text-red-600 cursor-pointer transition-colors">
        <span class="material-symbols-outlined">logout</span>
        <span class="font-label-md text-label-md">Logout</span>
    </button>
</form>
</a>
</div>
</div>
</aside>
<!-- TopAppBar Anchor -->
<header class="fixed top-0 right-0 w-[calc(100%-240px)] h-16 bg-surface flex justify-between items-center px-container-padding z-40 border-b border-outline-variant">
<div class="flex items-center flex-1 max-w-md bg-surface-container rounded-full px-4 py-2">
<span class="material-symbols-outlined text-on-surface-variant mr-2" data-icon="search">search</span>
<input class="bg-transparent border-none focus:ring-0 text-body-md w-full placeholder:text-on-surface-variant" placeholder="Search patients, services, or dates..." type="text"/>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-4 text-on-surface-variant">
<span class="material-symbols-outlined cursor-pointer hover:text-primary transition-opacity" data-icon="notifications">notifications</span>
<span class="material-symbols-outlined cursor-pointer hover:text-primary transition-opacity" data-icon="help">help</span>
</div>
<div class="flex items-center gap-3 border-l pl-6 border-outline-variant">
<div class="text-right hidden sm:block">
<p class="font-label-md text-label-md text-on-surface">{{ Auth::user()->name }}</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">{{ ucfirst(Auth::user()->role) }}</p>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="ml-[240px] pt-16 min-h-screen">
<div class="max-w-[1440px] mx-auto px-container-padding py-stack-lg">
<!-- Welcome Section -->
<section class="mb-stack-lg">
<div class="flex flex-col gap-1">
<h1 class="font-display-lg text-display-lg text-on-surface">Hello, {{ Auth::user()->name }}!</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Welcome back to your dental health dashboard. You're due for a check-up in 3 months. Ready to brighten your smile today?</p>
</div>
</section>
<!-- Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left Column: Services & Pricing (7/12) -->
<div class="lg:col-span-7 space-y-gutter">
<div class="flex items-center justify-between">
<h2 class="font-headline-sm text-headline-sm text-on-surface">Services &amp; Pricing</h2>
<a class="text-primary font-label-md text-label-md hover:underline" href="#">View all services</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
<!-- Service Card 1 -->
<div class="bg-surface-container-lowest p-stack-md rounded-xl soft-medicine-shadow border border-outline-variant group hover:border-primary transition-all duration-300">
<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary mb-stack-md">
<span class="material-symbols-outlined text-[28px]" data-icon="clean_hands">clean_hands</span>
</div>
<h3 class="font-headline-sm text-[18px] text-on-surface mb-1">Regular Cleaning</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Professional scaling and polishing to maintain oral hygiene.</p>
<div class="flex items-center justify-between mt-auto">
<span class="font-headline-md text-headline-md text-primary">$80</span>
<button class="text-primary hover:bg-primary/5 px-3 py-1 rounded-lg transition-colors font-label-md text-label-md">Details</button>
</div>
</div>
<!-- Service Card 2 -->
<div class="bg-surface-container-lowest p-stack-md rounded-xl soft-medicine-shadow border border-outline-variant group hover:border-primary transition-all duration-300">
<div class="w-12 h-12 rounded-lg bg-tertiary/10 flex items-center justify-center text-tertiary mb-stack-md">
<span class="material-symbols-outlined text-[28px]" data-icon="medical_services">medical_services</span>
</div>
<h3 class="font-headline-sm text-[18px] text-on-surface mb-1">Composite Filling</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">Tooth-colored restoration for cavities and minor chips.</p>
<div class="flex items-center justify-between mt-auto">
<span class="font-headline-md text-headline-md text-primary">$150</span>
<button class="text-primary hover:bg-primary/5 px-3 py-1 rounded-lg transition-colors font-label-md text-label-md">Details</button>
</div>
</div>
<!-- Service Card 3 -->
<div class="bg-surface-container-lowest p-stack-md rounded-xl soft-medicine-shadow border border-outline-variant md:col-span-2 group hover:border-primary transition-all duration-300 flex flex-col md:flex-row md:items-center gap-gutter">
<div class="w-16 h-16 shrink-0 rounded-lg bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined text-[32px]" data-icon="health_and_safety">health_and_safety</span>
</div>
<div class="flex-1">
<h3 class="font-headline-sm text-[18px] text-on-surface mb-1">Orthodontic Consultation</h3>
<p class="font-body-md text-body-md text-on-surface-variant">A comprehensive assessment for braces or aligners with our specialist.</p>
</div>
<div class="flex items-center justify-between md:flex-col md:items-end gap-2 shrink-0">
<span class="font-headline-md text-headline-md text-primary">$200</span>
<button class="text-primary hover:bg-primary/5 px-3 py-1 rounded-lg transition-colors font-label-md text-label-md">Book Now</button>
</div>
</div>
</div>
<!-- Health Tip Card -->
<div class="bg-primary-container/5 rounded-xl p-stack-lg border-l-4 border-primary mt-stack-lg relative overflow-hidden">

<div class="relative z-10">
<h4 class="font-headline-sm text-on-primary-fixed-variant mb-2">Pro Tip of the Month</h4>
<p class="font-body-md text-on-surface-variant italic">"Using dental floss daily can reduce your risk of gum disease by up to 50%. Your future self will thank you!"</p>
</div>
</div>
</div>
<!-- Right Column: Booking Form (5/12) -->
<div class="lg:col-span-5">
<div class="sticky top-24 bg-surface-container-lowest rounded-xl soft-medicine-shadow border border-outline-variant overflow-hidden">
<div class="bg-primary p-gutter text-on-primary">
<h2 class="font-headline-sm text-headline-sm">Book an Appointment</h2>
<p class="font-label-sm text-label-sm opacity-90">Instant confirmation via SMS &amp; Email</p>
</div>
<div class="p-4">
    <livewire:book-appointment />
</div>
<!--  -->
</div>
</div>
</div>
</div>
</main>
<!-- Footer Anchor -->
<footer class="ml-[240px] bg-surface-container-low py-stack-md px-container-padding border-t border-outline-variant mt-stack-lg">
<div class="max-w-[1440px] mx-auto flex flex-col md:flex-row justify-between items-center gap-stack-md">
<div class="flex items-center gap-2">
<span class="font-label-md text-label-md font-bold text-primary">DentistPro</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">© 2024 DentistPro Management System. All rights reserved.</span>
</div>
<div class="flex gap-stack-md">
<a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Contact Support</a>
</div>
</div>
</footer>
<script>
        // Simple Micro-interaction for Time Slot Selection
        const timeButtons = document.querySelectorAll('.grid-cols-3 button');
        timeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                timeButtons.forEach(b => {
                    b.classList.remove('bg-primary', 'text-white', 'border-primary');
                    b.classList.add('hover:bg-primary-container/10', 'hover:border-primary');
                });
                btn.classList.add('bg-primary', 'text-white', 'border-primary');
                btn.classList.remove('hover:bg-primary-container/10', 'hover:border-primary');
            });
        });

        // Hover Effect on Service Cards
        const serviceCards = document.querySelectorAll('.lg\\:col-span-7 .bg-surface-container-lowest');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-4px)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
</body></html>