<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Livewire\BookAppointment;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// 🔄 1. التوجيه الذكي باستخدام Spatie
Route::get('/dashboard', function () {
    /** @var \App\Models\User $user */
    $user = Auth::user();

    if ($user->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } elseif ($user->hasRole('doctor')) {
        return redirect()->route('doctor.dashboard');
    } elseif ($user->hasRole('patient')) {
        return redirect()->route('patient.dashboard');
    }

    return redirect('/');
})->middleware(['auth'])->name('dashboard');

// 👑 2. مسار الأدمن
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $appointments = Appointment::with(['patient', 'doctor', 'service'])->latest()->get();
        return view('admin.dashboard', compact('appointments'));
    })->name('admin.dashboard');
});

// 🩺 3. مسار الطبيب
Route::middleware(['auth', 'role:doctor'])->prefix('doctor')->group(function () {
    Route::get('/dashboard', function () {
        $appointments = Appointment::with(['patient', 'service'])
            ->where('doctor_id', Auth::id())
            ->latest()
            ->get();
        return view('doctor.dashboard', compact('appointments'));
    })->name('doctor.dashboard');
});

// 🧑‍💼 4. مسار المريض
Route::middleware(['auth', 'role:patient'])->prefix('patient')->group(function () {
    Route::get('/dashboard', function () {
        $doctors = User::role('doctor')->get();
        $services = Service::all();
        return view('patient.dashboard', compact('doctors', 'services'));
    })->name('patient.dashboard');
});

// 📋 5. مسارات الحجز والبروفايل
Route::middleware('auth')->group(function () {
    Route::post('/appointments/book', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::patch('/appointments/{id}/status', [AppointmentController::class, 'updateStatus'])->name('appointments.updateStatus');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/book-appointment', BookAppointment::class)->name('appointments.create');
require __DIR__ . '/auth.php';
Route::get('/doctor/dashboard', [AppointmentController::class, 'index'])->middleware(['auth'])->name('doctor.dashboard');