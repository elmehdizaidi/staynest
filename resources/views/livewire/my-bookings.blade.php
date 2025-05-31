<div class="max-w-4xl mx-auto mt-10 px-4">
    <h2 class="text-3xl font-semibold text-primary mb-8 border-b-4 border-primary pb-3">Mes réservations</h2>

    @forelse ($bookings as $booking)
        <div class="flex items-center bg-white shadow-lg rounded-2xl overflow-hidden mb-6 border-l-8 border-secondary">
            <img 
                src="{{ asset('storage/' . $booking->property->photo) }}" 
                alt="{{ $booking->property->name }}" 
                class="w-32 h-32 object-cover rounded-l-2xl"
            />
            <div class="p-5 flex-1">
                <h3 class="text-xl font-bold text-primary mb-1">{{ $booking->property->name }}</h3>
                <p class="text-sm text-gray-600">
                    📅 <span class="font-semibold text-secondary">{{ $booking->start_date }}</span> 
                    &mdash; 
                    <span class="font-semibold text-secondary">{{ $booking->end_date }}</span>
                </p>
            </div>
        </div>
    @empty
        <div class="bg-yellow-50 border-l-4 border-yellow-400 text-yellow-800 p-4 rounded shadow">
            <p>Aucune réservation pour le moment.</p>
        </div>
    @endforelse
</div>

