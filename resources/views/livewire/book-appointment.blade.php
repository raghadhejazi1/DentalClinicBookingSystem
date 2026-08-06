<div class="space-y-4">
    @if (session()->has('message'))
    <div class="p-3 bg-tertiary-container/20 text-tertiary border border-tertiary rounded-lg text-sm font-medium flex items-center gap-2">
        <span class="material-symbols-outlined text-lg">check_circle</span>
        {{ session('message') }}
    </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <!-- Select Doctor -->
        <div>
            <label class="block text-label-md font-semibold text-on-surface mb-1">Select Doctor</label>
            <select wire:model="doctor_id" class="w-full rounded-lg border-outline-variant bg-surface-bright p-2.5 text-body-md focus:border-primary focus:ring-primary">
                <option value="">-- Choose a Doctor --</option>
                @if(isset($doctors) && $doctors->count() > 0)
                @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">Dr. {{ $doctor->name }}</option>
                @endforeach
                @else
                <option value="1">Dr. Doctor User</option>
                @endif
            </select>
            @error('doctor_id') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <!-- Select Service -->
        <div>
            <label class="block text-label-md font-semibold text-on-surface mb-1">Select Service</label>
            <select wire:model="service_id" class="w-full rounded-lg border-outline-variant bg-surface-bright p-2.5 text-body-md focus:border-primary focus:ring-primary">
                <option value="">-- Choose a Service --</option>
                @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }} (${{ $service->price }})</option>
                @endforeach
            </select>
            @error('service_id') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <!-- Appointment Date -->
        <div>
            <label class="block text-label-md font-semibold text-on-surface mb-1">Appointment Date</label>
            <input type="date" wire:model="appointment_date" min="{{ date('Y-m-d') }}" class="w-full rounded-lg border-outline-variant bg-surface-bright p-2.5 text-body-md focus:border-primary focus:ring-primary">
            @error('appointment_date') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <!-- Available Time Slot -->
        <div>
            <label class="block text-label-md font-semibold text-on-surface mb-1">Available Time Slot</label>
            <select wire:model="appointment_time" class="w-full rounded-lg border-outline-variant bg-surface-bright p-2.5 text-body-md focus:border-primary focus:ring-primary">
                <option value="">-- Select Time --</option>
                <option value="09:00:00">09:00 AM</option>
                <option value="10:30:00">10:30 AM</option>
                <option value="13:00:00">01:00 PM</option>
                <option value="14:30:00">02:30 PM</option>
                <option value="16:00:00">04:00 PM</option>
            </select>
            @error('appointment_time') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <!-- Notes (Optional) -->
        <div>
            <label class="block text-label-md font-semibold text-on-surface mb-1">Notes (Optional)</label>
            <textarea wire:model="notes" rows="2" class="w-full rounded-lg border-outline-variant bg-surface-bright p-2.5 text-body-md focus:border-primary focus:ring-primary" placeholder="Mention any specific symptoms or requests..."></textarea>
            @error('notes') <span class="text-error text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" wire:loading.attr="disabled" class="w-full bg-primary text-on-primary font-bold py-3 rounded-lg shadow hover:bg-primary-container transition-colors duration-200 flex items-center justify-center gap-2">
            <span wire:loading.remove>Confirm Booking</span>
            <span wire:loading>Processing...</span>
        </button>
    </form>
</div>