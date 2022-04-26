@extends('layouts.master')

@section('title',__('Result Search'))

@section('content')

<table class="table table-light">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Quantité</th>
        </tr>
    </thead>
    <tbody>
        @if (count($products)>0)

            @foreach ($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->meta_description}}</td>
                    <td>{{$product->stock_quantity}}</td>
                </tr>
            @endforeach
        @else

        Product Not Found
            
        @endif
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection