@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: 100px;">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $product->id }}" required>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="short_description">Short Description</label>
                                <textarea class="form-control" id="short_description" name="short_description" value="" required>{{ $product->short_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="editor" class="form-control" name="description" value="" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

