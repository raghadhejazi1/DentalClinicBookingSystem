<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    // 1. عرض لوحة مواعيد الطبيب (هذه الدالة التي تضمن ظهور المريض عند طبيبه الخاص فقط)
    // 1. عرض لوحة مواعيد الطبيب
    public function index()
    {
        $doctorId = Auth::id();

        // 1. حساب الإحصائيات الخاصة بالدكتورة
        $stats = Appointment::where('doctor_id', $doctorId)
            ->selectRaw("
            COUNT(CASE WHEN DATE(appointment_date) = ? THEN 1 END) as totalToday,
            COUNT(CASE WHEN status = 'pending' THEN 1 END) as pending,
            COUNT(CASE WHEN status = 'confirmed' THEN 1 END) as confirmed,
            COUNT(CASE WHEN status = 'completed' THEN 1 END) as completed,
            COUNT(CASE WHEN status = 'cancelled' THEN 1 END) as cancelled
        ", [today()->toDateString()])
            ->first();

        // 2. جدول المواعيد الخاص بالدكتورة
        $appointments = Appointment::with(['patient', 'service'])
            ->where('doctor_id', $doctorId)
            ->latest()
            ->paginate(10);

        // 3. جلب قائمة المرضى والخدمات ليتم اختيار المريض الصحيح
        $patients = User::where('role', 'patient')->get(); // جلب المرضى فقط
        $services = Service::all();

        return view('doctor.dashboard', compact(
            'stats',
            'appointments',
            'patients',
            'services'
        ));
    }
    // 2. دالة عرض صفحة الحجز للمريض
    public function create()
    {
        $doctors = User::where('role', 'doctor')->distinct()->get();
        $services = Service::all();

        return view('book-appointment', compact('doctors', 'services'));
    }

    // 3. دالة حفظ الموعد
   public function store(Request $request)
{
    $request->validate([
        'patient_id'       => 'required|exists:users,id',
        'service_id'       => 'required|exists:services,id',
        'appointment_date' => 'required|date',
        'appointment_time' => 'required',
    ]);

    Appointment::create([
        'doctor_id'        => $request->doctor_id ?? Auth::id(), // الدكتورة الحالية
        'patient_id'       => $request->patient_id,             // المريض المختار
        'service_id'       => $request->service_id,             // الخدمة المختارة
        'appointment_date' => $request->appointment_date,
        'appointment_time' => $request->appointment_time,
        'status'           => 'confirmed',
    ]);

    return redirect()->back()->with('success', 'Appointment booked successfully!');
}

    // 4. دالة تحديث حالة الموعد مع تحقق أمني
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:confirmed,cancelled,completed', // أضفنا completed هنا
        ]);

        // البحث عن الموعد والتأكد من أنه يخص الطبيب المسجل دخوله حالياً
        $appointment = Appointment::where('id', $id)
            ->where('doctor_id', Auth::id())
            ->firstOrFail();

        $appointment->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'تم تحديث حالة الموعد بنجاح!');
    }
}
