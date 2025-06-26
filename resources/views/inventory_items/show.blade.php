@extends('layout')

@section('content')
<div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-lg shadow">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Inventory Item Details</h1>

    <div class="space-y-4 text-gray-700">
        <p><strong>Name:</strong> {{ $item->Name }}</p>
        <p><strong>Unit:</strong> {{ $item->Unit }}</p>
        <p><strong>Quantity Available:</strong> {{ $item->Quantity_Available }}</p>
    </div>

    <div class="mt-6">
        <a href="{{ route('inventory_items.index') }}"
           class="inline-block bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition">
            ← Back to Inventory
        </a>
    </div>
</div>
@endsection
