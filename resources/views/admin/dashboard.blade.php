<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DentistPro | Clinic Management Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet" />
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .soft-medicine-shadow {
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
        }

        .canvas-area {
            margin-left: 240px;
            margin-top: 64px;
            min-height: calc(100vh - 64px);
        }

        /* Custom scrollbar for minimalist look */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #bfc7d1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #707881;
        }
    </style>
</head>

<body class="text-on-background selection:bg-primary-fixed">
    <!-- SideNavBar Anchor -->
    <aside class="fixed left-0 top-0 h-full w-[240px] bg-surface-container-lowest shadow-[0px_4px_12px_rgba(0,0,0,0.05)] flex flex-col py-stack-lg z-50">
        <div class="px-6 mb-stack-lg">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center text-on-primary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dentistry</span>
                </div>
                <div>
                    <h1 class="font-headline-md text-headline-md font-bold text-primary leading-none">DentistPro</h1>
                    <p class="text-label-sm text-on-surface-variant">Clinic Management</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 px-3 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-primary font-bold border-l-4 border-primary bg-primary-container/10 transition-colors duration-200 active:scale-[0.98]" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Clinic Overview</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container transition-colors duration-200 active:scale-[0.98]" href="#">
                <span class="material-symbols-outlined">calendar_month</span>
                <span class="font-body-md text-body-md">Schedule</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-surface-container transition-colors duration-200 active:scale-[0.98]" href="#">
                <span class="material-symbols-outlined">group</span>
                <span class="font-body-md text-body-md">Patients</span>
            </a>
        </nav>
        <div class="mt-auto px-3 pt-stack-lg border-t border-outline-variant">
            <button class="w-full bg-primary-container text-on-primary-container font-label-md text-label-md py-3 rounded-lg mb-4 hover:opacity-90 transition-opacity active:scale-[0.98]">
                Book Appointment
            </button>
            <a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:bg-surface-container transition-colors" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-2 text-on-surface-variant hover:bg-surface-container transition-colors" href="#">
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
    <!-- TopAppBar Anchor -->
    <header class="fixed top-0 right-0 w-[calc(100%-240px)] h-16 bg-surface border-b border-outline-variant flex justify-between items-center px-container-padding z-40">
        <div class="flex items-center flex-1">
            <div class="relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-md focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed transition-all" placeholder="Search patients or records..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-4">
                <button class="relative text-on-surface-variant hover:text-primary transition-colors cursor-pointer">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <button class="text-on-surface-variant hover:text-primary transition-colors cursor-pointer">
                    <span class="material-symbols-outlined">help</span>
                </button>
            </div>
            <div class="flex items-center gap-3 pl-6 border-l border-outline-variant">
                <div class="text-right hidden sm:block">
                    <p class="font-label-md text-label-md text-on-surface">{{ Auth::user()->name }}</p>
                    <p class="text-label-sm text-on-surface-variant">Senior Administrator</p>
                </div>
                <img class="w-10 h-10 rounded-full border-2 border-primary-fixed object-cover" data-alt="A professional headshot of a middle-aged male doctor with a warm smile, wearing a white clinical coat and a stethoscope. The background is a blurred, high-end dental clinic with soft blue and white tones, matching the minimalist medical aesthetic of the interface. High-key natural lighting creates a trustworthy and clean professional atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAw4ETz4coXQozKt3v8rJrd6Dw8vCs125nhikYN_27NHqZm-lxbWf1Cb-Ju60SmGY3mZlq983R_AWN0sDLPjkwVwPOLqG8TZM4e6wLWboFHWcpeC_-e-JsHnKvtUeXkX-ffg2oe4vfg7Lji2hoaOkDazdR-t_O5xtlusnmQN9Bvoy_bwVu63cpea-i1v8jTDAbs6_05pbsfLfx1DRDvE1mrNPU3mshbNcHXDG4YYd-IScaN4ec4-mnBSg4hoB3WtmWZn08I2e6NuqrI" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="canvas-area p-stack-lg max-w-[1440px]">
        <!-- Animated Background Fragment (Atmospheric) -->
        <div class="fixed top-0 left-[240px] w-[calc(100%-240px)] h-full pointer-events-none opacity-[0.03] z-[-1]">

        </div>
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-stack-lg">
            <div>
                <h2 class="font-display-lg text-display-lg text-on-surface">Clinic Overview</h2>
                <p class="text-body-md text-on-surface-variant">Welcome back,{{ Auth::user()->name }} Here is what's happening today.</p>
            </div>
            <div class="flex items-center gap-stack-sm bg-surface-container-low p-1 rounded-lg">
                <button class="px-4 py-2 rounded-md bg-surface-container-lowest soft-medicine-shadow text-primary font-label-md text-label-md">Daily</button>
                <button class="px-4 py-2 rounded-md text-on-surface-variant font-label-md text-label-md hover:bg-surface-container transition-colors">Weekly</button>
                <button class="px-4 py-2 rounded-md text-on-surface-variant font-label-md text-label-md hover:bg-surface-container transition-colors">Monthly</button>
            </div>
        </div>
        <!-- Key Stats Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-stack-md mb-stack-lg">
            <!-- Stat Card 1 -->
            <div class="bg-surface-container-lowest p-stack-md rounded-xl soft-medicine-shadow border border-outline-variant/30 flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-primary-container/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">event_available</span>
                </div>
                <div>
                    <p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Total Bookings Today</p>
                    <p class="font-display-lg text-display-lg text-on-surface">12</p>
                </div>
            </div>
            <!-- Stat Card 2 -->
            <div class="bg-surface-container-lowest p-stack-md rounded-xl soft-medicine-shadow border border-outline-variant/30 flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-tertiary-container/10 flex items-center justify-center text-tertiary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">group</span>
                </div>
                <div>
                    <p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Total Patients</p>
                    <p class="font-display-lg text-display-lg text-on-surface">450</p>
                </div>
            </div>
            <!-- Stat Card 3 -->
            <div class="bg-surface-container-lowest p-stack-md rounded-xl soft-medicine-shadow border border-outline-variant/30 flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-secondary-container flex items-center justify-center text-secondary">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
                </div>
                <div>
                    <p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Today's Revenue</p>
                    <p class="font-display-lg text-display-lg text-on-surface">$2,480</p>
                </div>
            </div>
            <!-- Stat Card 4 -->
            <div class="bg-primary text-on-primary p-stack-md rounded-xl shadow-lg flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-on-primary/20 flex items-center justify-center">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">clinical_notes</span>
                </div>
                <div>
                    <p class="text-label-sm text-primary-fixed uppercase tracking-wider">Pending Reports</p>
                    <p class="font-display-lg text-display-lg">04</p>
                </div>
            </div>
        </div>
        <!-- Today's Master Schedule -->
        <section class="bg-surface-container-lowest rounded-xl soft-medicine-shadow border border-outline-variant/30 overflow-hidden">
            <div class="px-container-padding py-stack-md border-b border-outline-variant flex justify-between items-center">
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Today's Master Schedule</h3>
                <div class="flex gap-2">
                    <button class="p-2 rounded-md hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">filter_list</span>
                    </button>
                    <button class="p-2 rounded-md hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">download</span>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-surface-container-low">
                        <tr>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">PATIENT NAME</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">SERVICE</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">TIME</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">DOCTOR</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">STATUS</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant text-right">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/30">
                        @forelse($appointments as $appointment)
                        <tr class="border-b hover:bg-gray-50">
                            <!-- اسم المريض -->
                            <td class="py-3 px-4 font-medium text-gray-900">
                                {{ $appointment->patient->name ?? 'N/A' }}
                            </td>

                            <!-- الخدمة -->
                            <td class="py-3 px-4 text-gray-600">
                                {{ $appointment->service->name ?? 'N/A' }}
                            </td>

                            <!-- الوقت والتاريخ -->
                            <td class="py-3 px-4 text-gray-600">
                                {{ $appointment->appointment_time }} <br>
                                <span class="text-xs text-gray-400">{{ $appointment->appointment_date }}</span>
                            </td>

                            <!-- الطبيب -->
                            <td class="py-3 px-4 text-gray-600">
                                {{ $appointment->doctor->name ?? 'N/A' }}
                            </td>

                            <!-- الحالة -->
                            <td class="py-3 px-4">
                                <span class="px-2 py-1 text-xs rounded-full 
                {{ $appointment->status === 'confirmed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ ucfirst($appointment->status) }}
                                </span>
                            </td>

                            <!-- الإجراءات -->
                            <td class="py-3 px-4">
                                <!-- أزرار القبول أو الإلغاء -->
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-gray-500">لا توجد مواعيد مسجلة حالياً.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>