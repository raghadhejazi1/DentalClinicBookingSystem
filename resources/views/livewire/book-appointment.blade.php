<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Book an Appointment</h2>

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

    @if(session('success'))
    <div class="p-4 bg-green-100 text-green-700 rounded-lg mb-4">
        {{ session('success') }}
    </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        @csrf

        {{-- Select Doctor --}}
        <div>
            <label for="doctor_id" class="block text-sm font-medium text-gray-700 mb-1">Select Doctor</label>
            <select wire:model="doctor_id" id="doctor_id" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm" required>
                <option value="">-- Select Doctor --</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">Dr. {{ $doctor->name }}</option>
                @endforeach
            </select>
            @error('doctor_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        {{-- Select Service --}}
        <div>
            <label for="service_id" class="block text-sm font-medium text-gray-700 mb-1">Select Service</label>
            <select wire:model="service_id" id="service_id" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm" required>
                <option value="">-- Choose a Service --</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
            @error('service_id') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        {{-- Appointment Date --}}
        <div>
            <label for="appointment_date" class="block text-sm font-medium text-gray-700 mb-1">Appointment Date</label>
            <input type="date" wire:model="appointment_date" id="appointment_date" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm" required>
            @error('appointment_date') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        {{-- Available Time Slot --}}
        <div>
            <label for="appointment_time" class="block text-sm font-medium text-gray-700 mb-1">Available Time Slot</label>
            <select wire:model="appointment_time" id="appointment_time" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm" required>
                <option value="">-- Select Time --</option>
                @if(isset($timeSlots))
                    @foreach($timeSlots as $slot)
                        <option value="{{ $slot }}">{{ $slot }}</option>
                    @endforeach
                @endif
            </select>
            @error('appointment_time') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        {{-- Notes (Optional) --}}
        <div>
            <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Notes (Optional)</label>
            <textarea wire:model="notes" id="notes" rows="2" placeholder="Mention any specific symptoms or requests..." class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"></textarea>
            @error('notes') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        {{-- Submit Button --}}
        <div class="mt-6 flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Confirm Booking
            </button>
        </div>
    </form>
</div>