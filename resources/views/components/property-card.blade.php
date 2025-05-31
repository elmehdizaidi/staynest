<div class="bg-white shadow rounded p-4 flex flex-col justify-between min-h-[380px]">
    <div>
        <img src="{{ asset('storage/' . $property->photo) }}" alt="{{ $property->name }}"
             class="w-full h-48 object-cover rounded mb-4">
        <h2 class="text-lg font-bold mb-1">{{ $property->name }}</h2>
        <p class="text-sm text-gray-600 mb-4 line-clamp-4">
            {{ $property->description }}
        </p>
    </div>

    <div>
        <p class="font-semibold text-[#1E40AF] mb-3">{{ $property->price_per_night }} € / nuit</p>
        <a href="{{ route('booking.page', $property->id) }}"
           class="bg-[#1E40AF] text-white px-4 py-2 rounded block text-center">
            Réserver
        </a>
    </div>
</div>
