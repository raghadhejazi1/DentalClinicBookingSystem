<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class BookAppointment extends Component
{
    // Public properties connected to the Form
    public $doctor_id;
    public $service_id;
    public $appointment_date;
    public $appointment_time;
    public $notes;

    // Validation Rules
    protected $rules = [
        'doctor_id' => 'required',
        'service_id' => 'required',
        'appointment_date' => 'required|date|after_or_equal:today',
        'appointment_time' => 'required',
        'notes' => 'nullable|string|max:500',
    ];

    // Method executed on form submit
   public function save()
{
    $this->validate();

    Appointment::create([
        'patient_id'       => Auth::id(),
        'doctor_id'        => $this->doctor_id,
        'service_id'       => $this->service_id,
        'appointment_date' => $this->appointment_date,
        'appointment_time' => $this->appointment_time, // 👈 تم إرسال الحقل منفصلاً هنا
        'notes'            => $this->notes,
        'status'           => 'pending',
    ]);

    session()->flash('message', 'Appointment request submitted successfully!');

    $this->reset(['doctor_id', 'service_id', 'appointment_date', 'appointment_time', 'notes']);
}

    public function render()
    {
        // Fetch doctors and services
        $doctors = User::role('doctor')->get();
        $services = Service::all();

        return view('livewire.book-appointment', [
            'doctors' => $doctors,
            'services' => $services,
        ]);
    }
}