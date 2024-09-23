@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Detail - {{ $order->code_order }}</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                {{-- Detail Customer --}}
                                <h5>Customer Detail</h5>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $order->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $order->user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Register Account</th>
                                        <td>{{ $order->user->created_at->format('d-m-Y H:i:s') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-6">
                                {{-- Detail Order --}}
                                <h5>Order Detail</h5>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Code Order</th>
                                        <td>{{ $order->code_order }}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>
                                        <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Status</th>
                                        <td>
                                            @if ($order->status == 'pending')
                                                <span class="badge bg-warning">Pending</span>
                                            @elseif ($order->status == 'confirmed')
                                                <span class="badge bg-success">Terkonfirmasi</span>
                                            @elseif ($order->status == 'rejected')
                                                <span class="badge bg-danger">Ditolak</span>
                                            @elseif ($order->status == 'processing')
                                                <span class="badge bg-info">DiProses</span>
                                            @elseif ($order->status == 'shipped')
                                                <span class="badge bg-primary">Dikirim</span>
                                            @elseif ($order->status == 'delivered')
                                                <span class="badge bg-success">Selesai</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Pengiriman</th>
                                        <td>{{ $order->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total Price</th>
                                        <td>Rp. {{ number_format($totalPrice, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Notes</th>
                                        <th>" <i>{{ $order->notes_from_admin }}</i> "</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Update Status
                                        </button>
                                        <a target="_blank" href="{{ asset('storage/' . $order->payment_proof) }}" class="btn btn-success">Download Payment Proof</a>
                                        <a href="{{ route('admin.order') }}" class="btn btn-outline-primary">Back</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="code_order" value="{{ $order->code_order }}">
                                                            <div class="form-group">
                                                                <label for="status">Status</label>
                                                                <select name="status" class="form-control" required>
                                                                    <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                    <option value="confirmed" {{ $order->status == 'confirmed' ? 'selected' : '' }}>Terkonfirmasi</option>
                                                                    <option value="rejected" {{ $order->status == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                                                                    <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Di Proses</option>
                                                                    <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Di Kirim</option>
                                                                    <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Selesai</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="notes">Notes</label>
                                                                <textarea name="notes" class="form-control" placeholder="Masukkan catatan untuk pesanan"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Product Order</h5>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Custom Desain</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productOrder as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('storage/images/' . $product->product->image) }}"
                                                        alt="{{ $product->product->name }}"
                                                        style="width: 100px; height: 100px;"></td>
                                                <td>{{ $product->product->name }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>Rp. {{ number_format($product->product->price, 0, ',', '.') }}</td>
                                                <td>Rp. {{ number_format($product->total_price, 0, ',', '.') }}</td>
                                                <td>
                                                    @if ($product->design)
                                                        <a target="_blank" href="{{ asset('storage/' . $product->design) }}" class="btn btn-success">Download Desain</a>
                                                    @else
                                                        <span class="badge bg-secondary">Tidak Ada Desain</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
