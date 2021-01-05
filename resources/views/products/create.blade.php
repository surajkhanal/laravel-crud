@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-8">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" id="productName" value="{{ old('name') }}" placeholder="Product Name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productDesc" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="productDesc" value="{{ old('description') }}" placeholder="Product Desc">
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="productPrice" value="{{ old('price') }}" placeholder="Price">
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>

@endsection
