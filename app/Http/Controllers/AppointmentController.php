<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{

    
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id'        => 'required|exists:users,id',
            'service_id'       => 'required|exists:services,id',
            'appointment_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'required',
        ]);

        Appointment::create([
            'patient_id'       => Auth::id(), // المريض المسجل حالياً
            'doctor_id'        => $request->doctor_id,
            'service_id'       => $request->service_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'status'           => 'pending',
        ]);

        

        return redirect()->back()->with('success', 'تم حجز الموعد بنجاح !');
    }
    public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:confirmed,cancelled',
    ]);

    $appointment = Appointment::findOrFail($id);
    $appointment->update([
        'status' => $request->status,
    ]);

    return redirect()->back()->with('success', 'تم تحديث حالة الموعد بنجاح!');
}
}