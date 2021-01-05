@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Products</h2>
            <a href="{{ route('products.create') }}">Create Product</a>

            <table class="table bg-white">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <th>{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>Rs. {{ $product->price }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>


@endsection

