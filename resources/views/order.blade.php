@extends('layouts.landing')
@section('cart', 'active')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg6">
        <div class="container">
            <div class="inner-title">
                <h3>History Order</h3>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>History Order</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Start Cart Area -->
    <section class="cart-wraps-area ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <form>
                        <div class="cart-wraps">
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Code Order</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->code_order }}</td>
                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    @if ($item->status == 'pending')
                                                        <span class="badge bg-warning">Menunggu Konfirmasi</span>
                                                    @elseif ($item->status == 'confirmed')
                                                        <span class="badge bg-success">Terkonfirmasi</span>
                                                    @elseif ($item->status == 'rejected')
                                                        <span class="badge bg-danger">Ditolak</span>
                                                    @elseif ($item->status == 'processing')
                                                        <span class="badge bg-info">DiProses</span>
                                                    @elseif ($item->status == 'shipped')
                                                        <span class="badge bg-primary">Dikirim</span>
                                                    @elseif ($item->status == 'delivered')
                                                        <span class="badge bg-success">Selesai</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('order.detail', $item->code_order) }}"
                                                        class="default-btn">Detail</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>


                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- End Cart Area -->

@endsection
