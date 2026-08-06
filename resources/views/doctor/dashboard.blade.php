<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DentistPro | Patient Appointments</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "fontWeight": "500"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #F8F9FA;
            font-family: 'Inter', sans-serif;
            color: #191c1d;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .soft-shadow {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
        }

        .active-nav-indicator {
            border-left-width: 4px;
        }

        /* Status Badge specific classes */
        .status-pending {
            background-color: rgba(253, 224, 71, 0.2);
            color: #854d0e;
        }

        .status-confirmed {
            background-color: rgba(45, 106, 79, 0.1);
            color: #2D6A4F;
        }

        .status-completed {
            background-color: rgba(156, 163, 175, 0.1);
            color: #4b5563;
        }
    </style>
</head>

<body class="bg-surface">
    <!-- SideNavBar Anchor -->
    <aside class="fixed left-0 top-0 h-full w-[240px] bg-surface-container-lowest shadow-[0px_4px_12px_rgba(0,0,0,0.05)] flex flex-col py-stack-lg z-50">
        <div class="px-6 mb-stack-lg">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-on-primary-container">
                    <span class="material-symbols-outlined">dentistry</span>
                </div>
                <div>
                    <h1 class="font-headline-md text-headline-md font-bold text-primary leading-none">DentistPro</h1>
                    <p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Clinic Management</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors duration-200 group" href="#">
                <span class="material-symbols-outlined mr-3">dashboard</span>
                <span class="font-body-md text-body-md">Clinic Overview</span>
            </a>
            <a class="flex items-center px-6 py-3 text-primary font-bold border-l-4 border-primary bg-primary-container/10 transition-colors duration-200 group" href="#">
                <span class="material-symbols-outlined mr-3">calendar_month</span>
                <span class="font-body-md text-body-md">Schedule</span>
            </a>
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors duration-200 group" href="#">
                <span class="material-symbols-outlined mr-3">group</span>
                <span class="font-body-md text-body-md">Patients</span>
            </a>
        </nav>
        <div class="px-6 mt-auto space-y-1">
            <a class="flex items-center py-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
                <span class="material-symbols-outlined mr-3 text-[20px]">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
            <a class="flex items-center py-2 text-on-surface-variant hover:text-error transition-colors" href="#">
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf

                    <button type="submit" class="flex items-center gap-3 w-full text-left bg-transparent border-0 p-0 text-gray-600 hover:text-red-600 cursor-pointer transition-colors">
                        <span class="material-symbols-outlined">logout</span>
                        <span class="font-label-md text-label-md">Logout</span>
                    </button>
                </form>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="ml-[240px] min-h-screen flex flex-col">
        <!-- TopAppBar Anchor -->
        <header class="fixed top-0 right-0 w-[calc(100%-240px)] h-16 bg-surface border-b border-outline-variant flex justify-between items-center px-container-padding z-40">
            <div class="flex items-center gap-4 flex-1">
                <div class="relative w-full max-w-md">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                    <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-lg text-body-md focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all" placeholder="Search appointments or patients..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-on-surface-variant hover:bg-surface-container rounded-full transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
                    </button>
                    <button class="p-2 text-on-surface-variant hover:bg-surface-container rounded-full transition-colors">
                        <span class="material-symbols-outlined">help</span>
                    </button>
                </div>
                <div class="flex items-center gap-3 pl-6 border-l border-outline-variant">
                    <div class="text-right hidden sm:block">
                        <p class="font-label-md text-label-md text-on-surface">Dr. Sarah Johnson</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Senior Dentist</p>
                    </div>
                    <img class="w-10 h-10 rounded-full object-cover border border-outline-variant" data-alt="A professional headshot of a female dentist with a kind smile, wearing a clean white lab coat, set against a soft-focus minimalist clinic background with cool blue tones and natural lighting. The style is modern, trustworthy, and high-quality photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmb7iotpU5VQetuELe725dmgRliOHiBzk8Ox3PNnIpPyoxaRN94srCdXbuHtfGuMlycFrUH8VhFSD0a3W4Sh-OPhB5wsi-dPNVaLaqsqBpj5KwnE_lXocCrZ-G8wugDKbonIz_ubKiyl_aypZuZ37P_TP95FbptpmRYy4M4zu28Yq3Gn3ncKalZBm3BFJJRuEgUYxOtBtakhyuDXzgO77xN0e7XS0fgl2fHfMRNRT03XOExdY4x2HWkJA0dI-fKud_9Fu8QIV1-cLV" />
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="mt-16 p-stack-lg flex-1">
            <div class="max-w-[1440px] mx-auto">
                <!-- Header Section -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-stack-md mb-stack-lg">
                    <div>
                        <h2 class="font-display-lg text-display-lg text-on-surface">Patient Appointments</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Manage and track scheduled treatments for the upcoming weeks.</p>
                    </div>
                    <button class="flex items-center gap-2 bg-primary-container text-on-primary-container px-6 py-3 rounded-lg font-label-md text-label-md hover:opacity-90 active:scale-[0.98] transition-all soft-shadow">
                        <span class="material-symbols-outlined text-[18px]">add</span>
                        Book Appointment
                    </button>
                </div>
                <!-- Filters/Stats Row -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-stack-lg">
                    <div class="bg-surface-container-lowest p-gutter rounded-xl soft-shadow border border-outline-variant/30">
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Total Today</p>
                        <p class="font-headline-md text-headline-md text-primary">12 Patients</p>
                    </div>
                    <div class="bg-surface-container-lowest p-gutter rounded-xl soft-shadow border border-outline-variant/30">
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Pending</p>
                        <p class="font-headline-md text-headline-md text-on-surface">3</p>
                    </div>
                    <div class="bg-surface-container-lowest p-gutter rounded-xl soft-shadow border border-outline-variant/30">
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Confirmed</p>
                        <p class="font-headline-md text-headline-md text-tertiary">8</p>
                    </div>
                    <div class="bg-surface-container-lowest p-gutter rounded-xl soft-shadow border border-outline-variant/30">
                        <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-2">Avg. Wait</p>
                        <p class="font-headline-md text-headline-md text-on-surface">14 min</p>
                    </div>
                </div>
                <!-- Appointment List Table Container -->
                <div class="bg-surface-container-lowest rounded-xl soft-shadow border border-outline-variant/50 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low border-b border-outline-variant">
                                    <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Patient Name</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Service</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Date & Time</th>

                                    <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Status</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant/30">
                                @forelse($appointments as $appointment)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4 font-medium text-gray-900">
                                        {{ $appointment->patient->name ?? 'N/A' }}
                                    </td>
                                    <td class="py-3 px-4 text-gray-600">
                                        {{ $appointment->service->name ?? 'N/A' }}
                                    </td>
                                    <td class="py-3 px-4 text-gray-600">
                                        {{ $appointment->appointment_time }} <br>
                                        <span class="text-xs text-gray-400">{{ $appointment->appointment_date }}</span>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 text-xs rounded-full 
                {{ $appointment->status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ ucfirst($appointment->status) }}
                                        </span>
                                    </td>

                                    <td class="py-3 px-4 flex gap-2">
                                        @if($appointment->status === 'pending')
                                        <!-- زر القبول -->
                                        <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="confirmed">
                                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-xs px-3 py-1 rounded-md transition">
                                                Confirm
                                            </button>
                                        </form>

                                        <!-- زر الإلغاء -->
                                        <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="cancelled">
                                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-xs px-3 py-1 rounded-md transition">
                                                Cancel
                                            </button>
                                        </form>
                                        @else
                                        <span class="text-xs text-gray-400 font-medium">Done</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-gray-500">لا توجد مواعيد مخصصة لك حالياً.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination-style footer for the table -->
                    <div class="px-6 py-4 bg-surface-container-low border-t border-outline-variant flex justify-between items-center">
                        <p class="font-label-sm text-label-sm text-on-surface-variant">Showing 1-4 of 28 appointments</p>
                        <div class="flex gap-2">
                            <button class="p-1 rounded hover:bg-surface-variant transition-colors disabled:opacity-30" disabled="">
                                <span class="material-symbols-outlined">chevron_left</span>
                            </button>
                            <button class="p-1 rounded hover:bg-surface-variant transition-colors">
                                <span class="material-symbols-outlined">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Async Loading Mock (Micro-interaction Example) -->
                <div class="mt-stack-lg flex justify-center">
                    <button class="font-label-md text-label-md text-primary hover:underline flex items-center gap-2" id="loadMoreBtn">
                        View Past History
                        <span class="material-symbols-outlined text-[16px]">history</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Footer Anchor -->
        <footer class="w-full py-stack-md bg-surface-container-low border-t border-outline-variant flex flex-col md:flex-row justify-between items-center px-container-padding gap-stack-md mt-auto">
            <div class="flex items-center gap-4">
                <span class="font-label-md text-label-md font-bold text-primary">DentistPro</span>
                <p class="font-label-sm text-label-sm text-on-surface-variant opacity-80">© 2024 DentistPro Management System. All rights reserved.</p>
            </div>
            <div class="flex gap-stack-md">
                <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Contact Support</a>
            </div>
        </footer>
    </main>
    <script>
        // Simple micro-interaction for the Load More button
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', (e) => {
                e.preventDefault();
                loadMoreBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Loading history...';
                setTimeout(() => {
                    loadMoreBtn.innerHTML = 'All history loaded <span class="material-symbols-outlined">check_circle</span>';
                    loadMoreBtn.classList.remove('text-primary');
                    loadMoreBtn.classList.add('text-on-surface-variant');
                }, 1500);
            });
        }
    </script>
</body>

</html>