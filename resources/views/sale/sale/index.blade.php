@extends('layouts.master')
@section('title', 'Sale')

@section('content')
    <div id="content" class="app-content">

        {{ Breadcrumbs::render('sale_index') }}

        @can('create sale')
            <div class="d-flex justify-content-end">
                <a href="{{ route('sale.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus me-1"></i>
                    Create
                </a>
            </div>
        @endcan

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Sale</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                            class="fa fa-redo"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="card bg-dark border-0 text-white">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped" id="data-table" width="100%">
                                <thead>
                                    <tr>
                                        <th>Spal</th>
                                        <th>Kode</th>
                                        <th>Customer</th>
                                        <th>Attn.</th>
                                        <th>Tangal</th>
                                        <th>Total</th>
                                        <th>Diskon</th>
                                        <th>Grand Total</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.css" />
@endpush

@push('js')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.js"></script>

    <script>
        const columns = [{
                data: 'spal',
                name: 'spal'
            },
            {
                data: 'kode',
                name: 'kode'
            },
            {
                data: 'customer',
                name: 'customer'
            },
            {
                data: 'attn',
                name: 'attn'
            },
            {
                data: 'tanggal',
                name: 'tanggal'
            },
            {
                data: 'total',
                name: 'total',
                render: function(data, type, full, meta) {
                    return data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
            },
            {
                data: 'diskon',
                name: 'diskon',
                render: function(data, type, full, meta) {
                    return data != null ? data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : '-';
                }
            },
            {
                data: 'grand_total',
                name: 'grand_total',
                render: function(data, type, full, meta) {
                    return data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
            },
            {
                data: 'created_at',
                name: 'created_at'
            },
            {
                data: 'updated_at',
                name: 'updated_at'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]

        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('sale.index') }}",
            columns: columns
        });
    </script>
@endpush
