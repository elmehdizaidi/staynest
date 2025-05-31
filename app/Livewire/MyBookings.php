<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class MyBookings extends Component
{
    public $bookings;

    public function mount()
    {
        $this->bookings = Booking::with('property')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.my-bookings');
    }
}

