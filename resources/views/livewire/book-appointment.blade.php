<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Book an Appointment</h2>

    {{-- إظهار التنبيه وأزرار الدخول/التسجيل إذا كان الزائر غير مسجل دخوله --}}
    @guest
        <div class="p-4 mb-6 bg-amber-50 border-l-4 border-amber-500 rounded-r-md">
            <p class="font-medium text-amber-800">You need to log in to complete your appointment booking.</p>
            <div class="mt-3 flex gap-3">
                <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md text-sm hover:bg-blue-700 transition">
                    Log In
                </a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md text-sm hover:bg-blue-700 transition">
                    Create Account
                </a>
            </div>
        </div>
    @endguest

    {{-- رسالة النجاح عند الحجز --}}
    @if (session()->has('success'))
        <div class="p-4 mb-6 bg-green-100 border border-green-400 text-green-700 rounded-md">
            {{ session('success') }}
        </div>
    @endif
            <form wire:submit.prevent="save" class="space-y-4">

                {{-- Select Doctor --}}
                <div>
                    <label for="doctor_id" class="block text-sm font-medium text-gray-700 mb-1">
                        Select Doctor
                    </label>
                    <select id="doctor_id" wire:model="doctor_id" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                        <option value="">-- Choose a Doctor --</option>
                        @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                        @endforeach
                    </select>
                    @error('doctor_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                {{-- Select Service --}}
                <div>
                    <label for="service_id" class="block text-sm font-medium text-gray-700 mb-1">
                        Select Service
                    </label>
                    <select id="service_id" wire:model="service_id" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                        <option value="">-- Choose a Service --</option>
                        @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                    @error('service_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                {{-- Appointment Date --}}
                <div>
                    <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-1">
                        Appointment Date
                    </label>
                    <input type="date" id="appointment_date" wire:model="appointment_date" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                    @error('appointment_date') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                {{-- Available Time Slot --}}
                <div>
                    <label for="appointment_time" class="block text-sm font-medium text-gray-700 mb-1">
                        Available Time Slot
                    </label>
                    <select id="appointment_time" wire:model="appointment_time" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm">
                        <option value="">-- Select Time --</option>
                        @foreach($timeSlots as $slot)
                        <option value="{{ $slot }}">{{ $slot }}</option>
                        @endforeach
                    </select>
                    @error('appointment_time') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                {{-- Notes (Optional) --}}
                <div>
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">
                        Notes (Optional)
                    </label>
                    <textarea id="notes" wire:model="notes" rows="2" placeholder="Mention any specific symptoms or requests..." class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"></textarea>
                    @error('notes') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                {{-- Submit Button --}}
                <!-- Submit Button -->
                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Confirm Booking
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>