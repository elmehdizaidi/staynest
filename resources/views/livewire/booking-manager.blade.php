<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-6 text-primary">Réserver : {{ $property->name }}</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-6">
            {{ session('message') }}
        </div>
    @endif

    <div class="mb-5">
        <label class="block mb-1 font-semibold text-gray-700" for="start_date">Date de début</label>
        <input type="date" wire:model="start_date" id="start_date"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition" />
    </div>

    <div class="mb-6">
        <label class="block mb-1 font-semibold text-gray-700" for="end_date">Date de fin</label>
        <input type="date" wire:model="end_date" id="end_date"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary transition" />
    </div>

    <button wire:click="createBooking"
            class="w-full bg-primary hover:bg-primary/90 transition text-white font-semibold py-3 rounded">
        Réserver
    </button>
</div>
