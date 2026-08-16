<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DentistPro | Patient Appointments</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
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
    </style>
</head>

<body class="bg-surface">
    <!-- Sidebar -->
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
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors duration-200" href="#">
                <span class="material-symbols-outlined mr-3">dashboard</span>
                <span class="font-body-md text-body-md">Clinic Overview</span>
            </a>
            <a class="flex items-center px-6 py-3 text-primary font-bold border-l-4 border-primary bg-primary-container/10 transition-colors duration-200" href="#">
                <span class="material-symbols-outlined mr-3">calendar_month</span>
                <span class="font-body-md text-body-md">Schedule</span>
            </a>
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-colors duration-200" href="#">
                <span class="material-symbols-outlined mr-3">group</span>
                <span class="font-body-md text-body-md">Patients</span>
            </a>
        </nav>
        <div class="px-6 mt-auto space-y-1">
            <a class="flex items-center py-2 text-on-surface-variant hover:text-primary transition-colors" href="#">
                <span class="material-symbols-outlined mr-3 text-[20px]">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="flex items-center py-2 w-full text-left text-on-surface-variant hover:text-error transition-colors bg-transparent border-0 cursor-pointer">
                    <span class="material-symbols-outlined mr-3 text-[20px]">logout</span>
                    <span class="font-label-md text-label-md">Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content Canvas -->
    <main class="ml-[240px] min-h-screen flex flex-col">
        <!-- Top Header -->
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
                        <p class="font-label-md text-label-md text-on-surface">Dr. {{ Auth::user()->name }}</p>
                        <p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Senior Dentist</p>
                    </div>
                    <img class="w-10 h-10 rounded-full object-cover border border-outline-variant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmb7iotpU5VQetuELe725dmgRliOHiBzk8Ox3PNnIpPyoxaRN94srCdXbuHtfGuMlycFrUH8VhFSD0a3W4Sh-OPhB5wsi-dPNVaLaqsqBpj5KwnE_lXocCrZ-G8wugDKbonIz_ubKiyl_aypZuZ37P_TP95FbptpmRYy4M4zu28Yq3Gn3ncKalZBm3BFJJRuEgUYxOtBtakhyuDXzgO77xN0e7XS0fgl2fHfMRNRT03XOExdY4x2HWkJA0dI-fKud_9Fu8QIV1-cLV" alt="Doctor profile" />
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="mt-16 p-stack-lg flex-1">
            <div class="max-w-[1440px] mx-auto">
                <!-- Title Row -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-stack-md mb-stack-lg">
                    <div>
                        <h2 class="font-display-lg text-display-lg text-on-surface">Patient Appointments</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Manage and track scheduled treatments for the upcoming weeks.</p>
                    </div>
                </div>

                <!-- Inline Quick-Book Form Details -->
                <details class="mb-6 bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/30 shadow-sm">
                    <summary class="cursor-pointer font-bold text-primary flex items-center gap-2 select-none hover:opacity-80 transition-opacity">
                        <span class="material-symbols-outlined">add_circle</span>
                        <span>Book New Appointment</span>
                    </summary>

                    <form action="{{ route('appointments.store') }}" method="POST" class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4 pt-4 border-t border-outline-variant/20">
                        @csrf

                        <!-- تمرير رقم الدكتورة تلقائياً بدون إتاحة تغييره -->
                        <input type="hidden" name="doctor_id" value="{{ Auth::id() }}">

                        <!-- اختيار المريض -->
                        <div>
                            <label class="block font-label-md text-on-surface-variant mb-1">Patient</label>
                            <select name="patient_id" required class="w-full rounded-lg border border-outline-variant bg-surface-container-low p-2.5 text-body-md focus:border-primary focus:outline-none">
                                <option value="">Select Patient</option>
                                @foreach($patients ?? [] as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- اختيار الخدمة -->
                        <div>
                            <label class="block font-label-md text-on-surface-variant mb-1">Service</label>
                            <select name="service_id" required class="w-full rounded-lg border border-outline-variant bg-surface-container-low p-2.5 text-body-md focus:border-primary focus:outline-none">
                                <option value="">Select Service</option>
                                @foreach($services ?? [] as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- التاريخ -->
                        <div>
                            <label class="block font-label-md text-on-surface-variant mb-1">Date</label>
                            <input type="date" name="appointment_date" required class="w-full rounded-lg border border-outline-variant bg-surface-container-low p-2.5 text-body-md focus:border-primary focus:outline-none">
                        </div>

                        <!-- الوقت -->
                        <div>
                            <label class="block font-label-md text-on-surface-variant mb-1">Time</label>
                            <input type="time" name="appointment_time" required class="w-full rounded-lg border border-outline-variant bg-surface-container-low p-2.5 text-body-md focus:border-primary focus:outline-none">
                        </div>

                        <div class="md:col-span-2 text-right pt-2">
                            <button type="submit" class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-md hover:opacity-90 transition-opacity">
                                Save Appointment
                            </button>
                        </div>
                    </form>
                </details>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-stack-lg">
                    <div class="p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <span class="text-xs font-semibold uppercase text-gray-400 tracking-wider">TOTAL TODAY</span>
                        <div class="text-2xl font-bold text-blue-900 mt-1">
                            {{ $totalToday ?? \App\Models\Appointment::where('doctor_id', Auth::id())->whereDate('appointment_date', today())->count() }} Patients
                        </div>
                    </div>
                    <div class="p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <span class="text-xs font-semibold uppercase text-gray-400 tracking-wider">PENDING</span>
                        <div class="text-2xl font-bold text-amber-600 mt-1">
                            {{ $pending ?? \App\Models\Appointment::where('doctor_id', Auth::id())->where('status', 'pending')->count() }}
                        </div>
                    </div>
                    <div class="p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <span class="text-xs font-semibold uppercase text-gray-400 tracking-wider">CONFIRMED</span>
                        <div class="text-2xl font-bold text-emerald-600 mt-1">
                            {{ $confirmed ?? \App\Models\Appointment::where('doctor_id', Auth::id())->where('status', 'confirmed')->count() }}
                        </div>
                    </div>
                    <div class="p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <span class="text-xs font-semibold uppercase text-gray-400 tracking-wider">COMPLETED</span>
                        <div class="text-2xl font-bold text-indigo-600 mt-1">
                            {{ $completed ?? \App\Models\Appointment::where('doctor_id', Auth::id())->where('status', 'completed')->count() }}
                        </div>
                    </div>
                </div>

                <!-- Table Container -->
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
                                    <td class="py-3 px-6 font-medium text-gray-900">
                                        {{ $appointment->patient->name ?? 'N/A' }}
                                    </td>
                                    <td class="py-3 px-6 text-gray-600">
                                        {{ $appointment->service->name ?? 'N/A' }}
                                    </td>
                                    <td class="py-3 px-6 text-gray-600">
                                        {{ $appointment->appointment_time }} <br>
                                        <span class="text-xs text-gray-400">{{ $appointment->appointment_date }}</span>
                                    </td>
                                    <td class="py-3 px-6">
                                        @if($appointment->status === 'pending')
                                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">Pending</span>
                                        @elseif($appointment->status === 'confirmed')
                                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-800">Confirmed</span>
                                        @elseif($appointment->status === 'completed')
                                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-800">Completed</span>
                                        @else
                                        <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-rose-100 text-rose-800">Cancelled</span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-6 text-right">
                                        <div class="flex items-center justify-end gap-1.5">
                                            @if($appointment->status === 'pending')
                                            <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="confirmed">
                                                <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs px-2.5 py-1 rounded-md transition font-medium">Confirm</button>
                                            </form>
                                            <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="cancelled">
                                                <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white text-xs px-2.5 py-1 rounded-md transition font-medium">Cancel</button>
                                            </form>
                                            @elseif($appointment->status === 'confirmed')
                                            <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="completed">
                                                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white text-xs px-2.5 py-1 rounded-md transition font-medium">Complete</button>
                                            </form>
                                            <form action="{{ route('appointments.updateStatus', $appointment->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="cancelled">
                                                <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white text-xs px-2.5 py-1 rounded-md transition font-medium">Cancel</button>
                                            </form>
                                            @else
                                            <span class="text-xs text-gray-400 font-medium">—</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-6 text-gray-500">لا توجد مواعيد مخصصة لك حالياً.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Footer -->
                    <div class="px-6 py-4 bg-surface-container-low border-t border-outline-variant flex justify-between items-center">
                        {{ $appointments->links() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w-full py-stack-md bg-surface-container-low border-t border-outline-variant flex flex-col md:flex-row justify-between items-center px-container-padding gap-stack-md mt-auto">
            <div class="flex items-center gap-4">
                <span class="font-label-md text-label-md font-bold text-primary">DentistPro</span>
                <p class="font-label-sm text-label-sm text-on-surface-variant opacity-80">© 2026 DentistPro Management System. All rights reserved.</p>
            </div>
            <div class="flex gap-stack-md">
                <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="font-label-sm text-label-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Contact Support</a>
            </div>
        </footer>
    </main>
</body>

</html>