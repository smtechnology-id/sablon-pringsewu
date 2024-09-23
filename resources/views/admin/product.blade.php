@extends('layouts.app')
@section('active_product', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Product</h4>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">Create</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover"  id="datatable1" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Short Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: 100px;">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ Str::limit($product->short_description, 100) }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.product.edit', $product->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('admin.product.destroy', $product->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
