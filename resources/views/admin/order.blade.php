@extends('layouts.app')
@section('active_order', 'active-page')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Data Pesanan / Pembelian Masuk</h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#pesanan-masuk"
                            type="button" role="tab" aria-controls="pesanan-masuk" aria-selected="true">Pesanan
                            Masuk</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#terkonfirmasi"
                            type="button" role="tab" aria-controls="terkonfirmasi"
                            aria-selected="false">Terkonfirmasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ditolak"
                            type="button" role="tab" aria-controls="ditolak" aria-selected="false">Ditolak</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#diproses"
                            type="button" role="tab" aria-controls="diproses" aria-selected="false">DiProses</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#dikirim"
                            type="button" role="tab" aria-controls="dikirim" aria-selected="false">Dikirim</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#selesai"
                            type="button" role="tab" aria-controls="selesai" aria-selected="false">Selesai</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pesanan-masuk" role="tabpanel"
                        aria-labelledby="pesanan-masuk-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable1" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pending as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ $order->address }}</td>
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
                                            <td>
                                                <a href="{{ route('admin.order.detail', $order->code_order) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="terkonfirmasi" role="tabpanel" aria-labelledby="terkonfirmasi-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable1" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($confirmed as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ $order->address }}</td>
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
                                            <td>
                                                <a href="{{ route('admin.order.detail', $order->code_order) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ditolak" role="tabpanel" aria-labelledby="ditolak-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable1"
                                class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rejected as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ $order->address }}</td>
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
                                            <td>
                                                <a href="{{ route('admin.order.detail', $order->code_order) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="diproses" role="tabpanel" aria-labelledby="diproses-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable1"
                                class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($processing as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ $order->address }}</td>
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
                                            <td>
                                                <a href="{{ route('admin.order.detail', $order->code_order) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dikirim" role="tabpanel" aria-labelledby="dikirim-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable1"
                                class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipped as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ $order->address }}</td>
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
                                            <td>
                                                <a href="{{ route('admin.order.detail', $order->code_order) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="selesai" role="tabpanel" aria-labelledby="selesai-tab">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="datatable1"
                                class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($delivered as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ $order->address }}</td>
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
                                            <td>
                                                <a href="{{ route('admin.order.detail', $order->code_order) }}"
                                                    class="btn btn-primary">Detail</a>
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
    @endsection
