@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold mb-6">Sale Items</h1>
    <a href="{{ route('items.create') }}" class="border border-black px-4 py-2 font-semibold inline-block mb-4 hover:bg-black hover:text-white">Add New</a>
    <table class="w-full border border-black border-collapse">
        <thead><tr>
            @foreach(['Id','Item Code','Item Name','Quantity','Expired date','Note','Action'] as $h)
                <th class="border border-black p-2 text-left">{{ $h }}</th>
            @endforeach
        </tr></thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td class="border border-black p-2">{{ $item->id }}</td>
                <td class="border border-black p-2">{{ $item->item_code }}</td>
                <td class="border border-black p-2">{{ $item->item_name }}</td>
                <td class="border border-black p-2">{{ $item->quantity }}</td>
                <td class="border border-black p-2">{{ $item->expried_date }}</td>
                <td class="border border-black p-2">{{ $item->note }}</td>
                <td class="border border-black p-2"><a href="{{ route('items.edit', $item->id) }}" class="underline">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
