@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Product</h4>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Create</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Short Description</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->short_description }}</td>
                                    <td>{{ $product->description }}</td>
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
