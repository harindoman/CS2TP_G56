@extends('layouts.app')

@section('content')
<div class="container" style="max-width:600px;margin:40px auto;">
    <h2>Edit Product</h2>
    <form method="POST" action="{{ route('admin.products.update', $product->id) }}">
        @csrf
        <div class="form-group" style="margin-bottom:16px;">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
        </div>
        <div class="form-group" style="margin-bottom:16px;">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-group" style="margin-bottom:16px;">
            <label>Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
        </div>
        <div class="form-group" style="margin-bottom:16px;">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $product->category) }}" required>
        </div>
        <div class="form-group" style="margin-bottom:16px;">
            <label>Material</label>
            <input type="text" name="material" class="form-control" value="{{ old('material', $product->material) }}">
        </div>
        <div class="form-group" style="margin-bottom:16px;">
            <label>Image URL</label>
            <input type="text" name="image_url" class="form-control" value="{{ old('image_url', $product->image_url) }}">
        </div>
        <div class="form-group" style="margin-bottom:16px;">
            <label>Stock Quantity</label>
            <input type="number" name="stock_quantity" class="form-control" value="{{ old('stock_quantity', $product->stock_quantity) }}" required>
        </div>
        <div class="form-group" style="margin-bottom:16px;">
            <label>Stock Threshold <span style="font-weight:normal;color:#888;">(Alert when stock is at or below this number)</span></label>
            <input type="number" name="stock_threshold" class="form-control" value="{{ old('stock_threshold', $product->stock_threshold) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
