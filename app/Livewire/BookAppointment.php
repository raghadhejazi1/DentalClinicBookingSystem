<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class BookAppointment extends Component
{
    // Public properties connected to the Form
    public $doctor_id;
    public $service_id;
    public $appointment_date;
    public $appointment_time;
    public $notes;

    // Method executed on form submit
    public function save()
    {
        if (!Auth::check()) {
            session()->flash('error', 'You must be logged in to book an appointment.');
            return redirect()->route('login');
        }

        $this->validate([
            'doctor_id'        => 'required|exists:users,id',
            'service_id'       => 'required|exists:services,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
        ]);

        // تحويل صيغة الوقت من (11:00 AM) إلى (11:00:00) المقبولة في MySQL
        $formattedTime = Carbon::createFromFormat('g:i A', $this->appointment_time)->format('H:i:s');

        Appointment::create([
            'patient_id'       => Auth::id(),
            'doctor_id'        => $this->doctor_id,
            'service_id'       => $this->service_id,
            'appointment_date' => $this->appointment_date,
            'appointment_time' => $formattedTime,
            'notes'            => $this->notes,
            'status'           => 'pending',
        ]);

        $this->reset(['doctor_id', 'service_id', 'appointment_date', 'appointment_time', 'notes']);

        session()->flash('success', 'Appointment booked successfully!');
    }

    public function render()
    {
        $doctors = User::role('doctor')
            ->whereDoesntHave('roles', function ($query) {
                $query->where('name', 'admin');
            })
            ->get();

        $services = Service::all();

        $timeSlots = [
            '09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM',
            '01:00 PM', '02:00 PM', '03:00 PM', '04:00 PM', '05:00 PM',
        ];

        return view('livewire.book-appointment', [
            'doctors'   => $doctors,
            'services'  => $services,
            'timeSlots' => $timeSlots,
        ]);
    }
}