<button {{ $attributes->merge(['class' => 'bg-primary text-white px-4 py-2 rounded hover:bg-blue-700']) }}>
    {{ $slot }}
</button>
