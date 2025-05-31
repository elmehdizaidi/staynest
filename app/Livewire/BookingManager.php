<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingManager extends Component
{
    public $property;
    public $start_date;
    public $end_date;

    public function mount($property)
    {
         $this->property = $property;
    }

    public function createBooking()
    {
        Booking::create([
            'user_id'=>Auth::id(),
            'property_id' => $this->property->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        session()->flash('message', 'Réservation effectuée avec succès !');
        $this->reset(['start_date', 'end_date']);
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
