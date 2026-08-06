<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DentistPro | Modern Dental Care</title>
    
    <!-- Scripts & Styles -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f8f9fa",
                        "inverse-primary": "#94ccff",
                        "secondary-fixed-dim": "#c6c6c7",
                        "tertiary-fixed": "#b1f0ce",
                        "surface-tint": "#006399",
                        "on-secondary-container": "#616363",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#95d4b3",
                        "surface-container": "#edeeef",
                        "surface-container-high": "#e7e8e9",
                        "primary-fixed": "#cde5ff",
                        "error": "#ba1a1a",
                        "on-secondary-fixed-variant": "#454747",
                        "on-primary-fixed": "#001d32",
                        "tertiary-container": "#417d61",
                        "primary": "#005d90",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f8f9fa",
                        "outline-variant": "#bfc7d1",
                        "on-tertiary-container": "#dfffeb",
                        "surface-dim": "#d9dadb",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#e1e3e4",
                        "surface-container-highest": "#e1e3e4",
                        "on-tertiary": "#ffffff",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#f0f1f2",
                        "outline": "#707881",
                        "on-primary-container": "#f3f7ff",
                        "on-background": "#191c1d",
                        "on-error-container": "#93000a",
                        "secondary-container": "#dfe0e0",
                        "on-primary": "#ffffff",
                        "secondary": "#5d5f5f",
                        "on-surface-variant": "#404850",
                        "on-secondary-fixed": "#1a1c1c",
                        "surface-container-low": "#f3f4f5",
                        "secondary-fixed": "#e2e2e2",
                        "on-surface": "#191c1d",
                        "tertiary": "#266449",
                        "on-tertiary-fixed-variant": "#0e5138",
                        "primary-fixed-dim": "#94ccff",
                        "on-tertiary-fixed": "#002114",
                        "on-primary-fixed-variant": "#004b74",
                        "background": "#f8f9fa",
                        "primary-container": "#0077b6",
                        "inverse-surface": "#2e3132"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-sm": "8px",
                        "stack-lg": "32px",
                        "gutter": "16px",
                        "stack-md": "16px",
                        "container-padding": "24px",
                        "unit": "4px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter", "sans-serif"],
                        "headline-sm": ["Inter", "sans-serif"],
                        "label-sm": ["Inter", "sans-serif"],
                        "label-md": ["Inter", "sans-serif"],
                        "headline-md": ["Inter", "sans-serif"],
                        "display-lg": ["Inter", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"]
                    },
                    "fontSize": {
                        "body-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "label-sm": ["11px", { "lineHeight": "14px", "fontWeight": "500" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }]
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

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .soft-shadow {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(233, 236, 239, 0.5);
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- TopAppBar & Navigation Shell -->
    <header class="fixed top-0 left-0 right-0 h-16 z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant flex justify-between items-center px-container-padding">
        <div class="flex items-center gap-stack-md">
            <div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center text-on-primary-container">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dentistry</span>
            </div>
            <span class="font-headline-sm text-headline-sm font-bold text-primary">DentistPro</span>
        </div>
        
        <nav class="hidden md:flex items-center gap-stack-lg">
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#services">Services</a>
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#about">About Us</a>
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#contact">Contact</a>
            
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition-colors">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition-colors">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-600 transition-colors">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>

        <div class="flex items-center gap-stack-md">
            <a href="{{ route('appointments.create') }}" class="hidden sm:flex items-center gap-2 px-6 py-2.5 bg-primary-container text-on-primary-container rounded-full font-label-md text-label-md font-bold hover:opacity-90 active:scale-[0.98] transition-all">
                Book Appointment
            </a>
            <button class="md:hidden p-2 text-on-surface-variant" aria-label="Toggle Menu">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </header>

    <main class="pt-16">
        <!-- Hero Section -->
        <section class="relative min-h-[921px] flex items-center overflow-hidden bg-surface">
            <div class="absolute top-0 right-0 w-2/3 h-full bg-primary/5 rounded-bl-[200px] -z-10"></div>
            <div class="max-w-[1440px] mx-auto px-container-padding w-full grid grid-cols-1 lg:grid-cols-2 gap-stack-lg items-center">
                <div class="space-y-stack-lg animate-in fade-in slide-in-from-left duration-1000">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-full font-label-sm text-label-sm uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[14px]">verified</span>
                        Professional Dental Excellence
                    </div>
                    <h1 class="font-display-lg text-[48px] md:text-[64px] leading-tight text-on-background max-w-xl">
                        Brightening Smiles, <span class="text-primary-container">One Patient</span> at a Time
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
                        Experience world-class dental care in a tranquil, modern environment. Our expert team utilizes cutting-edge technology to ensure your comfort and oral health.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-stack-md pt-4">
                        <button class="px-8 py-4 bg-primary-container text-on-primary-container rounded-xl font-headline-sm text-headline-sm hover:shadow-lg active:scale-[0.98] transition-all flex items-center justify-center gap-2">
                            Book Your Visit
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        <button class="px-8 py-4 bg-surface-container-low text-primary rounded-xl font-headline-sm text-headline-sm border border-outline-variant hover:bg-surface-container-high transition-all flex items-center justify-center gap-2">
                            View Services
                        </button>
                    </div>
                    <div class="flex items-center gap-4 pt-8">
                        <div class="flex -space-x-3 rtl:space-x-reverse">
                            <div class="w-10 h-10 rounded-full border-2 border-surface overflow-hidden">
                                <img class="w-full h-full object-cover" alt="Smiling female dentist" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6Ck47azxpviO4NGWjE7R7jel2YGcwZXm9WlutoWC_1-KEGep85N4Ppa9P44Mv6bZl0gyUheYT2H4ZeAaoxcSxF0Pq72lBOUpPOObeyP701ZnDXz6WfNvfBUJMzrZRNVdl2UmJNDxu2i2cyR6Iy6dKwxYzrmlO_pzObu9lRDxbxmKRZOTZjJg3q5my_a0dgb-UXNujZ4y9aqQd90t8kMfQjVhLYUavgCJ_eDWmhHa1WXHRnyqbMSJx6vIayyfXJKPjita6AL4VkP0e" />
                            </div>
                            <div class="w-10 h-10 rounded-full border-2 border-surface overflow-hidden">
                                <img class="w-full h-full object-cover" alt="Male dental surgeon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKRiTMSCrikubk7qOViszAl0pI5ARDaYmElHS7C_taOT2gEodwbBRP8zSbrQYLMyMecbwjfGAIF7pDyQVahgPMqZGJ3wXMbbH0auGh-cbMkoqaj79SHl3fqpKr6WHvupN6PpPLv7gVgjIEbW0uBD9cEek8_QhG4-H1D1-UHc_kd5mP4xekRCA4IXGdyZ8iMlQdxVeZpDZaQIV_xNaHSVuifyduAH0XsYtmQO4YIGX9xt1R1nU9DzSTAFphO2SivElJA84UIOI_YaDv" />
                            </div>
                            <div class="w-10 h-10 rounded-full border-2 border-surface overflow-hidden">
                                <img class="w-full h-full object-cover" alt="Dental hygienist" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCt6Ra0k_cCoHRvFKFWxL0V-ujJuQlnp2Q7gmRWeTZZfEn-gakXiZ_pafmuzwr5pB3Qg3gaoB8PSUjUVV_uu0kYQikRVkIQ3fRZOUJcV-ZBCgT4eyjNivYm_GMgiWXW0zfnEyMgNBaN6bvuQer3gfTEuHYe-jgxaNE-cIqQZY4xa3gkwqRucFt-rKfek1m8pJxgSdtJMZT1zgwcy7seGH9Oww2TYrkAsDkKPd3CjmJR_cNqcFXf39dJ2mOuBFrV3_sO5Qwz58DF_7Sn" />
                            </div>
                        </div>
                        <p class="font-label-sm text-label-sm text-on-surface-variant">
                            Trusted by <span class="font-bold text-on-surface">2,000+</span> regular patients
                        </p>
                    </div>
                </div>
                
                <div class="relative hidden lg:block animate-in fade-in zoom-in duration-1000 delay-200">
                    <div class="relative w-full aspect-square rounded-[40px] overflow-hidden shadow-2xl">
                        <img class="w-full h-full object-cover" alt="State-of-the-art dental clinic interior" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHcst_epXulWEDpjVvibqtCmPiMQXNtv3zHBMb3dDkWhRyvSKiGMi6F0G2Cm55nO8v9xtHxFERUSs5Hn20u9V3Eie9K15iKHrORVOqwMEnMmicIv5-hZbHrLcqHArALWxEhj8h83lwKlIdDqWHTWnAmlSHrVeHmhhXG0DHHXhXNG6X4N_cyxlaQxgIK4Crd4AxnVfZKxHIEiu3wsf7jpbAafmlJosqlswC-MxMfzQLHkL_-bOa7Q3QvlBh4W8Hgc_l_ijP6J4SnzUM" />
                    </div>
                    <div class="absolute -bottom-8 -left-8 glass-card p-6 rounded-2xl shadow-[0px_12px_24px_rgba(0,0,0,0.08)]">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-tertiary-container text-on-tertiary-container rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined">sentiment_very_satisfied</span>
                            </div>
                            <div>
                                <div class="text-[20px] font-bold text-on-surface">99%</div>
                                <div class="text-label-sm text-on-surface-variant">Patient Satisfaction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-stack-lg bg-surface" id="services">
            <div class="max-w-[1440px] mx-auto px-container-padding">
                <div class="flex flex-col items-center text-center mb-16 space-y-4">
                    <h2 class="font-display-lg text-display-lg text-primary">Our Specialized Services</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Comprehensive dental solutions tailored to your unique needs using the latest medical technologies.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Teeth Whitening -->
                    <div class="group p-8 bg-surface-container-lowest rounded-[32px] border border-outline-variant hover:border-primary-container hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-primary-container/10 text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[32px]">auto_awesome</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Teeth Whitening</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                            Professional whitening services for a radiant smile. We use advanced LED technology to safely brighten your teeth up to 8 shades.
                        </p>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group-hover:gap-4 transition-all" href="#">
                            Learn more <span class="material-symbols-outlined text-[18px]">arrow_right_alt</span>
                        </a>
                    </div>
                    
                    <!-- Dental Implants -->
                    <div class="group p-8 bg-surface-container-lowest rounded-[32px] border border-outline-variant hover:border-primary-container hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-primary-container/10 text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[32px]">biotech</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Dental Implants</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                            Durable and natural-looking tooth replacement solutions. Restore your confidence and functionality with our premium titanium implants.
                        </p>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group-hover:gap-4 transition-all" href="#">
                            Learn more <span class="material-symbols-outlined text-[18px]">arrow_right_alt</span>
                        </a>
                    </div>
                    
                    <!-- Root Canal Therapy -->
                    <div class="group p-8 bg-surface-container-lowest rounded-[32px] border border-outline-variant hover:border-primary-container hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-primary-container/10 text-primary rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[32px]">healing</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Root Canal Therapy</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                            Gentle and effective treatment to save your natural teeth. Our painless procedures prioritize your comfort and long-term oral health.
                        </p>
                        <a class="inline-flex items-center gap-2 text-primary font-label-md text-label-md group-hover:gap-4 transition-all" href="#">
                            Learn more <span class="material-symbols-outlined text-[18px]">arrow_right_alt</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Promotional Banner -->
        <section class="py-stack-lg overflow-hidden">
            <div class="max-w-[1440px] mx-auto px-container-padding">
                <div class="relative bg-primary-container rounded-[40px] p-12 lg:p-24 overflow-hidden flex flex-col lg:flex-row items-center gap-12">
                    <div class="absolute inset-0 opacity-10 pointer-events-none">
                        <svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern height="40" id="dots" patternUnits="userSpaceOnUse" width="40" x="0" y="0">
                                    <circle cx="2" cy="2" fill="#fff" r="2"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#dots)" height="100%" width="100%"></rect>
                        </svg>
                    </div>
                    <div class="z-10 flex-1 space-y-6">
                        <h2 class="font-display-lg text-[40px] leading-tight text-white">Your first consultation is on us.</h2>
                        <p class="text-white/80 font-body-lg text-body-lg max-w-md">
                            New to DentistPro? We offer a complimentary initial check-up and X-ray for all first-time patients. Start your journey to a better smile today.
                        </p>
                        <button class="px-8 py-4 bg-white text-primary font-headline-sm rounded-xl hover:shadow-xl transition-all active:scale-95">
                            Claim Free Offer
                        </button>
                    </div>
                    <div class="z-10 flex-1 relative flex justify-center">
                        <div class="relative w-64 h-64 lg:w-96 lg:h-96 rounded-full border-8 border-white/20 overflow-hidden">
                            <img class="w-full h-full object-cover" alt="Healthy white smile close-up" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMivEh7tkfKp8zsO-A6i8leLLgvJfjHaWhmh50M1Nxfya9HMHft-H6OsBkw1AbvF2v8tlOp-HnNpkFEYwdkELOiaUTXamWPeurvccQ225oHtSHqlw5DL-FxzmN6mOrMwqAs9Ggr749U0ZK1wvNFHxBIOjLH6VWrDJN94UP8hLYpyydUlPxXnjrfVcr5XYZ29SVZq6oGQoSNH1Hx-atEd-Ga85ZTC64GLPZdqLk5UMIOx_LKught5bTyTt90oI-GuEJPGB6S3CBtIZL" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-stack-lg bg-surface" id="contact">
            <div class="max-w-4xl mx-auto px-container-padding text-center">
                <h2 class="font-display-lg text-display-lg text-on-surface mb-6">Ready to schedule your visit?</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-12">
                    Use our interactive booking system to select a time that works best for you. No phone calls needed.
                </p>
                <div class="bg-surface-container-lowest p-8 rounded-[32px] border border-outline-variant shadow-sm flex flex-col md:flex-row items-center gap-8 justify-center">
                    <div class="flex items-center gap-4 text-left">
                        <span class="material-symbols-outlined text-primary text-[40px]">calendar_month</span>
                        <div>
                            <p class="font-label-md text-label-md text-on-surface-variant">Available Today</p>
                            <p class="font-headline-sm text-headline-sm text-on-surface">Next Slot: 2:30 PM</p>
                        </div>
                    </div>
                    <div class="h-px w-full md:w-px md:h-12 bg-outline-variant"></div>
                    <button class="w-full md:w-auto px-10 py-4 bg-primary-container text-on-primary-container rounded-xl font-headline-sm text-headline-sm shadow-md hover:shadow-lg transition-all">
                        Book Appointment
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-low border-t border-outline-variant py-stack-lg">
        <div class="max-w-[1440px] mx-auto px-container-padding">
            <div class="flex flex-col md:flex-row justify-between items-start gap-stack-lg mb-12">
                <div class="space-y-4 max-w-xs">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary font-bold">dentistry</span>
                        <span class="font-headline-sm text-headline-sm font-bold text-primary">DentistPro</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Providing professional, compassionate dental care since 2012. Our mission is to make oral health accessible and stress-free.
                    </p>
                </div>
                
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-12">
                    <div class="space-y-4">
                        <h4 class="font-label-md text-label-md text-on-surface font-bold uppercase">Quick Links</h4>
                        <ul class="space-y-2 font-label-md text-label-md text-on-surface-variant">
                            <li><a class="hover:text-primary transition-colors" href="#">Services</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Our Specialists</a></li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h4 class="font-label-md text-label-md text-on-surface font-bold uppercase">Legal</h4>
                        <ul class="space-y-2 font-label-md text-label-md text-on-surface-variant">
                            <li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Terms of Service</a></li>
                            <li><a class="hover:text-primary transition-colors" href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
                    <div class="space-y-4">
                        <h4 class="font-label-md text-label-md text-on-surface font-bold uppercase">Connect</h4>
                        <div class="flex gap-4">
                            <a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-white transition-colors" href="#" aria-label="Website">
                                <span class="material-symbols-outlined">public</span>
                            </a>
                            <a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-white transition-colors" href="#" aria-label="Email">
                                <span class="material-symbols-outlined">alternate_email</span>
                            </a>
                            <a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-primary-container hover:text-white transition-colors" href="#" aria-label="Share">
                                <span class="material-symbols-outlined">share</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 border-t border-outline-variant flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="font-label-sm text-label-sm text-on-surface-variant">
                    © 2024 DentistPro Management System. All rights reserved.
                </p>
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2 text-on-surface-variant font-label-sm">
                        <span class="material-symbols-outlined text-[18px]">phone</span>
                        +1 (555) 000-0000
                    </div>
                    <div class="flex items-center gap-2 text-on-surface-variant font-label-sm">
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                        Medical District, New York
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Scroll reveal interaction
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100');
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('#services > div > div').forEach(el => {
                el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
                observer.observe(el);
            });
        });
    </script>
</body>

</html>