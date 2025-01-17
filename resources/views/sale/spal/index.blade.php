@extends('layouts.master')
@section('title', 'Spal')

@section('content')
    <div id="content" class="app-content">

        {{ Breadcrumbs::render('spal_index') }}

        @can('create spal')
            <div class="d-flex justify-content-end">
                <a href="{{ route('spal.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus me-1"></i>
                    Create
                </a>
            </div>
        @endcan

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Spal</h4>
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
                                        {{-- <th>File</th> --}}
                                        <th>Kode</th>
                                        <th>Customer</th>
                                        <th>Nama Kapal</th>
                                        <th>Nama Muatan</th>
                                        <th>Jumlah Muatan</th>
                                        <th>Pelabuhan Muat</th>
                                        <th>Pelabuhan Bongkar</th>
                                        <th>Harga/Unit</th>
                                        <th>Harga Demorage</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        @canany(['edit spal', 'delete spal'])
                                            <th>Action</th>
                                        @endcanany
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
        // {
        //         data: 'file',
        //         name: 'file',
        //         orderable: false,
        //         searchable: false,
        //         render: function(data, type, full, meta) {
        //             return `<a href="/sale/spal/download/${data}" target="_blank">
    //                     <img src="/img/document.png" alt="Gambar File" width="30">
    //                 </a>`;
        //         }
        //     },

        const action =
            '{{ auth()->user()->can('edit spal') ||
            auth()->user()->can('delete spal')
                ? 'yes yes yes'
                : '' }}'

        let columns = [{
                data: 'kode',
                name: 'kode'
            },
            {
                data: 'customer',
                name: 'customer'
            },
            {
                data: 'nama_kapal',
                name: 'nama_kapal'
            },
            {
                data: 'nama_muatan',
                name: 'nama_muatan'
            },
            {
                data: 'jml_muatan',
                name: 'jml_muatan',
                render: function(data, type, full, meta) {
                    return data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
            },
            {
                data: 'pelabuhan_muat',
                name: 'pelabuhan_muat'
            },
            {
                data: 'pelabuhan_bongkar',
                name: 'pelabuhan_bongkar'
            },
            {
                data: 'harga_unit',
                name: 'harga_unit',
                render: function(data, type, full, meta) {
                    return data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                }
            },
            {
                data: 'harga_demorage',
                name: 'harga_demorage',
                render: function(data, type, full, meta) {
                    return data ? data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") : '-';
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
        ]

        if (action) {
            columns.push({
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            })
        }

        $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('spal.index') }}",
            columns: columns
        });
    </script>
@endpush
