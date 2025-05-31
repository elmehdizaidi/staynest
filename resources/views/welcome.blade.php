@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($properties as $property)
            @include('components.property-card', ['property' => $property])
        @endforeach
    </div>
@endsection
