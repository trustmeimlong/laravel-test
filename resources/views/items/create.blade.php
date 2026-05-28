@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-6">Add New Item</h1>
    <form method="POST" action="{{ route('items.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1">Item Code</label>
            <input type="text" name="item_code" value="{{ old('item_code') }}" class="w-full border border-black p-2">
            @error('item_code')<p class="text-sm font-semibold mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block mb-1">Item Name</label>
            <input type="text" name="item_name" value="{{ old('item_name') }}" class="w-full border border-black p-2">
            @error('item_name')<p class="text-sm font-semibold mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block mb-1">Quantity</label>
            <input type="number" name="quantity" value="{{ old('quantity') }}" class="w-full border border-black p-2">
        </div>
        <div>
            <label class="block mb-1">Expired Date</label>
            <input type="date" name="expried_date" value="{{ old('expried_date') }}" class="w-full border border-black p-2">
        </div>
        <div>
            <label class="block mb-1">Note</label>
            <input type="text" name="note" value="{{ old('note') }}" class="w-full border border-black p-2">
        </div>
        <button class="border border-black px-4 py-2 font-semibold hover:bg-black hover:text-white">Save</button>
    </form>
@endsection
